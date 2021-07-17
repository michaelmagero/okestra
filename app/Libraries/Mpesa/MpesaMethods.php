<?php

namespace App\Libraries\Mpesa;

use Carbon\Carbon;

class MpesaMethods
{
    public function generateAccessToken()
    {
        $consumerKey = 'GT2LHQ7k2Uqh4GEw3POEAVTAqDylxEto'; //Fill with your app Consumer Key
        $consumerSecret = 'SsU5PS9qAVnYWiqP'; // Fill with your app Secret
        $headers = ['Content-Type:application/json; charset=utf8'];
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_HEADER, FALSE);
        curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
        $result = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($result);
        $access_token = $result->access_token;
        curl_close($curl);
        return $access_token;
    }

    // public function security_credentials()
    // {
    //     $publicKey = file_get_contents("https://kommute.africa/safdaraja/cert.cer");
    //     $plaintext = "0701P991";
    //     openssl_public_encrypt($plaintext, $encrypted, $publicKey, OPENSSL_PKCS1_PADDING);
    //     return base64_encode($encrypted);
    // }

    public function password()
    {
        $shortcode = '174379';
        $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $timestamp = Carbon::now()->format('YmdHis');
        $encoded_password = base64_encode($shortcode . $passkey . $timestamp);
        return $encoded_password;
    }

    public function STKPushPayment($request)
    {
        $phone = "254" . substr($request->phone, 1);
        $amount = '1';
        $callBackUrl = 'https://kommute.africa/safdaraja/stkcallback.php';
        $token = $this->generateAccessToken();
        $password = $this->password();
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $timestamp = Carbon::now()->format('YmdHis');
        $shortcode = '174379';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token));

        $curl_post_data = [
            'BusinessShortCode' => $shortcode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => $amount,
            'PartyA' => $phone,
            'PartyB' => $shortcode,
            'PhoneNumber' => $phone,
            'CallBackURL' => $callBackUrl,
            'AccountReference' => 'KOMMUTE FINANCE',
            'TransactionDesc' => 'RESERVATION FEES'
        ];
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        $request->session()->put('transaction_response', $curl_response);
        return $curl_response;
    }

    public function confirm_payment($request)
    {
        $mobile_number = "254" . substr($request->mobile_number, 1);
        $transaction_id = $request->transaction_id;

        // $transactions_callback = file_get_contents('https://kommute.africa/safdaraja/stkCallbackResponse.json');
        // var_dump($transactions_callback);
        $response = $request->session()->get('transaction_response');
        $decoded_response = json_decode($response, true);


        $token = $this->generateAccessToken();
        $password = $this->password();
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
        $timestamp = Carbon::now()->format('YmdHis');
        $shortcode = '174379';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token)); //setting custom header


        $curl_post_data = [
            'BusinessShortCode' => $shortcode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'CheckoutRequestID' => $decoded_response['CheckoutRequestID'],
        ];

        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);


        $decoded_curl_response = json_decode($curl_response, true);
        if ($decoded_curl_response['ResultCode'] == 0) {
            $request->session()->flash('success_message', 'The service request is processed successfully');
            return back();
            $request->session()->flash('transaction_response');
        } elseif ($decoded_curl_response['ResultCode'] == 1) {
            $request->session()->flash('error_message', 'The balance is insufficient for the transaction');
            return back();
            $request->session()->flash('transaction_response');
        } elseif ($decoded_curl_response['ResultCode'] == 1032) {
            $request->session()->flash('error_message', 'Request Cancelled by user');
            return back();
            $request->session()->flash('transaction_response');
        } else {
            $request->session()->flash('error_message', 'The transaction could not be processed check your balance and try again');
            return back();
            $request->session()->flash('transaction_response');
        }
    }
}

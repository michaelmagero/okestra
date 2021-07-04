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
    //     $publicKey = file_get_contents("https://corpcab.co.ke/safdaraja/cert.cer");
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
        $amount = $request->amount;
        $callBackUrl = 'https://kommute.africa/safdaraja/stkcallback.php';
        $token = $this->generateAccessToken();
        $password = $this->password();
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $timestamp = Carbon::now()->format('YmdHis');
        $shortcode = '174379';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token)); //setting custom header

        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'BusinessShortCode' => $shortcode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => '1',
            'PartyA' => $phone,
            'PartyB' => $shortcode,
            'PhoneNumber' => $phone,
            'CallBackURL' => $callBackUrl,
            'AccountReference' => 'KOMMUTE FINANCE LIMITED',
            'TransactionDesc' => 'RESERVATION'
        );
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        $curl_response = curl_exec($curl);
        return back();
    }
}

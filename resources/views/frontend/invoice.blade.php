<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            letter-spacing: -0.3px;
        }

        .invoice-wrapper{ width: 700px; margin: auto; }
        .nav-sidebar .nav-header:not(:first-of-type){ padding: 1.7rem 0rem .5rem; }
        .logo{ font-size: 50px; }
        .sidebar-collapse .brand-link .brand-image{ margin-top: -33px; }
        .content-wrapper{ margin: auto !important; }
        .billing-company-image { width: 50px; }
        .billing_name { text-transform: uppercase; }
        .billing_address { text-transform: capitalize; }
        .table{ width: 100%; border-collapse: collapse; }
        th{ text-align: left; padding: 10px; }
        td{ padding: 10px; vertical-align: top; }
        .row{ display: block; clear: both; }
        .text-right{ text-align: right; }
        .table-hover thead tr{ background: #eee; }
        .table-hover tbody tr:nth-child(even){ background: #fbf9f9; }
        address{ font-style: normal; }

        .body-header {
            background-color: #262228;
            color: #fff;
        }

        .total-section {
            background: #fece00;
        }
    </style>
</head>
<body>

    <div class="row invoice-wrapper mb-3">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr style="background-color: #262228; color: #fff;">
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="../images/logo.jpg" alt="" class="mt-5 ml-4" width="150" height="40">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <address>
                                            <h1 class="pt-0 mt-0">Kommute Finance Ltd</h1>
                                            <span class="pt-0 mt-0">Rosslyn Riviera Mall, Limuru Rd, Nairobi.</span><br>
                                            <span class="pt-0 mt-0">Contact No.- 0717 350122</span><br>
                                            <span class="pt-0 mt-0">Email <a href="#">  info@kommute.africa </a> | <a href="#"> www.kommute.africa </a></span>
                                        </address>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><hr>
            <div class="row invoice-info">
                <div class="col-md-12">

                    <table class="table">

                        <tr>
                            <h3>Proforma Invoice</h3>
                        </tr>
                        <tr>
                            <td>
                                <div class="row d-flex">
                                    <div class="col-md-3">
                                        <span class="font-weight-bold">Bill To</span>
                                    </div>
                                    @foreach ($reservation_details as $reservation)
                                        <div class="col-md-6">
                                            <span class="">{{ $reservation->name }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <div class="row d-flex">
                                    <div class="col-md-5">
                                        <span class="font-weight-bold">Invoice No</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="">1</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row d-flex">
                                    <div class="col-md-3">
                                        <span class="font-weight-bold">Name</span>
                                    </div>
                                    <div class="col-md-7">
                                        <span>Hot car Deals Ltd</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row d-flex">
                                    <div class="col-md-5">
                                        <span class="font-weight-bold">Invoice Date</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span>2-July-07</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="row d-flex">
                                    <div class="col-md-3">
                                        <span class="font-weight-bold">Address</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>Rosslyn Riviera Mall</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row d-flex">
                                    <div class="col-md-5">
                                        <span class="font-weight-bold">Phone</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span>254-718-573-435</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-condensed">
                        <thead class="body-header">
                            <tr>
                                <th>#</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Rate</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2015 Toyota Harrier Premium Package</td>
                                <td>1</td>
                                <td class="text-right">KES 3,550,000</td>
                                <td class="text-right">KES 3,550,000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" class="text-right">Tracking Fees</td>
                                <td class="text-right"><strong>KES 20,000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" class="text-right">Insurance</td>
                                <td class="text-right"><strong>KES 30,000</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" class="text-right">Handling Fees</td>
                                <td class="text-right"><strong>KES 5,000</td>
                            </tr>

                            <tr class="total-section">
                                <td></td>
                                <td colspan="3" class="text-right">Total Payable</td>
                                <td class="text-right"><strong>KES 1180</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <br><br><br>
            <div>
                <small class="font-weight-bold">NOTE: This is system generate invoice no need of signature.</small><br>
                <small>This finance quote is prepared for use on Kommute Sales Agreement and Car Financing clients only. Finance is available subject to credit acceptance in Kenya. Terms and Conditions apply. Please ensure the finance quotation meets your needs making sure you can afford the repayments without causing undue hardship.</small>
            </div>
        </div>
    </div>
</body>
</html>

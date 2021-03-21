<?php
    echo $_GET['product'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Photos/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&family=Romanesco&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <title>Payment Invoice</title>
    <style>
        body {
            font-family: "Montserrat";
        }

        button {
            margin-left: 10px;
            border: none;
            background-color: #02AFA6;
            color: white;
            padding: 1vh 3vh;
            font-size: 2.5vh;
            font-family: inherit;
            cursor: pointer;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .inv-header td {
            padding: 5px;
        }

        .invoice-box table td img {
            max-height: 100px;
            padding-left: 10vh;
        }

        .invoice-box td h3,
        .invoice-box td p {
            margin: 1vh 2vh;
        }

        .invoice-box td h1 {
            margin: 3vh 2vh;
            text-align: right;
        }

        .inv-img {
            width: 40%;
            border: 1px solid #bbb;
            border-right: 0px;
        }

        .inv-add {
            border: 1px solid #bbb;
            border-left: 0px;
        }

        .inv-det {
            border-collapse: collapse;
        }

        .inv-det th {
            border: 1px solid #bbb;
            width: 50%;
            font-size: 3vh;
            text-align: center;
            padding: 2vh;
        }

        .inv-det td,
        .inv-items td {
            border: 1px solid #bbb;
            width: 25%;
            padding: 1vh;
        }

        .inv-items,
        .inv-sign {
            border-collapse: collapse;
        }

        .inv-items th,
        .inv-sign td {
            border: 1px solid #bbb;
        }

        .inv-items td span {
            font-size: 2vh;
        }

        .inv-sign td {
            width: 50%;
            padding: 1vh;
        }

        .inv-auth-sign {
            visibility: visible;
            background: url("../Photos/small green tick.png");
            background-repeat: no-repeat;
            background-size: cover cover;
        }
    </style>
</head>

<body>
    <div class="inv-container">
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="inv-header">
                    <td class="inv-img"><img src="../Photos/02AFA6 Logo.png" /></td>
                    <td class="inv-add">
                        <h1>TAX INVOICE</h1>
                        <h3>yourcompany Ed Tech Pvt. Ltd.</h3>
                        <p>Innov8, Lower Ground Floor, Saket Salcon, Rasvilas, New Delhi, Delhi, India - 110017</p>
                        <p>GSTIN 07AANCM0201F1ZY</p>
                    </td>
                </tr>
            </table>
            <table class="inv-det">
                <tr>
                    <th colspan="2">Order Details</th>
                    <th colspan="2">Customer Details</th>
                </tr>
                <tr>
                    <td>Order ID:</td>
                    <td>MTDODS2121212</td>
                    <td>Customer ID:</td>
                    <td>212</td>
                </tr>
                <tr>
                    <td>Invoice Date & Time:</td>
                    <td>2021-03-14 05:46:35</td>
                    <td>Customer Name:</td>
                    <td>Test</td>
                </tr>
                <tr>
                    <td>Terms:</td>
                    <td>Due on Receipt</td>
                    <td>Customer Email:</td>
                    <td>test@gmail.com</td>
                </tr>
                <tr>
                    <td>Order Status:</td>
                    <td>Success</td>
                    <td>Customer Ph Num:</td>
                    <td>+91 9987667656</td>
                </tr>
                <tr>
                    <td>Txn ID:</td>
                    <td>222212121212121212121212</td>
                    <td colspan="2"></td>
                </tr>
            </table>
            <table class="inv-items">
                <tr>
                    <th>Sr. No</th>
                    <th width="35%">Item & Description</th>
                    <th>Qty</th>
                    <th width="25%">Price</th>
                    <th>GST</th>
                    <th>Total Amount</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Admission Consulting (UG)<br /><span>Your dream university!! Stepping stone to the life you want...</span> </td>
                    <td>1.00</td>
                    <td>74,999/-</td>
                    <td>13,499.82/-</td>
                    <td>88,498.82/-</td>
                </tr>
            </table>
            <table class="inv-sign">
                <tr>
                    <td class="inv-auth-sign">Digitally Signed By yourcompany Ed Tech Pvt. Ltd.<br />Date & Time: 2021-03-14 07:35:24<br />Reason: Amount Paid<br />Location: New Delhi, India</td>
                    <td><b>Total Amount in Words:</b><br />Eighty Eight Thousand Four Hundred Ninety Eight Rupees and Eighty Two Paisa</td>
                </tr>
            </table>
            <br />
            <div>
                <p>Read the <a href="#"> Terms and Conditions</a></p>
            </div>
        </div>
    </div>
    <br /><br />
    <center>We have mailed your invoice at test@gmail.com but you can also<button onclick="window.print()"><i class="fas fa-print"></i> Print Invoice</button></center>
    <br /><br />
</body>

</html>

<!--<center><button onclick="window.print()">Print this page</button></center>-->
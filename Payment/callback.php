<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("lib/config_paytm.php");
require_once("lib/encdec_paytm.php");
require '../includes/config.php';
require '../includes/functions.php';

// Fetching Order Based Data

$ordid = $_POST['ORDERID'];

global $conn_1;
$sql = "SELECT * FROM mtd_payment_dt WHERE order_id = '$ordid'";
$detailresult = mysqli_query($conn_1, $sql);
$detailrow = mysqli_fetch_assoc($detailresult);


// End of fetching data function

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if ($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		//echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.

		if (isset($_POST) && count($_POST) > 0) {
			$sql = "SELECT * FROM mtd_payment_dt WHERE order_id=?";
			$stmt = mysqli_stmt_init($conn_1);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo 'Finding Order ID SQL Error';
				exit();
			} else {
				mysqli_stmt_bind_param($stmt, 's', $_POST['ORDERID']);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0) {
					$sql = "UPDATE mtd_payment_dt SET payment_success = '1' WHERE order_id=?";
					$stmt = mysqli_stmt_init($conn_1);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo 'Update SQL Error';
						exit();
					} else {
						mysqli_stmt_bind_param($stmt, 's', $_POST['ORDERID']);
						if (mysqli_stmt_execute($stmt)) {
							//echo 'Paid Success !!!';
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
												<td><?php echo $_POST['ORDERID']; ?></td>
												<td>Customer ID:</td>
												<td><?php echo $detailrow['mtd_uid'] ?></td>
											</tr>
											<tr>
												<td>Txn Date & Time:</td>
												<td><?php echo $_POST['TXNDATE']; ?></td>
												<td>Customer Name:</td>
												<td><?php echo $detailrow['payment_usr_name'] ?></td>
											</tr>
											<tr>
												<td>Terms:</td>
												<td>Due on Receipt</td>
												<td>Customer Email:</td>
												<td><?php echo $detailrow['payment_email'] ?></td>
											</tr>
											<tr>
												<td>Order Status:</td>
												<td>Success</td>
												<td>Customer Ph Num:</td>
												<td><?php echo $detailrow['payment_ph_num'] ?></td>
											</tr>
											<tr>
												<td>Txn ID:</td>
												<td><?php echo $_POST['TXNID']; ?></td>
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
												<?php if ($detailrow['payment_product'] == "admsn_post_grad") { ?>
													<td>Admission Consulting PG<br /><span>Your dream university!! Stepping stone to the life you want...</span></td>
												<?php } ?>
												<?php if ($detailrow['payment_product'] == "admsn_under_grad") { ?>
													<td>Admission Consulting UG<br /><span>Your dream university!! Stepping stone to the life you want...</span></td>
												<?php } ?>
												<?php if ($detailrow['payment_product'] == "admsn_mba") { ?>
													<td>Admission Consulting MBA<br /><span>Your dream university!! Stepping stone to the life you want...</span></td>
												<?php } ?>
												<?php if ($detailrow['payment_product'] == "pesonalized_cv") { ?>
													<td>Personalized CV<br /><span>Experts tailor your CV's to specific Job/University requirements...</span></td>
												<?php } ?>
												<?php if ($detailrow['payment_product'] == "ess_sop_under_grad") { ?>
													<td>Essay / SOP Writing UG<br /><span>Custom Built Essays!!The wow to your application...</span></td>
												<?php } ?>
												<?php if ($detailrow['payment_product'] == "ess_sop_post_grad") { ?>
													<td>Essay / SOP Writing PG<br /><span>Custom Built Essays!!The wow to your application...]</span></td>
												<?php } ?>
												<?php if ($detailrow['payment_product'] == "visa") { ?>
													<td>Visa Application<br /><span>Meticulous planning and 20+ years of successful experience...</span></td>
												<?php } ?>
												<td>1.00</td>
												<td><?php echo $detailrow['payment_org_amt'] ?></td>
												<td><?php echo $detailrow['payment_org_gst'] ?></td>
												<td><?php echo $detailrow['payment_amt'] ?></td>
											</tr>
										</table>
										<table class="inv-sign">
											<tr>
												<td class="inv-auth-sign">Digitally Signed By yourcompany Ed Tech Pvt. Ltd.<br />Date & Time: 2021-03-14 07:35:24<br />Reason: Amount Paid<br />Location: New Delhi, India</td>
												<td><b>Total Amount in Words:</b><br /><?php numtotxt($detailrow['payment_amt']); ?></td>
											</tr>
										</table>
										<br />
										<div>
											<p>Read the <a href="https://www.yourcompany.co/terms-and-conditions.php"> Terms and Conditions <i class="fas fa-external-link-alt"></i></a></p>
										</div>
									</div>
								</div>
								<br /><br />
								<center>We have mailed your invoice at <?php echo $detailrow['payment_email'] ?> but you can also<button onclick="window.print()"><i class="fas fa-print"></i> Print Invoice</button></center>
								<br /><br />
							</body>

							</html>

<?php
							exit();
						}
					}
					exit();
				} else {
					echo 'Order ID Not Found Please Contact Support at hello@yourcompany.co. Your Order ID is ' . $_POST['ORDERID'];
				}
			}
			//$_POST['ORDERID'];
			//foreach($_POST as $paramName => $paramValue) {
			//		echo "<br/>" . $paramName . " = " . $paramValue;
			//}
		}
	} else {
		echo "<b>Transaction Faliure</b>" . "<br/>"; // Transaction not scuccessfull money not added.
	}
} else {
	echo "<b>OOPS! Your Transaction Failed Please Contact at hello@yourcompany.co for support.</b>";
	//Process transaction as suspicious [Checksum Mismatch may be page refresh].
}

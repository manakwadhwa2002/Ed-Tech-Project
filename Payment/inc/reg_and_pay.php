<?php

if (isset($_POST['place_order_pay'])) {

    require '../../includes/config.php';
    require '../../includes/functions.php';

    $customername = $_POST['cust_name'];
    $customeremail = $_POST['cust_email'];
    $customerphonenumber = $_POST['cust_ph_num'];
    $customercity = $_POST['cust_city'];
    $custid = $_SESSION['userId'];
    $orderidmtdods = $_POST['mtd_order_id'];
    $paymentorgamt = $_POST['pro-val'];
    $paymentorggst = $_POST['pro-gst'];
    $paymentproduct = $_POST['pro-name'];
    $paymentamt = $_POST['payment_amt'];


    $sql = "INSERT INTO mtd_payment_dt (mtd_uid, payment_usr_name, payment_email, payment_ph_num, payment_city, payment_amt, payment_org_amt, payment_org_gst, payment_product, order_id) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn_1);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'SQL Error';
        exit();
    } 
    else {
        mysqli_stmt_bind_param($stmt, 'ssssssssss', $custid, $customername, $customeremail, $customerphonenumber, $customercity, $paymentamt, $paymentorgamt, $paymentorggst, $paymentproduct, $orderidmtdods);
        mysqli_stmt_execute($stmt);
        //echo 'Registered Successfully';
        //echo 'Customer Id is '.$conn-> insert_id;
        header("Pragma: no-cache");
        header("Cache-Control: no-cache");
        header("Expires: 0");
        // following files need to be included
        require_once("../lib/config_paytm.php");
        require_once("../lib/encdec_paytm.php");

        $checkSum = "";
        $paramList = array();

        //$ORDER_ID = $_POST["ORDER_ID"];
        //$CUST_ID = $_POST["CUST_ID"];
        //$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
        //$CUST_ID = $conn-> insert_id;
        $ORDER_ID = $orderidmtdods;
        $CUST_ID = $custid;
        $TXN_AMOUNT = $paymentamt;
        $INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
        $CHANNEL_ID = $_POST["CHANNEL_ID"];

        // Create an array having all required parameters for creating checksum.
        $paramList["MID"] = 'zYFYvL03463194162344';
        $paramList["ORDER_ID"] = $ORDER_ID;
        $paramList["CUST_ID"] = $CUST_ID;
        $paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
        $paramList["CHANNEL_ID"] = $CHANNEL_ID;
        $paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
        $paramList["WEBSITE"] = 'WEBSTAGING';
        $paramList["CALLBACK_URL"] = "http://localhost/website/Payment/callback.php";
        /*
        $paramList["CALLBACK_URL"] = "http://localhost/PaytmKit/pgResponse.php";
        $paramList["MSISDN"] = $MSISDN; //Mobile number of customer
        $paramList["EMAIL"] = $EMAIL; //Email ID of customer
        $paramList["VERIFIED_BY"] = "EMAIL"; //
        $paramList["IS_USER_VERIFIED"] = "YES"; //
        */

        //Here checksum string will return by getChecksumFromArray() function.
        $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);

    ?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>
<?php
        exit();
    }
} else {
    header('Location: ../index.php');
}

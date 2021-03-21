<?php
    include '../includes/config.php';
    include '../includes/functions.php';

    if($_SESSION && $_GET['product']){
        $productname = $_GET['product'];
    // Getting POST Objects
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Check Out Form</title>
    <link rel="icon" href="../Photos/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&family=Romanesco&family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <link href="payment-style.css" type="text/css" rel="stylesheet" />
</head>

<body class="check-out-page">
    <form action="inc/reg_and_pay.php" method="POST" class="check-out-form">
        <div class="logo-band-checkout-page">
            <img src="../Photos/Our Logo.png" />
            <h2>yourcompany CheckOut <i class="fas fa-sign-out-alt"></i></h2>
        </div>
        <div class="clearfix"></div>
        <div class="main-checkout-body">
            <div class="main-checkout-body-left">
                <h3>Billing Details</h3>
                <p class="order-id">Order Id: <input name="mtd_order_id" value="MTDODS<?php echo getodrid()?>" /></p>
                <fieldset>
                    <legend>Full Name<span class="color-red">*</span></legend>
                    <input type="text" placeholder="Full Name" name="cust_name" required/>
                </fieldset>
                <fieldset>
                    <legend>Email<span class="color-red">*</span></legend>
                    <input type="email" placeholder="Email" name="cust_email" required/>
                </fieldset>
                <fieldset>
                    <legend>Phone Number<span class="color-red">*</span></legend>
                    <input type="number" placeholder="Phone Number" name="cust_ph_num" required/>
                </fieldset>
                <fieldset>
                    <legend>City<span class="color-red">*</span></legend>
                    <input type="text" placeholder="City" name="cust_city" required/>
                </fieldset>

                <?php if($_GET['product']=="admsn_post_grad"){?>
                    <input type="hidden" name="pro-val" value="49,999">
                    <input type="hidden" name="pro-gst" value="8,999.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="58998.82">
                <?php }?>

                <?php if($_GET['product']=="admsn_under_grad"){?>
                    <input type="hidden" name="pro-val" value="74,999">
                    <input type="hidden" name="pro-gst" value="13,499.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="88498.82">
                <?php }?>

                <?php if($_GET['product']=="admsn_mba"){?>
                    <input type="hidden" name="pro-val" value="75,999">
                    <input type="hidden" name="pro-gst" value="13,679.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="89678.82">
                <?php }?>

                <?php if($_GET['product']=="personalized_cv"){?>
                    <input type="hidden" name="pro-val" value="5,999">
                    <input type="hidden" name="pro-gst" value="1,079.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="7078.82">
                <?php }?>

                <?php if($_GET['product']=="ess_sop_under_grad"){?>
                    <input type="hidden" name="pro-val" value="11,999">
                    <input type="hidden" name="pro-gst" value="2,159.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="14158.82">
                <?php }?>

                <?php if($_GET['product']=="ess_sop_post_grad"){?>
                    <input type="hidden" name="pro-val" value="15,999">
                    <input type="hidden" name="pro-gst" value="2,879.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="18878.82">
                <?php }?>

                <?php if($_GET['product']=="visa"){?>
                    <input type="hidden" name="pro-val" value="6,999">
                    <input type="hidden" name="pro-gst" value="1,259.82">
                    <input type="hidden" name="pro-name" value="<?php echo $_GET['product']?>">
                    <input type="hidden" name="payment_amt" value="8258.82">
                <?php }?>
                
                <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

                <input type="checkbox" onchange="document.getElementById('pay_btn').disabled = !this.checked;" checked required/>I agree to <a href="https://www.yourcompany.co/terms-and-conditions.php">Terms and Conditions <i class="fas fa-external-link-alt"></i></a><br />
                <br/>

                <button name="place_order_pay" type="submit" id="pay_btn">Place Order</button>
            </div>
            <div class="main-checkout-body-right">
                <h3><i class="fas fa-shopping-cart"></i> Checkout Summary</h3>
                
                <?php if($_GET['product']=="admsn_post_grad"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>Admission Consulting PG<br/>
                                <span>Your dream university!! Stepping stone to the life you want...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 49,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 8,999.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 58,998.82</p>
                </div>
                <?php }?>

                <?php if($_GET['product']=="admsn_under_grad"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>Admission Consulting UG<br/>
                                <span>Your dream university!! Stepping stone to the life you want...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 74,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 13,499.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 88,498.82</p>
                </div>
                <?php }?>

                <?php if($_GET['product']=="admsn_mba"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>Admission Consulting MBA<br/>
                                <span>Your dream university!! Stepping stone to the life you want...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 75,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 13,679.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 89,678.82</p>
                </div>
                <?php }?>

                <?php if($_GET['product']=="personalized_cv"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>Personalized CV<br/>
                                <span>Experts tailor your CV's to specific Job/University requirements...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 5,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 1,079.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 7,078.82</p>
                </div>
                <?php }?>

                <?php if($_GET['product']=="ess_sop_under_grad"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>Essay / SOP Writing UG<br/>
                                <span>Custom Built Essays!!The wow to your application...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 11,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 2,159.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 14,158.82</p>
                </div>
                <?php }?>

                <?php if($_GET['product']=="ess_sop_post_grad"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>Essay / SOP Writing PG<br/>
                                <span>Custom Built Essays!!The wow to your application...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 15,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 2,879.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 18,878.82</p>
                </div>
                <?php }?>

                <?php if($_GET['product']=="visa"){?>
                <div class="list-item-summary">
                    <table>
                        <tr>
                            <td>VISA Application<br/>
                                <span>Meticulous planning and 20+ years of successful experience...</span>
                            </td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 6,999.00</td>
                        </tr>
                        <tr>
                            <td>GST (18%)</td>
                            <td class="price-td"><i class="fas fa-rupee-sign"></i> 1,259.82</td>
                        </tr>
                    </table>
                    <!--<button type="button"><i class="fas fa-plus"></i> Add Another Service</button>-->
                    <p>Sub Total : <i class="fas fa-rupee-sign"></i> 8,258.82</p>
                </div>
                <?php }?>
            </div>
    </form>
</body>

<?php
    }else{
        header("Location: ../login/");
        exit();
    }
?>

</html>
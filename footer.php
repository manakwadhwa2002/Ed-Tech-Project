
        <!-- Footer Starts -->
        <div class="clearfix"></div>

        <footer>
            <div class="footer-links-section">
                <h4>Stay Connected</h4>
                <hr />
                <br />
                <a
                    href="https://www.facebook.com/pages/category/Educational-Consultant/yourcompanyco-Boutique-career-counselling-112314860492491/"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/yourcompany.co/"><i class="fab fa-instagram"></i></a>
                <a
                    href="https://api.whatsapp.com/send?phone=919953884096&&text=Hi!%C2%A0I%E2%80%99d%20like%20to%20chat%20with%20an%20expert."><i
                        class="fab fa-whatsapp"></i></a>
                <a href="https://twitter.com/Coyourcompany"><i class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCThDCOQuttlLOsxy8_P22aw/"><i class="fab fa-youtube"></i></a>

                <p>Email: hello@yourcompany.co</p>
            </div>
            <div class="footer-form-section">
                <h4>Contact Us</h4>
                <hr />
                <form action="https://www.yourcompany.co/Form Responses/footerformresponse.php" method="POST">
                    <input type="text" name="ftrName" placeholder="Name" />
                    <input type="text" name="ftrEmail" placeholder="Email" />
                    <input type="text" name="ftrPhNum" placeholder="Phone Number" />
                    <textarea name="ftrMessage" placeholder="Your Message"></textarea>
                    <button type="submit" name="ftrBtn">Connect with us</button>
                </form>
            </div>
            <div class="clearfix"></div>
            <p class="copyright-text">© Copyright 2021 - yourcompany Ed Tech Pvt. Ltd.</p>
            <!-- <a href="https://api.whatsapp.com/send?phone=918950800874&&text=Hi%20Manak%20Wadhwa!"><p class="copyright-text">© Copyright 2020 - yourcompany Ed Tech Pvt. Ltd.</p></a> -->
        </footer>

        <!-- Footer Ends -->


    </div>
    <!-- %%%%%%%% Javascripts %%%%%%%% -->
    <script src="https://kit.fontawesome.com/84b568a5cc.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="magicscroll.js"></script>
    <script src="yourcompany.js" type="text/javascript"></script>
    <?php if(isset($_GET['signup'])){?>
            <script>loadSignUpForm();</script>
    <?php } elseif(isset($_GET['superror'])){ ?>
            <script>loadSignUpForm();</script>
    <?php } elseif(isset($_GET['lgerror'])){ ?>
            <script>loadLoginForm();</script>
    <?php } ?>
</body>

</html>
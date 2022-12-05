<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="fupper-view">
    <ul>
        <li><a href="privcay-policy"> Privacy Policy</a></li>
        <li><a href="https://www.cvlkra.com/kycpaninquiry.aspx" target="_blank" rel="noopener">Check Your KYC</a></li>
        <li><a href="https://nseindia.com/" target="_blank" rel="noopener">NSE</a></li>
        <li><a href="https://www.bseindia.com/" target="_blank" rel="noopener">BSE</a></li>
        <li><a href="https://www.amfiindia.com/" target="_blank" rel="noopener">AMFI</a></li>
        <li><a href="https://www.sebi.gov.in/" target="_blank" rel="noopener">SEBI</a></li>
        <li><a href="https://www.rbi.org.in/" target="_blank" rel="noopener">RBI</a></li>
        <li><a href="https://www.irdai.gov.in/Defaulthome.aspx?page=H1" target="_blank" rel="noopener">IRDA</a></li>
        <li><a href="https://india.fpsb.org/" target="_blank" rel="noopener">FPSBI</a></li>
        <li><a href="https://www.amfiindia.com/" target="_blank" rel="noopener">AMFI</a></li>
        <li><a href="">Terms &amp; Conditions</a></li>
    </ul>
</div>
<footer id="footet-top">
    <div class="footet-top">
        <div class="container">
            <div class="">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="fheading">Reach Us</div>
                    <ul style="padding-left: 3px; padding-top: 0px; float: left;" class="address">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <span>45, GANGOTRI SOCIETY PART-1, NEW RANIP, AHMEDABAF -382480.</span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i> <span>ratansecurities@gmail.com</span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <i class="fa fa-mobile" aria-hidden="true"></i> <span>+91 7016063295</span>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100087781030134" target="_blank" rel="noopener" style="color:white"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#" target="_blank" rel="noopener" style="color:white"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="fheading">Schedule a Meeting</div>
                    <div class="clearfix">
                    </div>

                    <script>
                        function sendContact() {
                            var valid = validateContact();

                            if (valid) {
                                jQuery.ajax({
                                    url: "https://test2live.com/ratan/contact_mail.php",
                                    data: 'userName=' + $("#userName").val() + '&userEmail=' + $("#userEmail").val() + '&mobile=' + $("#mobile").val() + '&message=' + $("#message").val(),
                                    // data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&mobile='+$("#mobile").val()+'&userCity='+$("#userCity").val()+'&message='+$("#message").val()+'&captcha='+$("#captcha").val(),
                                    type: "POST",
                                    success: function(data) {
                                        $("#mail-status").html(data);
                                        $("#userName").val('');
                                        $("#userEmail").val('');
                                        $("#mobile").val('');
                                        $("#message").val('');
                                        setInterval(function() {
                                            $("#mail-status").html('');
                                        }, 3000);

                                    },
                                    error: function() {}
                                });
                            } else {
                                msg = "Please Enter All Information";
                                $("#error_msg").html(msg);
                            }
                        }

                        function validateContact() {
                            var valid = true;
                            $(".demoInputBox").css('background-color', '');
                            $(".info").html('');

                            if (!$("#userName").val()) {
                                $("#userName-info").html("(required)");
                                $("#userName").css('background-color', '#FFFFDF');
                                valid = false;
                            }
                            if (!$("#userEmail").val()) {
                                $("#userEmail-info").html("(required)");
                                $("#userEmail").css('background-color', '#FFFFDF');
                                valid = false;
                            }
                            if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                                $("#userEmail-info").html("(invalid)");
                                $("#userEmail").css('background-color', '#FFFFDF');
                                valid = false;
                            }
                            if (!$("#mobile").val()) {
                                $("#mobile").html("(required)");
                                $("#mobile").css('background-color', '#FFFFDF');
                                valid = false;
                            }
                            if (!$("#message").val()) {
                                $("#content-info").html("(required)");
                                $("#message").css('background-color', '#FFFFDF');
                                valid = false;
                            }
                            if (!$("#captcha").val()) {
                                $("#captcha-info").html("(required)");
                                $("#captcha").css('background-color', '#FFFFDF');
                                valid = false;
                            }

                            return valid;
                        }
                    </script>
                    <div class="contact_form" id="frmContact">
                        <!-- <div class="tool_tab" style="width:208px;">
      Schedule A Meeting With Us
      </div> -->
                        <div class="form_con">
                            <div id="mail-status" style="margin-top:0px;"></div>
                            <div id="error_msg" style="color:red; font-size:12px;"></div>
                            <div class="form-group">
                                <!--<label>Name</label>-->
                                <input type="text" name="userName" id="userName" class="form-control" placeholder="Name" required />
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!--<label>Mobile</label>-->
                                <input type="text" maxlength="10" name="mobile" id="mobile" class="form-control" placeholder="Mobile" required />
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!--<label>Email</label>-->
                                <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="Email" required />
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <!--<label>Message</label>-->
                                <textarea name="message" id="message" class="form-control" rows="" cols="50" placeholder="Message" required></textarea>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form_control" style="float:left;width:100%;text-align: center;"><button name="submit" class="login_btn" onclick="sendContact();">Send</button></div>
                        </div>
                        <!-- </form> -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fbottom">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-xs-12 white wow zoomIn">
                    © Copyright <?= date('Y') ?> Ratan Securities
                </div>
            </div>
        </div>
    </div>
</footer>
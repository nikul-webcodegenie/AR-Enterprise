<?php
$msg = "";
error_reporting(0);
if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $messageString = "Name :  ".$fname." <br>Email :  ".$email." <br>Message :  ".$message." <br>";
    
    $to = "arenterprise53@yahoo.com";
    $subject = "Test mail";
    $txt = $messageString;
    $headers = "From: arenterprise53@yahoo.com";
    mail($to,$subject,$txt,$headers);
    $msg = "Email sent successfully";
}
?>
<?php include("header.php"); ?>
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Contact -->
                <div class="col-md-9 col-sm-9">
                    <section id="agent-detail">
                        <header><h1>Contact Us</h1></header>
                        <section id="contact-information">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <section id="address">
                                        <header><h3>Address</h3></header>
                                        <address>
											<strong>AR Enterprise</strong><br>
											55 shri hari estate<br>
											Pann estate road<br>
											Nr soni chawk Ahmedabad
										</address>
                                        +9913812604<br>
										<a href="#">arenterprise53@yahoo.com</a>
                                    </section><!-- /#address -->
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </section><!-- /#agent-info -->
                        <hr class="thick">
                        <section id="form">
                            <span style="color:green;"><?php echo $msg; ?></span>
                            <header><h3>Send Us a Message</h3></header>
                            <form action="" id="form-contact" method="post"  class="clearfix">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-name">Your Name<em>*</em></label>
                                            <input type="text" name="fname" class="form-control" id="form-contact-name" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form-contact-email">Your Email<em>*</em></label>
                                            <input type="email" name="email" class="form-control" id="form-contact-email" required>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form-contact-message">Your Message<em>*</em></label>
                                            <textarea class="form-control" name="message" id="form-contact-message" rows="8" required></textarea>
                                        </div><!-- /.form-group -->
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                                <div class="form-group clearfix">
                                    <button name="submit" class="btn pull-right btn-default" >Send a Message</button>
                                </div><!-- /.form-group -->
                                <div id="form-status"></div>
                            </form><!-- /#form-contact -->
                        </section>
                    </section><!-- /#agent-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Contact -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    <?php include("footer.php"); ?>
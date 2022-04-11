<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<?php
error_reporting(0);
include('header.php');
?>
               

              <!-- ***** Breacrumb Area Start ***** -->
              <section class="section breadcrumb-area breadcrumb-area-contact">
                <div class="breadcrumb-overlay"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="bread-box">
                                <div class="bread-head_1">
                                    <h1>Contact</h1>
                                    <span><a href="index">Home</a> / <a href="">Contact</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
 
 
 <!-- ***** Contact Area Start ***** -->
 <!-- <section class="contact-area section ptb_80">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="adr-box text-center">
                    <div class="logo">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Address</h3>
                    <p>Central BUS Terminal Complex Thavakkara, Kannur, Kerala 670 001</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adr-box text-center">
                    <div class="logo">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+914972972777">+91 4972972777</a></p>
                    <p><a href="tel:+914972717777">+91 4972717777</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="adr-box text-center border-right-none">
                    <div class="logo">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h3>Email Address</h3>
                    <p><a href="mailto:broadbeankannur@gmail.com">broadbeankannur@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--====== Write Us Area Start ======-->
<section class="write-area section ptb_50">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="write-area-head">
                    <h1>Write Us Something</h1>
                </div>
                <div class="contact-box text-center">
                    <form name="form2" method="post" action="email1.php">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required >
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required >
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Phone Number" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')" >
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write us something" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-12 submit">
                                <button class="btn btn-submit mt-3" type="submit" name="submit" value="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="col-12 ">
                    <div class="adr-box text-center">
                    <div class="logo">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Address</h3>
                    <p>Thalassery - Coorg Highway,<br>
                        Iritty,<br>
                        Kerala 670703</p>
                </div>
            </div>
            <div class="col-12 ">
                <div class="adr-box text-center">
                    <div class="logo">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Phone Number</h3>
                    <p><a href="tel:0490 2493729">0490 2493729</a><br>
                        <a href="tel: 0490 2493468"> 0490 2493468</a></p>
                   
                </div>
            </div>
            <div class="col-12 ">
                <div class="adr-box text-center border-right-none">
                    <div class="logo">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h3>Email Address</h3>
                    <p><a href="mailto:kktouristhome007@gmail.com">kktouristhome007@gmail.com</a></p>
                </div>
            </div>
            </div>



        </div>
    </div>
</section>

<!--====== Map Area Start ======-->
<section class="map-area ptb_50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.7920927214172!2d75.67370771533881!3d11.988883238919875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba434902c8c3745%3A0xacff4bdc934f73b2!2sK%20K%20Tourist%20Home!5e0!3m2!1sen!2sin!4v1646220285812!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php');
?> 


</body>

</html>
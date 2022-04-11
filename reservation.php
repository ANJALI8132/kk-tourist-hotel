<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<?php
error_reporting(0);
include('header.php');
?> 
  
  <!-- ***** Breacrumb Area Start ***** -->
  <section class="section breadcrumb-area breadcrumb-area-reserv">
    <div class="breadcrumb-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="bread-box">
                    <div class="bread-head_1">
                        <h1>Reservation</h1>
                        <span><a href="index">Home</a> / <a href="#">Reservation</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
  <!-- ***** Reserv Area Start ***** -->
  <section class="reserv-area ptb_100 section">
    <span class="dotted-pattern dotted-pattern-6"></span>
    <span class="tri-pattern tri-pattern-5"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                
                <div class="reserv-title text-center">
                    <h2>Reservation Enquiry</h2>
                    <!-- <p>
                        Our hotel rooms are available at the best rates and you can book them through fast online reservation. No prepayment is required. Payment can be made directly at the hotel. We have a free cancellation policy too.</p> -->
                </div>
                <!-- <div class="square-pattern"></div> -->
                <div class="reserv-apply-area">
                    
                    <form name="form2" method="post" action="email.php">
                        <div class="row">
                            <div class="col-md-6 form_reserve">
                                <div>
                                    <input type="text" placeholder="First Name" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6 form_reserve">
                                <div>
                                    <input type="text" placeholder="Last Name" class="form-control" name="lname" required>
                                </div>
                            </div>
                            <div class="col-md-6 form_reserve">
                                <div>
                                    <input type="text" placeholder="Email Address" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6 form_reserve">
                                <div>
                                    <input type="text" placeholder="Phone Number" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-md-6 form_reserve">
                                <div>
                                    <input class="date_icon form-control" data-date-format="dd/mm/yyyy" id="datepicker" onkeypress="return false" required name="checkin" placeholder="Check in">
                                </div>
                            </div>
                            <div class="col-md-6 form_reserve">
                                <div>
                                    <input class="date_icon form-control" data-date-format="dd/mm/yyyy" id="datepicker2" onkeypress="return false" required name="checkout" placeholder="Check Out">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Any Requests" name="requests"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <button class="btn btn-submit btn-block mt-4" type="submit" name="submit" value="submit">Enquire</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
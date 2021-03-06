<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<?php
error_reporting(0);
include('header.php');
?>

        <!-- banner start -->
   
        <section class="welcome-area-start">
            <div class="banner-slider owl-carousel">
                <div class="single-banner">
                    <div class="section welcome-area d-flex align-items-center">
                        <div class="container">
                            <div class="home-overlay"></div>
                            <div class="row justify-content-end align-items-center">
                               
                                <div class="col-12 col-lg-6 col-md-6">
                                    <div class="welcome-intro">
                                        <h2>A blend of Comfort and Quality</h2>
                                    <span>for both business and leisure
                                    </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
           

                <div class="single-banner">
                    <div class="section welcome-area d-flex align-items-center">
                        <div class="container">
                            <div class="home-overlay"></div>
                            <div class="row justify-content-end align-items-center">
                               <div class="col-12 col-lg-6 col-md-6">
                                    <div class="welcome-intro">
                                        <h2>A blend of Comfort and Quality</h2>
                                    <span>for both business and leisure
                                    </span>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        

        <!-- form-box -->
        <section class="form-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-box">
                            <div class="property-box">
                                <div class="enq-form-outer">
                                    <form name="form5" method="post">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-4 prop1 pl-lg-0">
                                                <div class="prop-box ">
                                                    <label for="">Property</label>
                                                    <input type="text" placeholder="Broad Bean,Kannur" disabled="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 prop2 pl-lg-0">
                                                <div class="prop-box2 ">
                                                    <label for="">Check In</label>
                                                    <input class="date_icon form-control align-items-center" data-date-format="dd/mm/yyyy" id="datepicker" name="arriving" placeholder="17/07/2021" required onchange="checkin();">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 prop3 pl-lg-0">
                                                <div class="prop-box2 ">
                                                    <label for="">Check Out</label>
                                                    <input class="date_icon form-control" data-date-format="dd/mm/yyyy" id="datepicker2" name="leaving" placeholder="17/07/2021" required onchange="checkout();">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2 prop4 p-lg-0">
                                                <div class="prop-box3"></div>
                                                <a href="#" class="apply_now_1 qebtn" data-toggle="modal" data-target="#exampleModal0">Book Now </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="form-btn1 box1 d-flex">
                                <div class="d-flex box4">
                                    <a href=""><img src="assets/img/logo/foot-phone.png" alt="">Request a Callback</a>
                                </div>

                                <div class="d-flex box4">
                                    <a href=""><img src="assets/img/logo/map.png" alt=""> Find the location</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- about area -->
        <section class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="d-block welcome">
                            <img src="assets/img/about/name-log.png" class="name-log" alt="">
                            <h3>Welcome to</h3>
                            <img src="assets/img/about/name_logo.png" class="name" alt="">
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 about mt-5">

                                <p>
                                    Welcome to KK Tourist Home, a full facility three star hotel, set in the heart of Iritty, a small, historic old town, surrounded by beautiful hills, located along the Kannur-Coorg-Mysore highway. The hotel offers the best of comforts at reasonable rates. Easily accessible, KK Tourist Home makes the perfect choice for business and leisure travellers.
                                    <br>
                                    <a href="#">View More<img src="assets/img/icons/view.png" class="ml-2" alt=""></a>

                                </p>

                            </div>
                            <div class="col-lg-6 col-md-6 mt-3">
                                <div class="about-box d-flex">
                                    <img src="assets/img/about/abt.png" class="img-fluid" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>



        <section class="business-area position-relative">
            <div class="bg-image">
                <img src="assets/img/about/bg.jpg" class="img-fluid" alt="">
            </div>
            <div class="container p-0">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-md-6 col-sm-7 ">
                        <div id="main">
                            <div class="accordion" id="faq">
                                <div class="card">
                                    <div class="card-header" id="faqhead1">
                                        <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">Rooms
                                        </a>
                                    </div>

                                    <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                        <div class="card-body">
                                            The rooms are simple yet elegantly and adequately furnished with all the standard amenities offering a cozy environment for the guests to unwind and have a relaxing time. 

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead2">
                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="faq2">Meetings & Events
                                        </a>
                                    </div>

                                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                        <div class="card-body">
                                            We provide the perfect venue and ambience for organizing your business meets and events. We take all the efforts to ensure your meets turn out successful and your celebrations are immensely enjoyable, creating long-lasting memories. 

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead3">
                                        <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="faq3">
                                            Dine</a>
                                    </div>

                                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                        <div class="card-body">
                                            We serve delectable and traditional dishes at our multi-cuisine restaurant in an unrivalled surrounding. The special culinary delights from a wide range of cuisines are bound to satiate your taste buds and you will certainly cherish the taste.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="business_img">
                            <img src="assets/img/about/abt_1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>



            </div>
        </section>



        <section class="rooms-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 rooms">
                        <h3>Rooms & Suites</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        <div class="room-slider owl-carousel">
                            <div class="item">
                                 <div class="suites">
                                     <div class="suite_pic">
                                            <img src="assets/img/rooms/pic1.png" class="img-fluid" alt=""></div>
                                            <h5>Standard A/c</h5>
                                            <p>The 5 Standard Double AC rooms come with twin beds and air-conditioning. Moderately designed and equipped with all standard essentialities, these rooms make a comfortable accommodation. They are well ventilated and the environment in these rooms is calm and peaceful. Snug and cozy, they have amenities like TV, telephone, and free Wi-Fi. We take special care of cleanliness and your convenience.

                                            </p>
                                        </div>

                                    </div>
                            <div class="item">
                                 <div class="suites">
                                    <div class="suite_pic">
                                            <img src="assets/img/rooms/pic2.png" alt=""></div>
                                            <h5>Standard Non A/c</h5>
                                            <p>Our 5 Standard Non AC rooms with double beds are simple yet unmatched and offered at the most economical rates. Elegantly furnished with all amenities, they do not compromise on your comfort. They have a simple decor and are laid out neatly. Designed for maximum convenience, the rooms have facilities like TV, telephone, and free Wi-Fi. We ensure a great staying experience for our guests traveling on a budget..</p>
                                        </div>
                                
                            </div>
                            <div class="item">
                                 <div class="suites">
                                    <div class="suite_pic">
                                            <img src="assets/img/rooms/pic1.png" class="img-fluid" alt=""></div>
                                            <h5>Standard A/c</h5>
                                            <p>The 5 Standard Double AC rooms come with twin beds and air-conditioning. Moderately designed and equipped with all standard essentialities, these rooms make a comfortable accommodation. They are well ventilated and the environment in these rooms is calm and peaceful. Snug and cozy, they have amenities like TV, telephone, and free Wi-Fi. We take special care of cleanliness and your convenience.
                                            </p>
                                        </div>

                                     </div>

                                </div>

                            </div>
                        </div>

                
                     </div>
                </section>




        <!-- ***** Testimonials Area ***** -->
        <section class="testi-area mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="rooms mt-5">
                            <h3>Guest testimonials</h3>
                        </div>
                        <div class="testi-box-slider">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row align-items-center single-box">
                                            <div class="col-md-4 text-center testi-details">
                                                <div class="client-pic">
                                                    <img src="assets/img/testi/pic-avatar.png" alt="">
                                                </div>
                                                <div class="testi-name">
                                                    <h5>Arun</h5>
                                                    <span>COO, OneSource IML</span>
                                                </div>
                                            </div>
                                            <div class="col-md-8 testi-text">
                                                <blockquote>
                                                    <p>The hotel is very close to the old Iritty Bus stand. Clean and well maintained rooms. The food was tasty. The staff was very helpful.  
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row align-items-center single-box">
                                            <div class="col-md-4 text-center testi-details">
                                                <div class="client-pic">
                                                    <img src="assets/img/testi/pic-avatar.png" alt="">
                                                </div>
                                                <div class="testi-name">
                                                    <h5>Rahul</h5>                                                    
                                                    <span>COO, OneSource IML</span>
                                                </div>
                                            </div>
                                            <div class="col-md-8 testi-text">
                                                <blockquote>
                                                    <p>We stayed at the hotel recently for a couple of days and liked the ambience. The hotel is very easy to reach. Ample parking space is available. The rooms are well furnished and the hospitality was very good.
                                                        </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row align-items-center single-box">
                                            <div class="col-md-4 text-center testi-details">
                                                <div class="client-pic">
                                                    <img src="assets/img/testi/pic-avatar.png" alt="">
                                                </div>
                                                <div class="testi-name">
                                                    <h5>Anand
                                                    </h5>
                                                    <span>COO, OneSource IML</span>
                                                </div>
                                            </div>
                                            <div class="col-md-8 testi-text">
                                                <blockquote>
                                                    <p>Good hotel for staying at a great price. Lots of mouth watering dishes are available here. Rooms are clean, tidy, and spacious and are suited for travellers and family. Travelling is easy as it is located in the heart of the town.

                                                       </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>

                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-4">
                        <img src="assets/img/rooms/book1.png" alt="">
                    </div>

                    <div class="col-md-7 col-lg-7 book text-center ">

                        <p>
                            Reach out to us for an unforgettable and pleasurable stay</p>


                        <div class="border-line">
                            <span><img src="assets/img/rooms/phone-call.png" alt=""></span>

                        </div>
                        
                        <span><a href="tel: 0490 2493729"> 0490 2493729</a>,<a href="tel: 0490 2493468">  0490 2493468</a></span>
                        <div class="button">
                            <button type="button" class="btn btn-indigo" data-toggle="modal" data-target="#exampleModal0">BOOK NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
include('footer.php');
?> 

<?php
$id=$_GET['id'];
if($id=='1'){
?>
<script>
        $(window).on('load', function() {
        $('#tyModal').modal('show');
        });
    </script>
<?php
}
if($id=='2'){
    ?>
    <script>
        $(window).on('load', function() {
        $('#tyModalnew').modal('show');
        });
    </script>
    <?php
}
?>      


</body>

</html>
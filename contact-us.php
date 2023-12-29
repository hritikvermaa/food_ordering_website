<?php
session_start();
include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food And Taste | Contact us</title>

    

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Montserrat:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    /*********************MAPS AND SCHEDULE SECTION START HERE******************************************/
.map-time{
  display: flex;
  margin: 10px;
}
.map{
  justify-content:space-evenly;
  width: 50%;
  
}
.map h3{
  margin: 10px;
  text-align: center;
  font-size: 30px;
  font-family: 'Berkshire Swash', cursive;
}
#mapid{
  padding-left: 50px;
}
iframe{
  margin: 10px;
  border-radius: 10px;
  border: 1px solid #f6099f;
}
.maps{
  -webkit-filter: grayscale(100%);
  -moz-filter: grayscale(100%);
  -ms-filter: grayscale(100%);
  -o-filter: grayscale(100%);
   filter: grayscale(100%);
}
.maps:hover{
  -webkit-filter: grayscale(0%);
  -moz-filter: grayscale(0%);
  -ms-filter: grayscale(0%);
  -o-filter: grayscale(0%);
   filter: grayscale(0%);
}

.schedule-image{
    position: absolute;
    margin: 5rem;
    right: 10%;
}

/*********************MAPS AND SCHEDULE SECTION END HERE******************************************/
.bg-img{
  background:url("https://i.postimg.cc/1RTT9q1G/background-dine-out.jpg' border='0' alt='background-dine-out") no-repeat fixed;
  height: 500px;
  background-size:cover;
  background-position-x: right;
  background-position-y: center;
  
}
.book-a-table{
  padding-top: 200px;
  font-size: 30px;
  font-weight: 600;
  color: white;
  opacity: 1 !important;
  text-align: center;
  
}
.book-a-table h1{
    font-family: 'Berkshire Swash', cursive;
}
.book-a-table a{
    font-family: 'Berkshire Swash', cursive;
}
.bg-section1{
  
  background-color: black;
  opacity: 0.7;
  font-family: 'Berkshire Swash', cursive;
  height: 500px;
}

/*********************LOCATION AND ENQUIRY SECTION START HERE************************************/
.section2{
  display: flex;

}
.address-enquiry-section{
  width: 50%;
}
#address{
  margin: auto;
}
.address-enquiry-section h2{
  text-align: center;
  text-shadow: 2px 2px 5px rgb(255, 255, 255);
  font-family: 'Ubuntu', sans-serif;
 
}
.address-enquiry-section p{
  font-family: 'Berkshire Swash', cursive;
  text-align: center;
  color: black;
  position: absolute;
  left: 15%;
}
#enquiry-p{
    position: relative;
    right: 5%;
}
.address-enquiry-section .form{
  padding: 20px;
  border-radius: 5px;
  background-color: #fff;
  margin: 50px;
}

input[type=text],input[type=email],input[type=number], input[type=submit],textarea{
  width: 100%;
  padding: 10px;
  margin: 5px;
  resize: none;
  border: 1px solid black;
  border-radius: 10px;

}
input[type=submit]{
  background-color: orange;
  cursor: pointer;
  border: 1px solid white;
  border-radius: 5px;
}
input[type=submit]:hover{
  background-color: #f6099f;
}
/*********************LOCATION AND ENQUIRY SECTION END HERE************************************/
</style>
</head>
<body itemscope>
  


<?php include_once('includes/header.php');?>
        <section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline">Contact Us</h1>
						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </div>
        </div>
        <section>
    <!-----------------------MAPS AND TIME SECTION START HERE------------------------------>
    <div class="map-time">
      <div class="map" id="mapid">
        <h3>Find Us on Google Map</h3>
       <p style="text-align: center;"> Food and Taste google map location <br>visit us</p>
       <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.9261796267244!2d76.32910305825727!3d10.048397363057768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c3af991bd11%3A0x3e38680ef20b6f04!2sSoftware%20Block!5e0!3m2!1sen!2sin!4v1684511162578!5m2!1sen!2sin" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="map">
        <div class="schedule-image">
          <img src="https://cdn.pixabay.com/photo/2016/04/01/09/52/cartoon-1299636_1280.png" alt="" height="400px" width="350px">
        
          
          </div>
       </div>
    </div>
    <!-----------------------MAPS AND TIME SECTION END HERE-------------------------------->
    <!----------------------ENQUIRY SECTION START HERE------------------------------------>

    <section class="enquiry" style="background-color: #fddec6;">
     <div class="section2">
          <div class="address-enquiry-section" id="address">
            <h2>OUR LOCATION</h2>
            <p>
          <i class="fas fa-map-marker-alt" style="color: black;"></i> 388,Food & Taste building complex <br> Pipeline road cochin - 23 , Cusat <br> Kochi kerala (INDIA) <br>
          
          <img src="https://websitedemos.net/italian-restaurant-02/wp-content/uploads/sites/283/2018/09/frill-free-img.png" alt="">
          </p>
            </div>
          <div class="address-enquiry-section">
        <h2>FOR ONLINE ENQUIRY</h2>
        <p id="enquiry-p" style="text-align: center;">If You Have any enquiry then send your message by fil this form</p>
        <div class="form">
        <form action="#" method="post">
          <input type="text" placeholder="Your name" name="yourname" id="yourname" required>
          <input type="email" placeholder="Email Id" name="email" id="email" required>
          <input type="number" placeholder="Contact No." name="contact" id="contact" required>
          <textarea name="message" id="message" cols="20" rows="5" required placeholder="Message"></textarea>
          <input type="submit" name="submit" value="Send Enquiries">
        </form>
      </div>
        <?php
            if(isset($_POST['submit'])){
              $name=$_POST['yourname'];
              $email=$_POST['email'];
              $contact=$_POST['contact'];
              $message=$_POST['message'];

              $query = "INSERT INTO tblenquiry(name,email,contact,message) VALUES ('$name','$email','$contact','$message')";
              $result=mysqli_query($con,$query);
              if($result){
                echo"<script>alert('Thank you For sharing the Feedback');</script>";
              }
              else{
                echo"<script>alert('Invalid Message');</script>";
              }
            }
        ?>
      </div>
    </div>
    </section>
    <!----------------------ENQUIRY SECTION END HERE-------------------------------------->


    <section class="bg-img">
      <div class="bg-section1">
        <div class="book-a-table">
            <h1>
              Call for All Your​ Reservations
                <br>
                  <a style="text-decoration: none; color: white;" href="tel:+919471610262">+91 947-1610-262</a>
              </h1>
              <img src="../image/contact/frill-free-img_section1.png" alt="">
        </div>
      </div>
    </section>


        </section>



        <section>
            <div class="block less-spacing gray-bg top-padd30">
                
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="sec-box">
       
                                <div class="contact-info-sec text-center">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-phone-square" style="color: green;"></i>
                                                <h5 itemprop="headline">PHONE</h5>
                                                <p itemprop="description"><a style="text-decoration: none; color: black;" href="tel:+919471610262">+91 947-1610-262</a></p>
                                                <p itemprop="description"><a style="text-decoration: none; color: black;" href="tel:+919142714447">+91 914-2714-447</a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-map-marker" style="color: blue;"></i>
                                                <h5 itemprop="headline">ADDRESS</h5>
                                                <p itemprop="description">Food and Taste pvt ltd<br> Kochi - 23 kerala (india) <br>
                                                pin - 682023
                                            </p>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                            <div class="contact-info-box">
                                                <i class="fa fa-envelope" style="color: #f6099f;"></i>
                                                <h5 itemprop="headline">EMAIL</h5>
                                                <p itemprop="description"><a href="mailto:amitkumar03022004@gmail.com">amitkumar03022004@gmail.com</a></p>
                                                <p itemprop="description"><a href="mailto:amitkumar03022004@gmail.com">contactus@foodandtaste.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

               <?php include_once('includes/footer.php');
include_once('includes/signin.php');
include_once('includes/signup.php');
      ?>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/js/google-map-int.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>
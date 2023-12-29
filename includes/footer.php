<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/a699bcecaa.js" crossorigin="anonymous"></script>/

    <style>
         /*---Footer section css start----*/
         *{
            list-style: none;
         }
         p{
          display: block;
         }
         .col{
          margin: auto;
         }
 .footer{
  padding: 10px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
  font-family: 'Mukta', sans-serif;
}
.col ul{
    padding-left: 0;
  }
.col ul li a{
  text-align: left;
  text-decoration: none;
  text-transform: capitalize;
  color: #fff;
  min-width: auto;
  transition: 0.5s;
}
.col ul li a:hover{
  color: #1b191a;
  text-decoration: underline;
  cursor: pointer;
}

.footer-heading{
  padding-right: 10px;
  color: black;
}
.footer-heading h3,p{
  color: black;
}
.feedback-btn{
  padding: 1rem;
  border: 1px solid white;
  border-radius:8px;
}
.fa-brands{
  margin-right:3px ;
}
/*---Footer section css End----*/
@media(max-width:700px){
/*Footer section css start here*/
.footer{
  font-size: 10px;
  justify-content: space-between;
  font-family: sans-serif;
}
.col{
  margin: 10px;
  justify-content: space-between;
}
.footer-heading{
  font-family: 'Courier New', Courier, monospace;
  font-size: 15px;
  
}
}
/*Footer section css End here*/

    </style>
</head>
<body>
<footer style="background-color: rgb(246, 9, 159);">
      <div class="footer">
        <div class="col">
          <h3 class="footer-heading">Food & Taste</h3>
          <ul>
            <li><a href="#">Who We Are</a></li>
            <li><a href="#">Feature</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">About</a></li>
          </ul>

        </div>
        <div class="col">
          <h3 class="footer-heading">Important Links</h3>
          <ul>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Categories</li>
            <li><a href="#">Grocery</li>
            <li><a href="#">Login</li>
            <li><a href="#">Signin</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footer-heading">Consumer Policy</h3>
          <ul>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Terms & Condition</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footer-heading">Connect With Us</h3>
          <ul>
            <li><a href="#"><i class="fa-brands fa-facebook" style="color: #fff; "> </i>Facebook</a></li>
            <li><a href="#"><i class="fa-brands fa-twitter" style="color: #fff;"> </i>Twitter</a></li>
            <li><a href="#"><i class="fa-brands fa-instagram" style="color: #fff;"> </i>Instagram</a></li>
            <li><a href="#"><i class="fa-brands fa-linkedin" style="color: #fff;"> </i>Linkedln</a></li>
            <li><a href="#"><i class="fa-brands fa-youtube" style="color: #fff;"> </i>Youtube</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footer-heading">Feedback</h3>
          <a href="mailto:amitkumar03022004@gmail.com"><button class="feedback-btn">Send us</button></a>
          <h3 class="footer_heading">Coroporate Office</h3>
          <p class="coroporate-address">388,Food & Taste complex Building <br>
          cochin - 23 ,Kochi , kerala (INDIA)</p>
          <p>Phone :947-1610-262 <br>
            <a href="mailto:amitkumar03022004@gmail.com" style="color:#1b191a;text-decoration: none;">Email:amitkumar03022004@gmail.com</a>
          </p>
        </div>
      </div>
      <hr style="color: #fff;">
      <p style="text-align: center;color:black">© 2023 Food & Taste, Inc. All rights reserved.</p>
      </footer>
</body>
</html>

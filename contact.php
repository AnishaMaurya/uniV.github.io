<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<script src="https://kit.fontawesome.com/07c7265bda.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="sub-header">
            <nav>
                <div class="logo">EDUREAD</div>
                <div class="nav-links" id="navLinks">
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                    <li><a href="home.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li> 
                        <li><a href="course.php">COURSE</a></li>
                        <li><a href="blog.php">BLOG</a</li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>    
                </div>
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Contact Us</h1>
       
    </section>

    <!-- ----------------contact us-------------------- -->

    <section class="location">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471219.
        7256039201!2d88.32972875!3d22.6759958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5
        e0!3m2!1sen!2sin!4v1623236293852!5m2!1sen!2sin" width="600" height="450"
         style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </section>

    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>XYZ Road, ABC Building</h5>
                        <p>Bangalore, Karnataka, IN</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>+1 0123456789</h5>
                        <p>Mondy to Saturday, 10AM to 6PM</p>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>info@gmail.com</h5>
                        <p>Email us your query</p>
                    </span>
                </div>
            </div>    
                <div class="contact-col">
                   <form action="db.php" method="POST">
                       <input type="text" name="name" id="name" placeholder="Enter your name " required>
                       <input type="email" name="email" id="email" placeholder="Enter email address name " required>
                       <input type="text" name="subject" id="subject" placeholder="Enter your subject" required>
                       <textarea name="desc" id="desc" rows="8" placeholder="Message" required></textarea>
                       <button type="submit" class="btn red-btn" name="submit">Send Message </button>
                   </form>
                </div>   
          </div>
        </div>
        
    </section>


      <!-- --------------Footer------------- -->

      <section class="footer">
          <h4>About Us</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Odit odio obcaecati reiciendis molestiae atque fuga animi quae<br>
             voluptates laudantium qui tenetur accusamus cumque, praesentium
             repellat.</p>
             <div class="icons">
                 <i class="fa fa-facebook"></i>
                 <i class="fa fa-twitter"></i>
                 <i class="fa fa-instagram"></i>
                 <i class="fa fa-linkedin"></i>
             </div>
             <p>Made With <i class="fa fa-heart-o"></i> by Easy Tutorials</p>


      </section>

    
  <!-- ----------JavaScript for Toggle Menu-------- -->
    <script>

        var navlinks= document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right="0";
        }

        function hideMenu(){
            navLinks.style.right="-200px";
        }


    </script>
    
    
</body>
</html>
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
            <h1>About Us</h1>
       
    </section>

    <!-- ----------------- About us content ----------------------- -->

    <section class="about-us">

        <div class="row">
            <div class="about-col">
                <h1>We are are the world's largest university</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Velit sint eum accusantium quod cumque nulla odio atque, 
                    similique tempora asperiores! Vitae aliquid eos iusto, pariatur
                     sequi tempore dignissimos ex inventore in corrupti praesentium 
                     ipsum nisi officia quas tempora vero Lorem, ipsum dolor sit amet 
                     consectetur adipisicing elit. Labore, saepe?</p>  
                     <a href="" class="btn red-btn">EXPLORE NOW</a>  
            </div>
            <div class="about-col">
                  <img src="aboutUs.jpg">
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
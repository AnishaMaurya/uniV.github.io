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
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>Our Certificate & Online Programs For 2021</h1>
    </section>
     <!-- ---------------------blog page content-------------------- -->

     <section class="blog-content">
         <div class="row">
             <div class="blog-left">
               <img src="scholarship.png">
               <h2>Our Certificate & Online Programs For 2021</h2>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nostrum! Nobis sequi quae dolore neque corrupti voluptas nulla tempora commodi consectetur eum veniam doloribus exercitationem autem libero alias, necessitatibus reiciendis cupiditate cumque?</p>
               <br>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nobis quis dolorum libero debitis rerum dolorem pariatur. Consequatur temporibus quia fugit quis consequuntur in vel numquam voluptatibus, assumenda magni modi ex amet, quasi ratione eaque facere exercitationem harum cumque sit repellendus omnis vitae quam? Dolore mollitia totam impedit repellendus tenetur?</p>
               <br>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates ut, asperiores eum, aliquam voluptas ipsa dolor aliquid itaque quo facere ratione ad laudantium lorem10
                    pariatur in neque. Quia dicta accusantium, dolore repellat voluptatum consectetur quasi consequatur fugit velit aliquam nemo quae tenetur sapiente sequi eum nobis illum, corporis doloremque placeat? Obcaecati incidunt non nihil? Voluptatem quos consequatur numquam vero. In, enim?</p>
               <br>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus error sed libero, nobis Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aspernatur adipisci placeat? dolorem molestias hic sunt cum ducimus accusantium? Ratione nesciunt deleniti quod consequuntur dolorum possimus, consequatur amet expedita.</p>


              <div class="comment-box">
                <h3>Leave a Comment</h3>

                <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="btn red-btn">POST COMMENT</button>
                </form>
              </div>
            </div>



             <div class="blog-right">
                 <h3>Post Categories</h3>
                 <div>
                     <span>Business Analytics</span>
                     <span>21</span>
                 </div>
                 <div>
                    <span>Data Science</span>
                    <span>29</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>15</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>34</span>
                </div>
                <div>
                    <span>AutoCAD</span>
                    <span>42</span>
                </div>
                <div>
                    <span>Journalism</span>
                    <span>22</span>
                </div>
                <div>
                    <span>commerce</span>
                    <span>30</span>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54bfb787f8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto+Mono&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>WEBSITE</title>
</head>
<body>
    <div id="slideout-menu">
        <ul>
            <li>
               <a href="#">HOME</a>
           </li>
        <li>
           <a href="#">Blog</a>
        </li>
        <li>
           <a href="#">Project</a>
        </li>
        <li>
           <a href="#">About</a>
        </li>
        <li>
          <input type="text" placeholder="seach Here">
        </li>
   
        </ul>  
    </div>

   <nav>
     <div id="logo_img">
         <a href="#">
             <img src="" alt="WEBSITE">
         </a>
     </div>
     <div id="menu-icon">
    <i class="fas fa-bars"></i>
     </div>
     <ul>
         <li>
            <a class="active" href="index.php">HOME</a>
        </li>
     <li>
        <a href="blogslist.php">Blog</a>
     </li>
     <li>
        <a href="blogslist.php">Project</a>
     </li>
     <li>
        <a href="about.php">About</a>
     </li>
     <li>
        <div id="search-icon">
            <i class="fas fa-search"></i>
        </div>
     </li>

     </ul>
   </nav> 
   <div id="searchbox">
       <input type="text" placeholder="Search Here">
   </div>

   <h2 class="page-heading">Blog Post Heading</h2>
   <div id="post-container">
       <section id="blogpost">
           <div class="card">
               <div class="card-meta-blogpost">
                   Posted By admin on 17 Oct 2020 in <a href="#">Web page</a>
               </div>
               <div class="card-image">
                   <img src="IMAGE/1.jpg" alt="Card Image">
               </div>
               <div class="card-description">
                   <h3>The Introduction</h3>
                   <p>
                       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo ad et voluptatibus corporis quam exercitationem, eveniet quia mollitia nihil amet enim tempora molestiae repudiandae excepturi, earum libero vitae aliquid. Natus impedit amet iure, cum harum sunt. Molestiae labore dignissimos mollitia!
                   </p>
                   <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo ad et voluptatibus corporis quam exercitationem, eveniet quia mollitia nihil amet enim tempora molestiae repudiandae excepturi, earum libero vitae aliquid. Natus impedit amet iure, cum harum sunt. Molestiae labore dignissimos mollitia!
                </p>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo ad et voluptatibus corporis quam exercitationem, eveniet quia mollitia nihil amet enim tempora molestiae repudiandae excepturi, earum libero vitae aliquid. Natus impedit amet iure, cum harum sunt. Molestiae labore dignissimos mollitia!
                </p>
               </div>
           </div>
           <form action="connect.php" method="POST">
           <div id="comment-section">
               Comments Sections
               <input type="text" placeholder="comment here" name="comment">
               <input type="submit" value="Submit">
           </div>
        </form>
       </section>

       <aside id="sidebar">
           <h3>Sidebar heading</h3>
           <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, vel?
           </p>
       </aside>
   </div>
    
    <footer>
        <div id="left-footer">
            <h3>QUICK links</h3>
            <p>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Blogs</a>
                    </li>
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li>
                        <a href="#">Contact US</a>
                    </li>
                </ul>
            </p>
        </div>

        <div id="right-footer">
            <h3>Follow us On</h3>
            <div id="social-media-footer">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p>
                This Website is develop by Pranit Anubhav Sarthak Aatmik
            </p>
        </div>
    </footer>
   </main>

   <script src="main.js"></script>

</body>
</html>
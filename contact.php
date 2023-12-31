<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=PT+Serif:wght@400;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <title>Jon Yun</title>

</head>
<body>
    <h1 class="hidden">Welcome to Jon's Portfolio Website</h1>
    
    <header class="grid-con" id="main-header">
        <h2 class="hidden">Top Navigation</h2>
        <div class="col-span-1 m-col-span-1 l-col-span-1 xl-col-span-1" id="main-logo">
            <a href="index.html">
                <img src="images/logo4x.png" alt="logo">
            </a>
        </div>
        <div class="col-span-2 m-col-span-3 l-col-span-3 xl-col-span-3" id="name">
            <p class="jon">Jon Yun</p>
        </div>
        <nav class="col-span-1 m-col-start-6 m-col-end-13 l-col-start-7 l-col-end-13" id="main-nav">
            <h3 class="hidden">Main Navigation</h3>
            <button id="button"></button>
            <div id="burger-con">
                <ul>
                    <li><a href="index.html"><span>&#123;</span>Home<span>&#125;</span></a></li>
                    <li><a href="project.html"><span>&#123;</span>Project<span>&#125;</span></a></li>
                    <li><a href="about.html"><span>&#123;</span>About<span>&#125;</span></a></li>
                    <li><a href="contact.php"><span>&#123;</span>Contact<span>&#125;</span></a></li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main>
        <div class="grid-con" id="contact-top-margin">         
            <h1 class="menu-title col-span-full">Contact</h1>
            <p class="yellow col-span-1 m-col-start-3 m-col-end-4" id="start-bracket">&#123;</p>
            <p class="col-start-2 col-end-4 m-col-start-4 m-col-end-10" id="contact-info"><span id="greet">Hello,</span> <br>your questions about me may be answered by looking at my resume or visiting my Linkedin account. Even if it's not that, you can contact me anytime. I'll get back to you within a day.</p>
            <p class="yellow col-start-4 col-end-5 m-col-start-10 m-col-end-11" id="end-bracket">&#125;</p>

            <div class="category-title col-start-1 col-end-3 m-col-start-2 m-col-end-5">
                <div>
                    <img src="images/Icon-plus.png" alt="icon plus">
                </div>
                <a class="rec-box-white hover" href="http://www.linkedin.com/in/jongwoog-yun">Linkedin</a>
            </div>  
            <div class="category-title col-start-3 col-end-5 m-col-start-8 m-col-end-12" id="project-bottom-nav-right">
                <a class="rec-box-white hover" href="#">Resume</a>
                <div>
                    <img src="images/Icon-plus.png" alt="icon plus">
                </div>              
            </div> 
        </div>
        <form class="grid-con" id="form-margin" method="post" action="sendmail.php">

            <label class="label-box col-span-2 m-col-start-2 m-col-end-5" for="first_name">First Name </label>
            <input class="input-box col-span-2 m-col-start-5 m-col-end-12" type="text" name="first_name" id="first_name" placeholder="Your First Name">

            <label class="label-box col-span-2 m-col-start-2 m-col-end-5" for="last_name">Last Name </label>
            <input class="input-box col-span-2 m-col-start-5 m-col-end-12" type="text" name="last_name" id="last_name" placeholder="Your Last Name">

            <label class="label-box col-span-2 m-col-start-2 m-col-end-5" for="email">Email </label>
            <input class="input-box col-span-2 m-col-start-5 m-col-end-12" type="text" name="email" id="email" placeholder="abc@example.com">

            <label class="label-box col-span-2 m-col-start-2 m-col-end-5" for="comments">Comments</label>
            <textarea class="input-box col-span-2 m-col-start-5 m-col-end-12" name="comments" id="comments" placeholder="Please leave your message"></textarea>

            <input class="oval-box col-span-full" type="submit" value="Send" id="send-btn">

        </form>
        

        
    </main>

    <footer class="grid-con">
        <div class="col-span-full">
            <p>Copyright @ 2023 Jon Yun. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
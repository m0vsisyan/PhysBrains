<?php
require './fb-init.php';
?>
<!DOCTYPE html>
<html lang="hy">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Էջի սկիզբ, Նախնական անհրաժեշտ թեգեր
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>PhysBrains</title>

    <!--  SEO, որոնման համակարգերում օգտագործվող կոնտեքստեր 
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="generator" content="Bracket">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Հատուկ մոբայլ թեգ, կառավարում է էջի ծավալը և չափսերը կախված թե ինչ սարքով է էջը բացված։ Կառավարվում է տվյալ սարքի բրաուզերի կողմից։
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Պատասխանատու էտարբեր բրաուզերներում խնդիրների վերացումը-->
    <link rel="stylesheet" href="css/normalize.css">

    <!--Պատասխանատու է տարբեր չափսի էկրաններին կոնտեքստը ճիշտ ձևով ցուցադրելու համար-->
    <link rel="stylesheet" href="css/m-ain.css">
    <link rel="stylesheet" type="text/css" href="css/loading.css">

    <!-- Favicon, բրենդի փոքր պատկերը բրաուզերի թաբում
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="IMAGES/rgr.png">

    <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script src="js/min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <!-- կապ մյուս էջերի հետ-->
</head>

<body onload="myFunction()">
    <!--էջի հիմնական կոնտեքստը և դասավորվածությունը
  -->
    <div class="Sidenaves">
        <div id="mySidenav" class="sidenav">
            <div class="profile">
                <div class="mydiv">
                    <img src="logo/img_avatar.png" alt="Avatar" class="image">
                    <div class="overlay">
                        <a href="info.html" class="icon" title="User Profile">
                                 <i class="fa fa-user"></i>
                             </a>
                    </div>
                </div>
                <a href="<php echo $username; ?>">Username</a>
                <a href="">Email</a>
            </div>
            <div class="line"></div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#"><img src="icons/inbox.png">Inbox</a>
            <div class="line2"></div>
            <a href="#"><img src="icons/star.png">Starred</a>
            <a href="#"><img src="icons/send-button.png">Sent</a>
            <a href="#"><img src="icons/outgoing.png">Outgoing</a>
            <a href="#"><img src="icons/drafts-evelope-button.png">Drafts</a>
            <a href="#"><img src="icons/warning.png">Spam</a>
            <a href="#"><img src="icons/recycle-bin-interface-symbol.png">Recycle Bin</a>
            <div class="line3"></div>
            <a href="#"><img src="icons/settings-work-tool.png">Settings</a>
            <a href="#"><img src="icons/question-mark.png">Help / Feedback</a>
        </div>
        <div id="mySidenav2" class="sidenav2 d-none d-sm-block" onclick="fix()">

            <a href="#" id="home"><i class="fab fa-google" id="icons"><p class="secondary">Ստացիր այն Google Play- ում</p></i></a>

            <a href="#" id="envelope"><i class="fab fa-apple" id="icons"><p class="secondary">Ստացիր այն App Store- ում</p></i></a>

            <a href="search.html" id="search"><i class="fab fa-microsoft" id="icons"><p class="secondary">Ստացիր այն Microsoft- ում</p></i></a>

        </div>
        <div id="mySidenav3" class="sidenav3" onclick="openNav()">
            <a href="#" id="settings"><i class="fa fa-arrow-left" id="icons"></i></a>
        </div>
        
    </div>

    <nav class="navbar navbar-expand-sm bottom" style="background-color: #031424;">
        <div class="phb">
            <a class="navbar-brand" href="#" id="top" onclick="toTop()">
               <img src="images/spitak.png" class="logo1">     
            </a>

        </div>
        <li style="list-style-type: none;">
            <div class="line4"></div>
        </li>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#" id="hpac">Պորտֆոլիո</a></li>
            <span class="underline"></span>
            <li class="nav-item"><a class="nav-link" href="#" id="hpac" onclick="load2()">Բանաձևեր</a></li>
            <span class="underline"></span>
            <li class="nav-item"><a class="nav-link" href="#" id="hpac" onclick="load()">Կուրսեր</a></li>
            <span class="underline"></span>

            <button class="logout"><a href="logout.php">Դուրս գալ</a></button>
        </ul>
        <div class="atomLoader" id="load">
                <div class="contentAtoms">
                  <div class="atom"></div>
                  <div class="atom"></div>
                <div class="atom"></div>
             </div>
           </div>
    </nav>
    <!-------->


    <div class="parallax container-fluid" style="background-image: url('images/704.jpg');">
        
    </div>

    <div style="height: auto;background-color:#f1f1f1;font-size:20px">
        <p class="wip">What is PHYSICS ?</p>
        <p class="wip2">Physics is the natural science that involves the study of matter and its motion and behavior through space and time, along with related concepts such as energy and force. One of the most fundamental scientific disciplines, the main goal of physics is to understand how the universe behaves. Physics is one of the oldest academic disciplines, perhaps the oldest through its inclusion of astronomy.
            <p class="wip4">Over the last two millennia, physics was a part of natural philosophy along with chemistry, biology, and certain branches of mathematics, but during the scientific revolution in the 17th century, the natural sciences emerged as unique research programs in their own right.</p>
            <p class="wip3">Physics intersects with many interdisciplinary areas of research, such as biophysics and quantum chemistry, and the boundaries of physics are not rigidly defined. New ideas in physics often explain the fundamental mechanisms of other sciences while opening new avenues of research in areas such as mathematics and philosophy. Physics also makes significant contributions through advances in new technologies that arise from theoretical breakthroughs. For example, advances in the understanding of electromagnetism or nuclear physics led directly to the development of new products that have dramatically transformed modern-day society, such as television, computers, domestic appliances, and nuclear weapons; advances in thermodynamics led to the development of industrialization, and advances in mechanics inspired the development of calculus.</p>
        </p>
    </div>

    <div class="parallax2" style="background-image: url('images/patd.jpg'); height: 60%;"></div>


  <div class="container_button">

</div>

    <!-- Footer
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="footer top d-block d-sm-none">
        <a href="#" class="f1"><i class="fa fa-home"></i></a>
        <a href="#" class="f2"><i class="fa fa-envelope"></i></a>
        <a href="#" class="f3" onclick="load2()"><i class="fa fa-search"></i></a>
        <a href="#" class="f4" onclick="load()"><i class="fas fa-graduation-cap"></i></a>
        <a href="info.html" class="f5"><i class="fa fa-user"></i></a>
    </div>
</body>

</html>

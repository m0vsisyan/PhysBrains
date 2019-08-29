<!DOCTYPE html>
<html>
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
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/loading.css">

    <!-- Favicon, բրենդի փոքր պատկերը բրաուզերի թաբում
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="rgr.png">

    <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <script type="text/javascript" src="js/function.js"></script>

</head>

<body>
        <nav class="navbar navbar-expand-sm bottom" style="background-color: #031424;">
    <div class="phb">

        <a class="navbar-brand2" id="top" onclick="load3()"><img src="images/spitak.png" class="logo1"></a>
    </div>
    <div class="atomLoader" id="load">
            <div class="contentAtoms">
              <div class="atom"></div>
              <div class="atom"></div>
            <div class="atom"></div>
         </div>
       </div>
</nav>

    <div class="container-fluid">
<div class="-top">
        <div class="box bottom">
            <input style="border:none;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Որոնել բանաձևեր . . ." title="Type in a name">
        </div>

        <ul id="myUL">
            <li onclick="on1()"><a href="#">Ճանապարհ</a></li>
            <li onclick="on2()"><a href="#">Արագություն</a></li>
            <li onclick="on3()"><a href="#">Ժամանակ</a></li>
            <li onclick="on4()"><a href="#">Խտություն</a></li>
            <li onclick="on5()"><a href="#">Ծավալ</a></li>
            <li onclick="on6()"><a href="#">Գրավիտացիոն ուժ</a></li>
            <li onclick="on7()"><a href="#">Առաձգական ուժ</a></li>
            <li onclick="on8()"><a href="#">Մեխանիկական ուժ</a></li>
            <li onclick="on9()"><a href="#">Հզորություն</a></li>
            <li onclick="on10()"><a href="#">Օգտակար աշխատանք</a></li>
        </ul>
</div>
        <!-- Overlays
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="myDiv">
        <div id="overlay" onclick="off1()">
            <div id="text">S = V • t</div>
        </div>

        <div id="overlay2" onclick="off2()">
            <div id="text">V = S / t</div>
        </div>

        <div id="overlay3" onclick="off3()">
            <div id="text">t = S / V</div>
        </div>

        <div id="overlay4" onclick="off4()">
            <div id="text">ρ = m / V</div>
        </div>

        <div id="overlay5" onclick="off5()">
            <div id="text">V = m / ρ</div>
        </div>

        <div id="overlay6" onclick="off6()">
            <div id="text">F = mg</div>
        </div>

        <div id="overlay7" onclick="off7()">
            <div id="text">F = kx</div>
        </div>

        <div id="overlay8" onclick="off8()">
            <div id="text">A = F • S</div>
        </div>

        <div id="overlay9" onclick="off9()">
            <div id="text">N = A / t</div>
        </div>

        <div id="overlay10" onclick="off10()">
            <div id="text">A = mgh</div>
        </div>

    </div>
</div>

    <!-- Footer
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="footer top d-block d-sm-none">
        <a href="#" class="f1" onclick="load3()"><i class="fa fa-home"></i></a>
        <a href="#" class="f2"><i class="fa fa-envelope"></i></a>
        <a href="#" class="f3"><i class="fa fa-search"></i></a>
        <a href="#" class="f4" onclick="load()"><i class="fas fa-graduation-cap"></i></a>
        <a href="#" class="f5"><i class="fa fa-user"></i></a>
    </div>
</body>
</html>

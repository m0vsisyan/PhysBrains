<?php require './fb-init.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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
 
    <!--Հատուկ մոբայլ թեգ, կառավարում է էջի ծավալը և չափսերը կախված թե ինչ սարքով է էջը բացված։ Կառավարվում է տվյալ սարքի բրաուզերի կողմից։
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Պատասխանատու էտարբեր բրաուզերներում խնդիրների վերացումը-->
    <link rel="stylesheet" href="css/normalize.css">

    <!--Պատասխանատու է տարբեր չափսի էկրաններին կոնտեքստը ճիշտ ձևով ցուցադրելու համար-->
    <link rel="stylesheet" href="css/register.css">

    <!-- Favicon, բրենդի փոքր պատկերը բրաուզերի թաբում
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="Images/rgr.png">

    <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/min.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <!-- կապ մյուս էջերի հետ .-->
</head>

<body>
    <h1 class="design">
        <p style="font-family: 'Baloo Thambi';display: inline-block;">PhysBrains</p>
        <p style="font-family: 'Armfont'; display: inline-block;"> Օնլայն Լաբորատորիա</p>
        <p class="_sub">Այստեղ դու կարող ես բացահայտել ֆիզիկայի թաքնված գաղտնիքները</p>
    </h1>
    <img src="IMAGES/3.jpg" class="bd">
    <div class="cycle">
        <section class="get">
            <button>Get</button>
            <div class="name">
                <p class="_phtitle">PhysBrains</p>
                <p class="_phsubtitle">Find it for free on the Google Play</p>
            </div>
        </section>

    </div>
    <div class="_Div">
        <div class="container-fluid myDiv">
            <div class="container">
                <h1 class="title">PhysBrains</h1>
                <h5 class="subtitle">Լրացրեք ստորեւ բերված ձեւը `ստանալու ակնթարթային մուտք</h5>
            </div>
            <div class="">
                <div>
                    <a href="<?php echo $login_url; ?>" style="text-decoration: none;"><button class="wf"><i class="fa fa-facebook-official ficon"></i>Անդամագրվել Ֆեյսբուքով</button></a>
                    <div class="Lines">
                        <div class="line"></div>
                        <h6 class="or">Կամ</h6>
                        <div class="line2"></div>
                    </div>
                </div>
                <form action="form.php" method="POST">
                    <div class="container">
                        <input placeholder="Ծածկանուն" name="username" required>
                        <input placeholder="Գաղտնաբառ" type="password" name="password" required>
                        <input placeholder="Հեռախոսահամար կամ E-mail" class="it1" name="email" type="email" required>
                    </div>
                    <button type="submit" class="sp">Գրանցվել</button>
                </form>
            </div>
        </div>
        <div class="line3 d-block d-sm-none"></div>
        <div class="top container-fluid myDiv2">
            <p class="myP"> Գրանցված ես ? <a style="text-underline:none;" href="login.php">Մուտք</a> </p>
        </div>
    </div>
    <div class="footer top container-fluid myDiv3">
        <p class="myP"> Գրանցված ես ? <a href="login.php">Մուտք</a> </p>
    </div>
</body>

</html>

<?php
    $res = false;
    $v = "video/3_BadDist_BadGel.mp4";

    if (isset($_POST['form3'])) {
        setcookie("resume[form]", "", time() - 3600);
        setcookie("resume[form3_1]", "", time() - 3600);
        setcookie("resume[form3_2]", "", time() - 3600);
        setcookie("resume[form3_3]", "", time() - 3600);

        $res = true;
        setcookie("resume[form]", "form3", time() + 3600);

        if (isset($_POST['rg']) && isset($_POST['aa'])) {
            $v = "video/3_GoodDist_GoodGel.mp4";
        }

        if (isset($_POST['rg']) && !isset($_POST['aa'])) {
            $v = "video/3_BadDist_GoodGel.mp4";
        }

        if (!isset($_POST['rg']) && isset($_POST['aa'])) {
            $v = "video/3_GoodDist_BadGel.mp4";
        }

        if (isset($_POST['rg'])) {
            setcookie("resume[form3_1]", "form3_1", time() + 3600);
        }

        if (isset($_POST['aa'])) {
            setcookie("resume[form3_2]", "form3_2", time() + 3600);
        }

        if (isset($_POST['as'])) {
            setcookie("resume[form3_3]", "form3_3", time() + 3600);
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }

    function yesCheck() {
        document.getElementById('ifNo').style.display = 'none';
        document.getElementById('next').style.display = 'block';
        document.getElementById('form').style.display = 'none';
        document.getElementById('ouiCheck').style.display = 'none';
        document.getElementById('nonCheck').style.display = 'none';
    }

    function noCheck() {
        document.getElementById('ifNo').style.display = 'block';
        document.getElementById('next').style.display = 'none';
        document.getElementById('form').style.display = 'block';
        document.getElementById('ouiCheck').style.display = 'none';
        document.getElementById('nonCheck').style.display = 'none';
    }
</script>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Site Metas -->
    <title>Covid-19</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom animate styles for this template -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">
    <!-- light box gallery -->
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body id="home_page" class="home_page">

<!-- about section -->
<section class="layout_padding section about_dottat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about_img margin_top_30  text_align_center">
                    <video controls autoplay style="display: block; width: 100%; margin: 0 auto;"><source src="<?=$v?>" type="video/mp4"></video>
                </div>
            </div>
            <?php if(!$res): ?>
                <div style="margin: 0 auto;">
                    <br /><p style="font-size: 25px">Trouvez vous que toutes les r??gles du covid ont ??t?? respect?? ?</p>
                    <input class="blue_bt" type="button" id="ouiCheck" value="oui" name="yesno" onclick="yesCheck();">
                    <input class="blue_bt" type="button" id="nonCheck" value="non" name="yesno" onclick="noCheck();">
                </div>
                <div style="margin: 0 auto;">
                    <a class="blue_bt" href="sequence4.php"  id="next" style="display: none">Suivante</a>
                </div>
            <?php else: ?>
                <a class="blue_bt" href="resume.php">Suivant</a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- end about section -->

<!-- section -->
<section class="layout_padding section" id="ifNo" style="display: none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 cours_timging_bg">
                <div class="container">
                    <div class="time_table">
                        <form action="sequence3.php" method="post" style="margin-top: 50px; display: none;" id="form">
                            <label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="rg"> Il aurait du reprendre du gel</label>
                            <br /><br /><label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="aa"/> Il ne faut pas s'approcher autant des autres</label>
                            <br /><br /><label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="as"/> Ne pas aller au self</label>
                            <input class="blue_bt" type="submit" name="form3" value=" Valider "/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<div class="cpy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright 2019. All Rights Reserved.<a href="https://html.design/"> Free html Templates</a></p>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->
<!-- Core JavaScript
   ================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/animate.js"></script>
<script src="js/ekko-lightbox.js"></script>
<script src="js/custom.js"></script>
</body>
</html>

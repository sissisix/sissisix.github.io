<?php
    $res = false;
    $v = "video/4_BadTousse_BadPartage.mp4";

    if (isset($_POST['form4'])) {
        setcookie("resume[form]", "", time() - 3600);
        setcookie("resume[form4_1]", "", time() - 3600);
        setcookie("resume[form4_2]", "", time() - 3600);
        setcookie("resume[form4_3]", "", time() - 3600);
        setcookie("resume[form4_4]", "", time() - 3600);

        $res = true;
        setcookie("resume[form]", "form4", time() + 3600);

        if (isset($_POST['ec']) && isset($_POST['ap'])) {
            $v = "video/4_GoodTousse_GoodPartage.mp4";
        }

        if (isset($_POST['ec']) && !isset($_POST['ap'])) {
            $v = "video/4_GoodTousse_BadPartage.mp4";
        }

        if (!isset($_POST['ec']) && isset($_POST['ap'])) {
            $v = "video/4_BadTousse_GoodPartage.mp4";
        }

        if (isset($_POST['ec'])) {
            setcookie("resume[form4_1]", "form4_1", time() + 3600);
        }

        if (isset($_POST['ap'])) {
            setcookie("resume[form4_2]", "form4_2", time() + 3600);
        }

        if (isset($_POST['rp'])) {
            setcookie("resume[form4_3]", "form4_3", time() + 3600);
        }

        if (isset($_POST['mm'])) {
            setcookie("resume[form4_4]", "form4_4", time() + 3600);
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
                    <a class="blue_bt" href="sequence5.php"  id="next" style="display: none">Suivante</a>
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
                        <form action="sequence4.php" method="post" style="margin-top: 50px; display: none;" id="form">
                            <label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="ec"> Eternuer dans son coude</label>
                            <br /><br /><label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="ap"/> Ne pas accepter son plat</label>
                            <br /><br /><label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="rp"/> Rendre le plat au self</label>
                            <br /><br /><label style="color: dimgrey; font-size: 18px;"><input type="checkbox" name="mm"/> Manger avec le masque</label>
                            <input class="blue_bt" type="submit" name="form4" value=" Valider "/>
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

<?php
    if(isset($_COOKIE['resume']['form'])){
        $seq = $_COOKIE['resume']['form'];

        $dest = "index.html";

        if($seq == "form1") {
            $dest = "sequence2.php";
        }

        if($seq == "form2") {
            $dest = "sequence3.php";
        }

        if($seq == "form3") {
            $dest = "sequence4.php";
        }

        if($seq == "form4") {
            $dest = "sequence5.php";
        }

        if($seq == "form5") {
            $dest = "sequence6.php";
        }

        if($seq == "form6") {
            $dest = "end.php";
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
<?php if($seq == "form1"): ?>

    <section class="layout_padding section" style="padding-top: 0px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                    <div class="container">
                        <div class="time_table">
                            <?php if(isset($_COOKIE['resume']['form1_1'])): ?>
                                <p style="color: green;">Il n???aurait pas d?? passer par un passage interdit et respecter le sens de circulation</p>
                            <?php else: ?>
                                <p style="color: red;">Il n???aurait pas d?? passer par un passage interdit et respecter le sens de circulation</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form1_2'])): ?>
                                <p style="color: green;">??tre en retard ne justifie pas de ne pas se laver les mains avec le gel hydroalcoolique</p>
                            <?php else: ?>
                                <p style="color: red;">??tre en retard ne justifie pas de ne pas se laver les mains avec le gel hydroalcoolique</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form1_3'])): ?>
                                <p style="color: red;">Ouvrir les portes avec les coudes suffit, il n???y a pas besoin d???enfoncer la porte !</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form1_4'])): ?>
                                <p style="color: red;">Se couvrir le corps n???est pas utile, le virus ne se transmet pas par la peau</p>
                            <?php endif; ?>
                            <a class="blue_bt" href="<?=$dest?>">Suivant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif ($seq == "form2"): ?>

    <section class="layout_padding section" style="padding-top: 0px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                    <div class="container">
                        <div class="time_table">
                            <?php if(isset($_COOKIE['resume']['form2_1'])): ?>
                                <p style="color: red;">Travailler en groupes n???est pas forc??ment un probl??me si c???est fait dans le respect des r??gles</p>
                            <?php else: ?>
                                <p style="color: green;">Travailler en groupes n???est pas forc??ment un probl??me si c???est fait dans le respect des r??gles</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form2_2'])): ?>
                                <p style="color: red">Il n???y a pas n??cessit?? d'??ternuer dans son coude quand on a un masque</p>
                            <?php else: ?>
                                <p style="color: green">Il n???y a pas n??cessit?? d'??ternuer dans son coude quand on a un masque</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form2_3'])): ?>
                                <p style="color: red">Les gants sont inutiles et peuvent donner un sentiment de fausse s??curit?? ils sont donc ?? ??viter</p>
                            <?php else: ?>
                                <p style="color: green">Les gants sont inutiles et peuvent donner un sentiment de fausse s??curit?? ils sont donc ?? ??viter</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form2_4'])): ?>
                                <p style="color: red">Boire est autoris?? si c???est fait en respectant les r??gles (le d??crocher d???un c??t?? en ne touchant que l?????lastique, le laisser pendre pendant qu???on boit, puis le re positionner d??licatement)</p>
                            <?php else: ?>
                                <p style="color: green">Boire est autoris?? si c???est fait en respectant les r??gles (le d??crocher d???un c??t?? en ne touchant que l?????lastique, le laisser pendre pendant qu???on boit, puis le re positionner d??licatement)</p>
                            <?php endif; ?>
                            <a class="blue_bt" href="<?=$dest?>">Suivant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif ($seq == "form3"): ?>

    <section class="layout_padding section" style="padding-top: 0px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                    <div class="container">
                        <div class="time_table">
                            <?php if(isset($_COOKIE['resume']['form3_1'])): ?>
                                <p style="color: green">Il est important de se laver r??guli??rement les mains en particulier avant de manger</p>
                            <?php else: ?>
                                <p style="color: red">Il est important de se laver r??guli??rement les mains en particulier avant de manger</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form3_2'])): ?>
                                <p style="color: green">La distanciation sociale reste un des moyens les plus efficace pour lutter contre la Covid-19</p>
                            <?php else: ?>
                                <p style="color: red">La distanciation sociale reste un des moyens les plus efficace pour lutter contre la Covid-19</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form3_3'])): ?>
                                <p style="color: red">Les services de restauration sont toujours utilisable sans risque si on prend toutes les pr??cautions n??cessaires</p>
                            <?php else: ?>
                                <p style="color: green">Les services de restauration sont toujours utilisable sans risque si on prend toutes les pr??cautions n??cessaires</p>
                            <?php endif; ?>
                            <a class="blue_bt" href="<?=$dest?>">Suivant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif ($seq == "form4"): ?>

    <section class="layout_padding section" style="padding-top: 0px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                    <div class="container">
                        <div class="time_table">
                            <?php if(isset($_COOKIE['resume']['form4_1'])): ?>
                                <p style="color: green">Quand on ne porte pas de masque il est primordial de tousser et d'??ternuer dans son coude</p>
                            <?php else: ?>
                                <p style="color: red">Quand on ne porte pas de masque il est primordial de tousser et d'??ternuer dans son coude</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form4_2'])): ?>
                                <p style="color: green">Il ne faut pas partager sa nourriture pour ??viter la propagation</p>
                            <?php else: ?>
                                <p style="color: red">Il ne faut pas partager sa nourriture pour ??viter la propagation</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form4_3'])): ?>
                                <p style="color: red">Sous aucune condition on ne rend un plat entam??, et encore plus en cette p??riode</p>
                            <?php else: ?>
                                <p style="color: green">Sous aucune condition on ne rend un plat entam??, et encore plus en cette p??riode</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form4_4'])): ?>
                                <p style="color:red;">Manger avec un masque n???est pas adapt?? et vous risquez plus de l'endommager</p>
                            <?php else: ?>
                                <p style="color:green;">Manger avec un masque n???est pas adapt?? et vous risquez plus de l'endommager</p>
                            <?php endif; ?>
                            <a class="blue_bt" href="<?=$dest?>">Suivant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif ($seq == "form5"): ?>

    <section class="layout_padding section" style="padding-top: 0px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                    <div class="container">
                        <div class="time_table">
                            <?php if(isset($_COOKIE['resume']['form5_1'])): ?>
                                <p style="color: green">Le port du masque est obligatoire dans l???ensemble de l???Universit?? </p>
                            <?php else: ?>
                                <p style="color: red">Le port du masque est obligatoire dans l???ensemble de l???Universit?? </p>
                            <?php endif; ?>
                            <?php if(!isset($_COOKIE['resume']['form5_2']) && !isset($_COOKIE['resume']['form5_3']) && !isset($_COOKIE['resume']['form5_4'])): ?>
                                <p style="color: green">Si on ressent que le masque nous d??range le mieux et de l???enlever une fois sortit de l???universit??. Retourner son masque ou respirez dans son T-shirt ne sont pas des bonnes pratiques</p>
                            <?php else: ?>
                                <p style="color: red">Si on ressent que le masque nous d??range le mieux et de l???enlever une fois sortit de l???universit??. Retourner son masque ou respirez dans son T-shirt ne sont pas des bonnes pratiques</p>
                            <?php endif; ?>
                            <a class="blue_bt" href="<?=$dest?>">Suivant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif ($seq == "form6"): ?>

    <section class="layout_padding section" style="padding-top: 0px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 cours_timging_bg" style="margin-top: 0px">
                    <div class="container">
                        <div class="time_table">
                            <?php if(isset($_COOKIE['resume']['form6_1'])): ?>
                                <p style="color: green">Il faut ??viter les contacts physique et donc les serrages de mains et privil??gier les salutations ?? distance</p>
                            <?php else: ?>
                                <p style="color: red">Il faut ??viter les contacts physique et donc les serrages de mains et privil??gier les salutations ?? distance</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form6_2'])): ?>
                                <p style="color: red">Les services de transport en commun sont toujours utilisable sans risque si on prend toutes les pr??cautions n??cessaires</p>
                            <?php else: ?>
                                <p style="color: green">Les services de transport en commun sont toujours utilisable sans risque si on prend toutes les pr??cautions n??cessaires</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form6_3'])): ?>
                                <p style="color: red">On peut respecter les r??gles de s??curit?? tout en restant poli</p>
                            <?php else: ?>
                                <p style="color: green">On peut respecter les r??gles de s??curit?? tout en restant poli</p>
                            <?php endif; ?>
                            <?php if(isset($_COOKIE['resume']['form6_4'])): ?>
                                <p style="color: red">NON les antennes 5g ne propagent pas le coronavirus</p>
                            <?php else: ?>
                                <p style="color: green">NON les antennes 5g ne propagent pas le coronavirus</p>
                            <?php endif; ?>
                            <a class="blue_bt" href="<?=$dest?>">Suivant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>

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

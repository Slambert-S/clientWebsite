<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>


<body>

    <?php
    include "navPublic.php";
    $custumPath = "txtfile/";
    include "galerieParsing.php";
    ?>


    <div class="landing landingGalerie">
        <div class="contenuLanding">
            <div class="boxLanding">

                <H1><?php echo $titreLanding ?></H1>
                <a href="https://flickr.com/" target="_blank">
                    <div class="buttonClass buttonFix">Plus de photo</div>
                </a>
            </div>

        </div>
    </div>


    <div class="contenuCentrer  white" id="textIntroGalery">
        <div class="mxWidth allignSelfFix ">
            <div class="wrapper">
                <h1><?php echo $titreSectionUn ?></h1>
                <p> <?php echo $textSectionUn ?> </p>

            </div>
        </div>
    </div>

    <div class="contenuCentrer white">
        <div class="mxWidth green widthGalerie">
            <h2 class="textCentrer galeryTitle"><?php echo $titreVariable[0] ?> <span class="galerieToogleArrow">&#8743;</span></h2>
            <div class=galerieToggle>
                <div class="evenColumn wrapper">
                    <?php
                    $number = count($imgGroupUn);
                    for ($i = 0; $i < $number; $i++) {
                        if(!empty($imgGroupUn[$i])){
                         echo '<div class="colGalery"><img src="../images/' . $imgGroupUn[$i] . '" alt="img' . $i . '" class="testGaleries"></div>';
                        }else{
                            echo '<div class="colGalery" style="display:none;"><img src="../images/' . $imgGroupUn[$i] . '" alt="img' . $i . '" class="testGaleries"></div>';
                        }
                    }
                    ?>

                </div>
                <a href="<?php echo $lienHtml[0] ?>" target="_blank">
                    <div class="buttonClass buttonFix" id="buttonCoinSoleil"> Voir plus</div>
                </a>
            </div>

        </div>
    </div>

    <div class="contenuCentrer white">
        <div class="mxWidth darkgreen widthGalerie">
            <h2 class="textCentrer galeryTitle"><?php echo $titreVariable[1] ?> <span class="galerieToogleArrow">&#8744;</span></h2>
            <div class="galerieToggle galeryHiden">
                <div class="evenColumn wrapper">
                    <?php
                    $number = count($imgGroupDeux);
                    for ($i = 0; $i < $number; $i++) {
                        if(!empty($imgGroupDeux[$i])){
                        echo '<div class="colGalery"><img src="../images/' . $imgGroupDeux[$i] . '" alt="img' . $i . '" class="testGaleries"></div>';
                        }else{
                            echo '<div class="colGalery" style="display:none;"><img src="../images/' . $imgGroupDeux[$i] . '" alt="img' . $i . '" class="testGaleries"></div>'; 
                        }
                    }
                    ?>

                </div>
                <a href="<?php echo $lienHtml[1] ?>" target="_blank">
                    <div class="buttonClass buttonFix" id="buttonPhotoDeux">Voir plus</div>
                </a>
            </div>
        </div>
    </div>

    <div class="contenuCentrer white">
        <div class="mxWidth green widthGalerie">
            <h2 class="textCentrer galeryTitle"><?php echo $titreVariable[2] ?><span class="galerieToogleArrow">&#8744;</span></h2>
            <div class="galerieToggle galeryHiden">
                <div class="evenColumn wrapper">
                    <?php
                    $number = count($imgGroupTrois);
                    for ($i = 0; $i < $number; $i++) {
                        if(!empty($imgGroupTrois[$i])){
                            echo '<div class="colGalery"><img src="../images/' . $imgGroupTrois[$i] . '" alt="img' . $i . '" class="testGaleries"></div>';
                        }else{
                            echo '<div class="colGalery" style="display:none;><img src="../images/' . $imgGroupTrois[$i] . '" alt="img' . $i . '" class="testGaleries"></div>';
                        }
                    }
                    ?>

                </div>
                <a href="<?php echo $lienHtml[2] ?>" target="_blank">
                    <div class="buttonClass buttonFix" id="buttonGite"> Voir plus</div>
                </a>
            </div>

        </div>
    </div>

    <div class="contenuCentrer noire">
        <?php
        include "footer.php";
        ?>
    </div>

</body>
<?php
    // CAPÇALERA 
    include_once "plantilles/header.inc.php";
    // BARRA NAVEGACIÓ
    include_once "plantilles/navbar.inc.php";
    // CAROUSEL
    include_once "plantilles/carousel.inc.php";  
?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <br>
        <h4>Combinació aleatòria de sis nombres de l'1 al 49.</h4>
        <script>
        //Creació de la variable
        var i = 0;
        var num;
        var u = 0;
        var dos = 0;
        var tres = 0;
        var quatre = 0;
        var cinc = 0;
        var sis = 0;
        do {
            //Creació de la variable aleatori
            num = Math.floor(Math.random() * 49 + 1);
            if (
                num != u &&
                num != dos &&
                num != tres &&
                num != quatre &&
                num != cinc &&
                num != 6
            ) {
                //Presenta el resultat en pantalla
                document.write("Resultat" + i + ": " + num + "<br>");
                i++;
                if (i == 1) {
                    u = num;
                }
                if (i == 2) {
                    dos = num;
                }
                if (i == 3) {
                    tres = num;
                }
                if (i == 4) {
                    quatre = num;
                }
                if (i == 5) {
                    cinc = num;
                }
                if (i == 6) {
                    sis = num;
                }
            }
        } while (i < 6);
        </script>
        <center>
            <p><a class="btn btn-warning" a href="joc.php" role="button">Torna a la part superior</a></p>
        </center>
        <br><br>

        <?php
  // PEU
include_once "plantilles/footer.inc.php";
?>
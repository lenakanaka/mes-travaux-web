<!DOCTYPE Html>
<!--Auteur : Limard Goethe
date : 07/12/2022
objectif : création d'une application booking--> 
<!--debut html--> 
<html> 
    <!--debut head--> 
    <!--debut script php--> 
    <?php include("php/head.php"); ?>
    <!--fin script-->
    <!--fin head--> 
    <!--debut body-->
    <body>
        <!--debut wrapper-->
        <div class="wapper">

            <!--debut header-->
            <!--debut script php-->
            <?php 
                include("php/en_tete.php");
            ?>
            <!--fin header-->
            <!--debut main-->
            <main>
                <div class="conteneur-main">
                    <img src="images/hotell-bell.png" 
                    alt="bell" title="bell"/>
                    <div class="conteneur-main-div">
                        <h2>Lorem ipsum dolor</h2>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Ut ac magna pellentesque, porttitor nibh vitae, 
                        dapibus ipsum. Phasellus in odio quis leo ornare viverra. 
                        Donec auctor tellus risus, et vulputate mi porta non. 
                        Nunc sem nulla, lobortis ut interdum eu, molestie vel
                        nunc. Donec ut vestibulum quam. Cras pharetra congue
                        magna id mollis. Praesent vulputate rutrum massa et 
                        convallis.
                        </p>
                    </div>
                </div>
            </main>
            <!--fin main--> 
            <!--debut footer--> 
            <!--debut script php--> 
            <?php 
                include("php/pied_page.php");
            ?>
            <!--fin script php-->
        </div>
        <!--fin wrapper--> 
    </body>
</html>
<!--fin html-->
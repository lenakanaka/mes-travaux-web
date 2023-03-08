<!DOCTYPE html>
<!--auteur Limard Goethe
date : 08/03/2023
objectif : revision html, css, javascript et php-->
<!--debut html--> 
<html>
    <!--debut head--> 
    <head>
        <!--titre--> 
        <title>Tableau</title>
        <!--balise meta--> 
        <meta http-equiv="Content-type" 
        content="text/html;charset=utf-8"/>
        <!--balise liaison css boostrap-->
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
        crossorigin="anonymous">
    </head>
    <!--debut body--> 
    <body>
        <h1> Tableaux</h1> 
        <!--debut php-->
        <?php
            //Declaration de variables
            $tab1 = array();
            $tab2 = array();
            $tab3 = array();

            //remplissage  des tableaux
            for($i = 1 ; $i < 10; $i++)
            {
                $tab1[$i] = $i;
            }
            for($i = 1 ; $i < 10; $i++)
            {
                $tab2[$i] = $i+10;
            }
            //Affichage des tableaux
            echo "<p>tab 1 = [";
            foreach($tab1 as $valeurs)
            {
                echo $valeurs.', ';
            }
            echo " ]";
            echo "<br/>";
            echo "tab 2 = [";
            foreach($tab2 as $valeurs)
            {
                echo $valeurs.', ';
            }
            echo " ]</p>";echo "<br/>";

            //Calcul
            echo "<p>La somme des tableaux : <br/>";
            for($i = 1 ; $i < 10; $i++)
            {
               $tab3[$i] = $tab1[$i] + $tab2[$i];
            }
            echo "tab3 = [";
            foreach($tab3 as $valeurs)
            {
                echo $valeurs.', ';
            }
            echo " ]</p>";

        ?>
        <!--fin php--> 
         <h2>Nombre au hasard</h2>
         <!--debut php--> 
         <?php
            //Declaration de variables
            $min = 1; $max = 100;
            $tab_nombre_aleatoire = array();
            //remplissage tableau
            for($i = 1 ; $i < 10; $i++)
            {
                $tab_nombre_aleatoire[$i] = rand($min, $max);
            }
            //Affichage
            echo "<p> tab aleatoire = [";
            foreach($tab_nombre_aleatoire as $valeurs)
            {
                echo  $valeurs.", ";
            }
            echo " ]";

        ?>
        <!--script js boostrap-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>

</html>

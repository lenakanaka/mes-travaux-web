
<!DOCTYPE html>
<!--Cas pratique php
auteur : Limard Goethe
date : 20/01/2023
objectif : revision html, css, javascript et php-->
<!--debut html-->
<html>
    <!--debut head--> 
    <head>
        <title>
            Ma Blog
        </title>

        <!--balise meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        
        <!--Lien boostrap--> 
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
        crossorigin="anonymous">

        <!--balise css-->
        <link rel="stylesheet" href="style.css"/>
    </head>
    <!--fin head-->

    <!--debut body-->
    <body>
        <div id="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-10">
                        <!--Titre-->
                        <h2>BLog</h2>
                        <br/><br/><hr/>
                        <br/><br/>
                        <h3>Bienvenue</h3>
                        <br/><br/>
                        <p class="text-justify">
                            Bienvenue sur mon Blog ! 
                        </p>

                        <!--debut script php--> 
                        <?php
                            //page de traitement de formulaire
                            try{
                                //Connection à la base de données
                                $base = new PDO('mysql:host=127.0.0.1; dbname=blog_procedural', 'root', '');
                                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                //Requete 
                                $sql = "SELECT * FROM blog";

                                //preparation de la requete
                                $resultat = $base->prepare($sql);
                                $resultat->execute();
                                //ouverture du repertoire fichiers
                                if($pointeur = opendir("fichiers"))
                                {
                                    while($fichier= readdir($pointeur))
                                    {
                                        //Lecture du table
                                        while($ligne = $resultat->fetch())
                                        {
                                            if($fichier !="" || $fichier == $ligne['Photos'])
                                            {
                                                echo "<img src='fichiers/".$ligne['Photos']."' class='img-fluid' alt='un truc'>";
                                            }
                                            echo "<p class='text-justify'>".$ligne['Commentaires']."</p><br/><br/>";
                                        }
                                    }
                                    closedir($pointeur);
                                }
                                
                            }catch(Exception $e)
                            {

                            }
                               
                    
                        ?>
                        <!--fin script php--> 
                        <!--lien page d'acceuil-->
                        <br/><br/>
                        <p class="text-justify">
                            <a href="index.php" class="badge badge-light">Affichez la page d'affichage du blog</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--Liaison script boostrap--> 
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>
</html>
<!--fin html--> 


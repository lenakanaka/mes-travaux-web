
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
        <link rel="stylesheet" href="style1.css"/>
    </head>
    <!--fin head-->

    <!--debut body-->
    <body>
        <div id="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-8 col-lg-10">
                        <!--debut script php--> 
                        <?php
                            //page de traitement de formulaire
                            try{
                                //Connection à la base de données
                                $base = new PDO('mysql:host=127.0.0.1; dbname=blog_procedural', 'root', '');
                                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                //Requete 
                                $sql = "INSERT INTO blog (Titre, Commentaires, Photos)
                                VALUES (:titre, :commentaires, :photos)";

                                //Preparation de la requete avec les marqueurs
                                $resultat = $base->prepare($sql);
                                //liaison des parametres
                                $resultat->bindParam(':titre', $titre);
                                $resultat->bindParam(':commentaires', $commentaires);
                                $resultat->bindParam(':photos',$photos);
                                //insertion des valeurs
                                $titre = htmlentities(addslashes($_POST['titre']), ENT_QUOTES);
                                $commentaires = htmlentities(addslashes($_POST['commentaires']), ENT_QUOTES);
                                $photos = htmlentities(addslashes($_FILES['photos']['name']), ENT_QUOTES);
                                //Execution des resultas
                                $resultat->execute();

                                //Affchage d'erreur de fichier et deplacement 
                                //dans un repertoire
                                if($_FILES['photos']['error'])
                                {
                                    switch($_FILES['photos']['error'])
                                    {
                                        case 1://UPLOAD_ERR_INI_SIZE
                                            echo "La taille du fichier est plus grande
                                            que la taille autorisée par le serveur
                                            (parametre upload_max_filesize du fichier php.ini).";
                                            break;
                                        case 2: //UPLOAD_ERR_FORM_SIZE
                                            echo "la taille du fichier est plus grande
                                            que la limite autorisée par le formulaire
                                            (parametre post_max_size du fichier php.ini";
                                            break;
                                        case 3: //UPLOAD_ERR_PARTIAL
                                            echo "L'envoi du fichier a été interrompu pendant le transfert.";
                                            break;
                                        case 4: //UPLOAD_ERR_NO_FILE
                                            echo "La taille du fichier que vous avez envoyé est nulle.";
                                            break;
                                    }
                                }
                                else
                                {
                                    echo "Aucune dans l'upload du fichier.<br/>";
                                    //deplacement du fichier
                                    if((isset($_FILES['photos']['name'])&&($_FILES['photos']['error'])==UPLOAD_ERR_OK))
                                    {
                                    $chemin_destination='fichiers/';
                                    move_uploaded_file($_FILES['photos']['tmp_name'], 
                                    $chemin_destination.$_FILES['photos']['name']) ;
                                    //Affichage
                                    echo "Le fichier ".$_FILES['photos']['name']." a été 
                                    dans le repertoire fichiers";
                                    }
                                    else{
                                        echo "Le fichier n'a pas pu être
                                        copié dans le repertoire fichiers.";
                                    }

                                }

                            }catch(Exception $e)
                            {
                                    die("Erreur : ".$e->getMessage());  
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


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
                        <h1>Formulaire d'ajout de contenu au Blog</h1>
                        <!--debut formulaire--> 
                        <br/>
                        <form name="formulaire" action="traitement-formulaire.php" method="POST" enctype="multipart/form-data">

                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Titre : </span>
                                </div>
                                <input name="titre" type="text" class="form-control" 
                                 aria-label="Sizing example input" 
                                 aria-describedby="inputGroup-sizing-default">
                            </div>
                            <br/><br/>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Commentaires</span>
                                </div>
                                <textarea name="commentaires" class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <br/><br/>
                            <p class="text-justify">
                                Choississez une photo avec une taille de 2 Mo<br/>
                            </p>
                            
                            <div class="input-group mb-3">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Chargement</span>
                                </div>
                                <div class="custom-file">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2097152"/>
                                    <input name="photos" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choississez un fichier</label>
                                </div>
                            </div>
                            <p class="text-justify">
                                <input type="submit" name="envoyer" value="Envoyer"/>
                            </p>
                            
                        </form>
                        <!--fin formulaire-->
                        <br/>
                        <p class="text-justify">
                            <a href="affichage_blog.php" class="badge badge-light">Affichez la page d'affichage du blog</a>
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

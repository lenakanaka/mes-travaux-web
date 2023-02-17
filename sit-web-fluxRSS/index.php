<!DOCTYPE html>
<!--auteur : Limard Goethe
date : 17/02/2023
objectif : flux rss--> 
<!--debut html-->
<html>
    <!--debut head-->
    <head>
        <title>Flux RSS</title>
        <meta http-equiv = "Content-Type" content="text/html;charset=utf-8"/>
        <!--lien css boostrap--> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <!--lien rss-->
        <link rel="alternate" type="application/rss+xml"
        href="http://www.lemonde.fr/rss/une.xml"/>
        <!--lien css-->
        <link rel="stylesheet" href="style.css"/>

    </head>
    <!--fin head-->
    <!--debut body--> 
    <body>
        <div id="wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-mg-10 col-lg-10">
                        <!--debut php--> 
                        <?php
                            $rss = simplexml_load_file('http://www.lemonde.fr/rss/une.xml');
                            foreach($rss->channel->item as $item)
                            {
                                echo '<div>
                                    <h2>'.$item->title.'</h2>
                                    <h4>post&eacute; le '.date("d/m/Y",strtotime($item->pudDate)).'</h4>
                                    '.$item->description.'<a href="'.$item->link.'">Lire tout l\'article</a>
                                    </div><br/>';
                            }
                        ?>
                        <!--fin php-->
                    </div>
                </div>

            </div>
        </div>
        <!--Lien script boostrap-->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>





</html>

<!--fin html-->

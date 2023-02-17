<!--page traitement formulaire--> 
<!DOCTYPE html>
<!--debut html--> 
<html>
    <!--debut head--> 
    <!--debut script php--> 
    <?php include("head2.php"); ?>
    <!--fin script-->
    <!--fin head--> 
    <!--debut body--> 
    <body>
        <!--debut wrapper--> 
        <div class="wapper">
            <!--debut header--> 
            <!--debut script php--> 
            <?php
                include("en_tete2.php");
            ?>
            <!--fin script php--> 
            <!--fin header--> 

            <!--debut main-->
            <main>
                <!--debut script php-->
                <?php
                    //page de fomulaire
                    //Connection à la base de données
                    $base = new PDO('mysql:host=127.0.0.1;dbname=booking', 'root', '');
                    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    //Test de validiter de reservation
                    if( $_POST['valider'] !="no" && $_POST["debut"] !="" && $_POST["fin"] !="")
                    {
                        //Requete sql d'instertion table client
                        $sql_client = "INSERT INTO client (Nom, Email) VALUES
                        (:nom, :email)";
                        //traitement
                        //Preparation de la requete avec les marqueurs
                        $resultat_client = $base->prepare($sql_client);
                        //Liaison des parametres
                        $resultat_client->bindParam(':nom', $nom);
                        $resultat_client->bindParam(':email', $email);
                        $nom = htmlentities(addslashes($_POST['nom']), ENT_QUOTES);
                        $email = htmlentities( addslashes ($_POST['email']), ENT_QUOTES);
                        $resultat_client->execute();

                        //Requete sql d'insertion table chambre
                        $sql_chambre = "INSERT INTO chambres (NumeroChambre)
                        VALUES (:numero )";
                        //Traitement
                        //Preparation de la requete avec les marqueurs
                        $resultat_chambre = $base->prepare($sql_chambre);
                        //Liaison des parametres
                        $resultat_chambre->bindParam(':numero',$numero);
                        //conversion string  en int
                        $str = htmlentities( addslashes($_POST['chambres']), ENT_QUOTES); 
                        $nombre = (int)$str;   
                        $numero = $nombre;
                        $resultat_chambre->execute();

                        //Requete sql d'insertion table hotel
                        $sql_hotel = "INSERT INTO hotel (Adresse, IdChambre, IdClient)
                        VALUES (:adresse, :id_chambre, :id_client)";
                        //Liaison des parametres
                        $resultat_hotel = $base->prepare($sql_hotel);
                        $resultat_hotel-> bindParam(':adresse', $adresse);
                        $resultat_hotel-> bindParam(':id_chambre', $id_chambre);
                        $resultat_hotel-> bindParam(':id_client', $id_client);
                            
                        $adresse = htmlentities( addslashes($_POST['adresse']), ENT_QUOTES);
                        $i = 0;
                        $i = $i+1;
                        $id_chambre = $i;
                        $j = 0;
                        $j = $j +1;
                        $id_client = $j;
                        $resultat_hotel-> execute();

                        //Requte sql d'insertion table reservation
                        $sql_reservation = "INSERT INTO reservation (DateReservationChambre, 
                        FinDateReservationChambre, DateCreationReservation)
                        VALUES (:date_reservation_chambre, :fin_date_reservation_chambre,:date_creation_reservation)";
                        //Liaisons des parametres
                        $resultat_reservation = $base->prepare($sql_reservation);
                        $resultat_reservation->bindParam(':date_reservation_chambre',$date_reservation_chambre);
                        $resultat_reservation->bindParam(':fin_date_reservation_chambre',$fin_date_reservation_chambre);
                        $resultat_reservation->bindParam(':date_creation_reservation',$date_creation_reservation);

                        $date_reservation_chambre = htmlentities( addslashes($_POST['debut']), ENT_QUOTES);
                        $fin_date_reservation_chambre = htmlentities( addslashes($_POST['fin']), ENT_QUOTES);
                        $date_creation_reservation = htmlentities( addslashes($_POST['reservation']), ENT_QUOTES);

                        $resultat_reservation-> execute();

                        echo "<p class='information'>";
                        echo "Votre réservation est validé";
                        echo "</p>";
                    }
                    else
                    {
                        echo "<p class='information'>";
                        echo "Nous n'avons pas pu effectuer votre réservation<br/>";
                        echo "erreur sur la date ou la validation ";
                        echo "</p>";
                    }
                ?>
                
            </main>
            <!--fin main--> 
            <!--debut footer--> 
            <!--debut script php--> 
            <?php 
                include("pied_page.php");
            ?>
            <!--fin script php-->
            <!--fin footer--> 
        </div>
    </body>
    <!--fin body--> 
</html>
<!--fin html--> 
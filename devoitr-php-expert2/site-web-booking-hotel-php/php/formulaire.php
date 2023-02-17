<!--page formulaire--> 
<!DOCTYPE html>
<!--page hotels-->
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
                <h2 class="form-p">Coordonnées</h2>

                <!--debut coordonneées client--> 
                <form name="hotel" action="traitement_formulaire.php"
                method="POST">
                    <p class="form-p">
                        <label for="nom">Nom : </label>
                        <input type="text" size="30" id="nom" name="nom"/><br/><br/>
                        <label for="email">E-mail : </label>
                        <input type="text" size="30" id="email" name="email"/><br/>
                    </p>
                
                    <!--fin-->
                    <!--debut coordonnees hotel-->
                    <!--debut script php--> 
                    <?php
                        //declaration de variables
                        $tab_hotel = array("Hotel PHP", "Hotel JavaScript",
                        "Hotel html css", "Hotel CPlusPlus", "Hotel C Sharp",
                        "Hotel Java","Hotel Python" );
                        $hotel_selectionne="";
                    ?>
                    <!--fin script php--> 
                    <!--balise html-->
                    <p class="form-p">
                        <label for="hotel">Hotels : </label>   
                        <select name="hotel" id="hotel">;

                        <!--debut script php--> 
                        <?php 
                            //traitement
                                if(isset($_POST['hotel']))
                                {
                                    $hotel_selectionne = $_POST['hotel'];
                                }
                                else
                                {
                                    $hotel_selectionne ="Hotel PHP";
                                }

                                //boucle d'affichage
                                foreach($tab_hotel as $valeur )
                                {
                                    if($valeur == $hotel_selectionne)
                                    {
                                        echo "<option value='".$valeur."' selected='selected'>".$valeur."</option>";
                                     }
                                    else
                                    {
                                        echo "<option value='".$valeur."'>".$valeur."</option>";
                                    }
                                }
                            ?>
                            <!--fin script php--> 
                        </select><br/><br/>
                        <label for="adresse">Adresse hotel :<label>
                        <input type="text" id="adresse" name="adresse" size="30"/><br/><br/>

                        <label for="chambres">Chambres : </label>
                        <input type="text" id="chambres" name="chambres" size="5"/>
                    </p>
                
                    <!--fin--> 

                    <!--debut booking--> 
                    <h2 class="form-p">Booking </h2>
                    <p class="form-p">
                        <label for="debut">Date début : </label>
                        <input type="date" id="debut" name="debut" size="20"/><br/><br/>
                        <label for="fin">Date fin : </label>
                        <input type="date"  id="fin" name="fin" size="20"/><br/>
                    </p>
                    <p class="form-p">
                        <label for="reservation">Date reservation : </label>
                        <input type="date" id="reservation" name="reservation" size="20"/>
                        <br/><br/>
                        <span class="">Reserver</span> :<br/>
                        <label for="valider">Valider : 
                        <input type="radio" id="valider" name="valider" value="yes"><br/>
                        <label for="non_valider">Non Valider :
                        <input type="radio" id="non_valider" name="valider" value="no"/>
                    </p>
                    <p class="form-p">
                        <input type="reset" class="efface" value="Effacer"/>
                        <input type="submit" class="envoie" value="Envoyer"/>
                    </p>
                </form>
                <!--fin-->
            </main>
            <!--debut footer--> 
            <!--debut script php--> 
            <?php 
                include("pied_page.php");
            ?>
            <!--fin script php-->
            <!--fin footer--> 
        </div>
    </body>
<html>

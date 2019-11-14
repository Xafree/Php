<?php 
        if(isset($_POST['envoie'])){
            setcookie('pseudo', $_POST['user_name'], time() + 10);  
        }else{
            echo "formulaire non rempli";
        }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page d'exercice</title>
    </head>
    <body>
        <h1>Page de test </h1>
        <?php
            echo " ------------------------------ Exercice 2 ------------------------------- <br/>";
            $age = 19;
            echo "J'ai ".$age." ans <br/>";
            echo'J\'ai '.$age." ans<br/>";

            $chaine = $chaine2 = "Bonjour";
            if( $chaine == $chaine2){
                echo "Ils sont égaux<br/>";
            }else{
                echo "il sont pas égaux<br/>";
            }
            $chaine2 = "bonjour";
            if(strcmp($chaine,$chaine2) == 0){
                echo "La valeur est : ".strcmp($chaine,$chaine2);
            }else{
                echo "La valeur est : ".strcmp($chaine,$chaine2);
            }
        ?>

        <?php 
            echo "<br/>--------------------------- Exercice 3 ----------------------------------<br/>";
            echo " 1) <br/>";
            
            $jour=4;
            switch($jour){
                case 1 : 
                    echo "Nous sommes lundi";
                    break;
                case 2:
                    echo "Nous sommes mardi";
                    break;
                case 3:
                    echo "Nous sommes mercredi";
                    break;
                case 4:
                    echo "Nous sommes jeudi";
                    break;
                default:
                    echo "Nous sommes ni lundi, ni mardi, ni mercredi, ni jeudi";
            }  
            
            echo "<br/> 2) <br/>";
            $var1 = 0;
            $var2 = 1;
            echo "   La somme : ";
            while( $var1+$var2 !== 6765){
                $var1 +=$var2;
                $var2+=$var1;
                echo $var1+$var2." ";                
            }

            echo " <br/> 3) <br/>";
            echo "   La somme : ";
            $var1 = 0;
            $var2 = 1;
            do{
                $var1 += $var2;
                $var2 += $var1;
                echo $var1+$var2." ";  
            }while($var1+$var2 !== 6765)
        ?>

        <?php 
            echo "<br/>--------------------------- Exercice 4 ----------------------------------<br/>";
            echo "1)<br/>";
            echo " Nous sommes le ".date("j/n/Y")."; il est ".date("h:i:s");
            echo "<br/>2)<br/>";

            function bis($varAnne){
                if($varAnne%4 == 0 ){
                    if( $varAnne%100 == 0 && $varAnne%400 != 0){
                        echo "Cette année est pas bissextile";
                    }else{
                        echo "bravo cette année est bissextile";
                    }  
                }else{
                    echo "Cette année est pas bissextile";
                }
            }

            echo bis(2020);
            
        ?>

        <?php 
            echo "<br/>--------------------------- Exercice 5 ----------------------------------<br/>";
            
            echo "1) <br/>";
            
            $age = array(
                "jean" => "20",
                "Pierre" => "25",
                "Jacques" => "30"
            ); 
            print_r($age["Pierre"]);

            echo "<br/> 2)<br/>";
            $identite=array(
                "personne 1" => array("nom" => "dutronc", "prenom"=>"michel", "age"=>"30"),
                "personne 2" => array("nom" => "duroc", "prenom"=>"émilie", "age"=>"23"),
                "personne 3" => array("nom" => "dupersil", "prenom"=>"évelyne", "age"=>"36")
            );

            foreach( $identite as $id){
                print_r($id["nom"]);
                echo " ";
            }
        ?>

        <?php 
            echo "<br/>--------------------------- Exercice 6 ----------------------------------<br/>";
            echo "1) <br/>"
        ?>  
        <form action="test.php" method="get">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name" >
            </div>
            <div>
                <label for="Age">Age :</label>
                <input type="text" id="Age" name="user_age">
            </div>
            <input type="submit" id="envoyer" name="input_name">
            <input type="reset"  id="effacer" name="input_name">
        </form>
            
        <?php 
            $nom = $_GET['user_name'];
            $age = $_GET['user_age'];
            echo "Bonjour ".$nom.", vous avez ".$age." ans.";

        ?>

        <?php 
            echo "<br/>--------------------------- Exercice 7 ----------------------------------<br/>";
        ?>
        <form action="test.php" method="post">
            <div>
                <label for="nombre1">Nombre 1 :</label>
                <input type="number" id="résultat" name="user_nb1" value = <?php echo $_POST['user_nb1'] ?>>
            </div>
            <div>
                <label for="nombre2">Nombre 2 :</label>
                <input type="number" id="résultat" name="user_nb2" value = <?php echo $_POST['user_nb2'] ?>>
            </div>
            <?php 
                if(isset($_POST['user_additionenr'])){
                    $_POST['user_resultat'] = $_POST['user_nb1'] + $_POST['user_nb2'];
                }
                if(isset($_POST['user_sustraire'])){
                    $_POST['user_resultat'] = $_POST['user_nb1'] - $_POST['user_nb2'];
                }
                if(isset($_POST['user_multipliser'])){
                    $_POST['user_resultat'] = $_POST['user_nb1'] * $_POST['user_nb2'];
                }
                if(isset($_POST['user_divier'])){
                    $_POST['user_resultat'] = $_POST['user_nb1'] / $_POST['user_nb2'];
                }
            ?>
            <div>
                <label for="resultat">Résultat :</label>
                <input type="number" id="resultat" name="user_resultat" value= "<?php echo $_POST['user_resultat'];?>" >
            </div>
            <input type="submit" id="Additionner" name="user_additionenr" value="Additionner">
            <input type="submit" id="Soustraire" name="user_sustraire" value="Soustraire">
            <input type="submit" id="Multiplier" name="user_multipliser" value="Multiplier">
            <input type="submit" id="diviser" name="user_divier" value="diviser">

        </form>

        <?php 
            echo "<br/>--------------------------- Exercice 8 ----------------------------------<br/>";
        ?>
        <!-- <form action="test.php" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name" >
            </div>
            <div>
            <input type="submit" id="envoyer" name="envoie">
        </form> -->
        <?php 
            if(!isset($_COOKIE['pseudo'])){
                ?>
                <form action="test.php" method="post">
                    <div>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="user_name" >
                    </div>
                    <div>
                    <input type="submit" id="envoyer" name="envoie">
                </form>
                <?php
            }else{
                echo "<br/> bienvenue monsieur ". $_COOKIE['pseudo'];
            }
        ?>
        <?php 
            echo "<br/>--------------------------- Exercice 9 ----------------------------------<br/>";
        ?>
        <form action="test.php" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name" >
            </div>
            <div>
                <label for="name">Mot de passe :</label>
                <input type="text" id="name" name="user_name" >
            </div>
            <input type="submit" id="envoyer" name="input_name">
        </form>
        <?php 
            $_COOKIE['user_name'];
            //a faire plustard je comprend r au cookie
        ?>

        <?php
         echo "<br/>--------------------------- Exercice 10 ----------------------------------<br/>";
        ?>
    </body>
</html>
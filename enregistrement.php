<html>
    <head>
        <title> Enregistrement</title>
    </head>
    <body>
        <?php
            //recuperation des valeurs du formulaire
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $nom = $_POST['nom'];
            $age = $_POST['age'];
            $prenom = $_POST['prenom'];
            $portable = $_POST['portable'];
            $adresse = $_POST['adresse'];
            $sexe = $_POST['sexe'];
            //connection a la base de donnee en PDO
            $servername='localhost';
            $username='root';
            $database='projet';  
            $password='';                
            $conn = new PDO("mysql:host=$servername;dbname=$database", "$username","$password");
            $req= $conn -> prepare("INSERT INTO new_compte values('$mail','$mdp','$nom','$prenom','$age','$portable','$adresse','$sexe')"); //rentrer les valeurs dans la base de donnée
            $req -> execute();
            if ($req){
                echo "<script>window.open('page_connection.html','_self');</script>"; //ouvrir la page html sur la meme fenetre
            }
        ?>
    </body>
<html>
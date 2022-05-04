<html>
    <head>
        <title> G&eacuterer votre compte</title>
    </head>
    <body>
        <?php
            // recuperation des variables du formulaire
            $l=$_POST['login'];
            $m=$_POST['mdp'];
                    
            // verifier si qqch est saisie
            if (empty($l) | empty($m)) 
            {
                echo 'Entrer quelque chose';
            }
            else {
                // connection base de donnee
                $servername='localhost';
                $username='root';
                $database='projet';  
                $password='';
                $conn = new PDO("mysql:host=$servername;dbname=$database", "$username","$password");
                $req = $conn->prepare("SELECT * FROM new_compte WHERE (Email = '$l' AND mot_de_passe = '$m')");
                $req->execute(array('Email' => $l, 'mot_de_passe' => $m ));
                $res = $req->fetch();
            
                if($res)
                {
                    if($l === $res['Email'] && $m === $res['mot_de_passe'])
                    {
                        echo "<script>window.open('acceuil.html','_self');</script>";
                    }
                    else
                    {
                        echo "<script>window.open('index.html','_self');</script>";
                        
                    }
                }
            }          

        ?>
    </body>
<html>

<?php
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $gender=$_GET['gender'];
    $date=$_GET['date'];
    $mail=$_GET['mail'];
    $message=$_GET['message'];
    $to=$_GET['to'];
    $subject=$_GET['subject'];
    $additional_params=$_GET['additional_params'];
    
    if($gender=='female'){
        echo "Bonjour Madame ";
    }elseif($gender=='male'){
        echo "Bonjour Monsieur ";
    }else{
        echo "Bonjour ";
    }

    echo "$prenom $nom.<br>Merci pour votre inscription.";

mail('melany.lascoux@gmail.com', 'test email', "Ceci est mon corps");

?>
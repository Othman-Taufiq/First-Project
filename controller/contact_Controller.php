<?php

if(!empty($_POST["action"]))
    if($_POST["action"]==="contact"){
        if(!empty($_POST["nom"])){
            if(!empty($_POST["email"])){
                if(!empty($_POST["message"])){
                    $Nom = filter_var(htmlentities(ucfirst(strtolower($_POST["nom"]))));
                    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
                    $contactMessage = filter_var(htmlentities($_POST["contact-Message"]));

                    $to ="idditaufiq@gmail.com";
                    $subject = "Soumission d'un nouveau formulaire de contact";
                    $content="<p>Nom: $nom\nEmail: $email\nMessage: $contactMessage</p>";
                    $headers = array(
                        'From'=> $email,
                        'MIME-Version' => '1.0',
                        'Content-type' => 'text/html; charset=iso-8859-1',
                        'X-Mailer' => 'PHP/' . phpversion()
                    );
                    mail($to, $subject, $content, $headers);
                    return array("success");


                    $to =$email;
                    $subject = "Merci pour votre email";
                    $content="<p>Cher(e): $nom\nEmail: nous vous contacterons dans
                    les plus brefs délais.</p>";
                    $headers = array(
                        'From'=> 'idditaufiq@gmail.com',
                        'MIME-Version' => '1.0',
                        'Content-type' => 'text/html; charset=iso-8859-1',
                        'X-Mailer' => 'PHP/' . phpversion()
                    );
                    mail($to,$subject, $content, $headers);
                    return array("success");
                }
            }
        }
    }
?>
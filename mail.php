<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require('vendor/phpmailer/phpmailer/src/SMTP.php');
require('vendor/phpmailer/phpmailer/src/Exception.php');
require('vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('classe/Information.php');
    require('classe/Cursus.php');
    require('classe/Experience.php');
    require('classe/InteretLangue.php');
    require('classe/Domaine.php');
    require('classe/Profil.php');

    //Cursus.php
$Cursus = new Cursus(" Cursus académique","prepa 2 -","prepa 1 -","baccalaureat -","probatoire -");

 //Profil.php
 $Profil = new Profil("Née le 31 janvier 2001","Originaire de l'Ouest cameroun","Célibataire,0 enfant - Santé RAS","Résidence à Logpom","Douala - Cameroun","Map :1.053276? 45885555","(237) 699 899 263","Mobile, Telegram, Whatsapp","ervanjre@gmail.com","Google+, Twitter, Linkedlin, Github");

 //Experience
 $Experience = new Experience("Expérience proféssionnelle","Chef des projets technologiques -","@Ets.M DE M","De juillet 2019 à ce jour - http://mdem.cm","Fondateur & DT -","@Tartup ChickDev","De juin 2015 à ce jour - http://chikdev.com","Enseignant -","@Institut Universitaire de la cote","De octobre 2011 à ce jour - http://istdi.com","Dévéloppeur en chef -","@Kayroual group","De Mai 2013 à juin 2015 - http://Khayroual.com","Responsable commercial -","@BAO Sarl","De Décembre 2012 à juin 2013 - http://bao-Sarl.com","stage realisé -","@Creative Sarl","De juin 2021 à aôut 2021 - http://creativesarl.com");

 //Domaine
 $Domaine = new Domaine("HTML5, SASS, VueJS, Angular, JavaFX, ...","NodeJS, Drupal 8, Laravel, Kotlin, JavaEE 7, ...","Android Kotlin, IOS Swift, Cordova, Flutter, ...","Photoshop CC, Adobe XD, Matérial Design, ...","Oracle 11g, PostgreSQL, Hadoop, Talent DI, ...","Visual Paradigm, Git, Docker, K8s, Linux, ...");

 //Information
 $Information = new Information("TCHANDA  Ervan","Developpeur Web /Dev mobile");

 //langue et interet
 $InteretLangue = new InteretLangue("Point d interets","Langues");
//Create an instance; passing `true` enables exceptions
$phpmailer = new PHPMailer(true);

try {
    // Configure SMTP
    //$phpmailer->SMTPDebug = 2;
    $phpmailer->isSMTP();
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'tls';
    // ENV Credentials
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->Username = 'ervanjrre@gmail.com';
    $phpmailer->Password = 'messi2001ervan';
    $phpmailer->Port = 587;
    
    // Mail Headers
    $phpmailer->setFrom("ervanjrre@gmail.com", "TCHANDA ERVAN");
    // Change to recipient email. Make sure to use a real email address in your tests to avoid hard bounces and protect your reputation as a sender.
    $phpmailer->addAddress("ervanjre@gmail.com", "ervan");
  
    // Message
    $phpmailer->isHTML(true);
    $phpmailer->Subject = "CV DE TCHANDA SHANDA CS2I3 DWM";
    $phpmailer->Body    = 'bonjour moi  tchanda';
    $phpmailer->AltBody = "Hi!\nTest from Mailer To Go 😊\n";
  
    // Send the Email
    $phpmailer->send();
    echo "Message Envoye";
  } catch (Exception $e) {
    echo "Message Non envoye. Mailer Error: {$phpmailer->ErrorInfo}";
  }
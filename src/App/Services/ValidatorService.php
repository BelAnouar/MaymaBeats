<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class ValidatorService
{



    public function __construct(private Database $db)
    {
    }

    public  function clientRegister(array $formData)
    {

        $nom = $formData["nom"];
        $prenom = $formData["prenom"];
        $email = $formData["email"];
        $mot_de_passe = $formData["mot_de_passe"];


        $this->db->query("INSERT INTO  client ( `nom`, `prenom`, `email`, `password`, `image`) VALUES (':nom', ':prenom', ':email', ':password', ':image')", [
            ':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':password' => $mot_de_passe, ':image' => "/MaymaBeats/public/assets/images/user.png"
        ]);
    }
    public  function artistRegister(array $formData)
    {

        $nom = $formData["nom"];
        $prenom = $formData["prenom"];
        $email = $formData["email"];
        $mot_de_passe = $formData["mot_de_passe"];


        $this->db->query("INSERT INTO `artists`(  `nom`, `prenom`, `email`, `image`, `password`) VALUES (':nom', ':prenom', ':email', ':image', ':password')", [
            ':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':password' => $mot_de_passe, ':image' => "/MaymaBeats/public/assets/images/user.png"
        ]);
    }
}

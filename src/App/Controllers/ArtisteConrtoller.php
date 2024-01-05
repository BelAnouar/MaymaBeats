<?php


declare(strict_types=1);


namespace App\Controllers;

use App\Services\artisteModal;
use App\Services\artisteMusic;
use Framework\TemplateEngine;

class ArtisteConrtoller{

    public function __construct(private TemplateEngine $view , private artisteModal $artist , private artisteMusic $profileArtiste ){

    }

    public function index(){
        $rest = $this->artist->afficherAlbum();
        echo $this->view->render("/artisteAlbum.php", ["albums" => $rest]);
<<<<<<< HEAD
=======

>>>>>>> salah
    }

    public function indexProfile(array $pro ){
        $idArtiste = $pro["idArtiste"];
        $artiste = $this->profileArtiste->getArtiste($idArtiste);
<<<<<<< HEAD
        echo $this->view->render('/profile.php',["atistes" => $artiste]);
=======
        echo $this->view->render('/profile.php',["artists" => $artiste]);
>>>>>>> salah

    }


    public function addAlbum(){
    $orig_file = $_FILES["image"]["tmp_name"];
    $ext = $_FILES["image"]["name"];

    $target_dir = __DIR__."/../../../public/assets/images/";
    $destination = "$target_dir$ext";
    $destinationImg="/maymabeats/public/assets/images/".$ext;
    move_uploaded_file($orig_file, $destination); 
    
    $title=$_POST["title"];
    $dateC=$_POST["date"];
    $description=$_POST["description"];
    
        $this->artist->addAlbum($destinationImg,$dateC,1,$title,$description);


        header("Location: artiste");
    }


}
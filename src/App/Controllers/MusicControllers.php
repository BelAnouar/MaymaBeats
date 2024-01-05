<?php


declare(strict_types=1);


namespace App\Controllers;

use App\Services\artisteModal;
use App\Services\artisteMusic;
use App\Services\StylesService;
use Framework\TemplateEngine;

class MusicControllers
{

    public function __construct(private TemplateEngine $view, private artisteMusic $Musicartist, private artisteModal $artist, private StylesService $style)
    {
    }
    public function afficherMusic(array $for)
    {
        $idAlbum = $for["idm"];

        $album = $this->artist->getAlbumById($idAlbum);
        $song = $this->Musicartist->afficherMusic($idAlbum);
        $style = $this->style->getStyles();
        echo $this->view->render("/artisteMusic.php", ["album" => $album, "song" => $song, "styles" => $style]);
    }
    public function addMusic(array $param)
    {

        $idAlbum = $param['idm'];


        $orig_file = $_FILES["image"]["tmp_name"];
        $ext = $_FILES["image"]["name"];

        $target_dir = __DIR__ . "./../../../public/assets/images/";
        $destination = "$target_dir$ext";
        $destinationImg = "/maymabeats/public/assets/images/" . $ext;
        move_uploaded_file($orig_file, $destination);

        $title = $_POST['title'];

        $date = $_POST['date'];
        $style = $_POST['style'];


        $this->Musicartist->addMusic($destinationImg, $title, $idAlbum, $style);

        header("Location:{$idAlbum}");
    }
}

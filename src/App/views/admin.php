<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="/MaymaBeats/public/assets/admin.css"> -->
    <link rel="stylesheet" href="/MaymaBeats/public/assets/admin.css?v=<?php echo time(); ?>">

    <title>Document</title>
</head>

<body>

    <section class="Dashboard">

        <div class="container-fluid h-100">
            <div class="row h-100">
                <div id="sidebar" class="col-2">
                    <h1>LOGO</h1>
                    <!-- <ul class="sidelist list-unstyled mb-3 d-flex flex-column justify-content-between col-12">
                        <img src="/MaymaBeats/public/assets/circle-user-regular.svg" alt="" class="my-5">
                        <p class="my-3">ADMIN NAME</p>
                        <li class="my-3 home col-12"><a href="#">HOME</a></li>
                        <li class="my-3"><a href="#">CLIENT</a></li>
                        <li class="my-3"><a href="#">ARTISTS</a></li>
                        <li class="my-3"><img src="/MaymaBeats/public/assets/facebook-messenger.svg" alt=""><a href="#">NOTIFICATIONS</a></li>
                        <li class="my-3"><a href="#">LOGOUT</a></li>
                    </ul> -->
                    <div class="list-group col-12 ">
                        <img src="/MaymaBeats/public/assets/circle-user-regular.svg " alt="" class="my-4 col-8" height="20%">
                        <a href="#" class="list-group-item list-group-item-action home">
                            <img src="/MaymaBeats/public/assets/icons8-home-100.png" alt="" class="col-2"> HOME
                        </a>

                        <a href="admin-c" class="list-group-item list-group-item-action bg-transparent" aria-current="true">
                            <img src="/MaymaBeats/public/assets/icons8-clients-64.png" alt="" class="col-3">CLIENT</a>
                        <a href="admin-a" class="list-group-item list-group-item-action bg-transparent">
                            <img src="/MaymaBeats/public/assets/icons8-garageband-64.png" alt="" class="col-3">ARTISTS</a>
                        <a href="admin-s" class="list-group-item list-group-item-action bg-transparent">
                            <img src="/MaymaBeats/public/assets/icons8-garageband-64.png" alt="" class="col-3">Styles
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent col-12 d-flex"> <img src="/MaymaBeats/public/assets/icons8-notifications-78.png" alt="" class="col-3">NOTIFICATIONS</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent"><img src="/MaymaBeats/public/assets/icons8-logout-50.png" alt="" class="col-2">LOGOUT</a>
                    </div>
                </div>
                <div id="content" class="d-flex flex-wrap col-9 my-3 mx-5">
                    <div id="box1">
                        CLIENTS
                        520
                    </div>
                    <div id="box2">
                        ARTISTS
                        135
                    </div>
                    <div id="extraContainer">
                        STATISTICS
                        <div class="additional-content">
                            <table class="table table-hover bg-black text-white">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col" class="col-2">song</th>
                                        <th scope="col">likes</th>
                                        <th scope="col">artist</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><img src="/MaymaBeats/public/assets/fire-flame-curved-solid.svg" alt="">Most liked song</td>
                                        <td><img src="/MaymaBeats/public/assets/icons8-song-32.png" alt="" class="col-2">Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><img src="/MaymaBeats/public/assets/fire-flame-curved-solid.svg" alt="">Most liked album</td>
                                        <td><img src="/MaymaBeats/public/assets/icons8-song-32.png" alt="" class="col-2">Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><img src="/MaymaBeats/public/assets/fire-flame-curved-solid.svg" alt="">Most liked lyrics</td>
                                        <td><img src="/MaymaBeats/public/assets/icons8-song-32.png" alt="" class="col-2">@twitter</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="box3">
                        <div class="d-flex flex-column">
                            MOST ACTIVE ARTIST

                            <div class="progress my-3" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <img src="/MaymaBeats/public/assets/icons8-disk.gif" alt="" class="col-1">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                            </div>
                            <div class="progress my-3" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <img src="/MaymaBeats/public/assets/icons8-disk.gif" alt="" class="col-1">
                                <div class="progress-bar bg-info" style="width: 50%"></div>
                            </div>
                            <div class="progress my-3" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <img src="/MaymaBeats/public/assets/icons8-disk.gif" alt="" class="col-1">
                                <div class="progress-bar bg-warning" style="width: 75%"></div>
                            </div>
                            <div class="progress my-3" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <img src="/MaymaBeats/public/assets/icons8-disk.gif" alt="" class="col-1">
                                <div class="progress-bar bg-danger" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>

                    <div id="box4">
                        <div class="d-flex flex-column">
                            RECLAMATIONS
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Lyrics</th>
                                        <th scope="col">song</th>
                                        <th scope="col">Numbers</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>lately</td>
                                        <td>220</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>76</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>61</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
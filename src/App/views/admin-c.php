<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="/MaymaBeats/public/assets/admin-c.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <section class="Dashboard">

        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        <div id="sidebar" class="col-2">
                            <h1>LOGO</h1>

                            <div class="list-group col-12 ">
                                <img src="/MaymaBeats/public/assets/circle-user-regular.svg " alt="" class="my-4 col-8" height="20%">
                                <a href="admin" class="list-group-item list-group-item-action bg-transparent">
                                    <img src="/MaymaBeats/public/assets/icons8-home-100.png" alt="" class="col-2"> HOME
                                </a>

                                <a href="admin-c" class="list-group-item list-group-item-action home" aria-current="true">
                                    <img src="/MaymaBeats/public/assets/icons8-clients-64.png" alt="" class="col-3">CLIENT</a>
                                <a href="admin-a" class="list-group-item list-group-item-action bg-transparent">
                                    <img src="/MaymaBeats/public/assets/icons8-garageband-64.png" alt="" class="col-3">ARTISTS</a>
                                <a href="#" class="list-group-item list-group-item-action bg-transparent col-12 d-flex"> <img src="/MaymaBeats/public/assets/icons8-notifications-78.png" alt="" class="col-3">NOTIFICATIONS</a>
                                <a href="#" class="list-group-item list-group-item-action bg-transparent"><img src="/MaymaBeats/public/assets/icons8-logout-50.png" alt="" class="col-2">LOGOUT</a>
                            </div>
                        </div>
                        <div id="content" class="d-flex flex-wrap col-9 my-1 mx-5 col-9">
                            <div class="box">
                                <div id="box1" class="col-12 d-flex ">
                                    <div id="box2" class="col-5">
                                        LYRICS COUNT <br>
                                        <h3 class="mx-5">1283</h3>
                                    </div>
                                    <div id="box2" class="col-5 mx-5">
                                        PLAYLIST COUNT <br>
                                        <h3 class="mx-5">567</h3>
                                    </div>
                                </div>

                                <h3>PERSONAL PLAYLITS</h3>
                                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2 tablet" tabindex="0">
                                    <table class="table">
                                        <thead>
                                            <tr id="scrollspyHeading1">
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col-3">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" id="scrollspyHeading1">1</th>
                                                <td><img src="/MaymaBeats/public/assets/wp9403174.jpg" alt="" class="col-1">Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" id="scrollspyHeading1">2</th>
                                                <td><img src="/MaymaBeats/public/assets/ShinMonu.jpg" alt="" class="col-1">Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>

                                            <tr>
                                                <th scope="row" id="scrollspyHeading1">3</th>
                                                <td colspan="2"><img src="/MaymaBeats/public/assets/wp9403174.jpg" alt="" class="col-1">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="box2" class="col-12 my-3">
                                <h3>LYRICS </h3>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
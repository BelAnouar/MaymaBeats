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
                <div id="content" class="d-flex flex-column flex-wrap col-9 mt-4 mx-5">
                    <div class="text-end mb-3">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <ion-icon name="create-outline"></ion-icon> Add
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Style</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post">
                                    <div class="modal-body">
                                        <label for="exampleDataList" class="form-label">entrer style music</label>
                                        <input class="form-control" name="styleName" list="datalistOptions" id="exampleDataList" placeholder="style Music">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <table class="table w-50">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Styles Music</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($styles as $style) {

                            ?>
                                <tr>
                                    <th scope="row"><?= $style["idStyle"] ?></th>
                                    <td><?= $style["nomStyle"] ?></td>

                                </tr>
                            <?php    } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
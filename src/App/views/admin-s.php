<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/MaymaBeats/public/assets/admin.css?v=<?php echo time(); ?>">
    <title>Artiste</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo " style="margin-top: -9%;">
                    <img src="vecteezy-music-writer-with-feather-and-g-clef-logo-1-658cba5074038115508023-removebg-preview.png" alt="" style="width: 65%; margin-left: -20%; ">
                    <a href="#" style="margin-left: -15%;">MaymaBeats</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="admin" class="sidebar-link">
                            <i class="fa-solid fa-home p-2 "></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="admin-c" class="sidebar-link">
                            <i class="fa-solid fa-compact-disc p-2 "></i>
                            Clients
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="admin-a" class="sidebar-link">
                            <i class="fa-regular fa-user p-2 "></i>
                            Artists
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="adminNot" class="sidebar-link">
                            <i class="fa-regular fa-user p-2 "></i>
                            Notifications
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket p-2 "></i>
                            Logout
                        </a>
                    </li>

                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex">
                    <input type="search" id="form1" class="form-control " placeholder="Search">
                    <button type="button" class="btn btn-dark" style=" background-color: #320f48; " data-mdb-ripple-init>
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </nav>

            <section class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <section class="ml-60 pt-16 max-h-screen overflow-auto">

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
                        </section>
                    </div>
                </div>

            </section>
        </div>
        < </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Artiste</title>
    <link rel="stylesheet" href="/maymabeats/public/assets/css/style.css">
    <style>
        .item {
            width: 230px !important;
            height: 300px !important;

        }

        .item img {
            width: 200px !important;
            height: 200px !important;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100 ">
                <div class="sidebar-logo " style="margin-top: -9%;">
                    <img src="/maymabeats/public/assets/vecteezy-music-writer-with-feather-and-g-clef-logo-1-658cba5074038115508023-removebg-preview.png" alt="" style="width: 65%; margin-left: -20%; ">
                    <a href="#" style="margin-left: -15%;">MaymaBeats</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-home p-2 "></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-compact-disc p-2 "></i>
                            Albume
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-regular fa-user p-2 "></i>
                            profile
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

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <main class="ml-60 pt-16 max-h-screen overflow-auto">
                            <div id="plan"></div>
                            <div class="px-6 py-8">
                                <div class="max-w-4xl mx-auto">
                                    <div class="backdrop-blur-3xl rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h1 class="mx-5 text-white mt-3 fw-bold">ALBUMS</h1>
                                            </div>
                                            <div class="container justify-content-end d-flex ">
                                                <button id="openModal" class="btn add mt-3" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Ajouter Album
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" fill="white" viewBox="0 -960 960 960" width="24">
                                                        <path d="M440-280h80v-160h160v-80H520v-160h-80v160H280v80h160v160Zm40 200q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                                    </svg>
                                                </button>

                                                <div class="modal" id="myModal">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Create New Album</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <form method="post" enctype="multipart/form-data">
                                                                    <div class="mb-3">
                                                                        <label for="title" class="form-label">Title</label>
                                                                        <input type="text" class="form-control" id="title" placeholder="Type album title" name="title">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="image" class="form-label">Image</label>
                                                                        <input type="file" class="form-control" id="image" name="image">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="description" class="form-label">Album Description</label>
                                                                        <textarea class="form-control" id="description" placeholder="Write album description here" name="description"></textarea>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="title" class="form-label">Date</label>
                                                                        <input type="date" class="form-control" id="title" placeholder="Type album title" name="date">
                                                                    </div>

                                                                    <button type="submit" name="insert" class="btn text-white " style="background-color: #320f48;">Ajouter Album</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eAq1o24KdHuwmHg9F5n3pX56K1Fmksz/5m6ZsETQPKFfFlvHkUm6q1ahFnh2LJZ6" crossorigin="anonymous"></script>
                                        </div>

                                        <hr class="my-10">
                                        <div class="d-flex gap-x-20 flex-wrap">
                                            <?php foreach ($albums as $album) : ?>
                                                <div class="spotify-playlists">
                                                    <div class="list">
                                                        <div class="item">
                                                            <img src="<?= $album['imageAb'] ?>" alt="image">
                                                            <a href="musicArtiste/<?= $album ["idAb"] ?>">
                                                                <div class="play">
                                                                    <span class="fa fa-play text-dark"></span>
                                                            </a>
                                                        </div>
                                                     
                                                        <h4><?= $album["title"] ?></h4>
                                                        <p><?= $album["description"] ?></p>
                                                    </div>
                                                </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>



                    </div>
                    <footer>

                    </footer>
                </div>
            </main>
        </div>
    </div>
    </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>

</body>

</html>
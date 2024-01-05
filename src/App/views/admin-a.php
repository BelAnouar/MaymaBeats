<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/MaymaBeats/public/assets/adminAr.css?v=<?php echo time(); ?>">
    <title>Artiste</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <img src="vecteezy-music-writer-with-feather-and-g-clef-logo-1-658cba5074038115508023-removebg-preview.png" alt="" style="width: 65%;">
                    <a href="#">MaymaBeats</a>
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
                <button class="btn" type="button" data-bs-theme="dark" style="background-color: #1a0025cf;">
                    <span class="navbar-toggler-icon "></span>
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
                                                <h1 class="mx-5 text-dark mt-3 fw-bold">CLIENTS</h1>
                                            </div>

                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eAq1o24KdHuwmHg9F5n3pX56K1Fmksz/5m6ZsETQPKFfFlvHkUm6q1ahFnh2LJZ6" crossorigin="anonymous"></script>
                                        </div>


                                        <hr class="my-10">
                                        <div class="container h-100">
                                            <div class="row align-middle">
                                                <div class="col-md-6 col-lg-4 column">
                                                    <div class="card gr-1">
                                                        <div class="txt">
                                                            <h1>ANOUAR</br>
                                                            </h1>
                                                            <p >J-POP</p>
                                                            
                                                        </div>
                                                        <div class="d-flex aff"> <a href="#"><p>220 SONGS</p></a>
                                                        <p>7 ALBUMS</p></div>
                                                       
                                                        <div class="ico-card">
                                                            <!-- <i class="fa fa-rebel"> </i> -->
                                                            <!-- <img src="../assets/ShinMonu.jpg" class="avatar avatar-sm rounded-circle me-2" alt="invision"> -->
                                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 column">
                                                    <div class="card gr-2">
                                                        <div class="txt">
                                                            <h1>SALAH</br>
                                                            </h1>
                                                            <p>HIP HOP</p>
                                                        </div>
                                                        <a href="#">more</a>
                                                        <div class="ico-card">
                                                            <!-- <i class="fa fa-codepen"></i> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-4 column">
                                                    <div class="card gr-3">
                                                        <div class="txt">
                                                            <h1>YASSINE</br></h1>
                                                            <p>L AMDA7</p>
                                                        </div>
                                                        <a href="#">more</a>
                                                        <div class="ico-card">
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
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
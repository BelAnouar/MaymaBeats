<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/assets/artiste.css">
    <title>Artiste</title>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo " style="margin-top: -9%;" >
                    <img src="vecteezy-music-writer-with-feather-and-g-clef-logo-1-658cba5074038115508023-removebg-preview.png" alt="" style="width: 65%; margin-left: -20%; "  >
                    <a href="#"  style="margin-left: -15%;"  >MaymaBeats</a>
                </div>
                <!-- Sidebar Navigation -->
               <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-home pe-2 w-25"></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-compact-disc w-25"></i>
                            Albume
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-music pe-2 w-25" ></i>
                            Music
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-regular fa-user pe-2 w-25"></i>
                            profile
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket w-25"></i>
                         Logout
                        </a>
                    </li>
                  
                 </ul>
            </div>
        </aside>
      
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Barre de recherche -->
                <form class="d-flex">
                    <input type="search" id="form1" class="form-control " placeholder="Search" >
                    <button type="button" class="btn btn-dark" data-mdb-ripple-init>
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
                                        <h1 class="mx-5 text-white mt-2 fw-bold">ALBUMS</h1>
                                        <hr class="my-10">
                                        <div class="grid grid gap-x-20">
                                            <div class="spotify-playlists">
                                                <div class="list">
                                                    <div class="item w-25">
                                                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                        <div class="play">
                                                            <span class="fa fa-play"></span>
                                                        </div>
                                                        <h4>Chill Hits</h4>
                                                        <p>Kick back to the best new and recent chill...</p>
                                                    </div>
                    
                                                    <div class="item w-25">
                                                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                        <div class="play">
                                                            <span class="fa fa-play"></span>
                                                        </div>
                                                        <h4>Viva Latino</h4>
                                                        <p>Today's top Latin hits elevando nuestra...</p>
                                                    </div>
                    
                                                    <div class="item w-25">
                                                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                        <div class="play">
                                                            <span class="fa fa-play"></span>
                                                        </div>
                                                        <h4>Mega Hit Mix</h4>
                                                        <p>A mega mix of 75 favorites from the last...</p>
                                                    </div>
                    
                                                    <div class="item w-25">
                                                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                        <div class="play">
                                                            <span class="fa fa-play"></span>
                                                        </div>
                                                        <h4>All out 80s</h4>
                                                        <p>The biggest songs of the 1090s.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});
    </script>

</body>

</html>
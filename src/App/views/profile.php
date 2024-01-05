<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/MaymaBeats/public/assets/styleprofile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezsr1p+D1uLta6U00NhxQP3PZlG9XHr3O6BMTLD7Nq1AisK7CW6R5S+nRD4FcSBl" crossorigin="anonymous">
    <link rel="stylesheet" href="/maymabeats/public/assets/css/style.css">
    <title>Artiste</title>
    <style>

    </style>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
            <div class="sidebar-logo flex items-center" style="margin-top: -9%;">
            <img src="/maymabeats/public/assets/vecteezy-music-writer-with-feather-and-g-clef-logo-1-658cba5074038115508023-removebg-preview.png" alt="" style="width: 65%; margin-left: -20%; ">
            <a href="#" class=" mt-4" style="margin-left: -20px;" >MaymaBeats</a>
        </div>


                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-home p-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-compact-disc p-2"></i>
                            Album
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="far fa-user p-2"></i>
                            Profile
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fas fa-right-from-bracket p-2"></i>
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
                    <button type="button" class="btn btn-dark" style="background-color: #320f48;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </nav>
            <?php
           
            foreach ($artists  as $artiste){
            ?>
            <div class="card h-75 bg-dark ">
                <div class="ds-top"></div>
                <div class="avatar-holder">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
                </div>
                <div class="name">
                    <h6 class="w-50">
                  <?= $artiste["nom"] . ' ' . $artiste["prenom"] ?>
                    
                         </h6>

                </div>
                <div class="button">
                    <a href="#" class="btn" onmousedown=""><?= $artiste["email"] ?></a>
                </div>
                <div class="ds-info  ">
                    <div class="ds pens">
                        <h6 title="Number of pens created by the user">Albums</h6>
                        <p><?=$artiste["album_count"]?></p>
                    </div>
                    <div class="ds posts">
                        <h6 title="Number of posts">Songs</h6>
                        <p><?=$artiste["songs_count"]?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php }?>
    <footer>
    </footer>

    </div>
    </main>
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







































































































<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MaymaBeats/public/assets/styleprofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezsr1p+D1uLta6U00NhxQP3PZlG9XHr3O6BMTLD7Nq1AisK7CW6R5S+nRD4FcSBl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Profile</title>
</head>

<body>
    <div class="card">
        <div class="ds-top"></div>
        <div class="avatar-holder">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
        </div>
        <div class="name">
            <a href="https://codepen.io/AlbertFeynman/" target="_blank">Oumaimabeats</a>
            <h6 title="Followers"><i class="fas fa-users"></i> <span class="followers"></span></h6>
        </div>
        <div class="button">
            <a href="#" class="btn" onmousedown="">oumaimabeats@gmail.com <i class="fas fa-user-plus"></i></a>
        </div>
        <div class="ds-info ">
            <div class="ds pens">
                <h6 title="Number of pens created by the user">Likes <i class="fas fa-edit"></i></h6>
                <p>29</p>
            </div>
            <div class="ds projects">
                <h6 title="Number of projects created by the user">Lyrics <i class="fas fa-project-diagram"></i></h6>
                <p>0</p>
            </div>
            <div class="ds posts">
                <h6 title="Number of posts">Playlists<i class="fas fa-comments"></i></h6>
                <p>0</p>
            </div>
        </div>



    </div>
    </div> -->











<!-- <div class="backdrop-blur-3xl bg-black rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
        <h1 class="text-3xl font-bold mb-10 text-white">Paroly Playlists</h1>
        <hr class="my-10">

        <div class="grid grid gap-x-20">
            <div class="spotify-playlists">
                <div class="list">
                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>Today's Top Hits</h4>
                        <p>Rema & Selena Gomez are on top of the...</p>
                    </div>

                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>RapCaviar</h4>
                        <p>New Music from Lil Baby, Juice WRLD an...</p>
                    </div>

                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>All out 2010s</h4>
                        <p>The biggest spmgs pf tje 2010s. Cover:...</p>
                    </div>

                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>Rock Classics</h4>
                        <p>Rock Legends & epic songs that continue t...</p>
                    </div>

                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>Chill Hits</h4>
                        <p>Kick back to the best new and recent chill...</p>
                    </div>

                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>Viva Latino</h4>
                        <p>Today's top Latin hits elevando nuestra...</p>
                    </div>

                    <div class="item">
                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                        <div class="play">
                            <span class="fa fa-play"></span>
                        </div>
                        <h4>Mega Hit Mix</h4>
                        <p>A mega mix of 75 favorites from the last...</p>
                    </div>

                    <div class="item">
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
    </div> -->
<!-- <script src="/public/assets/js/profile.js"></script>
</body>

</html> -->
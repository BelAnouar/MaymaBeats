<?php


var_dump($songs);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black relative overflow-hidden max-h-screen">
    <header class="bg-black fixed right-0 top-0 left-60 py-3 px-4 h-16 border-b-2 border-[#BC6FF1]" style="z-index: 999;">
        <div class="max-w-4xl mx-auto">
            <div class="navbar">
                <ul>
                    <li>
                        <a href="#">Premium</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                    <li>
                        <a href="#">Download</a>
                    </li>
                </ul>
                <div class='max-w-md ml-auto'>
                    <div class="relative flex items-center w-full h-10 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />

                                <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
                                <link rel="stylesheet" href="../../../public/assets/css/style.css">
                                <title>Accueil</title>
                                </head>


                                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" id="search" placeholder="Search something.." />
                                <span id="musicList"></span>
                        </div>

                        <body>
                            <div class="wrapper">
                                <aside id="sidebar">
                                    <div class="h-100">
                                        <div class="sidebar-logo">
                                            <img src="../../../public/assets/img/logo.png" alt="" style="width: 65%; margin-left: -20%; ">
                                            <a href="#" style="margin-left: -15%;">MaymaBeats</a>

                                        </div>
                                        <ul class="sidebar-nav position-fixed">
                                            <li class="sidebar-item">
                                                <a href="#home" class="sidebar-link">
                                                    <i class="fa-solid fa-home p-2 "></i>
                                                    Home
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="#tendance" class="sidebar-link">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                        <path d="M16.5 8c0 1.5-.5 3.5-2.9 4.3.7-1.7.8-3.4.3-5-.7-2.1-3-3.7-4.6-4.6-.4-.3-1.1.1-1 .7 0 1.1-.3 2.7-2 4.4C4.1 10 3 12.3 3 14.5 3 17.4 5 21 9 21c-4-4-1-7.5-1-7.5.8 5.9 5 7.5 7 7.5 1.7 0 5-1.2 5-6.4 0-3.1-1.3-5.5-2.4-6.9-.3-.5-1-.2-1.1.3"></path>

                                                    </svg>
                                                    Tendance
                                                </a>
                                            </li>

                                            <li class="sidebar-item">
                                                <a href="#mood" class="sidebar-link">
                                                    <i class="fa-regular fa-user p-2 "></i>
                                                    Mood
                                                </a>
                                            </li>

                                            <li class="sidebar-item">
                                                <a href="#playlist" class="sidebar-link">
                                                    <i class="fa-regular fa-user p-2 "></i>
                                                    My playlist
                                                </a>
                                            </li>
                                            <li class="sidebar-item">
                                                <a href="#" class="sidebar-link">
                                                    <i class="fa-solid fa-right-from-bracket p-2 "></i>
                                                    Logout
                                                </a>
                                            </li>


                                            <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
                                                <div class="flex flex-col justify-between h-full">
                                                    <div class="flex-grow bg-gray-900 border-r-4 border-[#BC6FF1]">
                                                        <div class="px-4 py-6 text-center border-b">
                                                            <h1 class="text-xl font-bold leading-none"><span class="text-purple-700">PAR</span><span class="text-white">OLY</span>
                                                            </h1>
                                                        </div>
                                                        <div class="p-4">
                                                            <ul class="space-y-1">
                                                                <li>
                                                                    <a href="#plan" class="flex text-white rounded-xl font-bold text-sm hover:text-purple-900 hover:bg-white py-3 px-4 transition ease-in-out delay-150">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                                            <path d="m21.743 12.331-9-10c-.379-.422-1.107-.422-1.486 0l-9 10a.998.998 0 0 0-.17 1.076c.16.361.518.593.913.593h2v7a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-4h4v4a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-7h2a.998.998 0 0 0 .743-1.669z">
                                                                            </path>
                                                                        </svg>
                                                                        <pre>  Home</pre>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#list" class="flex text-white rounded-xl font-bold text-sm hover:text-purple-900 hover:bg-white py-3 px-4 transition ease-in-out delay-150">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                                            <path d="M16.5 8c0 1.5-.5 3.5-2.9 4.3.7-1.7.8-3.4.3-5-.7-2.1-3-3.7-4.6-4.6-.4-.3-1.1.1-1 .7 0 1.1-.3 2.7-2 4.4C4.1 10 3 12.3 3 14.5 3 17.4 5 21 9 21c-4-4-1-7.5-1-7.5.8 5.9 5 7.5 7 7.5 1.7 0 5-1.2 5-6.4 0-3.1-1.3-5.5-2.4-6.9-.3-.5-1-.2-1.1.3">
                                                                            </path>
                                                                        </svg>
                                                                        <pre>  Tendance</pre>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#projet" class="flex text-white rounded-xl font-bold text-sm hover:text-purple-900 hover:bg-white py-3 px-4 transition ease-in-out delay-150">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16" fill="currentColor">
                                                                            <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                                                                        </svg>
                                                                        <pre> Mood</pre>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tag" class="flex text-white rounded-xl font-bold text-sm hover:text-purple-900 hover:bg-white py-3 px-4 transition ease-in-out delay-150">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                                            <path d="M13 16.493C13 18.427 14.573 20 16.507 20s3.507-1.573 3.507-3.507c0-.177-.027-.347-.053-.517H20V6h2V4h-3a1 1 0 0 0-1 1v8.333a3.465 3.465 0 0 0-1.493-.346A3.51 3.51 0 0 0 13 16.493zM2 5h14v2H2z">
                                                                            </path>
                                                                            <path d="M2 9h14v2H2zm0 4h9v2H2zm0 4h9v2H2z"></path>
                                                                        </svg>
                                                                        <pre> Create playlists</pre>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

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


                                    <main class="ml-60 pt-16 max-h-screen overflow-auto">
                                        <div class="px-6 py-8">
                                            <div class="max-w-4xl mx-auto">
                                                <div id="plan"></div>

                                                <nav class="navbar navbar-expand px-3 border-bottom">
                                                    <!-- Button for sidebar toggle -->
                                                    <button class="btn" type="button" data-bs-theme="dark">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                </nav>
                                                <div id="plan"></div>
                                                <div class="px-6 py-8">
                                                    <div class="max-w-4xl mx-auto">

                                                        <div class="backdrop-blur-3xl bg-black rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
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

                                                                            <main class="content px-3 py-2">
                                                                                <div class="container-fluid">
                                                                                    <div class="mb-3">
                                                                                        <div class="ml-60 pt-16 max-h-screen overflow-auto">
                                                                                            <div id="plan"></div>
                                                                                            <div class="px-6 py-8">
                                                                                                <div class="max-w-4xl mx-auto" id="home">
                                                                                                    <div class="bg-dark rounded-3xl p-8 mb-5" id="border">
                                                                                                        <div class="d-flex justify-content-between">
                                                                                                            <div>
                                                                                                                <h1 class="mx-5 text-white mt-3 fw-bold">Paroly Playlist</h1>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <hr class="my-10">
                                                                                                        <div class="grid grid gap-x-20">
                                                                                                            <div class="spotify-playlists">
                                                                                                                <div class="list">
                                                                                                                    <?php foreach ($songs as $s) { ?>
                                                                                                                        <div class="item">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);position: absolute;">
                                                                                                                                <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                                                                                                                            </svg>
                                                                                                                            <?= $s[''] ?><!--<img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" /> -->
                                                                                                                            <a href="albumMusic.html">
                                                                                                                                <div class="play">
                                                                                                                                    <span class="fa fa-play text-dark"></span>
                                                                                                                                </div>
                                                                                                                            </a>
                                                                                                                            <h4><?php //$song->afficheSong(); 
                                                                                                                                ?></h4>
                                                                                                                            <p>Kick back to the best new and recent chill...</p>
                                                                                                                            <div class="flex">
                                                                                                                                <a href="parole.php">
                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                        <path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zM8 14h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"></path>
                                                                                                                                    </svg>
                                                                                                                                </a>
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                    <path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path>
                                                                                                                                </svg>
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                    <path d="M20 3H6.693A2.01 2.01 0 0 0 4.82 4.298l-2.757 7.351A1 1 0 0 0 2 12v2c0 1.103.897 2 2 2h5.612L8.49 19.367a2.004 2.004 0 0 0 .274 1.802c.376.52.982.831 1.624.831H12c.297 0 .578-.132.769-.36l4.7-5.64H20c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-8.469 17h-1.145l1.562-4.684A1 1 0 0 0 11 14H4v-1.819L6.693 5H16v9.638L11.531 20zM18 14V5h2l.001 9H18z"></path>
                                                                                                                                </svg>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    <?php } ?>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div id="list" class="h-10"></div>
                                                                                        <div class="backdrop-blur-3xl bg-black rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
                                                                                            <h1 class="text-3xl font-bold mb-10 text-white">Tendance</h1>
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

                                                                                                            <div class="ml-60 pt-16 max-h-screen overflow-auto">
                                                                                                                <div id="plan"></div>
                                                                                                                <div class="px-6 py-8">
                                                                                                                    <div class="max-w-4xl mx-auto" id="tendance">
                                                                                                                        <div class="bg-dark rounded-3xl p-8 mb-5" id="border">
                                                                                                                            <div class="d-flex justify-content-between">
                                                                                                                                <div>
                                                                                                                                    <h1 class="mx-5 text-white mt-3 fw-bold">Tendance</h1>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <hr class="my-10">
                                                                                                                            <div class="grid grid gap-x-20">
                                                                                                                                <div class="spotify-playlists">
                                                                                                                                    <div class="list">
                                                                                                                                        <?php for ($x = 0; $x < 8; $x++) { ?>
                                                                                                                                            <div class="item">
                                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);position: absolute;">
                                                                                                                                                    <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                                                                                                                                                </svg>
                                                                                                                                                <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                                                                                                                <a href="albumMusic.html">
                                                                                                                                                    <div class="play">
                                                                                                                                                        <span class="fa fa-play text-dark"></span>
                                                                                                                                                    </div>
                                                                                                                                                </a>
                                                                                                                                                <h4>Chill Hits</h4>
                                                                                                                                                <p>Kick back to the best new and recent chill...</p>
                                                                                                                                                <div class="flex">
                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                        <path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zM8 14h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"></path>
                                                                                                                                                    </svg>
                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                        <path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path>
                                                                                                                                                    </svg>
                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                        <path d="M20 3H6.693A2.01 2.01 0 0 0 4.82 4.298l-2.757 7.351A1 1 0 0 0 2 12v2c0 1.103.897 2 2 2h5.612L8.49 19.367a2.004 2.004 0 0 0 .274 1.802c.376.52.982.831 1.624.831H12c.297 0 .578-.132.769-.36l4.7-5.64H20c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-8.469 17h-1.145l1.562-4.684A1 1 0 0 0 11 14H4v-1.819L6.693 5H16v9.638L11.531 20zM18 14V5h2l.001 9H18z"></path>
                                                                                                                                                    </svg>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        <?php } ?>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                            <div id="projet" class="h-10"></div>
                                                                                                            <div class="backdrop-blur-3xl bg-black rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
                                                                                                                <h1 class="text-3xl font-bold mb-10 text-white">Mood</h1>
                                                                                                                <hr class="my-10">

                                                                                                                <div class="grid grid gap-x-20">
                                                                                                                    <div class="spotify-playlists">
                                                                                                                        <div class="list">
                                                                                                                            <div class="item">
                                                                                                                                <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db">
                                                                                                                                <div class="play">
                                                                                                                                    <span class="fa fa-play"></span>
                                                                                                                                </div>
                                                                                                                                <h4>Today's Top Hits</h4>
                                                                                                                                <p>Rema & Selena Gomez are on top of the...</p>
                                                                                                                            </div>

                                                                                                                            <div class="item">
                                                                                                                                <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db">
                                                                                                                                <div class="play">
                                                                                                                                    <span class="fa fa-play"></span>
                                                                                                                                </div>
                                                                                                                                <h4>RapCaviar</h4>
                                                                                                                                <p>New Music from Lil Baby, Juice WRLD an...</p>
                                                                                                                            </div>

                                                                                                                            <div class="item">
                                                                                                                                <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db">
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

                                                                                                                                <div class="ml-60 pt-16 max-h-screen overflow-auto">
                                                                                                                                    <div id="plan"></div>
                                                                                                                                    <div class="px-6 py-8">
                                                                                                                                        <div class="max-w-4xl mx-auto" id="mood">
                                                                                                                                            <div class="bg-dark rounded-3xl p-8 mb-5" id="border">
                                                                                                                                                <div class="d-flex justify-content-between">
                                                                                                                                                    <div>
                                                                                                                                                        <h1 class="mx-5 text-white mt-3 fw-bold">Mood</h1>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                                <hr class="my-10">
                                                                                                                                                <div class="grid grid gap-x-20">
                                                                                                                                                    <div class="spotify-playlists">
                                                                                                                                                        <div class="list">
                                                                                                                                                            <?php for ($x = 0; $x < 8; $x++) { ?>
                                                                                                                                                                <div class="item">
                                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);position: absolute;">
                                                                                                                                                                        <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                                                                                                                                                                    </svg>
                                                                                                                                                                    <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                                                                                                                                    <a href="albumMusic.html">
                                                                                                                                                                        <div class="play">
                                                                                                                                                                            <span class="fa fa-play text-dark"></span>
                                                                                                                                                                        </div>
                                                                                                                                                                    </a>
                                                                                                                                                                    <h4>Chill Hits</h4>
                                                                                                                                                                    <p>Kick back to the best new and recent chill...</p>
                                                                                                                                                                    <div class="flex">
                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                                            <path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zM8 14h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"></path>
                                                                                                                                                                        </svg>
                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                                            <path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path>
                                                                                                                                                                        </svg>
                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                                            <path d="M20 3H6.693A2.01 2.01 0 0 0 4.82 4.298l-2.757 7.351A1 1 0 0 0 2 12v2c0 1.103.897 2 2 2h5.612L8.49 19.367a2.004 2.004 0 0 0 .274 1.802c.376.52.982.831 1.624.831H12c.297 0 .578-.132.769-.36l4.7-5.64H20c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-8.469 17h-1.145l1.562-4.684A1 1 0 0 0 11 14H4v-1.819L6.693 5H16v9.638L11.531 20zM18 14V5h2l.001 9H18z"></path>
                                                                                                                                                                        </svg>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            <?php } ?>
                                                                                                                                                        </div>
                                                                                                                                                    </div>

                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>

                                                                                                                                <div id="tag" class="h-10"></div>
                                                                                                                                <div class="backdrop-blur-3xl bg-black rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
                                                                                                                                    <h1 class="text-3xl font-bold mb-10 text-white">Your playlist</h1>
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

                                                                                                                                                    <div class="ml-60 pt-16 max-h-screen overflow-auto">
                                                                                                                                                        <div id="playlist"></div>
                                                                                                                                                        <div class="px-6 py-8">
                                                                                                                                                            <div class="max-w-4xl mx-auto">
                                                                                                                                                                <div class="bg-dark rounded-3xl p-8 mb-5" id="border">
                                                                                                                                                                    <div class="d-flex justify-content-between">
                                                                                                                                                                        <div>
                                                                                                                                                                            <h1 class="mx-5 text-white mt-3 fw-bold">ALBUMS</h1>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <hr class="my-10">
                                                                                                                                                                    <div class="grid grid gap-x-20">
                                                                                                                                                                        <div class="spotify-playlists">
                                                                                                                                                                            <div class="list">
                                                                                                                                                                                <?php for ($x = 0; $x < 8; $x++) { ?>
                                                                                                                                                                                    <div class="item">
                                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);position: absolute;">
                                                                                                                                                                                            <path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path>
                                                                                                                                                                                        </svg>
                                                                                                                                                                                        <img src="https://i.scdn.co/image/ab67616d0000b2733b5e11ca1b063583df9492db" />
                                                                                                                                                                                        <a href="albumMusic.html">
                                                                                                                                                                                            <div class="play">
                                                                                                                                                                                                <span class="fa fa-play text-dark"></span>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </a>
                                                                                                                                                                                        <h4>Chill Hits</h4>
                                                                                                                                                                                        <p>Kick back to the best new and recent chill...</p>
                                                                                                                                                                                        <div class="flex">
                                                                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                                                                <path d="M6 22h12a2 2 0 0 0 2-2V8l-6-6H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2zm7-18 5 5h-5V4zM8 14h3v-3h2v3h3v2h-3v3h-2v-3H8v-2z"></path>
                                                                                                                                                                                            </svg>
                                                                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                                                                <path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path>
                                                                                                                                                                                            </svg>
                                                                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);">
                                                                                                                                                                                                <path d="M20 3H6.693A2.01 2.01 0 0 0 4.82 4.298l-2.757 7.351A1 1 0 0 0 2 12v2c0 1.103.897 2 2 2h5.612L8.49 19.367a2.004 2.004 0 0 0 .274 1.802c.376.52.982.831 1.624.831H12c.297 0 .578-.132.769-.36l4.7-5.64H20c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-8.469 17h-1.145l1.562-4.684A1 1 0 0 0 11 14H4v-1.819L6.693 5H16v9.638L11.531 20zM18 14V5h2l.001 9H18z"></path>
                                                                                                                                                                                            </svg>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                <?php } ?>
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


                                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                                                            <script>
                                                                                $("#search").on('keyup', function() {
                                                                                    if (input != "") {
                                                                                        $.ajax({
                                                                                            url: "../Controllers/SearchController.php",
                                                                                            method: "GET",
                                                                                            data: {
                                                                                                'search': $value
                                                                                            },
                                                                                            success: function(data) {
                                                                                                console.log(data);
                                                                                                {
                                                                                                    $("#musicList").html(data);
                                                                                                }

                                                                                                // $("#musicList").css("display", "block");
                                                                                            }
                                                                                        });
                                                                                    } else {

                                                                                        $("#musicList").html("");
                                                                                        $("#musicList").css("display", "none");
                                                                                    }
                                                                                    // $value=$(this).val();
                                                                                    // alert($value);
                                                                                });
                                                                            </script>
                        </body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
    const toggler = document.querySelector(".btn");
    toggler.addEventListener("click", function() {
        document.querySelector("#sidebar").classList.toggle("collapsed");
    });
</script>

</body>

</div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/assets/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black relative overflow-hidden max-h-screen">
    <header class="bg-black fixed right-0 top-0 left-60 py-3 px-4 h-[9.75%] border-b-2 border-[#BC6FF1]" style="z-index: 999;">
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
                <div class='max-w-md mx-auto'>
                    <div class="relative flex items-center w-full h-10 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                        <div class="grid place-items-center h-full w-12 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" id="search" placeholder="Search something.." />
                    </div>
                </div>
            </div>
        </div>
    </header>

    <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
        <div class="flex flex-col justify-between h-full" id="sidebar">
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
            </div>
            <div class="bg-gray-900 border-r-4 border-[#BC6FF1] p-4 flex flex-col">
                <button type="button" class="inline-flex items-center justify-center h-9 px-4 my-5 rounded-xl bg-white text-purple-700 hover:text-white hover:bg-purple-700 text-sm font-semibold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <span class="font-bold text-sm ml-2">Log In</span>
                </button>
                <button type="button" class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-white text-purple-700 hover:text-white hover:bg-purple-700 text-sm font-semibold transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                        <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <span class="font-bold text-sm ml-2">Logout</span>
                </button>
            </div>
        </div>
    </aside>

    <main class="ml-60 pt-16 max-h-screen overflow-auto">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>   
</body>
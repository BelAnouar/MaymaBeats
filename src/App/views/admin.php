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
    <script src="https://cdn.tailwindcss.com%22%3E"></script>
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
                        <a href="#" class="list-group-item list-group-item-action bg-transparent col-12 d-flex"> <img src="/MaymaBeats/public/assets/icons8-notifications-78.png" alt="" class="col-3">NOTIFICATIONS</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent"><img src="/MaymaBeats/public/assets/icons8-logout-50.png" alt="" class="col-2">LOGOUT</a>
                    </div>
                </div>
                <div id="content" class="d-flex flex-wrap col-9 my-3 mx-5">
                    <div class="container mx-auto w-80">
                        <!-- component -->
                        <div class="flex min-h-screen items-center justify-center bg-white">
                            <div class="p-6 overflow-scroll px-0">
                                <table class="w-full min-w-max table-auto text-left">
                                    <thead>
                                        <tr>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-2 w-25">
                                                <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Transaction</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-2">
                                                <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Amount</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-2">
                                                <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Date</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-2">
                                                <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Status</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-2">
                                                <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70">Account</p>
                                            </th>
                                            <th class="border-y border-blue-gray-100 bg-blue-gray-50/50 p-2">
                                                <p class="block antialiased font-sans text-sm text-blue-gray-900 font-normal leading-none opacity-70"></p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50 column-2">
                                                <!-- <div class="flex items-center">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-spotify.svg" alt="Spotify" class="inline-block relative object-center !rounded-full w-4 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Spotify</p>
                                                </div> -->
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$2,500</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 3:00pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                                        <span class="">paid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <!-- <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png" alt="visa" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div> -->
                                                    <div class="flex flex-col">
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">visa
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                                                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <!-- <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-amazon.svg" alt="Amazon" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Amazon</p>
                                                </div> -->
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$5,000</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 1:00pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                                        <span class="">paid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <!-- <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/mastercard.png" alt="master-card" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div> -->
                                                    <div class="flex flex-col">
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">master card
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                                                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <!-- <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-pinterest.svg" alt="Pinterest" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Pinterest</p>
                                                </div> -->
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$3,400</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Mon 7:40pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-amber-500/20 text-amber-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                                        <span class="">pending</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <!-- <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/mastercard.png" alt="master-card" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div> -->
                                                    <div class="flex flex-col">
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">master card
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                                                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <!-- <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-google.svg" alt="Google" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">Google</p>
                                                </div> -->
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$1,000</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 5:00pm</p>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-green-500/20 text-green-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                                        <span class="">paid</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <div class="flex items-center gap-3">

                                                    <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>

                                                    <!-- <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png" alt="visa" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div> -->
                                                    <div class="flex flex-col">
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">visa
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4 border-b border-blue-gray-50">
                                                <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                                                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-4">
                                                <div>
                                                    <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                                </div>
                                                <!-- <div class="flex items-center gap-3">
                                                    <img src="https://docs.material-tailwind.com/img/logos/logo-netflix.svg" alt="netflix" class="inline-block relative object-center !rounded-full w-12 h-12 rounded-lg border border-blue-gray-50 bg-blue-gray-50/50 object-contain p-1">
                                                    <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">netflix</p>
                                                </div> -->
                                            </td>
                                            <td class="p-4">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">$14,000</p>
                                            </td>
                                            <td class="p-4">
                                                <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal">Wed 3:30am</p>
                                            </td>
                                            <td class="p-4">
                                                <div class="w-max">
                                                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-md" style="opacity: 1;">
                                                        <span class="">cancelled</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <div class="flex items-center gap-3">
                                                    <!-- <div class="h-9 w-12 rounded-md border border-blue-gray-50 p-1">
                                                        <img src="https://demos.creative-tim.com/test/corporate-ui-dashboard/assets/img/logos/visa.png" alt="visa" class="inline-block relative object-center !rounded-none rounded-md h-full w-full object-contain p-1">
                                                    </div> -->
                                                    <div class="flex flex-col">
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal capitalize">visa
                                                            <!-- -->
                                                            <!-- -->1234
                                                        </p>
                                                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal opacity-70">06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-4">
                                                <button class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-900 hover:bg-gray-900/10 active:bg-gray-900/20" type="button">
                                                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-4 w-4">
                                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="w-full pt-5 px-4 mb-8 mx-auto ">
                                    <div class="text-sm text-gray-700 py-1">
                                        Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
                                    </div>
                                </div>
                            </div>

                        </div>
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
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
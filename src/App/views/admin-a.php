<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/MaymaBeats/public/assets/adminAr.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Raleway:300,400,500,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

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



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- Leave those next 4 lines if you care about users using IE8 -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->



        <div class="wrapper-grey padded">
            <div class="container">
                <h2 class="text-center">Your next trip</h2>

                <div class="col-xs-12 col-sm-4">
                    <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i0.wp.com/handluggageonly.co.uk/wp-content/uploads/2016/04/IMG_5589.jpg?w=1600&ssl=1');">
                        <div class="card-category">City</div>
                        <div class="card-description">
                            <h2>home</h2>
                            <p>Lovely house</p>
                        </div>
                        <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true">
                        <a class="card-link" href="#"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="card" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('https://i0.wp.com/handluggageonly.co.uk/wp-content/uploads/2016/03/Positano-Weather.jpg?w=1600&ssl=1');">
                        <div class="card-category">City</div>
                        <div class="card-description">
                            <h2>Home</h2>
                            <p>Lovely house</p>
                        </div>
                        <img class="card-user avatar avatar-large" src="https://github.com/lewagon/bootstrap-challenges/blob/master/11-Airbnb-search-form/images/anne.jpg?raw=true">
                        <a class="card-link" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Including Bootstrap JS (with its jQuery dependency) so that dynamic components work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>

</body>

</html>
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
        <button class="btn" type="button" data-bs-theme="dark" style="background-color: #1a0025cf;">
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
            <section class="t">
              <div id="plan"></div>
              <div class="px-6 py-8">
                <div class="max-w-4xl mx-auto">
                  <div class="backdrop-blur-3xl rounded-3xl border-[#BC6FF1] border-2 p-8 mb-5">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h1 class="mx-5 text-white mt-3 fw-bold">ALBUMS</h1>
                      </div>
                      <div class="container justify-content-end d-flex ">
                        <button id="openModal" class="btn add mt-3" type="button" data-bs-toggle="modal" data-bs-target="#myModal">ADD NEW STYLE
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
                                <form action="" method="post">
                                  <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Type Article title" name="title">
                                  </div>
                                  <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                  </div>

                                  <div class="mb-3">
                                    <label for="description" class="form-label">Album Description</label>
                                    <textarea class="form-control" id="description" placeholder="Write article description here" name="description"></textarea>
                                  </div>
                                  <button type="submit" name="insert" class="btn text-white " style="background-color: #320f48;">ADD NEW STYLE</button>
                                </form>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eAq1o24KdHuwmHg9F5n3pX56K1Fmksz/5m6ZsETQPKFfFlvHkUm6q1ahFnh2LJZ6" crossorigin="anonymous"></script>
                    </div>


                    <hr class="my-10">



                    <div class="table-responsive custom-table-responsive col-12 ssl mx-5">
                      <div class="tiles d-flex col-12">

                        <article class="tile col-4" id="clients">
                          <div class="tile-header">
                            <i class="ph-lightning-light"></i>
                            <h3>
                              <span>CLIENTS</span>
                              <span>233</span>
                            </h3>
                          </div>
                        </article>
                        <article class="tile col-4 mx-5" id="artist">
                          <div class="tile-header">
                            <i class="ph-fire-simple-light"></i>
                            <h3>
                              <span>ARTISTS</span>
                              <span>233</span>
                            </h3>
                          </div>
                        </article>


                      </div>
                    </div>
                    <div class="table-responsive custom-table-responsive col-12 ssl my-2 mx-5">
                      <div class="tiles d-flex col-12">

                        <article class="tile col-4" id="playlist">
                          <div class="tile-header">
                            <i class="ph-lightning-light"></i>
                            <h3>
                              <span>PLAYLISTS</span>
                              <span>233</span>
                            </h3>
                          </div>
                        </article>
                        <article class="tile col-4 mx-5" id="albums">
                          <div class="tile-header">
                            <i class="ph-fire-simple-light"></i>
                            <h3>
                              <span>ALBUMS</span>
                              <span>233</span>
                            </h3>
                          </div>
                        </article>


                      </div>
                    </div>


                  </div>

                </div>
            </section>
          </div>
        </div>
        <canvas id="myChart"></canvas>
      </section>
    </div>

  </div>





  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script>
    const toggler = document.querySelector(".btn");
    toggler.addEventListener("click", function() {
      document.querySelector("#sidebar").classList.toggle("collapsed");
    });
  </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="stylesheet" href="/MaymaBeats/public/assets/adminAr.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>
    <section class="Dashboard">

        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="container-fluid h-100">
                    <div class="row h-100">
                        <div id="sidebar" class="col-2">
                            <h1>LOGO</h1>

                            <div class="list-group col-12 ">
                                <img src="/MaymaBeats/public/assets/circle-user-regular.svg " alt="" class="my-4 col-8" height="20%">
                                <a href="admin" class="list-group-item list-group-item-action bg-transparent">
                                    <img src="/MaymaBeats/public/assets/icons8-home-100.png" alt="" class="col-2"> HOME
                                </a>

                                <a href="admin-c" class="list-group-item list-group-item-action bg-transparent" aria-current="true">
                                    <img src="/MaymaBeats/public/assets/icons8-clients-64.png" alt="" class="col-3">CLIENT</a>
                                <a href="admin-a" class="list-group-item list-group-item-action home">
                                    <img src="/MaymaBeats/public/assets/icons8-garageband-64.png" alt="" class="col-3">ARTISTS</a>
                                <a href="adminNot" class="list-group-item list-group-item-action bg-transparent col-12 d-flex"> <img src="/MaymaBeats/public/assets/icons8-notifications-78.png" alt="" class="col-3">NOTIFICATIONS</a>
                                <a href="#" class="list-group-item list-group-item-action bg-transparent"><img src="/MaymaBeats/public/assets/icons8-logout-50.png" alt="" class="col-2">LOGOUT</a>
                            </div>
                        </div>
                        <div id="content" class="d-flex flex-wrap col-9 my-1 mx-5 col-9">
                            <div class="box">
                                <div id="box1" class="col-12 d-flex ">
                                    <div id="box2" class="col-5">
                                        LYRICS COUNT <br>
                                        <h3 class="mx-5">1283</h3>
                                    </div>
                                    <div id="box2" class="col-5 mx-5">
                                        PLAYLIST COUNT <br>
                                        <h3 class="mx-5">567</h3>
                                    </div>
                                </div>

                                <div class="container-fluid py-4 col-12">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card my-4">
                                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                                        <h6 class="text-white text-capitalize ps-3">STATISTICS</h6>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 pb-2">
                                                    <div class="table-responsive p-0 col-10">
                                                        <table class="table align-items-center justify-content-center mb-0 col-10">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ARTIST</th>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ALBUMS</th>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">SONG</th>
                                                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div>
                                                                                <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                                            </div>
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">Asana</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-xs font-weight-bold">working</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex align-items-center justify-content-center">
                                                                            <span class="me-2 text-xs font-weight-bold">60%</span>
                                                                            <div>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div>
                                                                                <img src="../assets/img/small-logos/github.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                                                                            </div>
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">Github</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">$5,000</p>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-xs font-weight-bold">done</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex align-items-center justify-content-center">
                                                                            <span class="me-2 text-xs font-weight-bold">100%</span>
                                                                            <div>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div>
                                                                                <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                                                                            </div>
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">Atlassian</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">$3,400</p>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-xs font-weight-bold">canceled</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex align-items-center justify-content-center">
                                                                            <span class="me-2 text-xs font-weight-bold">30%</span>
                                                                            <div>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div>
                                                                                <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                                                                            </div>
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">Bootstrap</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">$14,000</p>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-xs font-weight-bold">working</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex align-items-center justify-content-center">
                                                                            <span class="me-2 text-xs font-weight-bold">80%</span>
                                                                            <div>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div>
                                                                                <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                                                                            </div>
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">Slack</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">$1,000</p>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-xs font-weight-bold">canceled</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex align-items-center justify-content-center">
                                                                            <span class="me-2 text-xs font-weight-bold">0%</span>
                                                                            <div>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div>
                                                                                <img src="../assets/img/small-logos/devto.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                                                                            </div>
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">Devto</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">$2,300</p>
                                                                    </td>
                                                                    <td>
                                                                        <span class="text-xs font-weight-bold">done</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <div class="d-flex align-items-center justify-content-center">
                                                                            <span class="me-2 text-xs font-weight-bold">100%</span>
                                                                            <div>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
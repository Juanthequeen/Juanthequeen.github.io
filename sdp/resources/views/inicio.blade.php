<!DOCTYPE html>

<html>
    <head>
        <title>SDP - Inicio</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <style>
        .navbar {
            background-color: orangered
        }
        .row{
            justify-content: center;
        }
        .col{
            height: 10px;
            width: 200px;
            text-align: center;
        }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="">SDP</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{url('/inicio')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                      </svg> Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/ajustes')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg> Ajustes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{url('/')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"/>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"/>
                      </svg> Volver</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide d-flex aling-items-center justify-center" style="height: 500px">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/panes1.jpg" class="d-block w-70">
              </div>
              <div class="carousel-item">
                <img src="img/producto2.png" class="d-block w-40 h-50">
              </div>
              <div class="carousel-item">
                <img src="img/panes4.png" class="d-block w-70">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-2">
            <div class="col">
                <a href="{{url('/producto')}}" class="card h-150 w-30 text-decoration-none">
                    <div class="card d-flex align-items-center">
                        <img src="img/producto3.png" class="card-img-top img-fluid w-50 h-10" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text">Busca los productos</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{url('/ajustes')}}" class="card h-150 w-30 text-decoration-none">
                    <div class="card d-flex align-items-center">
                        <img src="img/ajustes.png" class="card-img-top img-fluid w-50 h-10" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ajustes</h5>
                            <p class="card-text">Ajustes de sistema</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{url('/empl')}}" class="card h-100 w-40 text-decoration-none">
                    <div class="card d-flex align-items-center">
                        <img src="img/reloj.png" class="card-img-top img-fluid w-50 h-50" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Empleados</h5>
                            <p class="card-text">Horarios</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{url('/inven')}}" class="card h-100 w-40 text-decoration-none">
                    <div class="card d-flex align-items-center">
                        <img src="img/inventario.png" class="card-img-center img-fluid w-50 h-50" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Inventario</h5>
                            <p class="card-text">Inventarios</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
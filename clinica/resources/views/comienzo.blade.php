<!doctype html>
<html lang=es>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/homepage.css?ver=1.1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<!-- Styles -->
<style>
  body {
    background-color: #FAFAFA;
  }

  .contenedor {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;

  }

  .contenedor figure {
    position: relative;
    height: 100%;
    width: 100%;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer;
  }

  .contenedor figure img {
    transition: all 500ms ease-out;
    width: 100%;
    height: 100%;
  }

  .contenedor figure:hover>img {
    transform: scale(1.3);
  }

  .contenedor figure .capa {
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 100%;
    height: 100%;
    background-color: rgba(21, 42, 65, 0.493);
    transition: all 0ms ease-out;
    opacity: 0;
    visibility: hidden;
    text-align: center;
    transition: all 500ms ease-out;
  }

  .contenedor figure:hover .capa {
    opacity: 1;
    visibility: visible;
  }

  .contenedor figure:hover .capa h1 {
    margin-top: 20%;
    margin-bottom: 20px;
  }

  .contenedor figure .capa h1 {
    color: #fff;
    transition: all 500ms ease-out;
  }

  .contenedor figure .capa h5 {
    color: #fff;
    font-size: 15px;
    line-height: 1.5;
    width: 100px;
    margin: auto;
  }

  article {
    text-align: center;
  }

  .contenedore {
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
  }

  #figure:hover>img {
    transform: scale(1.3);

  }

  .p {
    color: rgb(235, 235, 235);
  }

  .BORDER {
    border-radius: 15px;

  }

  .marginIzq-8 {

    margin-left: 8%;
  }

  .paddingDer-8 {

    padding-right: 8%;
  }
</style>

<body>
  <div class=" container-fluid">

    <div class="row">
      <nav class="navbar navbar-light" style="background-color:#152a41;">

        <div class="col-1 marginIzq-8">
          <a class="navbar" style="color:antiquewhite; font-size: 29;">CLINICA</a>
        </div>

        <!-- Sección de Botones-->
        <div class="col text-end paddingDer-8">
          @if (Route::has('login'))
          <span class="">
            @auth
            <button class="btn ">
              <a href="{{ url('/home') }}" class="text-sm text-no-underline text-blue-900">Pagina</a>
            </button>

            @else
            <button type="button" class=" btn duration-500 ease-in-out 2DA4C7 hover:bg-blue-400 transform hover:-translate-y  ring-inset">
              <a href="{{ url('seleccionar') }}" class="text-m text-blue-50 no-underline">Iniciar sesion</a>
            </button>


            @if (Route::has('register'))
            <button type="button" class="btn btn-l duration-500 ease-in-out 2DA4C7 hover:bg-blue-400 transform hover:-translate-y  ring-inset">
              <a href="{{ route('register') }}" class="text-m text-blue-50 no-underline">Registrarse</a>
            </button>
            @endif
            @endauth
          </Span>
          @endif
        </div>
      </nav>
    </div>
  </div>
  <br>

  <div class="container-fluid">
    <div class="col-12">
      <h1 style="text-align: center; font-size: larger; color:#152a41; font-weight: 700">
        CONSULTORIO DE ODONTOLOGIA PEPITO
      </h1>
    </div>

    <div class="row p-0 m-0 mb-5 mt-5">

      <div class="col-10 mx-auto p-0">

        <div class="bd-example">

          <div id="carouselExampleDark" class="carousel carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">

                <svg width="100%" height="500" role="img" style="background-image:url(../resources/img/doctor1.jpg); background-size:cover; background-position: center; background-repeat: no-repeat;">
                </svg>

                <div class="carousel-caption d-none d-md-block"></div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <svg width="100%" height="500" role="img" style="background-image:url(../resources/img/otorino.jpg); background-size:cover; background-position: center; background-repeat: no-repeat;">
                </svg>

                <div class="carousel-caption d-none d-md-block">
                </div>

              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <svg width="100%" height="500" role="img" style="background-image:url(../resources/img/doctora.jpg); background-size:cover; background-position: center; background-repeat: no-repeat;">
                </svg>

                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <aside class="col-10 mx-auto mb-5">
        <div class="BORDER">
          <p style="text-align: justify; color:#152a41; font-weight: 500">
            Aunque no presentemos ningún problema de salud, es importante que acudamos al médico periódicamente (al
            menos, una vez al año).

            Hoy en dia es muy que común que la gente no le de la debida importancia al realizar un chequeo medico, con
            tal de prevenir ciertas enfemedades como a diabeltes, tuler carpiano, tuberculosis, ETS.

            por ello te invitamos a que puedas visitar nuestro centro medico, y en el puedas tener asesoramiento
            <br>
          </p>
        </div>
      </aside>

    </div>
    <div class="row mt-5 mb-5">



      <aside class="col-8 col-md-4 mb-5 mx-auto">
        <div class="contenedor">
          <figure>
            <img src="../resources/img/Dientes.jpg" class="img-fluid" alt="dientes">
            <div class="capa">
              <h1>
                Odontología
              </h1>
              <p class="p">Esta disciplina se encarga de proteger la salud bucal de las personas, prevenir y tratar las enfermedades bucodentales.</p>
            </div>
          </figure>
        </div>
      </aside>

      <aside class="col-8 col-md-4 mb-5 mx-auto">
        <div class="contenedor">
          <figure>
            <img src="../resources/img/hospital2.jpg" class="img-fluid" style="height: 100%; width: 100%" alt="">
            <div class="capa">
              <h1>
                Medicina General
              </h1>
              <p class="p"> La medicina general es el primer nivel de atención médica y es necesaria para la prevención, detección, tratamiento y seguimiento de enfermedades</p>
            </div>
          </figure>
        </div>
      </aside>



    </div>
  </div>

  <!-- Footer -->

  <footer class="row text-center text-light p-0 m-0" style="background-color:#152a41;">
    <div class="col-12 p-0 m-0">
      <p class="p-3">
        © TODOS LOS DERECHOS RESERVADOS A KEVIN , MICHAEL , IVAN BARON
        CONTACTOS:3223304871
      </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>
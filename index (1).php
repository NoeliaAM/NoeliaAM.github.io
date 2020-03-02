
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="icon" type="image/x-icon" href="img/Logo.png"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body align="justify">
<nav>
    <div class="nav-wrapper white">
      <a href="#!" class="brand-logo right"><img src="img/Ingles-Individual.jpg" style="width:220px;"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color:black">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a class="btn green darken-3">Personaliza tu curso</a></li>
        <li><a class="btn green darken-3">Evaluacion</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a>Perzonaliza tu curso</a></li>
        <li><a>Evaluacion</a></li>
      </ul>
    </div>
  </nav>

  <div class="carousel carousel-slider center">
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>

<div class="container">
    <br>
    <h5>
    Inglés Individual te da la flexibilidad de decidir cuantas horas al día asistir a tu curso, cuantos días a la semana estudiar y en cuanto tiempo quieres terminar tu curso.<br><br>
    El curso llevará tu propio ritmo, ¡TU DECIDES TU PROPIO AVANCE!
    </h5>
    <blockquote>
       Para poder personalizar tu curso de Inglés Individual es necesario que crees una cuenta<br>
        para si poderte enviar los costos de tu plan personalizado via WhatsApp
    </blockquote>
    <div class="center">
    <div class="row">
      <div class="col s12 m5 l10">
        <div class="card-panel grey lighten-4">
          <span class="white-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
        </div>
      </div>
    </div>
    </div>
</div>
    <script>
        $(document).ready(function(){
            $('.carousel.carousel-slider').carousel({fullWidth: true,duration:100});
            $('.button-collapse').sideNav();
        });
    </script>
</body>
</html>
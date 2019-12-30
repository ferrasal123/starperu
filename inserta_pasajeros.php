<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="refresh" content="3; url=https://www.starperu.com/es/">
	<title>Aerolíneas StarPerú</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body class="internas">
   <?php
$usuario = "root";
$contrasena = "StarPeru12";
$servidor = "localhost";
$basededatos = "db_pasarela";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
        
        $conexion = mysqli_connect($servidor, $usuario, $contrasena);
        $db = mysqli_select_db($conexion, $basededatos);
        $query = "INSERT INTO newsletter (nombre, apellido, mail) VALUES ('$nombre','$apellido','$email')";
        $result = mysqli_query($conexion, $query);
?>
<div class="interfaz">
    <header class="cabecera">
        <div class="container-fluid">
            <div class="row no-gutters fondo">
                <div class="col">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="row no-gutters">
                                    <div class="col-sm-12 col-md-4 logotipo">
                                        <h1><img src="img/Logotipo.png" alt=""></h1>
                                    </div>
                                    <div class="col-sm-12 col-md-8">
                                        <nav class="navbar navbar-expand sec-nav">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarsExample02">
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item telefono">
                                                        <strong>CALL CENTER (511) 705-9000</strong>
                                                    </li>
                                                    <li class="nav-item idiomas">
                                                        <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                ES
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">ES</a>
                                                                <!--<a class="dropdown-item" href="#">ENG</a>-->
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item facebook">
                                                        <a href="">facebook</a>
                                                    </li>
                                                    <li class="nav-item blog">
                                                        <a href="http://blog.starperu.com/es/" class="nav-link">
                                                            <img src="img/icon-blog.png" class="off" alt="">
                                                            <img src="img/icon-blog-on.png" class="on" alt="">
                                                            <span>Blog</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                        <nav class="navbar navbar-expand-md navbar-dark bg-dark main-nav">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarsExample03">
                                                <ul class="navbar-nav ml-auto">
                                                    <li class="nav-item active">
                                                        <a class="nav-link" href="index.html">Inicio</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="destinos.html">Destinos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="promociones.html">Promociones</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="servicios-especiales.html">Servicios Especiales</a>
                                                    </li>
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Volar en StarPerú
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="servicio-al-cliente.html">Servicios al cliente</a>
                                                            <a class="dropdown-item" href="servicios-especiales.html">Servicios especiales</a>
                                                            <a class="dropdown-item" href="viajes-grupales.html">Viajes grupales</a>
                                                            <a class="dropdown-item" href="oficinas.html">Oficinas</a>
                                                            <a class="dropdown-item" href="sobre-mi-equipaje.html">Sobre mi equipaje</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="">
                            <img class="d-block w-100" src="images/img-contacto.jpg" alt="First slide">
                            <div class="carousel-caption type-one">
                                <h5>Star Perú<span>contacto</span></h5>
                            </div>
                        </a>
                    </div>
                    <!--<div class="carousel-item">
                        <img class="d-block w-100" src="https://via.placeholder.com/1140x380" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://via.placeholder.com/1140x380" alt="Third slide">
                    </div>-->
                </div>
            </div>
        </div>
    </header>
    <main class="contenidos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 align="center">GRACIAS POR REGISTRARTE.</h1>
                </div>
            </div>  
        </div>
    </main>
    <footer class="pie">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-sm-12 col-md-5 menu-inf">
                    <div class="row no-gutters justify-content-end">
                        <div class="col-sm-12 col-md-11">
                            <img src="img/Logotipo.png" alt="">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="http://starpanel.starperu.com/cp/libro_reclamacion.php">Libro de reclamaciones</a></li>
                                <li class="list-inline-item"><a href="la-empresa.html">La Empresa</a></li>
                                <li class="list-inline-item"><a href="contacto.html">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7 redes">
                    <div class="row no-gutters align-items-end">
                        <div class="col-sm-12 col-md-9">
                            <p>CALL CENTER (511) 705-9000 <br>
                            Atención diaria – 08:00 a 20:00Hrs.</p>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <ul class="list-inline">
                                <li class="list-inline-item facebook">
                                    <a href="https://www.facebook.com/aerolineas.starperu?fref=ts" class="nav-link">
                                        facebook
                                    </a>
                                </li>
                                <li class="list-inline-item twitter">
                                    <a href="https://twitter.com/starperu_" class="nav-link">
                                        twitter
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 text-center disclaimer">
                    <p><small>2018 Star up S.A - <a href="contrato-de-transporte.html">Contrato de transporte</a> - <a href="condiciones-de-venta.html">Condiciones de venta</a> - <a href="condiciones-clases-tarifarias.html">Condiciones de clases tarifarias</a> - <a href="endosos-y-postergaciones.html">Endosos y postergaciones</a> - <a href="preguntas-frecuentes.html">FAQ</a> - <a href="privacidad.html">Privacidad</a> - <!--<a href="prensa-e-imagen.html">Prensa e imagen</a>--> - <a href="flota.html">Flota</a> - <!--<a href="mapa-del-sitio.html">Mapa del sitio</a>--></small></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/popper.min.js" charset="utf-8"></script>
<script src="js/bootstrap.min.js" charset="utf-8"></script>
<!-- Analytics -->
<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-32584975-1', 'auto'); ga('require', 'displayfeatures'); ga('send', 'pageview'); </script> 

<!-- Global site tag (gtag.js) - Google Ads: 757467471 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-757467471"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'AW-757467471');

</script>

<script>
    var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("star-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</body>
</html>
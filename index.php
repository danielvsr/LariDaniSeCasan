<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <title>Lari & Dani se casan - Sábado 12 de Noviembre</title>
</head>
<body class="bg-light">
    <header>
        <div class="overlay">
            <h4 class="subtitulo mb-5 text-uppercase fw-lighter">¡nos casamos!</h4>
            <h1 class="titulo mb-5">Lari y Dani</h1>
            <h4 class="subtitulo mt-5 mt-sm-3 mt-xm-2 mb-5 text-uppercase fw-lighter">SÁBADO 12 DE NOVIEMBRE</h4>       
        </div>        
    </header>
    
    <!-- SECCION CRONOMETRO 
    <section class="container mt-5">
        <div class="row d-flex justify-content-around">
            <div class="col-2 mt-4 shadow p-3 mb-5 bg-light rounded">
                <div class="text-center fs-1 color-texto" id="days"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Días</span>
                </div>
            </div>
            <div class="col-2 mt-4 shadow p-3 mb-5 bg-light rounded">
                <div class="text-center fs-1 color-texto" id="hours"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Horas</span>
                </div>
            </div>
            <div class="col-2 mt-4 shadow p-3 mb-5 bg-light rounded">
                <div class="text-center fs-1 color-texto" id="minutes"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Minutos</span>
                </div>
            </div>
            <div class="col-2 mt-4 shadow p-3 mb-5 bg-light rounded">
                <div class="text-center fs-1 color-texto" id="seconds"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Segundos</span>
                </div>
            </div>
        </div>
    </section>-->
   
<section class="reloj-background">
    <article class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-3 col-md-3 col-sm-3 mt-4 p-3 mb-5">
                <div class="text-center color-texto reloj" id="days"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Días</span>
                </div>
            </div>
            <div class="col-3 col-md-3 col-sm-3 mt-4 p-3 mb-5">
                <div class="text-center color-texto reloj" id="hours"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Horas</span>
                </div>
            </div>
            <div class="col-3 col-md-3 col-sm-3 mt-4 p-3 mb-5">
                <div class="text-center color-texto reloj" id="minutes"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Minutos</span>
                </div>
            </div>
            <div class="col-2 col-md-3 col-sm-3 mt-4 p-3 mb-5">
                <div class="text-center color-texto reloj" id="seconds"></div>
                <div class="d-flex justify-content-center">
                    <span class="text-uppercase fw-bold text-center color-texto">Segundos</span>
                </div>
            </div>
        </div>

    </article>
</section>

    <!--SECCION INFORMACION
    <section class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12 mt-2 mb-2">
                <div class="bg-light p-3 shadow rounded-3" style="border: 3px solid #A9885D;">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/anillos.png" alt="arco" style="width:125px; height: 125px;">
                    </div>
                    <h1 class="text-center mt-4" style="font-family: 'Great Vibes', cursive; color:#A9885D;">Ceremonia</h1>
                    <h6 class="text-center mt-3 text-uppercase letra-texto">sábado 12 de noviembre 15.00hs</h6>
                    <p class="letra-texto text-muted text-center fs-5 mt-3">Dirección Las Glicinas 1880, Lujan Provincia de Buenos Aires</p>
                    <div class="d-flex justify-content-center mt-5">      
                        <a class="text-muted text-uppercase text-decoration-none align-middle" role="button" data-bs-toggle="modal" data-bs-target="#mapaQuinta" ><img src="img/map.jpg" alt="mapa" style="width:40px; height:40px;">Ver mapa</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12 mt-2 mb-2">
                <div class="bg-light p-3 shadow rounded-3" style="border: 3px solid #A9885D;">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/copa.png" alt="arco" style="width:125px; height: 125px;">
                    </div>
                    <h1 class="text-center mt-4" style="font-family: 'Great Vibes', cursive; color:#A9885D;">Fiesta</h1>
                    <h6 class="text-center mt-3 text-uppercase letra-texto">sábado 12 de noviembre 18.30hs</h6>
                    <p class="letra-texto text-muted text-center fs-5 mt-3">Dirección Las Glicinas 1880, Lujan Provincia de Buenos Aires</p>
                    <div class="d-flex justify-content-center mt-5">      
                        <a class="text-muted text-uppercase text-decoration-none align-middle" role="button" data-bs-toggle="modal" data-bs-target="#mapaQuinta" ><img src="img/map.jpg" alt="mapa" style="width:40px; height:40px;">Ver mapa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12 mt-2 mb-2">
                <div class="bg-light p-3 shadow rounded-3" style="border: 3px solid #A9885D;">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/vistimenta.png" alt="arco" style="width:125px; height: 125px;">
                    </div>       
                    <h1 class="text-center mt-4" style="font-family: 'Great Vibes', cursive; color:#A9885D;">Dress Code</h1>
                    <h6 class="text-center mt-3 text-uppercase letra-texto">semi formal</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xm-12 mt-2 mb-2">
                <div class="bg-light p-3 shadow rounded-3 " style="border: 3px solid #A9885D;">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/regalos.png" alt="arco" style="width:125px; height: 125px;">
                    </div>
                    <h1 class="text-center mt-4" style="font-family: 'Great Vibes', cursive; color:#A9885D;">Regalos</h1>
                    <p class="letra-texto text-muted text-center mt-3">Si queres, podes hacernos un regalo para nuestra boda o luna de miel. Hace clic para ver nuestros datos bancarios y hacer una transferencia, un depósito o lluvia de sobres.</p>
                </div>
            </div>
        </div>    
    </section>
-->
<!-- SEPARADOR -->   
    <section class="container d-flex justify-content-center mt-5 mb-3">
        <img class="img-fluid " src="img/separadores/separador.png" alt="sepador">
    </section>

<!-- TARJETAS -->       
<section class="container-fluid mt-5">
        <div class="row d-flex justify-content-center">            
            <div class="card bg-light p-3 shadow rounded-3 my-3 mx-1" style="width: 18rem; border: 3px solid #A9885D;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/anillos.png" alt="anillos" style="width:90px; height: 90px;">
                    </div>
                    <h4 class="card-title text-center titulo-card mt-3 mb-3">Ceremonia</h4>
                    <div>
                        <h6 class="text-center mt-3 text-uppercase letra-texto">sábado 12 de noviembre 15.00hs</h6>
                        <p class="letra-texto text-muted text-center mt-3">Dirección Las Glicinas 1880, Lujan Provincia de Buenos Aires</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="d-flex justify-content-center mt-3">      
                        <a class="text-muted text-uppercase text-decoration-none align-middle" role="button" data-bs-toggle="modal" data-bs-target="#mapaQuinta" ><img src="img/map.png" alt="mapa" style="width:40px; height:40px;">Ver mapa</a>
                    </div>
                </div>
            </div>
            <div class="card bg-light p-3 shadow rounded-3 my-3 mx-1" style="width: 18rem; border: 3px solid #A9885D;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/copa.png" alt="copa" style="width:90px; height: 90px;">
                    </div>
                    <h4 class="card-title text-center titulo-card mt-3 mb-3">Fiesta</h4>
                    <div>
                        <h6 class="text-center mt-3 text-uppercase letra-texto">sábado 12 de noviembre 18.30hs</h6>
                        <p class="letra-texto text-muted text-center mt-3">Dirección Las Glicinas 1880, Lujan Provincia de Buenos Aires</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="d-flex justify-content-center mt-3">      
                        <a class="text-muted text-uppercase text-decoration-none align-middle" role="button" data-bs-toggle="modal" data-bs-target="#datosBancarios" ><img src="img/more.png" alt="mapa" style="width:30px; height:30px;">Más Info</a>
                    </div>
                </div>
            </div>
            <div class="card bg-light p-3 shadow rounded-3 my-3 mx-1" style="width: 18rem; border: 3px solid #A9885D;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/vistimenta.png" alt="dress" style="width:90px; height: 90px;">
                    </div>
                    <h4 class="card-title text-center titulo-card mt-3 mb-3">Dress Code</h4>
                    <div>
                        <h6 class="text-center mt-3 text-uppercase letra-texto">Elegante</h6>
                        <p class="letra-texto text-muted text-center fs-5 mt-3">Él: Traje con corbata o moño y zapatos de vestir.</p>
                        <p class="letra-texto text-muted text-center fs-5 mt-3">Ella: Vestido de fiesta, mono o combinado de dos piezas.</p>
                    </div>
                </div>
            </div>        
            <div class="card bg-light p-3 shadow rounded-3 my-3 mx-1" style="width: 18rem; border: 3px solid #A9885D;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid mt-4" src="img/regalos.png" alt="regalo" style="width:90px; height: 90px;">
                    </div>
                    <h4 class="card-title text-center titulo-card mt-3 mb-3">Regalos</h4>
                    <div>                  
                        <p class="letra-texto text-muted text-center mt-3">Podes hacernos un regalo para nuestra boda o luna de miel. Hace clic para ver nuestros datos bancarios y hacer una transferencia, un depósito o lluvia de sobres.</p>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <div class="d-flex justify-content-center mt-3">      
                        <a class="text-muted text-uppercase text-decoration-none align-middle" role="button" data-bs-toggle="modal" data-bs-target="#datosBancarios" ><img src="img/more.png" alt="mapa" style="width:30px; height:30px;">Más Info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- SEPARADOR -->    
    <section class="container mt-5 mb-3">
        <div class="row d-flex justify-content-around">
            <div class="col-lg-4 col-sm-6 col-6">
                <img class="img-fluid " src="img/separadores/separador2.png" alt="sepador">
            </div>
            <div class="col-lg-4 col-sm-6 col-6">
                <img class="img-fluid " src="img/separadores/separador3.png" alt="sepador">
            </div>    
        </div>
    </section> 
<!--FOTO-->
<!--ver como estirar hacia los costados la iamgen sin perder calidad ver como lo hizo ane para que quede ese efecto
-->
    <section class="border shadow my-0 mx-0 manos">
        <div class="row my-0 mx-0">
            <div class="col-12" style="background-color: rgba(0,0,0,0); height: 250px;"></div>
        <!--<img class="col-12 mt-2 manos"  src="img/man1.jpg" alt="" >-->
        </div>
    </section>

<!--SEPARADOR-->
    <section class="container d-flex justify-content-center mt-5 mb-3">
        <img class="img-fluid " src="img/separadores/separador.png" alt="sepador">
    </section> 

<!--SUBIR FOTOS https://www.instagram.com/-->
<section class="border shadow my-0 mx-0">
    <div class="row d-flex justify-content-center my-0 mx-0">

        <div class="d-flex justify-content-center">
            <img class="img-fluid mt-5 mb-3" src="img/instagram.png" alt="Instagram" style="width:90px; height: 90px;">
        </div>
        <h2 class="text-center mt-3 mb-3">#Lari&Dani</h2>
        <h5 class="text-center mt-3 mb-3">Usa nuestro hashtag en instagram para subir tus fotos y videos</h5>
        <a class="btn boton rounded mt-3 mb-5 text-uppercase" type="button" href="#" target="_blank" role="button">Ver en instagram</a>        
    </div>
</section>


<section class="container mt-5 mb-3">
    <div class="row d-flex justify-content-around">
        <div class="col-lg-4 col-sm-6 col-6">
            <img class="img-fluid " src="img/separadores/separador2.png" alt="sepador">
        </div>
        <div class="col-lg-4 col-sm-6 col-6">
            <img class="img-fluid " src="img/separadores/separador3.png" alt="sepador">
        </div>    
    </div>
</section> 
<!--ASISTENCIA-->
<!--

<section class="border shadow my-0 mx-0 ">
    <div class="row d-flex justify-content-end my-0 mx-0">
        <h2 class="titulo-card mt-3 mb-3">Acompañanos</h2>
        
    </div>
    <div class="d-flex justify-content-end">
        <div class="form col-6">
            <div class="mb-2">
                <label for="texto" class="form-label">Por favor, recordá confirmar asistencia antes del 30 de Septiembre</label>
                <input class="form-control" type="hidden" id="texto">
            </div>
            <div class="form-floating mb-3 col-7">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo">
                <label class="text-muted" for="nombre">Nombre Completo</label>
            </div>
            <div class="form-floating mb-3 col-7">
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                <label class="text-muted" for="email">Correo Electrónico</label>
            </div>
            <div class="mb-2">
                <label for="texto" class="form-label">¿Tenés alguna restricción alimentaria?</label>
                <input class="form-control" type="hidden" id="texto">
            </div>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Vegetariano">
                    <label class="form-check-label" for="inlineCheckbox1">Vegetariano</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Vegano">
                    <label class="form-check-label" for="inlineCheckbox2">Vegano</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Celiaco">
                    <label class="form-check-label" for="inlineCheckbox3">Celiaco</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Ninguna">
                    <label class="form-check-label" for="inlineCheckbox4">Ninguna</label>
                </div>
            </div>
            <div class="form-floating col-7 mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="comentarios" style="height: 100px"></textarea>
                <label class="text-muted" for="comentarios">¿Comentarios o sugerencias adicionales?</label>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </div>
</section>
-->
<!-- ASISTENCIA GRID-->

<section class="s-bg border shadow mt-5 mb-5">
    <article class="s-container mb-3">
        <div class="d-row-1">
            <h2 class="mt-5 text-white" style="font-family: 'Great Vibes', cursive; font-size: 4rem;">Acompañanos</h2>
        </div>
        <div class="d-row-2">
            <form class="form" action="enviar.php" method="POST" enctype="text/plain">
                <div class="mb-2">
                    <label for="texto" class="form-label text-white fw-bold">Por favor, recordá confirmar asistencia antes del 30 de Septiembre</label>
                    <input class="form-control" type="hidden" id="texto">
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre Completo">
                    <label class="text-muted" for="nombre">Nombre Completo</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label class="text-muted" for="email">Correo Electrónico</label>
                </div>
                <div class="mb-2">
                    <label for="texto" class="form-label text-white fw-bold">¿Tenés alguna restricción alimentaria?</label>
                    <input class="form-control" type="hidden" id="texto">
                </div>
                <div class="check-grid-row mb-3">
                    <div class="form-check form-check-inline" id="bg-check">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Vegetariano">
                        <label class="form-check-label text-white fw-bold" for="inlineCheckbox1">Vegetariano</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Vegano">
                        <label class="form-check-label text-white fw-bold" for="inlineCheckbox2">Vegano</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Celiaco">
                        <label class="form-check-label text-white fw-bold sombra" for="inlineCheckbox3">Celiaco</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Ninguna">
                        <label class="form-check-label text-white fw-bold" for="inlineCheckbox4">Ninguna</label>
                    </div>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Leave a comment here" id="comentarios" name="comentarios" style="height: 100px"></textarea>
                    <label class="text-muted" for="comentarios">¿Comentarios o sugerencias adicionales?</label>
                </div>
                <button class="btn btn-dorado mb-3" type="submit">Enviar</button>
            </form>
        </div>
    </article>    
</section>

<section class="mt-5">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(195,139,34); background: linear-gradient(0deg, rgba(195,139,34,0.26934523809523814) 0%, rgba(253,160,45,0.0032387955182072714) 100%); ">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="mt-5">
                        <h1 class="text-center text-white" style="font-family: 'Great Vibes', cursive; font-size: 6rem; text-shadow: black 0.01em 0.01em 0.07em;">¡ Los Esperamos !</h1>
                    </div>
                    <div class="d-flex justify-content-end col-12 mt-3">
                        <p class="text-white text-muted">&#9400 Todos los derechos reservados 2022  |<a href="https://github.com/danielvsr" class="btn" target="_blank"><i class="bi bi-github"></i></a>Daniel Cárdenas</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>

<!-- Modal -->
<div class="modal fade" id="mapaQuinta" tabindex="-1" aria-labelledby="mapaQuintaLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7816.937945244478!2d-59.140847522582305!3d-34.53791640830124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcaecd081aa9bd2f8!2zMzTCsDMyJzE4LjgiUyA1OcKwMDgnMTYuNCJX!5e0!3m2!1ses-419!2sar!4v1643915359318!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
     
            <div>
                <p class="letra-texto text-muted text-center mt-3">Las Glicinas 1880, Lujan Provincia de Buenos Aires</p>
                <p class="letra-texto text-muted text-center mt-3">Indicaciones: Ruta N° 7 - Salida Calle Roca (posterior a RP 192)</p>
            </div>    
        </div>
      </div>
    </div>
</div>
<!-- MODAL ORGANIZACIÓN FIESTA-->
<div class="modal fade" id="datosBancarios" tabindex="-1" aria-labelledby="mapaQuintaLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title letra-texto" id="exampleModalLabel">DATOS BANCARIOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-10 bg-white shadow rounded-3" style="width: 18rem; border: 2px solid #A9885D;">
                        <div class="">
                            <p class="letra-texto text-muted mt-3">Titular: Campos Torres Larisa</p>
                            <p class="letra-texto text-muted mt-3">CBU: 1500617400061760881614</p>
                            <p class="letra-texto text-muted mt-3">Alias: CANTO.VASO.ESPIA</p>
                            <p class="letra-texto text-muted mt-3">CUIL: 27-94921871-1</p>
                            <p class="letra-texto text-muted mt-3">DNI: 94.921.871</p>
                        </div>    
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<!-- MODAL DATOS BANCARIOS-->
<div class="modal fade" id="datosBancarios" tabindex="-1" aria-labelledby="mapaQuintaLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title letra-texto" id="exampleModalLabel">DATOS BANCARIOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-10 bg-white shadow rounded-3" style="width: 18rem; border: 2px solid #A9885D;">
                        <div class="">
                            <p class="letra-texto text-muted mt-3">Titular: Campos Torres Larisa</p>
                            <p class="letra-texto text-muted mt-3">CBU:</p>
                            <p class="letra-texto text-muted mt-3">Alias:</p>
                            <p class="letra-texto text-muted mt-3">CUIL:</p>
                            <p class="letra-texto text-muted mt-3">DNI: 94.921.871</p>
                        </div>    
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</html>
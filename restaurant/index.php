<!doctype html>
<html lang="es">
    <head>
        <title>Restaurante</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- https://boxicons.com/ -->
        <link 
        href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' 
        rel='stylesheet'
        >

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!-- Nabvar menu de navegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container">
                <a class="navbar-brand" href="#"><i class='bx bx-fork '></i> Comedor Karen</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu">Menu del Dia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chefs">Chefs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonio">Testimonio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>    
                </div>

            </div>
            
        </nav>
        <!-- Inicio -->
        <section id="banner" class="container-fluid p-0">
            <div class="banner-img" style="position: relative; background:url('img/comedor.jpg') center/cover no-repeat; height:400px; ">
            <div>
                <div class="banner-text" style="border: 20px; 
                padding: 30px 0 30px 0; position: absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center; color:azure;
                background-color: #ffffff05; backdrop-filter: blur(5px); -webkit-backdrop-filter:blur(25px);">
                    <h1>Comedor Karen!</h1>
                   <p>La mejor opción para disfrutar de un buen plato
                    en un ambiente acogedor y asecible.</p>
                    <a 
                    href="#menu" 
                    class="btn btn-primary"
                    role="button"
                    style="padding: 10px 35px;"
                    >Ver Menu</a>
                </div>
            </div>
        </section>
        <!-- Bienvenidad -->
        <section id="id" class="text-center">
            <div  class="jumbotron bg-dark text-white" style="padding: 45px;" >
                <h2>Bienvenidio al Comedor Karen</h2>
                <p>Descubre una experiencia culinario y unica</p>
                <button
                class="btn btn-outline-primary"
                type="button"
                style="padding: 10px 35px;"
                >
                Mas informacion
                </button>
            </div>
        </section>
        <!-- Chefs -->
        <section id="chefs" class="container mt-4 text-center" style="padding: 0 0 80px  0;">
            <h2 class="text-center mt-5" style="padding: 0 0 15px 0;">Nuestros Chefs</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/colaboradores/chefs-1- (1).jpg" 
                        class="card-img-top" />
                        <div class="card-body">
                            <h5 class="text-center">Sofia Alejandra</h5>
                            <p class="card-text col d-flex">
                                Es el chef principal del comedor. Su receta es la mas solicitada por
                                los clientes, ya que su saber hacer le permite crear platillos
                                originales y exquisitos.
                            <br></br>
                                Cocina Venezolana, especialista en Carnes.
                            </p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-facebook-circle"></i></a>
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/colaboradores/chefs-1- (2).jpg" 
                        class="card-img-top" />
                        <div class="card-body ">
                            <h5 class="text-center">Dulce Maria</h5>
                            <p class="card-text">
                                Es la asistente de cocina, ayuda a Sofía en todo lo
                                relacionado con la preparación de las recetas. Tiene un gran
                                conocimiento en la ciencia culinaria y se encarga de realizar
                                tareas administrativas para mantener el funcionamiento del comedor.
                                <br>
                            </p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-facebook-circle"></i></a>
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="img/colaboradores/chefs-1-(3).jpg" 
                        class="card-img-top" />
                        <div class="card-body">
                            <h5 class="text-center">Nicol Rodriguez</h5>
                            <p class="card-text">
                                Es el jefe de seguridad del comedor. Se encarga de velar
                                por la integridad física de todos los colaboradores y de
                                controlar el acceso al edificio donde se encuentra ubicado. Además,
                                es quien realiza las visitas periódicas a los locales para verific
                                que todo esté en orden.
                            </p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-facebook-circle"></i></a>
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="text-dark me-2" style="font-size: 30px;"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- Testimonio -->
        <section id="testimonio" class="bg-light py-5">
            <div class="container">
                <h2 class="text-center">Testimonios</h2>
                <div class="row">
                    <div class="col-md-6 d-flex"  style="padding: 10px;">
                        <div class="card md-4 w-100">
                            <div class="card-body">
                                <p class="card-text">
                                    "Me gustan mucho los platillos del comedor, pero lo mejor
                                    son sus amables camareros. Me recomiendan constantemente."
                                </p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                Oscar Uh
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex"  style="padding: 10px;">
                        <div class="card md-4 w-100">
                            <div class="card-body">
                                <p class="card-text">
                                    "La verdadera magia del comedor está en su ubicación. 
                                    Está cerca de mis trabajos diarios y me permite salir sin tener
                                    que tomar una decisión difícil. Gracias a ellos puedo dis
                                    frutar un buen momento después del trabajo."
                                </p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                Oscar Uh
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex" style="padding: 10px;">
                        <div class="card md-4 w-100">
                            <div class="card-body">
                                <p class="card-text">
                                    "No conozco a nadie como el chef Carlos. Es increíble
                                    cómo puede preparar platos tan sabrosos y nutritivos. Tod
                                    los días veo a mi familia feliz por la cena. ¡Gra
                                    cias, Sofia!"
                                </p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                Oscar Uh
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex" style="padding: 10px;">
                        <div class="card md-4 w-100">
                            <div class="card-body">
                                <p class="card-text">
                                    "Me encanta ver cómo se transforma un plato simple en algo
                                    impresionante gracias al talento de Ana. Me gusta mucho que
                                    puedan adaptarse a las preferencias de cada cliente para ofrecer
                                    lo mejor según su paladar."
                                </p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                Oscar Uh
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu -->
        <section id="menu" class="container text-center" style="padding: 80px 0;">
            <h2 class="text-center" style="padding: 0 0 60px 0;">Menu: <strong>Lo mas recomendado</strong></h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">

                <div class="col d-flex">
                    <div class="card">
                        <img src="img/menu/platillo (3).jpg" 
                        alt="Imagen de tortilla chipriota">
                        <div class="card-body">
                            <h5 class="card-title">Tortilla Chipriota</h>
                            <p class="card-text">La clásica tortilla de patata a
                                base de garbanzos y maíz.
                            </p>
                            <p class="card-text small"><strong>Ingredientes:</strong>Arros, Frijoles, Mantequilla</p>
                            <p class="card-text"><strong>Precio:</strong> $3.99</p>
                        </div>    
                    </div>        
                </div>
                <div class="col d-flex">
                    <div class="card">
                        <img src="img/menu/platillo (2).jpg" 
                        alt="Imagen de tortilla chipriota">
                        <div class="card-body">
                            <h5 class="card-title">
                                Pollo al ajillo con espinacas y pan tostado
                            </h>
                            <p class="card-text">
                                El clásico pollo al ajillo, acompañado por una cuchar
                                ada de espinacas frescas y un pan tostado.
                            </p>
                            <p class="card-text"><strong>Precio:</strong> $3.99</p>
                        </div>    
                    </div>        
                </div>
                <div class="col d-flex">
                    <div class="card">
                        <img src="img/menu/platillo (1).jpg" 
                        alt="Imagen de tortilla chipriota">
                        <div class="card-body">
                            <h5 class="card-title">
                                Tostada de queso y huevo con tomate frito
                            </h>
                            <p class="card-text">
                                La típica tostada de queso y huevo, acompañ
                                del jugoso tomate frito.
                            </p>
                            <p class="card-text"><strong>Precio:</strong> $3.99</p>
                        </div>    
                    </div>        
                </div><div class="col d-flex">
                    <div class="card">
                        <img src="img/menu/platillo (4).jpg" 
                        alt="Imagen de tortilla chipriota">
                        <div class="card-body">
                            <h5 class="card-title">
                                Ensalada de frutas con aguacate y miel
                            </h>
                            <p class="card-text">
                                Frutas frescas mezcladas con aguacate y un poco
                                de azúcar para darle el sabor de la miel.
                            </p>
                            <p class="card-text"><strong>Precio:</strong> $3.99</p>
                        </div>    
                    </div>        
                </div>

            </div>
        </section>
        <!-- Encragos -->
        <section class=" bg-light mt-4" style="padding: 30px;">
            <h2 class="text-center">Envios Rapidos </h2>
            <p class="text-center card-title">Estamos aqui para servirle</p>
            <form action="?" method="post" class="container">
                
                <div class="mb-3">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="Escribe tu Nombre" required>
                </div>

                <div class="mb-3">
                    <label for="email">Correo electronico</label>
                    <input type="email" class="form-control"  id="email" name="Ingresa tu correo"
                    required>
                </div>

                <div class="mb-3">
                    <label for="phone">Telefono</label>
                    <textarea name="mensaje" class="form-control"  id="" cols="30" rows="10">Mensaje</textarea>
                </div>
                <div class=" mb-4 text-center">
                    <button style="padding: 14px 40px;" type="submit" class="btn btn-outline-success text-centr">Enviar Su Pedido</button>
                </div>

            </form>
            
        </section>
         <!-- Horario de atencion -->
         <section id="id" class="text-center">
            <div  class="jumbotron " style="padding: 45px;" >
                <h2>Horario de atencion</h2>
                <hr>
                <div>
                    <p> <strong>Lunes - Viernes</strong></p>
                    <p> <strong>11:00 a.m - 10:00 p.m</strong></p>
                </div>
                <hr>
                <div>
                    <p> <strong>Sabado</strong></p>
                    <p> <strong>12:00 a.m - 5:00 p.m</strong></p>
                </div>
                <hr>
                <div>
                    <p> <strong>Domingo</strong></p>
                    <p> <strong>07:00 a.m - 4:00 p.m</strong></p>
                </div>
                <hr>
             
                <button
                class="btn btn-outline-primary"
                type="button"
                style="padding: 14px 40px;"
                >
                Mas informacion
                </button>
            </div>
        </section>
        <!-- Contactos -->
        <footer class="footer bg-dark text-light">
            <section class="footer__container container">
                <nav class="nav nav--footer">
                    <h2 class="footer__title">Comedor Karen</h2>

                    <ul class="nav__link nav__link--footer container">
                        <li class="nav__items">
                            <a href="#inicio" class="nav__links">Inicio</a>
                        </li>
                        <li class="nav__items">
                            <a href="#menu" class="nav__links">Menu del Dia</a>
                        </li>
                        <li class="nav__items">
                            <a href="#chefs" class="nav__links">Chefs</a>
                        </li>
                        <li class="nav__items">
                            <a href="#testimonio" class="nav__links">Testimonio</a>
                        </li>
                    </ul>
                </nav>

                <form class="footer__form">
                    <h2 class="footer__newsletter">Suscribite</h2>
                    <div class="footer__inputs">
                        <input type="email" placeholder="Email:" class="footer__input">
                        <input type="submit" value="Resgistrate" class="footer__submit">
                    </div>
                </form>
            </section>

            <section class="footer__copy container">
                <div class="social-icons mt-3">
                    <a href="#" class="text-dark me-2" style="font-size: 30px;"><i style="color: #fff;" class="bx bxl-facebook-circle"></i></a>
                    <a href="#" class="text-dark me-2" style="font-size: 30px;"><i style="color: #fff;" class="bx bxl-twitter"></i></a>
                    <a href="#" class="text-dark me-2" style="font-size: 30px;"><i style="color: #fff;" class="bx bxl-instagram"></i></a>
                </div>

                <h3 class="copy__right">Derechos reservados 2024 &copy: <strong>Comedor Karen</strong></h3>
            </section>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

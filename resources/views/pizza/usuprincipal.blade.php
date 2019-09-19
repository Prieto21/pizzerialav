@extends('pizza.layoutusu')
@section('contenido')
    
<body div class="fondo" background="{{asset('/imagenes/fondo.jpg')}}">
   

    <!-- Productos -->

    <div class="container ">
        <br>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>¡Hola Sapori D’italia, Te Da La Bienvenida!</strong> Tu Podras Chequear Nuestras Pizzas Y Pedir La Que Más Te Guste.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="card-deck">
            <div class="card">

                <img class="card-img-top" src="{{asset('/imagenes/pizza1.jpg')}}" alt="Card image cap">
                <div class="card-body">

                    <h5 class="card-title">Pizza Hawaiana</h5>
                    <p class="card-text">Odiada y amada por muchos, pero sin lugar a dudas es una de las más populares.
                        A pesar de su nombre, esta pizza no se creó en Hawái, sino en Alemania. Sus ingredientes son similares a la pizza tradicional,
                        ya que contiene queso,
                        salsa de tomate, a esto se le añade pedazos de piña y, en ocasiones, trozos de jamón, durazno o cereza.
                </div>
                <div class="card-footer">
                <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                </div>
            </div>
            <div class="card">

                <img class="card-img-top" src="{{asset('/imagenes/pizza2.jpg')}}" alt="Card image cap">
                <div class="card-body">

                    <h5 class="card-title">Pizza Diávola</h5>
                    <p class="card-text">Es una pizza típica de Italia y no es apta para todo el mundo.
                        Ya que su toque original es su salsa que siempre es picante. También se le agrega chorizo picante,
                        salami y, por supuesto, queso. A pesar de que no está entre las favoritas de las personas,
                        este es uno de los tipos de pizza que más se venden actualmente. Sobre todo en latinoamérica y algunos países europeos.
                </div>
                <div class="card-footer"><center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                </div>
            </div>
            <div class="card">

                <img class="card-img-top" src="{{asset('/imagenes/pizza3.jpg')}}" alt="Card image cap">
                <div class="card-body">

                    <h5 class="card-title">Pizza primavera</h5>
                    <p class="card-text">Tal y como dice su nombre, esta pizza fue bautizada porque evoca los colores de la primavera. Sus ingredientes son pimentones verdes, maíz, huevo duro, tomate y queso. Y su preparación es igual a la de la pizza margarita solo que antes de cocinarla hay que colocarle lo anteriormente explicado. Definitivamente, es uno de los tipos de pizza que en Eme de Mujer nos encanta comer.</p>
                </div>
                <div class="card-footer"><center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                </div>
            </div>


            <!--de tres en tres-->




            <div class="container py-4">

                <div class="card-deck">
                    <div class="card">

                        <img class="card-img-top" src="{{asset('/imagenes/pizza4.jpg')}}" alt="Card image cap">
                        <div class="card-body">

                            <h5 class="card-title">Pizza Margarita</h5>
                            <p class="card-text">Es la clásica pizza italiana, ya que recrea los colores de su bandera.
                                La primera fue preparada en 1889 en el Palacio Real de Capodimonte, Italia. Sus ingredientes son:
                                queso mozzarella, albahaca, aceite de oliva y salsa de tomate.
                            </p>
                        </div>
                        <div class="card-footer"><center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                        </div>
                    </div>
                    <div class="card">

                        <img class="card-img-top" src="{{asset('/imagenes/pizza5.jpg')}}" alt="Card image cap">
                        <div class="card-body">

                            <h5 class="card-title">Pizza Funghi</h5>
                            <p class="card-text">La palabra italiana “Funghi” significa hongos.
                                Y esta pizza tiene como protagonistas los champiñones junto con el queso mozzarella.
                                Es deliciosa y puede convertirse en la comida perfecta sin importar la hora del día.
                                Desde un buen almuerzo hasta un pequeño snack en la tarde.</p>
                        </div>
                        <div class="card-footer">
                        <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                        </div>
                    </div>
                    <div class="card">

                        <img class="card-img-top" src="{{asset('/imagenes/pizza6.jpg')}}" alt="Card image cap">
                        <div class="card-body">

                            <h5 class="card-title">Pizza Prosciutto</h5>
                            <p class="card-text">Los tipos de pizza varían según sus ingredientes. Su significado viene de la palabra “jamón”, 
                                y por eso que es quienes preparan esta receta tienen la posibilidad de agregar el que ellos deseen. Sin embargo,
                                 muchos locales le agregan otro tipo de ingredientes. Alguno de ellos es el maíz, albahaca o rodajas de cebolla.</p>
                        </div>
                        <div class="card-footer">
                        <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                        </div>
                    </div>



                    <!--de tres en tres-->






                    <div class="container py-4">

                        <div class="card-deck">
                            <div class="card">

                                <img class="card-img-top" src="{{asset('/imagenes/pizza7.jpg')}}" alt="Card image cap" height="300">
                                <div class="card-body">

                                    <h5 class="card-title">Pizza Calzone</h5>
                                    <p class="card-text">El calzone es de los platos italianos más característicos en todo el mundo.
                                         En su interior tiene queso, champiñones, salsa de tomate, entre otros ingredientes que se desee añadir.
                                          Aunque parezca complicado de hacer, aquí les dejamos una sencilla receta para que la prepares cuando desees.</p>
                                </div>
                                <div class="card-footer">
                                <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                                </div>
                            </div>
                            <div class="card">

                                <img class="card-img-top" src="{{asset('/imagenes/pizza8.jpg')}}" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Pizza cuatro estaciones</h5>
                                    <p class="card-text">Es la pizza perfecta para los indecisos, ya que contiene cuatro tipos de topping en honor a cada una de las estaciones. 
                                        En una de las secciones tiene maíz y cebolla, otra tiene anchoas, hongos y la última pimientos con aceitunas. 
                                        Todos estos ingredientes pueden variar dependiendo del establecimiento</p>
                                </div>
                                <div class="card-footer">
                                <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                                </div>
                            </div>
                            <div class="card">

                                <img class="card-img-top" src="{{asset('/imagenes/pizza9.jpg')}}" alt="Card image cap">
                                <div class="card-body">

                                    <h5 class="card-title">Pizza Cuatro Quesos</h5>
                                    <p class="card-text">Es la preferida por los amantes del queso, ya que es el ingrediente que más contiene.
                                         Generalmente incluye queso parmesano, crema, chedda y gorgonzola, esto de una explosión de sabores inimaginable, 
                                         además también se añaden en los bordes.</p>
                                </div>
                                <div class="card-footer"><center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                                </div>
                            </div>


                            <!--de tres en tres-->

                            <div class="container py-4">

                                <div class="card-deck">
                                    <div class="card">

                                        <img class="card-img-top" src="{{asset('/imagenes/pizza10.jpg')}}" alt="Card image cap">
                                        <div class="card-body">

                                            <h5 class="card-title">Pizza Carbonara</h5>
                                            <p class="card-text">Tradicionalmente la carbonara incluía un huevo duro, una yema, aceite, manteca de cerdo y pimienta negra.
                                                 Pero con el paso de los años se le añadió el distinguido y amado bacon. Es de los tipos de pizza más codiciados por los fanáticos de esta comida. Y lo mejor, es que su preparación es tan 
                                                simple como la de la margarita. Solo debes agregarle un poco más de pimienta y jamón.</p>
                                        </div>
                                        <div class="card-footer">
                                        <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <img class="card-img-top" src="{{asset('/imagenes/pizza11.jpg')}}" alt="Card image cap">
                                        <div class="card-body">

                                            <h5 class="card-title">Pizza Barbacoa</h5>
                                            <p class="card-text">Creada en Estados Unidos e incluye una gran cantidad de carne. En ella se puede encontrar en su topping pedazos de carne de ternera,
                                                 pollo, bacon, cebolla, tomate, queso mozzarella y salsa de barbacoa.</p>
                                        </div>
                                        <div class="card-footer">
                                        <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <img class="card-img-top" src="{{asset('/imagenes/pizza12.jpg')}}" alt="Card image cap">
                                        <div class="card-body">

                                            <h5 class="card-title">Pizza vegetariana</h5>
                                            <p class="card-text">Que no ames la carne no significa que debes dejar de comer pizza. Es por eso que los vegetarianos idearon una forma para darle un toque único a este delicioso platillo. En ella se puede encontrar ingredientes como champiñones, tomate, pimientos rojos y verdes, cebolla, elote y queso parmesano. Su centro está preparado a base de vegetales frescos. 
                                                Es uno de los tipos de pizza más aclamados por la crítica mundial.</p>
                                        </div>
                                        <div class="card-footer">
                                        <center><button type="button" class="btn btn-warning">AGREGAR</button></center>
                                        </div>
                                    </div>



                                    <!--enviar pedido-->

                                    <div class="container py-4">
                                        <section>
                                            <center>

                                                <a href="http://localhost/pizzerialav/public/cuenta/pedido"><button type="button" class="btn btn-primary btn-lg btn-block btn-outline-warning">
                                                    Realizar Pedido</button></a>

                                            



                                            </center>


@endsection
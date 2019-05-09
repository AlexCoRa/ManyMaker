@extends('layouts.app')

@section('title', 'Bienvenido a DeportCarMex')

@section('body-class', 'landing-page')

@section('styles')
  <style>   
    .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .team .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
        }
        .team .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }
</style>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/carro_portada.jpg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Velocidad es la que necesitas.</h1>
                <h4>¿Quieres un carro deportivo y facil de encontrar?
                    Compra El auto de tus sueños en el mejor lugar, seguro y rápido, deja esa carcacha de carro que tienes en tu garage y aqui encontraras uno mejor, levantaras miradas de toda la gente.
                .</h4>
                 <a href="https://www.youtube.com/watch?v=BMKwueexahI" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> Conocenos
                  </a>
                {{--<br />--}}
                {{--<a href="#" class="btn btn-danger btn-raised btn-lg">--}}
                    {{--<i class="fa fa-play"></i> ¿Cómo funciona?--}}
                {{--</a>--}}
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">¿Quieres saber algo de nosotros?</h2>
                    <h5 class="description">Somos una empresa Mexicana que se encarga de la compra y venta de autos deportivos, nosotros los conseguimos y ustedes los compran.</h5>
                </div>
            </div>

            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-primary">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Atendemos tus dudas</h4>
                            <p>Atendemos rápidamente cualquier consulta que tengas vía chat. No estás sólo, sino que siempre estamos atentos a tus inquietudes.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Pago seguro</h4>
                            <p>Todo pedido que realices será confirmado a través de una llamada y enviaremos tu auto a domicilio.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Información privada</h4>
                            <p>Los pedidos que realices sólo los conocerás tú a través de tu panel de usuario. Nadie más tiene acceso a esta información.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section text-center">
            <h2 class="title">Autos Deportivos</h2>

           <!-- <form class="form-inline" method="get" action="{{ url('/search') }}">
                <input type="text" placeholder="¿Qué producto buscas?" class="form-control" name="query" id="search">
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>-->

            <div class="team">
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ $category->featured_image_url }}" alt="Imagen representativa de la categoría {{ $category->name }}" class="img-raised img-circle">
                            <h4 class="title">
                                <a href="{{ url('/categories/'.$category->id) }}">{{ $category->name }}</a>
                            </h4>
                            <p class="description">{{ $category->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="section text-center">
    <h2 class="title">Nuestro equipo de venta</h2>

    <div class="team">
        <div class="row">
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{ asset('img/diego.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">Diego Al <br />
                        <small class="text-muted">Conductor profesional de F1</small>
                    </h4>
                    <p class="description">Hola, me llamo Diego, spy conductor profesional de F1 me apasionan los deportes de motor.</p>
                    <a href="https://twitter.com/diegoal1811" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/diegoal1811/" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/diegoal1811?jazoest=2651001224855685755756989565186651148551519052113100896557105845612210870908281907511280507152668397103586510012052458297571116754771188798116101726855775711072491081031078712281102659957121105754587768511511198119" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                </div><!--diego-->
            </div>
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{ asset('img/alex.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">Alex CoRa<br />
                        <small class="text-muted">Vendedor</small>
                    </h4>
                    <p class="description">Hola, me llamo Alejandro, me encargo de la venta de autos de tus sueños, si tienes alguda pregunta a la hora de comprar, no dudes en contactarme.</p>
                    <a href="https://twitter.com/search?q=%40alex50667600" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/cora.alex/" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/alex.contrerasaguilar" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                </div><!--alex-->
            </div>
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{ asset('img/kike.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">Luis Enrique<br />
                        <small class="text-muted">Conductor profesional de autos deportivos</small>
                    </h4>
                    <p class="description">Hola me llamo Luis Enrique, soy un conductor profesional de autos deportivos y mi pasión empezó cuando compré mi primer auto y espero que tambien tengan la misma pasión al comprar en nuestro sitio. </p>
                    <a href="https://www.instagram.com/luisjaimes33/" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.facebook.com/kike.jaimeslevario?jazoest=2651001224855685755756989565186651148551519052113100896557105845612210870908281907511280507152668397103586510012052458297571116754771188798116101726855775711072491081031078712281102659957121105754587768511511198119" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                </div><!--kike-->
            </div>
        </div>
    </div>
</div>
    <div class="col-md-8 col-md-offset-2">
                 <div class="team">
         <div class="row">
            <div class="col-md-4">
                 <div class="team-player">
                    <img src="{{ asset('img/carro_logo.jpg') }}" alt="Thumbnail Image">
                 </div>
                    </div>
                         <div class="col-md-4">
                             <div class="team-player">
                                    <img src="{{ asset('img/empresa.jpg') }}" alt="Thumbnail Image">
                             </div>
                         </div>
             <div class="col-md-4">
                     <div class="team-player">
                        <img src="{{ asset('img/carro_logo.jpg') }}" alt="Thumbnail Image">
                     </div>
                 </div>
            </div>
         </div>
    </div>
    <div class="section landing-section">
       
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title">¿Aún no te has registrado?</h2>
                    <h4 class="text-center description">Registrate ingresando tus datos basicos y podras realizar tus pedidos a través de nuestro carrito de compras. Si aún no te decides, de todas formas, con tu cuenta de usuario podrás hacer todas tus consultas sin compromiso.</h4>
                    <form class="contact-form" method="get" action="{{ url('/register') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo electrónico</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">Tu mensaje</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised">
                                    Iniciar registro
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@include('includes.footer')
@endsection

@section('scripts')
    <script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
    <script>
        $(function () {
            // 
            var products = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              prefetch: '{{ url("/products/json") }}'
            });            

            // inicializar typeahead sobre nuestro input de búsqueda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: products
            });
        });
    </script>
@endsection

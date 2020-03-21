<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Caio Reis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @endauth
        </div>
        @endif
    </div>

    <div class="content">
            <pagina tamanho="10">
                <painel titulo="Contatos">
                    <div class="col-md-4">
                        <caixa qtd="1" titulo="Telefone Profissional" url="https://wa.me/559180375763?text=Ol%C3%A1%2C%20Caio!%20Entrei%20em%20contato%20com%20voc%C3%AA%20para%3A...%0A%0A%0AForte%20Abra%C3%A7o!" cor="#1b9a59" icone="ion-social-whatsapp-outline" nome_link="Falar com Caio"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa qtd="35" titulo="Artigos" url="https://www.linkedin.com/in/caio-reis-guimaraes/" cor="#0077b5" icone="ion-social-linkedin-outline" nome_link="Ver Perfil"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa qtd="15" titulo="Vídeos/Tutoriais" url="https://www.youtube.com/user/caioreis350/featured?view_as=subscriber" cor="#db4437" icone="ion-social-youtube-outline" nome_link="Acessar Knel"></caixa>
                    </div>
                </painel>
            </pagina>

            <pagina tamanho="12">
                <painel titulo="Portfólio">
                    <div class="col-md-4">
                        <caixa qtd="100" titulo="Hard & Soft Skills" url="{{route('habilidades.index')}}" cor="#64c1ff" icone="ion-calculator" nome_link="Comprovar Habilidades "></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa qtd="2" titulo="Projetos" url="#" cor="#0091ea" icone="ion-social-github" nome_link="Verificar Projetos "></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa qtd="29" titulo="Cursos Online" url="#" cor="#0064b7" icone="ion-university" nome_link="Acompanhar Aprendizado "></caixa>
                    </div>
                </painel>
            </pagina>  
        </div>
</body>

</html>
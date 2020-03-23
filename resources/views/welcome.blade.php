@extends('layouts.app')

@section('content')
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
@endsection
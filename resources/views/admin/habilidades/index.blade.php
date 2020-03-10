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
            <caixa qtd="15" titulo="Palestras e Tutoriais" url="https://www.youtube.com/user/caioreis350/featured?view_as=subscriber" cor="#db4437" icone="ion-social-youtube-outline" nome_link="Acessar Canal"></caixa>
        </div>
    </painel>
</pagina>

<pagina tamanho="12">
    <painel titulo="Portfólio">
        <div class="col-md-4">
            <caixa qtd="100" titulo="Hard & Soft Skills" url="#" cor="#64c1ff" icone="ion-calculator" nome_link="Comprovar Habilidades "></caixa>
        </div>
        <div class="col-md-4">
            <caixa qtd="2" titulo="Projetos" url="#" cor="#0091ea" icone="ion-social-github" nome_link="Verificar Projetos "></caixa>
        </div>
        <div class="col-md-4">
            <caixa qtd="29" titulo="Cursos Online" url="#" cor="#0064b7" icone="ion-university" nome_link="Acompanhar Aprendizado "></caixa>
        </div>
    </painel>
</pagina>

<pagina tamanho="12">
    <painel titulo="Habilidades">
        <tabela-lista v-bind:titulos="['#','Nome','Descrição','Tipo']" v-bind:itens="[[1,'Falar em Público','Reuniões, apresentações de negócios ou até mesmo em um discurso improvisado em um jantar a fala estará presente. Portanto, sempre busco me aprimorar com esta habilidade tão importante para o bom andamento dos negócios.','Soft Skill'],
        [2,'Consultar Bancos de Dados','A matéria-prima do trabalho de um cientista de dados são os dados. No mundo dos negócios, os dados normalmente estão armazenados em um banco de dados. Existem diversos tipos de bancos, mas todos convergem para a linguagem SQL.','Hard Skill']]" editar="#editar" ver="#ver" criar="#criar" deletar="#deletar" token="201306840052">
        </tabela-lista>
    </painel>
</pagina>
@endsection
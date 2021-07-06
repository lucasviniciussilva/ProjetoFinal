<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/extra.css') }}" rel="stylesheet">
    <title>Tela inicial</title>
</head>

<body>

    <div class="imagem"></div>

    <div class="topnav">
        <a href="#">Início</a>
        <a href="/cadastro">Formulário</a>
        <a href="/mostra">Listagem</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <article>
                    <h2>Sobre o site</h2>
                    <p>O site foi criado no ano de 2021 em meados de julho, com o intuito de finalizar um projeto para o curso full-stack da Skill Lab Brasil, requisitado pelo professor Paulo, sendo esse um projeto de conclusão de curso, se faz necessário um maior esforço para a sua criação, logo tentei fazer um site com um layout bonito e responsivo em que seria possível corresponder minimamente as expectativas do professor.</p>
                </article>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <article>
                    <h2>Se inscreva em nosso site</h2>
                    <p>Ao clicar no botão abaixo, é possível se inscrever no site e colocar suas informações pessoais e algumas coisas referentes ao seu gosto por filmes, séries, animes e jogos.</p>
                    <a href="../cadastro"><button class="button">Se inscrever</button></a>
                </article>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <article>
                    <h2>Pessoas que já se inscreveram</h2>
                    <p>Na parte da listagem, é possível encontrar pessoas que possuem o mesmo gosto que você, podendo assim criar uma comunidade de pessoas interagindo entre si.</p>
                    <a href="../mostra"><button class="button">Listagem</button></a>
                </article>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>Copyright &copy 2021 - by Lucas Vinícius </p>
        <p> Facebook | Twitter | Instagram </p>
    </footer>

</body>

</html>
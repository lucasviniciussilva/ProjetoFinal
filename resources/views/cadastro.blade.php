<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="Projeto final feito para o encerramento do curso full-stack feito pela Skill Lab Brasil." />
    <link rel="canonical" href="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <link rel="shortlink" href="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <meta property="og:site_name" content="cadastro" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:url" content="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <meta property="og:image" content="https://localhost/Final/projeto/public/img/pessoas.png" />
    <meta property="og:image:url" content="https://localhost/Final/projeto/public/img/pessoas.png" />
    <meta property="og:title" content="Pessoas e suas informações. fale sobre você." />
    <meta property="og:description" content="Trabalho final para ser o projeto de conclusão da skill lab brasil" />
    <meta name="author" content="Lucas Vinicius">
    <meta name="creator" content="Lucas Vinicius">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <meta name="twitter:title" content="Pessoas e suas informações." />
    <meta name="twitter:description" content="Trabalho final para ser o projeto de conclusão da skill lab brasil" />
    <meta itemprop="name" content="Pessoas e suas informações. fale sobre você." />
    <meta name="dcterms.title" content="Pessoas e suas informações. fale sobre você." />
    <meta name="dcterms.description" content="Trabalho final para ser o projeto de conclusão da skill lab brasil" />
    <meta name="dcterms.type" content="Text" />
    <meta name="dcterms.format" content="text/html" />
    <meta name="dcterms.identifier" content="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <title>Cadastro</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/tela">Início</a></li>
                        <li class="active"><a href="#">Formulário</a></li>
                        <li><a href="/mostra">Listagem</a></li>
                    </ul>
                </div>
            </div>
            <div class="imagem" alt="Imagem da logo do site: Pessoas e suas informações, fale sobre você"></div>
        </nav>

    </header>
    <br>
    <main>
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <div class="well">
                        <div class="teste">
                            <form action="{{route('cadastrar_pessoa')}}" method="POST">
                                <section>
                                    <h2>Insira suas informações</h2>
                                </section>
                                <br>
                                @csrf
                                <section>
                                    <label for="">Nome</label><br>
                                    <input class="text-input" type="text" name=nome placeholder="Digite seu nome" required>

                                    <br><br>

                                    <label for="">Email</label><br>
                                    <input class="text-input" type="email" name=email placeholder="Digite seu email" required>

                                    <br><br>

                                    <label for="">Idade</label> <br>
                                    <input class="text-input" type="number" name=idade placeholder="Digite sua idade" required>

                                    <br><br>

                                    <label for="">Filme favorito</label> <br>
                                    <input class="text-input" type="text" name=filme placeholder="Digite seu filme favorito">

                                    <br><br>

                                    <label for="">Jogo favorito</label> <br>
                                    <input class="text-input" type="text" name=jogo placeholder="Digite seu jogo favorito">

                                    <br><br>

                                    <label for="">Anime favorito</label> <br>
                                    <input class="text-input" type="text" name=anime placeholder="Digite seu anime favorito">

                                    <br><br>

                                    <label for="">Série favorita</label> <br>
                                    <input class="text-input" type="text" name=serie placeholder="Digite sua série favorita">

                                    <br><br>
                                </section>
                                <button>Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
        <footer class="footer navbar-bottom">
            <p>Copyright &copy 2021 - by Lucas Vinícius </p>
            <p> Facebook | Twitter | Instagram </p>
        </footer>
    </main>
</body>

</html>
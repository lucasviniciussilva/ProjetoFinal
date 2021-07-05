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
    <title>Listagem</title>
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
                        <li><a href="/cadastro">Formulário</a></li>
                        <li class="active"><a href="#">Listagem</a></li>
                    </ul>
                </div>
            </div>
            <div class="imagem"></div>
        </nav>

    </header>
    <br>
    <main>
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-sm-12">
                    <div class="well">
                        <div class="teste">
                            <section>
                                <h2>Pessoas</h2>
                            </section>
                            <br>
                            <table id="pessoa" class="table-responsive">
                                <tr>
                                    <th>Ações</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Idade</th>
                                    <th>Filme</th>
                                    <th>Jogo</th>
                                    <th>Anime</th>
                                    <th>Série</th>
                                </tr>
                                <section>
                                    @forelse ($cadastros as $cadastro)

                                    <tr>
                                        <td>
                                            <a href=excluir/{{$cadastro->id}}><input type='button' class="oi" value='Deletar'></a> &nbsp
                                            <a href=editar/{{$cadastro->id}}><input type='button' class="oi" value='Editar'></a>
                                        </td>
                                        <td>{{$cadastro->nome}}</td>
                                        <td>{{$cadastro->email}}</td>
                                        <td>{{$cadastro->idade}}</td>
                                        <td>{{$cadastro->filme}}</td>
                                        <td>{{$cadastro->jogo}}</td>
                                        <td>{{$cadastro->anime}}</td>
                                        <td>{{$cadastro->serie}}</td>
                                    </tr>

                                    @empty
                                    <table id="pessoa">
                                        <tr>
                                            <td>Sem pessoas cadastradas</td>
                                        </tr>
                                    </table>

                                    @endforelse
                            </table>
                            </section><br>

                            <!--<a href="cadastro"><button>Voltar</button></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br>
        <footer class="footer navbar-bottom">
            <p>Copyright &copy 2021 - by Lucas Vinícius </p>
            <p> Facebook | Twitter | Instagram </p>
        </footer>
    </main>
</body>

</html>
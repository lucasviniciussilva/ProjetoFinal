<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="../../public/css/style.css">-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="Projeto final feito para o encerramento do curso full-stack feito pela Skill Lab Brasil." />
    <link rel="canonical" href="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <link rel="shortlink" href="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <!--<meta name="facebook-domain-verification" content="waqwcihn3cfuebsxkotfzcavrl2huv" />-->
    <meta property="og:site_name" content="cadastro" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:url" content="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <meta property="og:image" content="https://img.ibxk.com.br/2014/4/materias/3511354759121434-t640.jpg?w=704" />
    <meta property="og:image:url" content="https://img.ibxk.com.br/2014/4/materias/3511354759121434-t640.jpg?w=704" />
    <meta property="og:title" content="EMAIL MARKETING PARA AULA" />
    <meta property="og:description" content="Texto de email marketing para a aula de Seo da skill lab brasil" />
    <meta name="author" content="Lucas Vinicius">
    <meta name="creator" content="Lucas Vinicius">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="http://localhost/Final/projeto/resources/views/cadastro.blade.php" />
    <meta name="twitter:title" content="EMAIL MARKETING PARA AULA" />
    <meta name="twitter:description" content="Email para aula, mostrar para o professor ver se está aceitável, em função de não ter tido muito tempo" />
    <meta itemprop="name" content="EMAIL MARKETING PARA AULA" />
    <meta name="dcterms.title" content="EMAIL MARKETING PARA AULA" />
    <meta name="dcterms.description" content="Email para aula, mostrar para o professor ver se está aceitável, em função de não ter tido muito tempo" />
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
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Formulário</a></li>
                        <li><a href="/mostra">Listagem</a></li>
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
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="well">
                        <div class="teste">
                            <form action="{{route('excluir_pessoa',['id'=>$cadastro->id])}}" method="POST">
                                @csrf
                                <br>
                                <label for="">Tem certeza que deseja excluir essa pessoa ?</label> <br><br>
                                <table id="pessoa" class="table-responsive">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Idade</th>
                                    </tr>
                                    <tr>
                                        <td>{{$cadastro->nome}}</td>
                                        <td>{{$cadastro->email}}</td>
                                        <td>{{$cadastro->idade}}</td>

                                    </tr>
                                </table><br><br>

                                <button>Sim</button>
                            </form><br>
                            <a href="../mostra"><button>Não</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <footer class="footer navbar-bottom">
            <p>Copyright &copy 2021 - by Lucas Vinícius </p>
            <p> Facebook | Twitter | Instagram </p>
        </footer>
    </main>
</body>

</html>
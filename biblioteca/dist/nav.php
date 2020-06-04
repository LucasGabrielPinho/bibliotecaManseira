<?php
    session_start();
    if (empty($_SESSION['usuLogin'])) {
        header("Location: login.php?msg=Faça o Login.");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard - Biblioteca</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Minha biblioteca</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#">
                <i class="fas fa-bars"></i>
            </button>
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></form>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="javascript:void(0)" >Configuração</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Sair</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Início</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Voltar ao Início
                            </a>
                            <div class="sb-sidenav-menu-heading">Empréstimos</div>
                            <a class="nav-link" href="emprestimo.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Emprestar Livro
                            </a>
                            <div class="sb-sidenav-menu-heading">Livros</div>
                            <a class="nav-link" href="livros.php" id="cadLivro">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Cadastrar livro
                            </a>
                            <a class="nav-link" href="genero.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Cadastrar genero
                            </a>
                            <div class="sb-sidenav-menu-heading">Amigos</div>
                            <a class="nav-link" href="amigos.php" id="listarAmigo">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cadastrar Amigo
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Usuário Logado:</div>
                        <?php echo $_SESSION['usuNome']; ?>
                    </div>
                </nav>
            </div>
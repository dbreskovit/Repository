<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Repositório | Diego Breskovit</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Website project developed in the programming class of the 2nd year of high school. Using HTML5, CSS3, Javascript and Bootstrap.">
  <meta name="keywords" content="HTML, CSS, JavaScript, Developer, Repository">
  <meta name="author" content="Diego Breskovit Morcelli">

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="shortcut icon" href="./assets/img/icon.png">
  <link rel="stylesheet" href="https://dbreskovit.github.io/000Webhost/remove-water-mark.css">
</head>

<body id="work">

  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <header id="sidebar">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="./assets/img/profile.png" class="img-fluid">
        <h1 class="text-light">Diego Breskovit</h1>
        <p>Sou estudante do 2º ano do Técnico em Informática no Instituto Federal Farroupilha Campus Santo Augusto.</p>

        <div class="social-links mt-3 text-center">
          <a target="_blank" href="https://youtu.be/dQw4w9WgXcQ"><i class="bx bxl-whatsapp"></i></a>
          <a target="_blank" href="https://www.facebook.com/diego.breskovit/"><i class="bx bxl-facebook"></i></a>
          <a target="_blank" href="https://github.com/dbreskovit"><i class="bx bxl-github"></i></a>
        </div>
        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="?k=home" class="active"><i class="bx bx-home"></i><span>Home</span></a></li>
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-code-slash"></i>Atividade 1
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?k=pages/A1/Q1">Questão 1</a></li>
                <li><a class="dropdown-item" href="?k=pages/A1/Q2">Questão 2</a></li>
                <li><a class="dropdown-item" href="?k=pages/A1/Q3">Questão 3</a></li>
                <li><a class="dropdown-item" href="?k=pages/A1/Q4">Questão 4</a></li>
              </ul>
            </li>
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-code-slash"></i>Atividade 2
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?k=pages/A2/Q1">Questão 1</a></li>
                <li><a class="dropdown-item" href="?k=pages/A2/Q2">Questão 2</a></li>
                <li><a class="dropdown-item" href="?k=pages/A2/Q3">Questão 3</a></li>
                <li><a class="dropdown-item" href="?k=pages/A2/Q4">Questão 4</a></li>
                <li><a class="dropdown-item" href="?k=pages/A2/Q5">Questão 5</a></li>
              </ul>
            </li>
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-code-slash"></i>Atividade 3
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?k=pages/A3/Q1">Questão 1</a></li>
                <li><a class="dropdown-item" href="?k=pages/A3/Q2">Questão 2</a></li>
                <li><a class="dropdown-item" href="?k=pages/A3/Q3">Questão 3</a></li>
                <li><a class="dropdown-item" href="?k=pages/A3/Q4">Questão 4</a></li>
                <li><a class="dropdown-item" href="?k=pages/A3/Q5">Questão 5</a></li>
                <li><a class="dropdown-item" href="?k=pages/A3/Q6">Questão 6</a></li>
                <li><a class="dropdown-item" href="?k=pages/A3/Q7">Questão 7</a></li>
              </ul>
            </li>
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-code-slash"></i>Atividade 4
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?k=pages/A4/Q1">Questão 1</a></li>
                <li><a class="dropdown-item" href="?k=pages/A4/Q2">Questão 2</a></li>
              </ul>
            </li>
            <li class="nav-item dropend">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-cloudy"></i>Sistema
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                <?php
                  if(isset($_SESSION['user'])){
                    echo "<li><a class='dropdown-item' href='?k=www/db_client'>Cadastro (Clientes)</a></li>";
                    echo "<li><a class='dropdown-item' href='?k=www/db_list'>Listar (Clientes)</a></li>";
                    echo "<li><a class='dropdown-item' href='?k=www/db_logout'>Logout (".$_SESSION['user'].")</a></li>";
                  } else{
                    echo "<li><a class='dropdown-item' href='?k=www/db_login'>Login</a></li>
                    <li><a class='dropdown-item' href='?k=www/db_user'>Cadastro</a></li>";
                  }
                ?>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
  </header>



<!---->
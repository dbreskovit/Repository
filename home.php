<section id="bk" class="d-flex flex-column justify-content-center align-items-center">
  <div class="bk-container" data-aos="fade-in">
    <h1>Site de atividades</h1>
    <?php
      if (isset($_GET['login'])  == "true"){
        echo "<p><span class='typed' data-typed-items='Login realizado., Bem-Vindo " . $_SESSION['user'] . ".'></span></p>";
      } else{
        echo "<p>By: <span class='typed' data-typed-items='Diego Breskovit'></span></p>";
      }
    ?>
  </div>
</section>
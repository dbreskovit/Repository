<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">
            <div class="row">
                <form method="POST" class="p-0">
                    <div class="sy-form-group">
                        <h1 class="text-white text-center m-0">Criar Conta</h1>
                        <p class="subtitle m-0">USUÁRIO</p>
                        <?php
                            if (isset($_POST["submit"])) {
                                
                                mysqli_set_charset($conn, "utf8");

                                $nome = $_POST["name"];
                                $rg = $_POST["rg"];
                                $cpf = $_POST["cpf"];
                                $email = $_POST["email"];
                                $senha = $_POST["password"];

                                $sql = "INSERT INTO $dbname.`user` (`nome`, `rg`, `cpf`, `email`, `senha`) VALUES ('$nome', '$rg', '$cpf', '$email', '$senha');";

                                if (mysqli_query($conn, $sql))
                                {
                                    echo 
                                    "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    Conta criada com sucesso
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>";
                                }

                                mysqli_close($conn);
                                echo "<script type='text/javascript'>
                                window.location = '?k=home'</script>";
                            }
                        ?>
                        <input autocomplete="off" type="text" name="name" placeholder="Nome" class="input-animation" required maxlength="50">
                        <input autocomplete="off" type="text" name="rg" placeholder="RG" class="input-animation" required onkeypress="$(this).mask('0000000000');" minlength="10">
                        <input autocomplete="off" type="text" name="cpf" placeholder="CPF" class="input-animation" required onkeypress="$(this).mask('000.000.000-00');" minlength="11">
                        <input autocomplete="off" type="email" name="email" placeholder="Email" class="input-animation" required maxlength="50">
                        <input autocomplete="off" type="password" name="password" placeholder="Senha" class="input-animation" required maxlength="50">
                        <div class="submit-group">
                            <button style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">Enviar</button>
                            <a style="display:inline-block;" class="btn btn-dark" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img src="https://cdn.discordapp.com/attachments/919998039769374750/920068998429818930/register_user.png">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
</div>
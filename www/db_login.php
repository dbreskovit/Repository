<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">
            <div class="row">
                <form method="POST" class="p-0">
                    <div class="sy-form-group">
                        <h1 class="text-white text-center">Login</h1>
                        <?php
                            if (isset($_POST["submit"])){
                                $email = $_POST['email'];
                                $senha = $_POST['password'];

                                if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
                                else {
                                    $sql = "SELECT * FROM user;";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) 
                                    {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {
                                            if ($row['email'] == $email && $row['senha'] == $senha) 
                                            {
                                                $_SESSION['user'] = $row['nome'];
                                                $logged = true;
                                                break;
                                            }
                                        }
                                    }
                                }

                                if (@$logged == true){
                                    echo "<meta http-equiv='refresh' content='0;url=?k=home&login=true'>";
                                } else{
                                    echo 
                                    "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    Essa conta não existe
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div>";
                                }
                            }
                        ?>
                        <input autocomplete="off" type="email" name="email" placeholder="Email" class="input-animation" required maxlength="50">
                        <input autocomplete="off" type="password" name="password" placeholder="Senha" class="input-animation" required maxlength="50">
                        <div class="submit-group">
                            <button style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit" href="./">Enviar</button>
                            <a style="display:inline-block;" class="btn btn-dark" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <img src="https://cdn.discordapp.com/attachments/919998039769374750/920068691985588254/login_user.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <?php
        $id = $_GET['id'];
        if (!isset($_SESSION['user'])){
            echo "<meta http-equiv='refresh' content='0;url=?k=www/db_login'>";
        }
    ?>
    <div class="row">
        <div class="colA"></div>
        <div class="colB">
            <div class="row">
                <?php
                    if (isset($_POST["submit"])) 
                    {
                        $name = $_POST["name"];
                        $cpf = $_POST["cpf"];
                        $rg = $_POST["rg"];
                        $email = $_POST["email"];

                        $sql = "UPDATE $dbname.`client` SET nome='$name', rg='$rg', cpf='$cpf', email='$email' WHERE id=$id;";

                        if (mysqli_query($conn, $sql)) {
                            echo "<script>console.log('Successful')</script>";
                            }

                        mysqli_close($conn);
                        echo "<meta http-equiv='refresh' content='0;url=?k=www/db_list'>";
                    }
                ?>
                <?php

                    $sql = "SELECT * FROM client WHERE id=$id;";
                    $result = @mysqli_query($conn, $sql);

                    if (@mysqli_num_rows($result) > 0) 
                    {
                        while ($row = mysqli_fetch_assoc($result)) 
                        {

                            
                            $name = $row["nome"];
                            $rg = $row["rg"];
                            $cpf = $row["cpf"];
                            $email = $row["email"];

                            echo 
                                "<form method='POST' class='p-0'>
                                <div class='sy-form-group'>
                                <h1 class='text-white text-center m-0'>Editar Conta</h1>
                                <p class='subtitle m-0'>CLIENTE</p>
                                <input autocomplete='off' value='$name' type='text' name='name' class='input-animation' required>
                                <input autocomplete='off' value='$rg' type='text' name='rg' class='input-animation' required>
                                <input autocomplete='off' value='$cpf' type='text' name='cpf' class='input-animation' required>
                                <input autocomplete='off' value='$email' type='email' name='email' class='input-animation' required>
                                <div class='submit-group'>
                                <button style='background-color: #BF1111;' class='btn btn-dark' type='submit' name='submit'>Salvar</button>
                                </div>
                                </div>
                                </form>";
                            break;
                        }

                        mysqli_close($conn);
                    }
                ?>
            </div>
        </div>
    </div>
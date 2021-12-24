<?php
    $id = $_GET['id'];
    if (!isset($_SESSION['user'])){
        echo "<meta http-equiv='refresh' content='0;url=?k=home'>";
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">
            <div class="row">
                <?php
                    $sql = "DELETE FROM $dbname. `client` WHERE `id`=$id;";

                    if (mysqli_query($conn, $sql)){
                        echo "<meta http-equiv='refresh' content='0;url=?k=www/db_list'>";
                    }else{
                        echo 
                        "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Erro: " . $sql . "<br>" . mysqli_error($conn) . "
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    }
                    
                    mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>
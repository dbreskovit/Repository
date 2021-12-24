<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A2/Q1/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>
                            <strong class="text-white-50">Número</strong>
                            <input class="form-control" type="number" name="input" autocomplete="off" placeholder="4">
                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A2/Q1" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <p class="output">
                        <?php

                        if (isset($_POST['submit']) && !empty($_POST['input'])) {
                            $num = $_POST['input'];
                            if ($num % 3 == 0) {
                                echo "Divisível por 3 <br>";
                            }
                            if ($num % 5 == 0) {
                                echo "Divisível por 5 <br>";
                            }
                            if ($num % 10 == 0) {
                                echo "Divisível por 10 <br>";
                            }
                            if ($num % 3 != 0 and $num % 5 != 0 and $num % 10 != 0) {
                                echo "Não é divisível";
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A3/Q4/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>
                            <strong class="text-white-50">Número</strong>
                            <input class="form-control" type="number" name="input" autocomplete="off" placeholder="4">
                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A3/Q4" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-6 col-sm-12 p-0"></div>

                <div class="col-lg-4 col-sm-12">
                    <p class="output">
                        <?php
                        if (isset($_POST['submit']) && !empty($_POST['input'])) {
                            $N = $_POST['input'];
                            $F = $N;

                            for ($i = 1; $F > 1; $F--) {
                                $i = $i * $F;
                            }

                            $F = $i;

                            if ($N < 0) {
                                echo "<div class='alert alert-danger'>Só aceitamos valores maiores que 0</div>";
                            } else {
                                echo "<div class='alert alert-info'>$N! = $F</div>";
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
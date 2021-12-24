<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A3/Q3/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>
                            <strong class="text-white-50">Número</strong>
                            <input class="form-control" type="number" name="input" autocomplete="off" placeholder="3">
                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A3/Q3" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <p class="output" style="text-align:justify;">
                        <?php
                        if (isset($_POST['submit']) && !empty($_POST)) {
                            $N = $_POST['input'];
                            $X3 = pow($N, 3);

                            for ($i = $X3; $i >= $N; $i--) {
                                if ($i % 2 != 0) {
                                    echo "$i; ";
                                }
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
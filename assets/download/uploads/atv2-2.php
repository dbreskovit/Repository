<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A2/Q2/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>

                            <strong class="text-white-50">Lado 1</strong>
                            <input class="form-control" type="number" name="L1" autocomplete="off" placeholder="4">

                            <strong class="text-white-50">Lado 2</strong>
                            <input class="form-control" type="number" name="L2" autocomplete="off" placeholder="4">

                            <strong class="text-white-50">Lado 3</strong>
                            <input class="form-control" type="number" name="L3" autocomplete="off" placeholder="4">

                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A2/Q2" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <p class="output">
                        <?php
                        if (isset($_POST['submit']) && !empty(($_POST['L1']) || ($_POST['L2']) || ($_POST['L3']))) {
                            $L1 = $_POST['L1'];
                            $L2 = $_POST['L2'];
                            $L3 = $_POST['L3'];
                            if ($L1 == $L2 && $L2 == $L3) {
                                echo "Triângulo Equilátero</p>";
                            } else if ($L1 == $L2 || $L2 == $L3 || $L1 == $L3) {
                                echo "Triângulo Isósceles</p>";
                            } else {
                                echo "Triângulo Escaleno</p>";
                            }
                        }
                        ?>

                </div>
            </div>
        </div>
    </div>
</div>
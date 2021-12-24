<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A2/Q5/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>

                            <strong class="text-white-50">Valor</strong>
                            <input class="form-control" type="number" name="V" autocomplete="off" placeholder="4000">

                            <strong class="text-white-50">Parcelas</strong>
                            <input class="form-control" type="number" name="P" autocomplete="off" placeholder="4">

                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A2/Q5" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <p class="output">
                        <?php

                        if (isset($_POST['submit']) && !empty($_POST['V']) && !empty($_POST['P'])) {
                            $V = $_POST['V'];
                            $P = $_POST['P'];

                            if ($P == '2') {
                                $V *= 1.02;
                            } elseif ($P == '3' || $P == '4') {
                                $V *= 1.05;
                            } else {
                                $V *= 1.08;
                            }

                            $monthly = $V / $P;
                            echo "Total: $V R$<br>";
                            echo "Mensal: $monthly R$";
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
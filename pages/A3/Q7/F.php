<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A3/Q7/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>
                            <strong class="text-white-50">Valor</strong>
                            <input class="form-control" type="number" name="input" autocomplete="off" placeholder="1200">

                            <strong class="text-white-50">Parcelas</strong>
                            <select class="form-select form-select-sm" name="select">
                                <option value="6">06 meses - taxa 1,2%/m</option>
                                <option value="12">12 meses - taxa 1,8%/m</option>
                                <option value="24">24 meses - taxa 2,0%/m</option>
                                <option value="36">36 meses - taxa 2,5%/m</option>
                                <option value="48">48 meses - taxa 2,8%/m</option>
                            </select>

                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A3/Q7" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-sm-12 p-0"></div>
                <div class="col-lg-8 col-sm-12">
                    <p class="output">
                        <?php
                        if (isset($_POST['submit']) && !empty($_POST['input'])) {
                            $V = $_POST['input'];
                            $QP = $_POST['select'];
                            $D = date_create(date('Y/m/d'));

                            switch ($QP) {
                                case 6:
                                    $T = 0.012;
                                    break;
                                case 12:
                                    $T = 0.018;
                                    break;
                                case 24:
                                    $T = 0.02;
                                    break;
                                case 36:
                                    $T = 0.025;
                                    break;
                                case 48:
                                    $T = 0.028;
                                    break;
                            }

                            $CF = ($T / (1 - (1 / pow(1 + $T, $QP))));
                            $P = $V * $CF;
                            $M = $P * $QP;
                            $J = $M - $V;

                            echo "<table class='table table-striped table-dark'><thead><tr><th scope='col'>Numero de parcelas</th>
                                            <th scope='col'>Data</th><th scope='col'>Parcela</th><th scope='col'>Juros</th><th scope='col'>Valor da parcela</th>
                                            </tr></thead><tbody>";

                            for ($i = 1; $i <= $QP; $i++) {
                                date_add($D, date_interval_create_from_date_string("+1 month"));

                                echo "<tr>
                                            <th scope='row'>" . $i . "</th>
                                            <td>" . date_format($D, 'd/m/Y') . "</td>
                                            <td>R$ " . number_format($V / $QP, 2, ',', '.') . "</td>
                                            <td>" . number_format($J / $QP, 2, ',', '.') . "</td>
                                            <td>R$ " . number_format($P, 2, ',', '.') . "</td>
                                        </tr>
                                ";
                            }

                            echo "<tr>
                                        <th scope='row' colspan='4'>Total de Juros:</th>
                                        <th colspan='1'>R$ " . number_format($J, 2, ',', '.') . "</th>
                                        </tr><tr>
                                        <th scope='row' colspan='4'>Montante:</th>
                                        <th colspan='1'>R$ " . number_format($M, 2, ',', '.') . "</th>
                                    </tr></tbody></table>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
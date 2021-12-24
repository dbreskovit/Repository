<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A3/Q6/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>
                            <strong class="text-white-50">Data</strong>
                            <input class="form-control" type="date" name="data" autocomplete="off" placeholder="4">
                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A3/Q6" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-sm-12 p-0"></div>
                <div class="col-lg-4 col-sm-12">
                    <p class="output">
                        <?php
                        if (isset($_POST['submit']) && !empty($_POST['data'])) {
                            $D = $_POST['data'];

                            echo "<table class='table table-striped table-dark'><thead><tr><th>Tabela (Mês a Mês)</th></tr></thead><tbody>";

                            for ($i = 1; $i <= 24; $i++) {
                                $D = date('d-m-Y', strtotime("+1 month", strtotime($D)));
                                echo "<tr><td>$D</td></tr>";
                            }
                            echo "</tbody>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
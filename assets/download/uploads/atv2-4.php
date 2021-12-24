<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A2/Q4/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>

                            <strong class="text-white-50">Nota 1</strong>
                            <input class="form-control" type="number" name="N1" autocomplete="off" placeholder="8">

                            <strong class="text-white-50">Nota 2</strong>
                            <input class="form-control" type="number" name="N2" autocomplete="off" placeholder="8">

                            <strong class="text-white-50">Nota 3</strong>
                            <input class="form-control" type="number" name="N3" autocomplete="off" placeholder="8">

                            <div>
                                <input type="radio" name="option" value="A" checked>
                                <label class="text-white">A</label>
                            </div>

                            <div>
                                <input type="radio" name="option" value="P">
                                <label class="text-white">P</label>
                            </div>

                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A2/Q4" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <p class="output">
                        <?php
                        if (isset($_POST['submit'])  && !empty(($_POST['N1']) || ($_POST['N2']) || ($_POST['N3']))) {
                            $N1 = $_POST['N1'];
                            $N2 = $_POST['N2'];
                            $N3 = $_POST['N3'];
                            $option = $_POST['option'];

                            if ($option == 'A') {
                                $media = ($N1 + $N2 + $N3) / 3;
                            } elseif ($option == 'P') {
                                $media = ($N1 * 2 + $N2 * 3 + $N3 * 5) / 10;
                            }

                            if ($media >= 7) {
                                echo "<div class='box-a2q4' style='background-color:green;'>
                                    <p class='text-white'>Média: $media. Aprovado</p>
                                </div>";
                            } elseif ($media >= 5 && $media <= 6.9) {
                                echo "<div class='box-a2q4' style='background-color:orange;'>
                                        <p class='text-white'>Média: $media. Exame</p>
                                    </div>";
                            } else {
                                echo "<div class='box-a2q4' style='background-color:red;'>
                                        <p class='text-white'>Média: $media. Reprovado</p>
                                    </div>";
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>
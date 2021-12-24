<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A4/Q1/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>
                            <p class="text-white-50 text-center">Formulário não se aplica</p>
                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit" value="Sortear">
                                <a class="btn btn-dark" href="?k=pages/A4/Q1" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-sm-12 p-0"></div>

                <div class="col-lg-8 col-sm-12">
                    <p class="output">
                        <?php
                        if (isset($_POST['submit'])) {
                            for ($i = 1; $i <= 25; $i++) {
                                $N[] = $i;
                            }

                            $array =  array_rand($N, 16);
                            sort($array);

                            foreach ($array as $a) {
                                echo "<div class ='box-a4q1'><snap><strong>$a</strong></snap></div>";
                            }
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
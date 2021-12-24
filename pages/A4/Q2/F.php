<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A4/Q2/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>


                            <strong class="text-white-50">Função:</strong>
                            <select class="form-select form-select-sm" name="select" type="select">
                                <option selected disabled>Selecione uma função</option>
                                <option value="1">array_rand</option>
                                <option value="2">array_sum</option>
                                <option value="3">in_array</option>
                                <option value="4">sort</option>
                            </select>

                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A4/Q2" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-lg-12 col-sm-12">
                    <?php

                    if (isset($_POST['submit']) && !empty($_POST['select'])) {

                        $option = $_POST['select'];

                        switch ($option) {
                            case 1:
                                $planets = array("Mercúrio", "Vênus", "Terra", "Marte", "Júpiter", "Saturno", "Urano", "Netuno");
                                $key = array_rand($planets, 1);

                                echo "<div class='card bg-dark mb-3' style='max-width: 40rem;'><div class='card-header text-white-50'>array_rand</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Escolhe aleatóriamente um ou mais itens de um array, e retorna a chave (ou chaves) do item selecionado.</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>array_rand(array \$array, int \$num = 1): mixed</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array(\$planets)</strong></p><p class='card-text '>";
                                print_r(array_values($planets));
                                echo "</p><p class='card-text'><strong>Item Randômico(\$key)</strong></p>";
                                print_r("<p class=''>[" . $key . "] " . $planets[$key] . '</p></div>');
                                break;

                            case 2:
                                $num = array(2, 4, 6, 8);
                                $sum = array_sum($num);

                                echo "<div class='card bg-dark mb-3' style='max-width: 40rem;'><div class='card-header text-white-50'>array_sum</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Retorna a soma de valores como um inteiro ou float.</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>array_sum(array \$array): number</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array(\$num)</strong></p><p class='card-text'>";
                                print_r(array_values($num));
                                echo "</p><p class='card-text'><strong>Soma(\$sum)</strong></p>";
                                print_r($sum);
                                echo "</div>";
                                break;

                            case 3:
                                $colors = array("White", "Black", "Yellow", "Blue", "Gray", "Purple", "Green", "Red", "Violet");


                                echo "<div class='card bg-dark mb-3' style='max-width: 40rem;'><div class='card-header text-white-50'>in_array</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Checa se um valor existe em um array (caso for uma string, a comparação é feita diferenciando caracteres maiúsculos e minúsculos).</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>array_sum(array \$array): number</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array(\$colors)</strong></p><p class='card-text'>";
                                print_r(array_values($colors));
                                echo "<p class='card-text'><strong>Verificar se \"White\" está no array</strong></p><p class='card-text'>";

                                if (in_array("White", $colors)) {
                                    echo "<p style='color:green;'>Tem White";
                                } else echo "<p style='color:red;'>Não tem";

                                echo "</div>";
                                break;

                            case 4:
                                $num = array(25, 5, 8, 17, 1);

                                echo "<div class='card bg-dark mb-3' style='max-width: 40rem;'><div class='card-header text-white-50'>sort</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Essa função ordena um array. Os elementos serão ordenados do menor para o maior ao final da execução dessa função.</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>sort(array &\$array, int \$sort_flags = SORT_REGULAR): bool</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array desordenada(\$num)</strong></p><p class='card-text'><p>";
                                print_r($num);
                                echo "</p><p class='card-text'><strong>Array Ordenada(\$num)</strong></p><p class='card-text'><p>";
                                sort($num);
                                print_r($num);
                                echo "</p></div>";
                                break;
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
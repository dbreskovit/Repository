<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row text-white p-2">

                <?php
                    $H = 1.72;
                    $W =  80;
                    $IMC = $W / ($H ** 2);
                    $IMC = number_format($IMC, 2);
                    echo "IMC: ".$IMC;
                ?>


            </div>
        </div>
    </div>
</div>
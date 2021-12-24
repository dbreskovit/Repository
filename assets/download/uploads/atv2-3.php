<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-4 col-sm-12 p-0">
                    <form action="?k=pages/A2/Q3/F" method="POST">
                        <div class="form-group">
                            <h1 class="text-white text-center">Entrada</h1>

                            <strong class="text-white-50">Mês</strong>
                            <input class="form-control" type="number" name="input" autocomplete="off" placeholder="1">

                            <div class="submit-group">
                                <input style="background-color: #BF1111;" class="btn btn-dark" type="submit" name="submit">
                                <a class="btn btn-dark" href="?k=pages/A2/Q3" role="button"><i class="bi bi-chevron-up btn-back"></i></a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <p class="output">
                    <?php

                        if(isset($_POST['submit']) && !empty($_POST['input']))
                        {
                            $month = $_POST['input'];
                            switch ($month){
                                case  1: echo "Janeiro";   break;
                                case  2: echo "Fevereiro"; break;
                                case  3: echo "Março";     break;
                                case  4: echo "Abril";     break;
                                case  5: echo "Maio";      break;
                                case  6: echo "Junho";     break;
                                case  7: echo "Julho";     break;
                                case  8: echo "Agosto";    break;
                                case  9: echo "Setembro";  break;
                                case 10: echo "Outubro";   break;
                                case 11: echo "Novembro";  break;
                                case 12: echo "Dezembro";  break;
                                default: echo "N/A ";
                            }
                        }
                        ?> 
                </div>
            </div>
        </div>
    </div>
</div>

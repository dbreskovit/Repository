<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <h1 class="text-white p-2">Exercícios Repetição</h1>
                    <p class="text-white-50 p-1">Criar um script em PHP capaz de verificar se um número lido (GET) é primo ou não. Caso seja primo, mostrar a informação em um alert-success do bootstrap e caso contrário, o resultado a ser exibido deverá ser em uma alert-warning</p>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <iframe src="https://carbon.now.sh/embed?bg=rgba%28171%2C184%2C195%2C0%29&t=seti&wt=none&l=text%2Fx-php&ds=false&dsyoff=0px&dsblur=0px&wc=false&wa=false&pv=0px&ph=0px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Aif%2520%28isset%28%2524_POST%255B%27submit%27%255D%29%2520%2526%2526%2520%21empty%28%2524_POST%29%29%2520%257B%250A%2520%2520%2520%2520%2524N%2520%253D%2520%2524_POST%255B%27input%27%255D%253B%250A%2520%2520%2520%2520%2524B%2520%253D%2520true%253B%250A%250A%2520%2520%2520%2520for%2520%28%2524i%2520%253D%25202%253B%2520%2524i%2520%253C%253D%2520%2524N%253B%2520%2524i%252B%252B%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520if%2520%28%2524N%2520%2525%2520%2524i%2520%253D%253D%25200%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2524B%2520%253D%2520%28%2524N%2520%21%253D%2520%2524i%29%2520%253F%2520false%2520%253A%2520true%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520%2520break%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520%257D%250A%2520%2520%2520%2520%257D%250A%250A%2520%2520%2520%2520if%2520%28%2524B%2520%253D%253D%2520true%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520echo%2520%2522%253Cdiv%2520class%253D%27alert%2520alert-success%27%253E%2520%2524N%2520%25C3%25A9%2520primo%21%253C%252Fdiv%253E%2522%253B%250A%2520%2520%2520%2520%257D%2520else%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520echo%2520%2522%253Cdiv%2520class%253D%27alert%2520alert-warning%27%253E%2520%2524N%2520n%25C3%25A3o%2520%25C3%25A9%2520primo%21%253C%252Fdiv%253E%2522%253B%250A%2520%2520%2520%2520%257D%250A%257D%250A%253F%253E" style="width: 669px; height: 417px; border:0; transform: scale(1); overflow:hidden;" sandbox="allow-scripts allow-same-origin">
                    </iframe>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="btn-container">
                        <a title="Executar" href="?k=pages/A3/Q1/F"><i class="bi bi-play-fill btn-run"></i></a>
                        <a title="Download" href="./assets/download/download.php?file=atv3-1.php"><i class="bi bi-download btn-down"></i></a>
                        <a title="Expandir" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                        <a title="Voltar" href="./"><i class="bi bi-chevron-up btn-back"></i></a>

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="./assets/img/code/a3q1.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
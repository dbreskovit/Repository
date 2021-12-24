<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <h1 class="text-white p-2">Exercícios Repetição</h1>
                    <p class="text-white-50 p-1"> Construa um script que receba uma data de um formulário e exiba em uma tabela zebrada os próximos 24 meses incrementados mês a mês à partir da data recebida. Dica Manipulação de datas em php:</p>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <iframe src="https://carbon.now.sh/embed?bg=rgba%28171%2C184%2C195%2C0%29&t=seti&wt=none&l=text%2Fx-php&ds=false&dsyoff=0px&dsblur=0px&wc=false&wa=false&pv=0px&ph=0px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Aif%2520%28isset%28%2524_POST%255B%27submit%27%255D%29%2520%2526%2526%2520%21empty%28%2524_POST%255B%27data%27%255D%29%29%2520%257B%250A%2520%2520%2520%2520%2524D%2520%253D%2520%2524_POST%255B%27data%27%255D%253B%250A%250A%2520%2520%2520%2520echo%2520%2522%253Ctable%2520class%253D%27table%2520table-striped%27%253E%253Cthead%253E%253Ctr%253E%253Cth%253ETabela%2520%28M%25C3%25AAs%2520a%2520M%25C3%25AAs%29%253C%252Fth%253E%253C%252Ftr%253E%253C%252Fthead%253E%253Ctbody%253E%2522%253B%250A%250A%2520%2520%2520%2520for%2520%28%2524i%2520%253D%25201%253B%2520%2524i%2520%253C%253D%252024%253B%2520%2524i%252B%252B%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520%2524D%2520%253D%2520date%28%27d-m-Y%27%252C%2520strtotime%28%2522%252B1%2520month%2522%252C%2520strtotime%28%2524D%29%29%29%253B%250A%2520%2520%2520%2520%2520%2520%2520%2520echo%2520%2522%253Ctr%253E%253Ctd%253E%2524D%253C%252Ftd%253E%253C%252Ftr%253E%2522%253B%250A%2520%2520%2520%2520%257D%250A%2520%2520%2520%2520echo%2520%2522%253C%252Ftbody%253E%2522%253B%250A%257D%250A%253F%253E" style="width: 669px; height: 323px; border:0; transform: scale(1); overflow:hidden;" sandbox="allow-scripts allow-same-origin">
                    </iframe>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="btn-container">
                        <a title="Executar" href="?k=pages/A3/Q6/F"><i class="bi bi-play-fill btn-run"></i></a>
                        <a title="Download" href="./assets/download/download.php?file=atv3-6.php"><i class="bi bi-download btn-down"></i></a>
                        <a title="Expandir" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                        <a title="Voltar" href="./"><i class="bi bi-chevron-up btn-back"></i></a>

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="./assets/img/code/a3q6.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
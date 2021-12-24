<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <h1 class="text-white p-2">Exercícios Condição</h1>
                    <p class="text-white-50 p-1">Faça um formulário HTML que receba o preço à vista de um determinado produto e a quantidade deparcelas, calcule o preço total a pagar e o valor da prestação mensal, referentes ao pagamento parcelado.Se o pagamento for em duas vezes, acréscimo de 2%; Se parcelado em 3 ou 4 vezes deve ser dado um acréscimo de 5% no total a ser pago. Se o parcelamento for em 5 vezes ou mais, o acréscimo será de 8%.</p>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <iframe src="https://carbon.now.sh/embed?bg=rgba%28171%2C184%2C195%2C0%29&t=seti&wt=none&l=text%2Fx-php&ds=false&dsyoff=0px&dsblur=0px&wc=false&wa=false&pv=0px&ph=0px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Aif%2520%28isset%28%2524_POST%255B%27submit%27%255D%29%2520%2526%2526%2520%21empty%28%2524_POST%255B%27V%27%255D%29%2520%2526%2526%2520%21empty%28%2524_POST%255B%27P%27%255D%29%29%2520%257B%250A%2520%2520%2520%2520%2524V%2520%253D%2520%2524_POST%255B%27V%27%255D%253B%250A%2520%2520%2520%2520%2524P%2520%253D%2520%2524_POST%255B%27P%27%255D%253B%250A%250A%2520%2520%2520%2520if%2520%28%2524P%2520%253D%253D%2520%272%27%29%2520%257B%2524V%2520*%253D%25201.02%253B%257D%2520%250A%2520%2520%2520%2520elseif%2520%28%2524P%2520%253D%253D%2520%273%27%2520%257C%257C%2520%2524P%2520%253D%253D%2520%274%27%29%2520%257B%2524V%2520*%253D%25201.05%253B%257D%250A%2520%2520%2520%2520else%2520%257B%2524V%2520*%253D%25201.08%253B%257D%250A%250A%2520%2520%2520%2520%2524monthly%2520%253D%2520%2524V%2520%252F%2520%2524P%253B%250A%2520%2520%2520%2520echo%2520%2522Total%253A%2520%2524V%2520R%2524%253Cbr%253E%2522%253B%250A%2520%2520%2520%2520echo%2520%2522Mensal%253A%2520%2524monthly%2520R%2524%2522%253B%250A%257D%250A%253F%253E" style="width: 669px; height: 342px; border:0; transform: scale(1); overflow:hidden;" sandbox="allow-scripts allow-same-origin">
                    </iframe>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="btn-container">
                        <a title="Executar" href="?k=pages/A2/Q5/F"><i class="bi bi-play-fill btn-run"></i></a>
                        <a title="Download" href="./assets/download/download.php?file=atv2-5.php"><i class="bi bi-download btn-down"></i></a>
                        <a title="Expandir" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                        <a title="Voltar" href="./"><i class="bi bi-chevron-up btn-back"></i></a>

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="./assets/img/code/a2q5.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
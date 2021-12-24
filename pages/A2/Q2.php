<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <h1 class="text-white p-2">Exercícios Condição</h1>
                    <p class="text-white-50 p-1">Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados: equilátero, escaleno ou isósceles.</p>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <iframe src="https://carbon.now.sh/embed?bg=rgba%28171%2C184%2C195%2C0%29&t=seti&wt=none&l=text%2Fx-php&ds=false&dsyoff=0px&dsblur=0px&wc=false&wa=false&pv=0px&ph=0px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Aif%2520%28isset%28%2524_POST%255B%27submit%27%255D%29%2520%2526%2526%2520%21empty%28%28%2524_POST%255B%27L1%27%255D%29%2520%257C%257C%2520%28%2524_POST%255B%27L2%27%255D%29%2520%257C%257C%2520%28%2524_POST%255B%27L3%27%255D%29%29%29%2520%257B%250A%2520%2520%2520%2520%2524L1%2520%253D%2520%2524_POST%255B%27L1%27%255D%253B%250A%2520%2520%2520%2520%2524L2%2520%253D%2520%2524_POST%255B%27L2%27%255D%253B%250A%2520%2520%2520%2520%2524L3%2520%253D%2520%2524_POST%255B%27L3%27%255D%253B%250A%2520%2520%2520%2520if%2520%28%2524L1%2520%253D%253D%2520%2524L2%2520%2526%2526%2520%2524L2%2520%253D%253D%2520%2524L3%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520echo%2520%2522Tri%25C3%25A2ngulo%2520equil%25C3%25A1tero%2522%253B%250A%2520%2520%2520%2520%257D%2520else%2520if%2520%28%2524L1%2520%253D%253D%2520%2524L2%2520%257C%257C%2520%2524L2%2520%253D%253D%2520%2524L3%2520%257C%257C%2520%2524L1%2520%253D%253D%2520%2524L3%29%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520echo%2520%2522Tri%25C3%25A2ngulo%2520Is%25C3%25B3sceles%2522%253B%250A%2520%2520%2520%2520%257D%2520else%2520%257B%250A%2520%2520%2520%2520%2520%2520%2520%2520echo%2520%2522Tri%25C3%25A2ngulo%2520Escaleno%2522%253B%250A%250A%2520%2520%2520%2520%257D%250A%257D%250A" style="width: 669px; height: 360px; border:0; transform: scale(1); overflow:hidden;" sandbox="allow-scripts allow-same-origin">
                    </iframe>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="btn-container">
                        <a title="Executar" href="?k=pages/A2/Q2/F"><i class="bi bi-play-fill btn-run"></i></a>
                        <a title="Download" href="./assets/download/download.php?file=atv2-2.php"><i class="bi bi-download btn-down"></i></a>
                        <a title="Expandir" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                        <a title="Voltar" href="./"><i class="bi bi-chevron-up btn-back"></i></a>

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="./assets/img/code/a1q2.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
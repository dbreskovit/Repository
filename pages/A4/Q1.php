<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">

            <div class="row">

                <div class="col-lg-6 col-sm-12">
                    <h1 class="text-white p-3">Exercícios Array</h1>
                    <p class="text-white-50 p-2">Faça um script em php que sorteie 15 dezenas para um jogo da Loteria. Exiba as dezenas sorteadas em ordem crescente e não permita que se repitam. Cada dezena sorteada deve ser exibida dento de uma div.</p>
                </div>

                <div class="col-lg-12 col-sm-12">
                    <iframe src="https://carbon.now.sh/embed?bg=rgba%28171%2C184%2C195%2C0%29&t=seti&wt=none&l=text%2Fx-php&ds=true&dsyoff=0px&dsblur=0px&wc=false&wa=false&pv=15px&ph=15px&ln=false&fl=1&fm=Hack&fs=14px&lh=133%25&si=false&es=2x&wm=false&code=%253C%253Fphp%250A%250Afor%2520%28%2524i%253D%25201%253B%2520%2524i%2520%253C%253D%252025%253B%2520%2524i%252B%252B%29%257B%2520%250A%2520%2520%2520%2520%2524N%255B%255D%2520%253D%2520%2524i%253B%250A%257D%250A%250A%2524array%2520%253D%2520%2520array_rand%28%2524N%252C%252016%29%253B%250Asort%28%2524array%29%253B%250A%250Aforeach%2520%28%2524array%2520as%2520%2524a%29%250A%257B%250A%2520%2520%2520%2520echo%2520%2522%253Cdiv%2520class%2520%253D%27estilo%2520flex%27%253E%253Csnap%253E%253Cstrong%253E%2524a%253C%252Fstrong%253E%253C%252Fsnap%253E%253C%252Fdiv%253E%2522%253B%250A%257D%250A%253F%253E" style="width: 669px; height: 353px; border:0; transform: scale(1); overflow:hidden;" sandbox="allow-scripts allow-same-origin">
                    </iframe>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="btn-container">
                        <a title="Executar" href="?k=pages/A4/Q1/F"><i class="bi bi-play-fill btn-run"></i></a>
                        <a title="Download" href="./assets/download/download.php?file=atv4-1.php"><i class="bi bi-download btn-down"></i></a>
                        <a title="Expandir" href="#" id="M"><i class="bi bi-arrows-angle-expand btn-modal"></i></a>
                        <a title="Voltar" href="./"><i class="bi bi-chevron-up btn-back"></i></a>

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <img src="./assets/img/code/a4q1.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
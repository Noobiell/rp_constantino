var validacao = true;
customHeader();

function customHeader() {

    let barranav = document.querySelector(".barraNav");
    let iconMenu = document.querySelector(".iconMenu");


    window.addEventListener('scroll', e => {

        let posicaoMenu = window.pageYOffset;

        if (posicaoMenu >= 300) {

            if (validacao) {
                barranav.classList.add("bgPretoH");
                barranav.classList.remove("bgBrancoH");
                alteraCorTexto('#fff');
                iconMenu.style.color = '#fff';
                validacao = false;
            }

        } else {

            if (!validacao) {
                barranav.classList.add("bgBrancoH");
                barranav.classList.remove("bgPretoH");
                alteraCorTexto('#222222');
                iconMenu.style.color = '#222222';
                validacao = true;
            }
        }

    });
}

function alteraCorTexto(cor) {

    const itemNav = document.querySelectorAll(".itemNav");

    itemNav.forEach(element => {

        element.style.color = cor;

    });

}
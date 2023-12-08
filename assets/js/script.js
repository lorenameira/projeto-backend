
// Menu mobile
const btnMobile = document.getElementById('btn-mobile');
function toggleMenu() {
    const menu = document.getElementById('menu-hamburguer');
    menu.classList.toggle('active')
}
btnMobile.addEventListener('click', toggleMenu);

//ref - https://gist.github.com/nmsdvid/8807205
const debounce = function (func, wait, immediate) {
    let timeout;
    return function (...args) {
        const context = this;
        const later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

//Animação ao rolar página para baixo - O código faz o calculo da página para a
const addclasse = document.querySelectorAll('[data-animacao]');
const animacaoclasse = 'animar';
function animacaoScroll() {
    const Top = window.pageYOffset + ((window.innerHeight * 0.75));
    addclasse.forEach(function (elemento) {
        if ((Top) > elemento.offsetTop) {
            elemento.classList.add(animacaoclasse);
        } else {
            elemento.classList.remove(animacaoclasse);
        }
    })
}
animacaoScroll();
if (addclasse.length) {
    window.addEventListener('scroll', debounce(function () {
        animacaoScroll();
    }, 200));
}

//Menu ativo na página - O código verifica na URL se está na página e quando tiver lá fica uma barrinha no menu fica ativa
const links = document.querySelectorAll('.header-menu a');
function ativarLink(link){
    const url = location.href;
    const href = link.href;
    if(url.includes(href)){
        link.classList.add("ativo");
    }
}

links.forEach(ativarLink);





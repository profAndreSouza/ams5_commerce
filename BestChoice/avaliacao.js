const detalhes = document.querySelector(".detalhes");
const avaliacoes = document.querySelector(".avaliacoes" );
const dets = document.querySelector(".dets");
const avali = document.querySelector(".avali");

function funcaoAparecerAvaliacoes() {
    detalhes.style.display = "none";
    avaliacoes.style.display = "flex";
    avali.style.textDecoration = "underline";
    dets.style.textDecoration = "none";
};



function funcaoAparecerDetalhes() {
    detalhes.style.display = "block";
    avaliacoes.style.display = "flex";
    dets.style.textDecoration = "underline";
    avali.style.textDecoration = "none";
};


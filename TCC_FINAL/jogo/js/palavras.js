let tentativas = 6;
let listaDinamica = [];
let palavraSecretaSorteada;

const palavras = [
    palavra001 = {
        nome: "LIXO",
    },
    palavra002 = {
        nome: "RESIDUO",
    },
    palavra003 = {
        nome: "REJEITO",
    },
    palavra004 = {
        nome: "AMBIENTE",
    },
    palavra005 = {
        nome: "POLITICAS",
    },
    palavra006 = {
        nome: "CICLO",
    },
    palavra007 = {
        nome: "AGUA",
    },
    palavra008 = {
        nome: "SUSTENTABILIDADE",
    },
    palavra009 = {
        nome: "DESCARTAVEIS",
    },
    palavra010 = {
        nome: "CIENCIA",
    },
    palavra011 = {
        nome: "ECOLOGIA",
    },
    palavra012 = {
        nome: "CONSERVACAO",
    },
    palavra013 = {
        nome: "DIVERSIDADE",
    },
    palavra014 = {
        nome: "BIOSFERA",
    },
    palavra015 = {
        nome: "BIOCOMBUSTIVEL",
    },
    palavra016 = {
        nome: "ATMOSFERA",
    },
    palavra017 = {
        nome: "CLIMA",
    },
    palavra018 = {
        nome: "FAUNA",
    },
    palavra019 = {
        nome: "VEGETACAO",
    },
    palavra020 = {
        nome: "FLORA",
    }
];


criarPalavraSecreta();
function criarPalavraSecreta(){
    palavrasTamanho = palavras.length;
    const indexPalavra = parseInt(Math.random() * palavrasTamanho)
    
    palavraSecretaSorteada = palavras[indexPalavra].nome;
}

montarPalavraNaTela();
function montarPalavraNaTela(){
    palavraSecretaSorteadaTamanho = palavraSecretaSorteada.length;

    palavraTela = document.getElementById("palavra-secreta");
    palavraTela.innerHTML = "";
   
    for(i = 0; i < palavraSecretaSorteadaTamanho ; i++){
        if(listaDinamica[i] == undefined){
            listaDinamica[i] = "&nbsp;"
            palavraTela.innerHTML = palavraTela.innerHTML + "<div class='letras'>" + listaDinamica[i] + "</div>"
        }
        else{
            palavraTela.innerHTML = palavraTela.innerHTML + "<div class='letras'>" + listaDinamica[i] + "</div>"
        } 
    }
}

function verificaLetraEscolhida(letra){
    document.getElementById("tecla-" + letra).disabled = true;
    if(tentativas > 0)
    {
        mudarStyleLetra("tecla-" + letra);
        comparalistas(letra);
        montarPalavraNaTela();
    }    
}

function mudarStyleLetra(tecla){
    document.getElementById(tecla).style.background = "#C71585";
    document.getElementById(tecla).style.color = "#ffffff";
}

function comparalistas(letra){
    const pos = palavraSecretaSorteada.indexOf(letra)
    if(pos < 0){
        tentativas--
        carregaImagemForca();

        if(tentativas == 0){
            abreModal("OPS!", "Não foi dessa vez ... A palavra secreta era <br>" + palavraSecretaSorteada);
        }
    }
    else{
        for(i = 0; i < palavraSecretaSorteada.length; i++){
            if(palavraSecretaSorteada[i] == letra){
                listaDinamica[i] = letra;
            }
        }
    }
    
    let vitoria = true;
    for(i = 0; i < palavraSecretaSorteada.length; i++){
        if(palavraSecretaSorteada[i] != listaDinamica[i]){
            vitoria = false;
        }
    }

    if(vitoria == true)
    {
        abreModal("PARABÉNS!", "Você venceu...");
        tentativas = 0;
    }
}

function carregaImagemForca(){
    switch(tentativas){
        case 5:
            document.getElementById("imagem").style.background  = "url('./jogo/imagem/forca01.png')";
            break;
        case 4:
            document.getElementById("imagem").style.background  = "url('./jogo/imagem/forca02.png')";
            break;
        case 3:
            document.getElementById("imagem").style.background  = "url('./jogo/imagem/forca03.png')";
            break;
        case 2:
            document.getElementById("imagem").style.background  = "url('./jogo/imagem/forca04.png')";
            break;
        case 1:
            document.getElementById("imagem").style.background  = "url(./jogo/imagem/forca05.png')";
            break;
        case 0:
            document.getElementById("imagem").style.background  = "url('./jogo/imagem/forca06.png')";
            break;
        default:
            document.getElementById("imagem").style.background  = "url('./jogo/imagem/forca.png')";
            break;
    }
}

function abreModal(titulo, mensagem){
    let modalTitulo = document.getElementById("exampleModalLabel");
    modalTitulo.innerText = titulo;

    let modalBody = document.getElementById("modalBody");
    modalBody.innerHTML = mensagem;

    $("#myModal").modal({
        show: true
    });
}

let bntReiniciar = document.querySelector("#btnReiniciar")
bntReiniciar.addEventListener("click", function(){
    location.reload();
});

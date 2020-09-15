
function inserir(caracter){
    let visor = document.getElementById("visor");
    visor.value += caracter;
}

function limpar(){
    document.getElementById("visor").value = "";
}

function total(){
    let expressao = document.getElementById("visor").value;
    if(expressao.length > 0){
        document.getElementById("visor").value = eval(expressao);
    }
}
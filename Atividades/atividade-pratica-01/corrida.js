
let participantes = [];

function calcularCorrida() {

    for (let i = 1; i <= 6; i++) {

        let nome = document.getElementById(`p${i}_nome`).value;
        let tempo = document.getElementById(`p${i}_tempo`).value;

        if(nome.length < 1 || tempo < 1){
            continue;
        }

        let piloto = {
            posicao_final: 0,
            largada: i,
            nome: nome,
            tempo: tempo
        };

        participantes.push(piloto);
    }

    participantes.sort((a, b) => (a.tempo < b.tempo) ? -1 : (a.tempo > b.tempo) ? 1 : 0);


    let pos = 1;
    for (let i = 0; i < participantes.length; i++) {

        if(participantes[i].posicao_final == 0){
            participantes[i].posicao_final = pos;
        }

        if(i < participantes.length-1 && participantes[i].tempo == participantes[i+1].tempo){
            participantes[i+1].posicao_final = pos;
        }

        pos++;
    }
    console.log(participantes);

    gerarTabela(participantes);
}

function gerarTabela(dados) {

    function gerarTableHead(table) {
        let thead = table.createTHead();
        let row = thead.insertRow();
        let th, text;

        th = document.createElement("th");
        text = document.createTextNode("Posição Final");
        th.appendChild(text);
        row.appendChild(th);
        
        th = document.createElement("th");
        text = document.createTextNode("Largada");
        th.appendChild(text);
        row.appendChild(th);

        th = document.createElement("th");
        text = document.createTextNode("Competidor");
        th.appendChild(text);
        row.appendChild(th);

        th = document.createElement("th");
        text = document.createTextNode("Tempo (s)");
        th.appendChild(text);
        row.appendChild(th);

        thead.classList.add("thead-dark");
    }

    function gerarTableBody(table, data) {
        let tbody = document.createElement("tbody")

        for (let element of data) {
            let row = tbody.insertRow();
            for (key in element) {
                let cell = row.insertCell();
                let text = document.createTextNode(element[key]);
                cell.appendChild(text);
            }
        }
        table.appendChild(tbody);
    }

    let div_table = document.getElementById("div_resultados");
    document.getElementById("div_resultados").innerHTML = "";
    
    let table = document.createElement('table');
    gerarTableHead(table);
    gerarTableBody(table, dados);

    table.classList.add("table", "table-bordered", "table-hover", "table-striped", "text-center");

    div_table.appendChild(table);

}
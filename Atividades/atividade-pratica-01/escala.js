
function calcularRitcher(){

    let amplitude = parseFloat(document.getElementById("amplitude").value.replace(",", "."));
    let tempo = parseFloat(document.getElementById("tempo").value.replace(",", "."));

    if(isNaN(amplitude) || isNaN(tempo)){
        window.alert("Preencha os campos somente com numeros. Ex.: 1.74");
        return;
    }

    let magnitude = Math.log10(amplitude) + (3 * Math.log10(8*tempo)) - 2.92;
    magnitude = magnitude.toFixed(1);
    let mag_classe;

    if(magnitude < 3.5){
        mag_classe = "Geralmente não são sentidos esses terremotos, mas são gravados no sismógrafo.";
    }
    else if(magnitude <=5.4){
        mag_classe = "Pode ser sentido às vezes, mas raramente o terremoto causa danos.";
    }
    else if (magnitude <=6.0){
        mag_classe = "Em prédios bem construídos pode causar, no máximo, pequenos danos. Mas pode danificar seriamente casas mal construídas em regiões próximas ao terremoto.";
    }
    else if(magnitude <= 6.9){
        mag_classe = "O terremoto pode ser destrutivo em áreas em torno de até 100km do epicentro.";
    }
    else if(magnitude <= 7.9){
        mag_classe = "Terremoto grande. Pode causar sérios danos numa grande faixa de terra.";
    }
    else{
        mag_classe = "Terremoto ENORME. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros de distância do epicentro.";
    }

    console.log(amplitude);
    console.log(tempo);
    console.log(magnitude);

    let resultado_msg = document.createElement("h2");
    resultado_msg.classList.add("p-2");
    let text = document.createTextNode(`A magnitude do terremoto é de ${magnitude}`);
    resultado_msg.appendChild(text);
    
    let resultado_msg_2 = document.createElement("h5");
    let text_2 = document.createTextNode("Um terremoto dessa magnitude ter o seguinte efeito:");
    resultado_msg_2.appendChild(text_2);
    
    let resultado_msg_3 = document.createElement("p");
    let text_3 = document.createTextNode(`  - ${mag_classe}`);
    resultado_msg_3.appendChild(text_3);

    let div_resultados = document.getElementById("div_resultados");
    div_resultados.innerHTML = "";
    
    div_resultados.appendChild(resultado_msg);
    div_resultados.appendChild(resultado_msg_2);
    div_resultados.appendChild(resultado_msg_3);

}
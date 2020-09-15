
function calcularIMC(){

    let altura = parseFloat(document.getElementById("altura").value.replace(",", "."));
    let peso = parseFloat(document.getElementById("peso").value.replace(",", "."));

    if(isNaN(altura) || isNaN(peso)){
        window.alert("Preencha os campos somente com numeros. Ex.: 1.74");
        return;
    }

    let imc = peso/(altura*altura);
    imc = imc.toFixed(1);
    let imc_classificacao;

    if(imc < 18.5){
        imc_classificacao = "Subnutrição";
    }
    else if(imc <=24.9){
        imc_classificacao = "o Peso Saudável";
    }
    else if (imc <=29.9){
        imc_classificacao = "Sobrepeso";
    }
    else if(imc <= 34.9){
        imc_classificacao = "Obesidade grau 1";
    }
    else if(imc <= 39.9){
        imc_classificacao = "Obesidade grau 2";
    }
    else{
        imc_classificacao = "Obesidade grau 3";
    }

    let peso_min = 18.5 * altura * altura;
    let peso_max = 24.9 * altura * altura;

    console.log(altura);
    console.log(peso);
    console.log(imc);

    let resultado_msg = document.createElement("h3");
    resultado_msg.classList.add("p-2");
    let text = document.createTextNode(`Seu IMC é de ${imc} e você está com ${imc_classificacao}`);
    resultado_msg.appendChild(text);
    
    let resultado_msg_2 = document.createElement("h5");
    let text_2 = document.createTextNode(`O peso saudável para você está entre ${peso_min.toFixed(1)}kg e ${peso_max.toFixed(1)}kg`);
    resultado_msg_2.appendChild(text_2);

    let div_resultados = document.getElementById("div_resultados");
    div_resultados.innerHTML = "";
    
    div_resultados.appendChild(resultado_msg);
    div_resultados.appendChild(resultado_msg_2);

}
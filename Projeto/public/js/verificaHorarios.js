
function limparSelect(campo) {
    while (campo.length > 1) {
        campo.remove(1);
    }
}

function preencherSelectHorariosIniciais(data) {

    let horarios_ini = document.getElementById("horario_inicial");
    limparSelect(horarios_ini);

    for(let index in data) {
        const ini_value = data[index];

        let option = document.createElement("option");
        option.value = ini_value;
        option.innerHTML = ini_value;

        horarios_ini.appendChild(option);
    }
}

function preencherSelectHorariosFinais(data) {

    let horarios_fim = document.getElementById("horario_final");
    limparSelect(horarios_fim);

    for(let index in data) {
        const fim_value = data[index];

        let option = document.createElement("option");
        option.value = fim_value;
        option.innerHTML = fim_value;

        horarios_fim.appendChild(option);
    }
}

function carregarHorariosFinais() {

    const salas = document.getElementById("sala_id");
    const sala_index = salas.selectedIndex;
    const sala_id = salas.options[sala_index].value;

    const data = document.getElementById("data").value;

    const horarios_ini = document.getElementById("horario_inicial");
    const inicial_index = horarios_ini.selectedIndex;
    // se nenhuma opção estiver selecionada "inicial_index = -1"

    const horarios_fim = document.getElementById("horario_final");
    limparSelect(horarios_fim);

    if (sala_id == "" || data == "" || inicial_index == -1){
        return;
    }

    const inicial_value = horarios_ini.options[inicial_index].value;

    $.ajax({
        type: 'GET',
        url: '/ajax/horariosFinais',
        data: {
            sala_id: sala_id,
            data: data,
            horario_inicial: inicial_value,
        },
        datatype: "json",
        success: function (data) {
            console.log(data);
            preencherSelectHorariosFinais(data);
        }
    });
    
    
}

function carregarHorarios() {

    const salas = document.getElementById("sala_id");
    const sala_index = salas.selectedIndex;
    const sala_id = salas.options[sala_index].value;

    const data = document.getElementById("data").value;

    const horarios_ini = document.getElementById("horario_inicial");
    limparSelect(horarios_ini);
    const horarios_fim = document.getElementById("horario_final");
    limparSelect(horarios_fim);

    if (sala_id == "" || data == "" ){
        return;
    }


    $.ajax({
        type: 'GET',
        url: '/ajax/horariosIniciais',
        data: {
            sala_id: sala_id,
            data: data,
        },
        datatype: "json",
        success: function (data) {
            console.log(data);
            preencherSelectHorariosIniciais(data);
        }
    });
}

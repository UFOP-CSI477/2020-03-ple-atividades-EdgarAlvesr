
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


function carregarHorariosFinais() {

    let horarios_fim = document.getElementById("horario_final");
    limparSelect(horarios_fim);
    
    const horarios_ini = document.getElementById("horario_inicial");

    for (let index = 0; index < horarios_ini.length; index++) {
        const hora_ini = horarios_ini[index].value;

        //VERIFICAR LOGICA PRA FAZER PULAR HORARIOS
        
    }
    
    
}
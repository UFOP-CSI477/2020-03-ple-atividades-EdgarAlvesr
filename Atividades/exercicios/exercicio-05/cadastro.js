
function isCampoVazio(campo){
    if(!campo.value.length > 0){
        window.alert("O campo não pode ser vazio!");
        campo.focus();
        return true;
    }

    return false;
}

function validarCPF(campo){
    let cpf = campo.value;

    if(cpf.length < 11 || cpf.length > 14){
        window.alert("CPF inválido!");
        campo.focus();
        return false;
    }
    
    return true;
}

function validarCampos(){

    let nome = document.formCadastro.nome;
    let cpf = document.formCadastro.cpf;
    let telefone = document.formCadastro.telefone;
    let email = document.formCadastro.email;
    let endereco = document.formCadastro.endereco;
    let cidade = document.formCadastro.cidade;
    let estado = document.formCadastro.estado;
    let flag = true;

    var arrayCampos = [nome, telefone, email, endereco, cidade, estado];

    if(!validarCPF(cpf)){
        flag = false;
        return flag;
    }

    for (const campo of arrayCampos) {
        if(isCampoVazio(campo)){
            flag = false;
            return flag;
        }
    }

    if(flag){
        window.alert("Cadastro realizado com sucesso!");
    }
    
    return flag;
}
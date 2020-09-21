
function isCampoVazio(campo){
    if(!campo.value.length > 0){
        window.alert("O campo não pode ser vazio!");
        campo.focus();
        return true;
    }

    return false;
}

function validarForm(){
    
    let nome = document.formProduto.nome;
    let um = document.formProduto.um;
    
    if(isCampoVazio(nome) || isCampoVazio(um)){
        return false;
    }
    
    if(um.value.length > 3){
        window.alert("O campo não pode ter mais de 3 caracteres!");
        campo.focus();
        return false;
    }

    return true;
}
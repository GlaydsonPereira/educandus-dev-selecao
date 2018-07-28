function validarCamposMandatorios(){
    
    var descricao = document.getElementById("descricaoConta").value;
    var limiteMaxConta = document.getElementById("limiteMaxConta").value;
    var limiteMaxArquivo = document.getElementById("limiteMaxArquivo").value;
    
    if(descricao === "" || limiteMaxConta === "" || limiteMaxArquivo === ""){
        alert("Preencha todos os campos obrigatórios");
        return false;
    }else{
        document.forms["formTipoConta"].action = "../controller/contaController.php";
        document.forms["formTipoConta"].submit();
    }
}



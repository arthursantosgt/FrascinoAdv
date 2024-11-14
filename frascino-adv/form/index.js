function contato(){
    let nome = document.getElementById('nome').value
    let email = document.getElementById('email').value
    let mensagem = document.getElementById('mensagem').value

    let contato = Boolean

    if(contato = true){
        alert("Mensagem enviada com sucesso!")
    }else{
        alert("Ocorreu um erro na execução, por favor tente novamente")
    }
}
calcular.addEventListener("click", contato)
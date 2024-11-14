document.getElementById('myForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio padrão do formulário


  var form = this;
  var formData = new FormData(form);


  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'https://formsubmit.co/arthur.santosguitarrista@gmail.com', true);
  xhr.onload = function() {
    // Lógica adicional que você deseja executar após o envio do formulário
    // Por exemplo, exibir uma mensagem de sucesso
    window.alert('Formulário enviado com sucesso!');
    form.reset(); // Limpa os campos do formulário
  };
  xhr.send(formData);
});
function mudarEstilo() {
  var input = document.getElementById("meuInput");
  
  if (input.style.backgroundColor === "whitesmoke") {
      input.style.backgroundColor = "#3498db";
      input.value = "Enviar";
  } else {
      input.style.backgroundColor = "blue";
      input.value = "Enviado";
  }
}


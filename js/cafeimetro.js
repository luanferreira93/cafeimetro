window.onload = [
    validaForm()
]

function validaForm() {
  const nome = document.getElementById('nome');
  const descricao = document.getElementById('descricao');
  const msgErro = document.getElementById('msg-erro');

  document.getElementById('formCafe').addEventListener('click',(e)=>{
    let msg = 0;
    if(nome.value === '' || descricao.value === '') msg++;
  
    if(msg > 0){
        e.preventDefault();
        msgErro.innerHTML = "Campos obrigatórios (*)";
        return false;
    }
  })
  
}
 // Acessando todos os links com a classe excluir
 const links = document.querySelectorAll('.excluir');
 for (let i = 0; i < links.length; i++) {
     links[i].addEventListener("click",function(event){
         event.preventDefault(); 
         let resposta = confirm("Deseja realmente excluir?");
         if(resposta) location.href = links[i].getAttribute('href');   
     });
     
 }

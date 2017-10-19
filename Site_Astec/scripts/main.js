// Adicione o seu javascript aqui
// Não esqueça de adicioná-lo aos respectivos layouts onde este arquivo js é necessário

// Adicione uma rolagem suave em todos os links dentro da barra de navegação
$("#navbar a").on('click', function(event) {
  
// Certifique-se de que this.hash tenha um valor antes de substituir o comportamento padrão
    if (this.hash !== "") {
  
      // Prevenção do comportamento do clique da âncora padrão
      event.preventDefault();
  
      // Store hash
      var hash = this.hash;
  
     // Usando o método animate () do jQuery para adicionar scroll suave da página
     // O número opcional (800) especifica o número de milissegundos necessários para rolar para a área especificada
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
  
     // Adicionar hash (#) ao URL quando feito rolagem (comportamento de clique padrão)
        window.location.hash = hash;
      });
  
    } // Fim do if
  
  });








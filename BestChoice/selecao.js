document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.size-option');
  
    buttons.forEach(button => {
      button.addEventListener('click', function() {
        // Remove a classe 'selected' de todos os botões
        buttons.forEach(btn => btn.classList.remove('selected'));
        
        // Adiciona a classe 'selected' ao botão clicado
        this.classList.add('selected');
      });
    });



    const colors = document.querySelectorAll('.color-option');
  
    colors.forEach(button => {
      button.addEventListener('click', function() {
        // Remove a classe 'selected' de todos os botões
        colors.forEach(btn => btn.classList.remove('selected'));
        
        // Adiciona a classe 'selected' ao botão clicado
        this.classList.add('selected');
      });
    });
  });
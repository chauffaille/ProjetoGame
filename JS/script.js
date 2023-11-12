// script.js
document.addEventListener('DOMContentLoaded', function () {
    var imagemChuva = document.querySelector('.chuva');
    var imagemChuva2 = document.querySelector('.chuva2');

    function verificarPosicao() {
        var marginTop = parseInt(window.getComputedStyle(imagemChuva).marginTop);
        
        if (marginTop >= -400) {
            // Reinicie a animação
            void imagemChuva.offsetWidth;
            imagemChuva2.style.animation = 'chuva2 2s linear infinite';
        }
    }

    // Verifique a posição periodicamente (a cada 100 milissegundos neste exemplo)
    setInterval(verificarPosicao, 100);
});
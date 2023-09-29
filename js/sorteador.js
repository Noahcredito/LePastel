document.addEventListener('DOMContentLoaded', function () {
    const botaoSortear = document.getElementById('sortear');
    const resultado = document.getElementById('resultado');

    botaoSortear.addEventListener('click', function () {
        const numerosString = document.getElementById('numeros').value;
        const numerosArray = numerosString.split(',').map(num => parseInt(num.trim()));

        if (numerosArray.some(isNaN)) {
            alert('Por favor, insira números válidos separados por vírgula.');
        } else if (numerosArray.length === 0) {
            alert('Por favor, insira pelo menos um número.');
        } else {
            const numeroSorteado = numerosArray[Math.floor(Math.random() * numerosArray.length)];
            resultado.textContent = numeroSorteado;
        }
    });
});

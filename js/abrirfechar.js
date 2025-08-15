const cpainel1 = document.getElementById("painel1");
const cpainel2 = document.getElementById("painel2");
const cpainel3 = document.getElementById("painel3");
const cpainel4 = document.getElementById("painel4");
const cpainel5 = document.getElementById("painel5");
const cpainel8 = document.getElementById("painel8");
const cpainel9 = document.getElementById("painel9");
const cpainel10 = document.getElementById("painel10");



function mostrarpainel(numero_painel) {
    switch (numero_painel) {
        case 1:
            cpainel1.style.display = 'inline';
            cpainel2.style.display = 'none';
            cpainel3.style.display = 'none';
            cpainel4.style.display = 'none';
            cpainel5.style.display = 'none';
            cpainel10.style.display = 'none';
        break;
        case 2:
            cpainel1.style.display = 'none';
            cpainel2.style.display = 'inline';
            cpainel3.style.display = 'none';
            cpainel4.style.display = 'none';
            cpainel5.style.display = 'none';
            cpainel10.style.display = 'none';
        break
        case 3:
            cpainel1.style.display = 'none';
            cpainel2.style.display = 'none';
            cpainel3.style.display = 'inline';
            cpainel4.style.display = 'none';
            cpainel5.style.display = 'none';
            cpainel10.style.display = 'none';
        break;
        case 4:
            cpainel1.style.display = 'none';
            cpainel2.style.display = 'none';
            cpainel3.style.display = 'none';
            cpainel4.style.display = 'inline';
            cpainel5.style.display = 'none';
            cpainel10.style.display = 'none';
        break;
        case 5:
            cpainel1.style.display = 'none';
            cpainel2.style.display = 'none';
            cpainel3.style.display = 'none';
            cpainel4.style.display = 'none';
            cpainel5.style.display = 'inline';
            cpainel10.style.display = 'none';
        break;
        case 10:
            cpainel1.style.display = 'none';
            cpainel2.style.display = 'none';
            cpainel3.style.display = 'none';
            cpainel4.style.display = 'none';
            cpainel5.style.display = 'none';
            cpainel10.style.display = 'inline';
        break;
        default:
            cpainel1.style.display = 'none';
            cpainel2.style.display = 'none';
            cpainel3.style.display = 'none';
            cpainel4.style.display = 'none';
            cpainel5.style.display = 'none';
            // cpainel6.style.display = 'none';
            cpainel7.style.display = 'none';
            cpainel8.style.display = 'none';
            cpainel9.style.display = 'none';
            cpainel10.style.display = 'none';
        break;
    }
}

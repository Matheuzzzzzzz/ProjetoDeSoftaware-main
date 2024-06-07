function search() {
    const input = document.getElementById('search-input').value;
    alert('Você pesquisou por: ' + input);
    
}
function formatCPF(input) {
    let value = input.value;
    value = value.replace(/\D/g, "");
    value = value.replace(/(\d{3})(\d)/, "$1.$2");
    value = value.replace(/(\d{3})(\d)/, "$1.$2");
    value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    input.value = value;
}

function formatNumber(input) {
    let value = input.value;
    value = value.replace(/[^\d,]/g, "");
    let parts = value.split(",");
    let integerPart = parts[0];
    let decimalPart = parts.length > 1 ? "," + parts[1] : "";
    integerPart = integerPart.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    input.value = integerPart + decimalPart;
}
document.addEventListener("DOMContentLoaded", function() {
    const cpfInput = document.getElementById("cpf");
    const numberInput = document.getElementById("number");

    if (cpfInput.value) formatCPF(cpfInput);
    if (numberInput.value) formatNumber(numberInput);
});
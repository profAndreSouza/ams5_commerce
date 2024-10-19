document.addEventListener("DOMContentLoaded", function() {
    

    const quantityInput = document.getElementById("quantity");
    const quantityAInput = document.getElementById("quantityA");
    const quantityBInput = document.getElementById("quantityB");
    document.getElementById("decrease-quantity").addEventListener("click", function() {
        if (quantityInput.value > 1) {
            quantityInput.value--;
        }
    });

    document.getElementById("increase-quantity").addEventListener("click", function() {
        quantityInput.value++;
    });

    document.getElementById("decrease-quantityA").addEventListener("click", function() {
        if (quantityAInput.value > 1) {
            quantityAInput.value--;
        }
    });

    document.getElementById("increase-quantityA").addEventListener("click", function() {
        quantityAInput.value++;
    });

    document.getElementById("decrease-quantityB").addEventListener("click", function() {
        if (quantityBInput.value > 1) {
            quantityBInput.value--;
        }
    });

    document.getElementById("increase-quantityB").addEventListener("click", function() {
        quantityBInput.value++;
    });
});

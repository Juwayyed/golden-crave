const quantityInput = document.getElementById("quantity");
const addBtn = document.getElementById("add-btn");
const minBtn = document.getElementById("minus-btn");

const handleAdd = function () {
  let currentValue = parseInt(quantityInput.value);
  if (currentValue < 100) {
    quantityInput.value = currentValue + 1;
  }
};

const handleMinus = function () {
  let currentValue = parseInt(quantityInput.value);
  if (currentValue > 1) {
    quantityInput.value = currentValue - 1;
  }
};

addBtn.addEventListener("click", handleAdd);
minBtn.addEventListener("click", handleMinus);

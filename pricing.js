document.addEventListener("DOMContentLoaded", function () {
  const bookButtons = document.querySelectorAll(".book-now");
  const modal = document.getElementById("payment-modal");
  const closeModal = document.querySelector(".close-btn");
  const packageInput = document.getElementById("package");
  const paymentForm = document.getElementById("payment-form");

  bookButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const packageName = this.parentElement.querySelector("h2").innerText;
      packageInput.value = packageName;
      modal.style.display = "block";
    });
  });

  closeModal.addEventListener("click", function () {
    modal.style.display = "none";
  });

  window.addEventListener("click", function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });

  paymentForm.addEventListener("submit", function (event) {
    event.preventDefault();
    alert("Payment successful!");
    modal.style.display = "none";
    paymentForm.reset();
  });
});

function showToast(message, type = "success") {
  const toast = document.createElement("div");
  toast.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 15px 25px;
        background: ${type === "success" ? "#2ecc71" : "#e74c3c"};
        color: white;
        border-radius: 8px;
        box-shadow: 0 10px 15px rgba(0,0,0,0.2);
        z-index: 9999;
        font-family: sans-serif;
        animation: slideIn 0.5s ease-out;
    `;
  toast.textContent = message;
  document.body.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = "0";
    toast.style.transition = "opacity 0.5s ease";
    setTimeout(() => toast.remove(), 500);
  }, 4000);
}

function setupPhoneValidation() {
  const phoneInput = document.getElementById("phone");
  const submitBtn = document.querySelector('button[type="submit"]');
  if (!phoneInput || !submitBtn) return;

  phoneInput.addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, "");
    if (this.value.length > 8) this.value = this.value.slice(0, 8);

    if (this.value.length === 8) {
      this.style.borderColor = "#2ecc71";
      submitBtn.disabled = false;
      submitBtn.style.opacity = "1";
    } else {
      this.style.borderColor = "#ccc";
      submitBtn.style.opacity = "0.5";
    }
  });
}
function validateFinalReservation() {
  const phoneInput = document.getElementById("phone");
  const phoneValue = phoneInput.value;

  if (phoneValue.length < 8) {
    showToast(
      "❌ Le numéro de téléphone doit comporter exactement 8 chiffres.",
      "error"
    );
    phoneInput.style.borderColor = "#e74c3c";
    phoneInput.focus();

    return false;
  }

  return true;
}

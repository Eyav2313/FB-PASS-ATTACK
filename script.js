const form = document.querySelector("form"),
    emailField = form.querySelector(".email_phone-field"),
    emailInput = emailField.querySelector(".email"),
    passField = form.querySelector(".password-field"),
    passInput = passField.querySelector(".password"),
    emailError = document.querySelector(".error.email_phone"),
    passError = document.querySelector(".error.password");

// Email and phone validation
function checkEmailOrPhone() {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailInput.value === "") {
        emailError.style.display = "flex";
        emailInput.style.border = "1px solid #d93025";
        emailError.querySelector(".error-text").textContent = "Email or phone number is required.";
        emailField.classList.add("invalid"); // Add invalid class
        
        return false;
    } else if (!emailInput.value.match(emailPattern)) {
        emailError.style.display = "flex";
        emailInput.style.border = "1px solid #d93025";
        emailError.querySelector(".error-text").textContent = "Please enter a valid email or phone number.";
        emailField.classList.add("invalid"); // Add invalid class
        return false;
    } else {
        emailError.style.display = "none";
        emailInput.style.border = "1px solid #1877f2";
        emailField.classList.remove("invalid"); // Remove invalid class
        return true;
    }
}

// Password validation
function checkPassword() {
    if (passInput.value === "") {
        passError.style.display = "flex";
        passInput.style.border = "1px solid #d93025";
        passError.querySelector(".error-text").textContent = "Password is required.";
        passField.classList.add("invalid"); // Add invalid class
        return false;
    } else if (passInput.value.length < 6) {
        passError.style.display = "flex";
        passInput.style.border = "1px solid #d93025";
        passError.querySelector(".error-text").textContent = "Password must be at least 6 characters.";
        passField.classList.add("invalid"); // Add invalid class
        return false;
    } else {
        passError.style.display = "none";
        passInput.style.border = "1px solid #1877f2";
        passField.classList.remove("invalid"); // Remove invalid class
        return true;
    }
}

// Calling function on form submit
form.addEventListener("submit", (e) => {
    let isEmailValid = checkEmailOrPhone();
    let isPasswordValid = checkPassword();

    // Only submit the form if both fields are valid
    if (!isEmailValid || !isPasswordValid) {
        e.preventDefault(); // Prevent form submission if validation fails
    }
});

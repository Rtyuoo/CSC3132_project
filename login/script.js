document.addEventListener("DOMContentLoaded", function () {
    const loginBtn = document.getElementById("login-btn");
    const signupBtn = document.getElementById("signup-btn");
    const formWrapper = document.querySelector(".form-wrapper");
    const loginForm = document.getElementById("login-form");
    const signupForm = document.getElementById("signup-form");
  
    loginBtn.addEventListener("click", () => {
      loginBtn.classList.add("active");
      signupBtn.classList.remove("active");
      formWrapper.style.transform = "translateX(0)";
      loginForm.classList.add("active");
      signupForm.classList.remove("active");
    });
  
    signupBtn.addEventListener("click", () => {
      signupBtn.classList.add("active");
      loginBtn.classList.remove("active");
      formWrapper.style.transform = "translateX(-50%)";
      signupForm.classList.add("active");
      loginForm.classList.remove("active");
    });
  });
  
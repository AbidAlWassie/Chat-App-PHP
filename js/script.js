window.onload = function () {
  const form = document.getElementById("form");
  const username = document.getElementById("username");
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  const password2 = document.getElementById("password2");
  
  function showPassword() {
  
  }
  
  const signUpForm = document.getElementById("formSignUp");
  const inputName = document.querySelector(".inputName");
  const inputEmail = document.querySelector(".inputEmail");
  const inputPassword = document.querySelector(".inputPassword");
  const inputConfirmPassword = document.querySelector(".inputConfirmPassword");
  const errorMessage = document.querySelectorAll(".errorMessage");
  
  
  inputName.addEventListener("input", inputUpdate);
  inputEmail.addEventListener("input", inputUpdate);
  inputPassword.addEventListener("input", inputUpdate);
  inputConfirmPassword.addEventListener("input", inputUpdate);
  
  function inputUpdate(e) {
    e.preventDefault();
    console.log("Updated!")
    checkInputs();
  }
  
  
  function checkInputs() {
    
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();
    
    if(usernameValue === "") {
      setErrorFor(username, "Username cannot be blank");
    } else {
      setSuccessFor(username);
    }
    
    if(emailValue === "") {
      setErrorFor(email, "Email cannot be blank");
    } else if (!isEmail(emailValue)) {
      setErrorFor(email, "Not a valid email");
    } else {
      setSuccessFor(email);
    }
    
    if(passwordValue === "") {
      setErrorFor(password, "Password cannot be blank");
    } else {
      setSuccessFor(password);
    }
    
    if(password2Value === "") {
      setErrorFor(password2, "Password2 cannot be blank");
    } else if(passwordValue !== password2Value) {
      setErrorFor(password2, "Passwords does not match");
    } else{
      setSuccessFor(password2);
    }
  }
  
  function setErrorFor(input, message) {
    const formControl = input.parentElement.parentElement;
    formControl.className = "form-control error";
  }
  
  function setSuccessFor(input) {
    const formControl = input.parentElement.parentElement;
    formControl.className = "form-control success";
  }
  
  function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
  }
  
}

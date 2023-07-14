function myTime() {
    var date = new Date();
    document.getElementById("time").innerHTML = date;
    setTimeout(myTime, 1000);
}

function submitForm(form) {
    const inputs = form.querySelectorAll('input[type="radio"], input[type="email"], select');
  
    for (let input of inputs) {
      if (input.type === "radio") {
        if (input.value === "N/A" || input.value === "mixed") continue;
  
        const radioGroup = form.querySelectorAll(`[name="${input.name}"]`);
        if (!Array.from(radioGroup).some((radio) => radio.checked)) {
          alert('Please fill out all fields before submitting the form.');
          return;
        }
      } else if (input.tagName === "SELECT" && input.value === '') {
        alert('Please fill out all fields before submitting the form.');
        return;
      } else if (input.type === "email" && !isValidEmail(input.value.trim())) {
        alert('Please enter a valid email address.');
        return;
      }
    }
  
    alert('Form submitted successfully!');
    form.submit();
  }
  
  function isValidEmail(email) {
    // check email format using a regular expression
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
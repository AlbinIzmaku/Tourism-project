function validateInputN(event) {
  const input = event.target.value;
  const regex = /^[a-zA-Z]+$/;
  if (!regex.test(input)) {
    document.getElementById("message1").style.display = "block";
  } else {
    document.getElementById("message1").style.display = "none";
  }
}
function validateInputL(event) {
  const input = event.target.value;
  const regex = /^[a-zA-Z]+$/;
  if (!regex.test(input)) {
    document.getElementById("message2").style.display = "block";
  } else {
    document.getElementById("message2").style.display = "none";
  }
}
function validatePasswords() {
  const password = document.getElementById("sPassword").value;
  const confirmPassword = document.getElementById("sCpassword").value;

  if (password !== confirmPassword) {
    document.getElementById("message3").style.display = "block";
  } else {
    document.getElementById("message3").style.display = "none";
  }
}
function validatePhoneNumber() {
  const phoneNumber = document.getElementById("sPhone").value;
  const regex = /^\+383\s\d{2}-\d{3}-\d{3}$/;
  if (!regex.test(phoneNumber)) {
    document.getElementById("message4").style.display = "block";
  } else {
    document.getElementById("message4").style.display = "none";
  }
}
function myFunction() {
  alert("You Signed Up successfully");
}

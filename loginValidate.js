let form = document.querySelector("#loginlogin");

form.addEventListener('submit', function(e) {
  e.preventDefault();

  let username = form.elements.username.value;
  let password = form.elements.password.value;

  if(username == "") {
    alert("Masukkan username");
  } else if(password == "") {
    alert("Masukkan password");
  }
});
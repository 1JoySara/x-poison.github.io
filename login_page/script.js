document.getElementById("login").addEventListener("submit", function(event){
    var email = document.getElementById("emailForm").value;
    var password = document.getElementById("passwordForm").value;
    var error = document.getElementById("error");
    error.textContent = "";

    if(email.trim() === "" || password.trim() === ""){
        alert("Fill  Details Correctly...!");
    }

    console.log(email);
    console.log(password);
})
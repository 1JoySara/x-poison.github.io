document.getElementById("form").addEventListener('submit', function(event){
    var first_Name = document.getElementById("firstName").value;
    var second_Name = document.getElementById("secondName").value;
    var phone_Number = document.getElementById("phoneNumber").value;
    var email = document.getElementById("emailaddress").value;
    var school_Name = document.getElementById("schoolName").value;
    var password = document.getElementById("password_1").value;
    var password_2 = document.getElementById("password_2").value;
    const password_error = "Passwords don't match";

    if(password !== password_2){
        alert(password_error);
        event.preventDefault();
    }

    // console.log(password);
    console.log(password_2);
});

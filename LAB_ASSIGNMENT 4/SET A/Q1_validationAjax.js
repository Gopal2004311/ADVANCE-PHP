const btn = document.getElementById("submit");
const validate = () => {
    let username = document.getElementById("username");
    let password = document.getElementById("password");
    // let userError = document.getElementById("userError");
    // let passError = document.getElementById("passError");
    // let valid = document.getElementById("valid");
    // let success = document.getElementById("success");
    let xml = new XMLHttpRequest();
    xml.onreadystatechange = (e) => {
        if (xml.readyState == 4 && xml.status == 200) {
            e.preventDefault();
            console.log(xml.responseText);
            // if (xml.responseText == "invalid") {
            //     passError.innerHTML = "*please enter valid password*";
            //     password.style.border = "1px solid red";
            // } else if (xml.responseText == "invalid") {
            //     userError.innerHTML = "*please enter valid username*"
            //     username.style.border = "1px solid red";
            // } else if (xml.responseText === "valid") {
            //     valid.classList.add("valid");
            //     success.classList.add("success");
            //     success.innerHTML = "Registration successful!!";
            // }
        }
    }
    xml.open("GET", "Q1_validationAjax.php?user=" + username.value + "&pass=" + password.value, true);
    xml.send();
}
btn.addEventListener("click", validate);
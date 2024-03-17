const input = document.getElementById("username");
const error = document.getElementById("error");
const validate = () => {
    console.log(document.getElementById("username").value);
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        let submit=document.getElementById("submit");
        if (xml.readyState == 4 && xml.status == 200) {
            error.innerHTML = xml.responseText;
            if (xml.responseText === "valid username!") {
                submit.disabled = false;
                error.style.color="green";
                submit.classList.replace("disabled","enabled")
            } else {
                document.getElementById("submit").disabled = true;
                submit.classList.replace("enabled","disabled")
                error.style.color="red";
            }
        }
    }
    xml.open("GET", "Q2_validationAjax.php?name=" + input.value, true);
    xml.send();
}
input.addEventListener("keyup", validate);
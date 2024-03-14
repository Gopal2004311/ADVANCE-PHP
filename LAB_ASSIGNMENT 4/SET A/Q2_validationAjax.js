const input = document.getElementById("username");
const error = document.getElementById("error");
const validate = () => {
    console.log(document.getElementById("username").value);
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        if (xml.readyState == 4 && xml.status == 200) {
            error.innerHTML = xml.responseText;
            if (xml.responseText === "valid username!") {
                document.getElementById("submit").disabled = false;
            } else {
                document.getElementById("submit").disabled = true;
            }
        }
    }
    xml.open("GET", "Q2_validationAjax.php?name=" + input.value, true);
    xml.send();
}
input.addEventListener("keyup", validate);
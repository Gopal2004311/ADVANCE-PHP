const btn = document.getElementById("submit");
const display = () => {
    let result = document.getElementById("result");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        if (xml.readyState == 4 && xml.status == 200) {
            result.innerHTML = xml.responseText;
        }
    }

    xml.open("GET", "Q2.php", true);
    xml.send();
}

btn.addEventListener("click", display);
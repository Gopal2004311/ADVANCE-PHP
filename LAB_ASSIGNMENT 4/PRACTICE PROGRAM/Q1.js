const btn = document.getElementById("submit");
const addition = () => {
    let n1 = document.getElementById("num1").value;
    let n2 = document.getElementById("num2").value;
    let result = document.getElementById("Addition");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = () => {
        if (xml.readyState == 4 && xml.status == 200) {
            result.innerHTML = xml.responseText;
        }
    }
    xml.open("GET", "Q1.php?num1=" + n1 + "&num2=" + n2, true);
    xml.send();
}
btn.addEventListener("click", addition);
const submit=document.getElementById("submit");
const country=document.getElementById("country");
const result=document.getElementById("result");
const display=(event)=>{
    event.preventDefault();
    let http=new XMLHttpRequest();
    http.onreadystatechange=()=>{
        if(http.readyState==4&&http.status==200)
        {
            result.innerHTML=http.responseText;
        }
    }
    http.open("POST",`Q2_displayCalculate.php?country=${country.value}`,true);
    http.send();
}
submit.addEventListener("click",display);
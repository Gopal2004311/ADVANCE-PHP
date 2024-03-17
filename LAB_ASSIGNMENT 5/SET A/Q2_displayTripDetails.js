const trip=document.getElementById("trip");
const submit=document.getElementById("submit");
const output=document.getElementById("output");
const display=(event)=>{
    event.preventDefault();
    let http=new XMLHttpRequest();
    http.onreadystatechange=()=>{
        if(http.readyState==4&&http.status==200)
        {
            output.innerHTML=http.responseText;
        }
    }
    http.open("GET",`Q2_getSelectedData.php?trip=${trip.value}`,true);
    http.send();
}

submit.addEventListener("click",display);
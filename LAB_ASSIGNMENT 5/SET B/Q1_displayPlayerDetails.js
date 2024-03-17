const input=document.getElementById("player");
const submit=document.getElementById("submit");
const output=document.getElementById("player-table");
const display=(event)=>{
    event.preventDefault();
    let http=new XMLHttpRequest();
    http.onreadystatechange=(event)=>{
        event.preventDefault();
        if(http.readyState==4&&http.status==200)
        {
            output.innerHTML=http.responseText;
        }
    }

    http.open("GET",`Q1_getPlayerDetails.php?player=${input.value}`,true);
    http.send();
}
submit.addEventListener("click",display);
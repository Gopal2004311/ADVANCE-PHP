const age=document.getElementById("age");
const option=document.getElementById("condition");
const submit=document.getElementById("submit");
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
    http.open("GET",`Q1_getVoterDetails.php?age=${age.value}&condition=${option.value}`,true);
    http.send();
}
submit.addEventListener("click",display);
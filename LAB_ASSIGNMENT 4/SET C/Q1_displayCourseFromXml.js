const submit=document.getElementById("submit");
const input=document.getElementById("course");
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
    http.open("GET",`Q1_fetchCourseFromXml.php?name=${input.value}`,true);
    http.send();
}

submit.addEventListener("click",display);
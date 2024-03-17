const student=document.getElementById("name");
const submit=document.getElementById("submit");
const output=document.getElementById("output");
const printf=(event)=>{
    event.preventDefault();
    let http=new XMLHttpRequest();
    http.onreadystatechange=()=>{
        if(http.readyState==4&&http.status==200)
        {
            output.innerHTML=http.responseText;
        }
    }
    http.open("GET",`Q3_getSelectedStudent.php?student=${student.value}`,true);
    http.send();
}
submit.addEventListener("click",printf);
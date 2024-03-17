const bookName=document.getElementById("name");
const submit=document.getElementById("submit");
const details=document.getElementById("details");
//this ajax program to fetch the data of selected book from php
const display=(event)=>{
    event.preventDefault();
    console.log("display called");
    let http=new XMLHttpRequest();
    http.onreadystatechange=(event)=>{
        event.preventDefault();
        console.log("ready state changed");
        if(http.readyState==4&&http.status==200)
        {
            console.log("response printed");
            details.innerHTML=http.responseText;
        }
    }
    http.open("GET",`Q3_getFromXml.php?book=${bookName.value}`,true);
    http.send();
}
submit.addEventListener("click",display);


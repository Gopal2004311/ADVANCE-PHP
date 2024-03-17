const submit = document.getElementById("submit");
const username = document.getElementById("user");
const password = document.getElementById("password");
const span = document.getElementById("error");
const hidden = document.getElementById("hidden");
const validate = (event) => {
    event.preventDefault();
    let http = new XMLHttpRequest();
    console.log("hello Ajax");
    http.onreadystatechange = (e) => {
        e.preventDefault();
        if (http.readyState == 4 && http.status == 200) {
            console.log("ready state changed");
            if(http.responseText=="false")
            {
            span.style.color = "white";
            hidden.style.backgroundColor="rgb(223, 83, 83)";
            span.innerHTML = "Please!check login details..!";
            }else{
            span.style.color = "white";
             hidden.style.backgroundColor="rgb(115, 241, 115)";
            span.innerHTML = "welcome to ajax script..!";
            setTimeout(() => {
                location.href="Q2_validationAjax.html";
            }, 1000);
            }
        }
    }
    http.open("GET", `Q1_validationAjax.php?user=${username.value}&pass=${password.value}`, true);
    http.send();
}

const check = () => {
    let pattern1 = /^[a-zA-Z\s]+$/;
    let pattern2 = /^[0-9]+$/;
    if (pattern1.test(username.value) && pattern2.test(password.value)) {
        submit.classList.replace("submit", "enabled");
        submit.style.fontsize = "20px";
        submit.style.color = "white";
        submit.style.marginTop = "1rem";
        submit.disabled = false;
    } else {
        submit.classList.replace("enabled", "submit");
        submit.disabled = true;
    }
}
password.addEventListener("keyup", check);
username.addEventListener("keyup", check);
submit.addEventListener("click", validate);
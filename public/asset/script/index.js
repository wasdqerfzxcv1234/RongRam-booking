const active = document.getElementById("active");
const unactive = document.getElementById("unactive");

document.getElementById("GotoLogIn").addEventListener('click', () => {
    active.classList.replace("unactive", "active");
    unactive.classList.replace("active", "unactive");
})

document.getElementById("GoToRegister").addEventListener('click', () => {
    active.classList.replace("active", "unactive");
    unactive.classList.replace("unactive", "active");
})

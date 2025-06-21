



const toggleBtn = document.getElementById("toggle-btn");
const sidebar = document.getElementById("sidebar");

function toggleSidebar() {
    sidebar.classList.toggle("closed");
    toggleBtn.classList.toggle("rotate");
    Array.from(sidebar.getElementsByClassName("show")).forEach(ul => {
        ul.classList.remove("show");
        ul.previousElementSibling.classList.remove("rotate");
    });
}

function toggleSubMenu(button) {
    button.nextElementSibling.classList.toggle("show");
    button.classList.toggle("rotate");
    if(sidebar.classList.contains("closed")) {
        sidebar.classList.remove("closed");
        toggleBtn.classList.remove("rotate");
    }
}
// Animating Sidebar
sidebarToggle = document.getElementById('sidebar-toggle');
sidebar = document.getElementById('sidebar');
toggleIcon = document.getElementById('toggle-icon');

sidebarToggle.addEventListener("click", toggleSidebar);

function toggleSidebar(){
    if (sidebar.style.right === "0px") {
        sidebar.style.right = "-160px";
        toggleIcon.classList.remove('fa-x');
        toggleIcon.classList.add('fa-bars');
    } else {
        sidebar.style.right = "0px";
        toggleIcon.classList.remove('fa-bars');
        toggleIcon.classList.add('fa-x');
    }
    
}
// Theme switching function
function setTheme(theme) {
    document.documentElement.setAttribute("data-theme", theme);
    localStorage.setItem("theme", theme);
}

// Load saved theme
const savedTheme = localStorage.getItem("theme") || "light";
document.documentElement.setAttribute("data-theme", savedTheme);

// Simulate authentication state
let isAuthenticated = false; // Change this to false to see login/register buttons

if (!isAuthenticated) {
    document.querySelector(".avatar").parentElement.classList.add("hidden");
    document.getElementById("auth-buttons").classList.remove("hidden");
}

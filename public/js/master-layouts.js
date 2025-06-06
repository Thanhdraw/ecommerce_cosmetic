// Check for saved theme preference or default to system preference
const theme =
    localStorage.getItem("theme") ||
    (window.matchMedia("(prefers-color-scheme: dark)").matches
        ? "dark"
        : "light");

if (theme === "dark") {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

// Toggle theme function
function toggleTheme() {
    const isDark = document.documentElement.classList.contains("dark");
    if (isDark) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("theme", "light");
    } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("theme", "dark");
    }
}

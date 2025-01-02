document.addEventListener("DOMContentLoaded", function () {
    const loginLink = document.getElementById("login-link");
    const userMenu = document.getElementById("user-menu");
    const userEmailDisplay = document.getElementById("user-email");

    // Simulate retrieving a cookie value (replace this with actual cookie retrieval)
    const userCookie = getCookie("user_email");

    if (userCookie) {
        // User is logged in, show profile menu
        loginLink.style.display = "none";
        userMenu.style.display = "block";
        userEmailDisplay.style.display = "block";
        userEmailDisplay.textContent = userCookie; // Show user email in dropdown
    } else {
        // User is not logged in, show login link
        loginLink.style.display = "block";
        userMenu.style.display = "none";
    }
});

// Helper function to get a cookie by name
function getCookie(name) {
    const cookies = document.cookie.split("; ");
    for (let i = 0; i < cookies.length; i++) {
        const [key, value] = cookies[i].split("=");
        if (key === name) return decodeURIComponent(value);
    }
    return null;
}

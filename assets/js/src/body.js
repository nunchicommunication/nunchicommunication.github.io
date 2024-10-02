// every page
function setFooterCopyright() {
    var el = document.getElementById('footer-copyright');

    el.innerHTML = "Nunchi &copy; "+new Date().getFullYear();
}

setFooterCopyright();

// about
if (window.location.pathname === '/about.html') {
    function updateAboutStats() {
        if (window.innerWidth <= 768) {
            document.getElementById("about-stats").style.display = "none";
        } else {
            document.getElementById("about-stats").style.display = "";
        }
    }

    updateAboutStats();
    window.addEventListener('resize', updateAboutStats);
}
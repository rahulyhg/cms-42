const adminSlideoutButton = document.getElementById('admin-slideout-button');

const accordions = document.getElementsByClassName('has-submenu');

adminSlideoutButton.onclick = function () {
    this.classList.toggle('is-active');
    document.getElementById('admin-side-menu').classList.toggle('is-active');
}

for (var i = 0; i < accordions.length; i++) {
    if (accordions[i].classList.contains('is-active')){
        const submenu = accordions[i].nextElementSibling;
        submenu.style.maxHeight = submenu.scrollHeight + "px";
        submenu.style.marginTop = "0.75em";
        submenu.style.marginBottom = "0.75em";
    }
    accordions[i].onclick = function () {
        this.classList.toggle('is-active');

        const submenu = this.nextElementSibling;
        if (submenu.style.maxHeight) {
            // Menu opened, need to close it
            submenu.style.maxHeight = null;
            submenu.style.marginTop = null;
            submenu.style.marginBottom = null;
        } else {
            // menu closed, need to open it
            submenu.style.maxHeight = submenu.scrollHeight + "px";
            submenu.style.marginTop = "0.75em";
            submenu.style.marginBottom = "0.75em";
        }
    }
}
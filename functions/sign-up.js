document.addEventListener("DOMContentLoaded", () => {

    // --------------------- DROPMENU ---------------------
    const toggleBtn = document.querySelector('.toggle-btn');
    const closeBtn = document.querySelector('.close-btn');
    const dropMenu = document.querySelector('.drop-menu');

    // A toggle button will appear when the screen width is 900px or less.
    if (window.innerWidth <= 990) {
        toggleBtn.classList.add('active');
    }

    // Click on the toggle button to open the drop menu. 
    // The toggle button will be replaced for the close button.
    toggleBtn.addEventListener('click', () => {
        toggleBtn.classList.remove('active');
        closeBtn.classList.add('active');
        dropMenu.classList.add('active');
    });

    // Click on the close button to close the drop menu. 
    // The close button will be replaced for the toggle button.
    closeBtn.addEventListener('click', () => {
        closeBtn.classList.remove('active');
        dropMenu.classList.remove('active');
        toggleBtn.classList.add('active');
    });

    // This corrects when the drop menu is available or the desktop nav when resizing the width screen.
    window.addEventListener('resize', () => {
        // If the resize screen width is greater than 990px, hide the drop menu, toggle and close button.
        if (window.innerWidth > 990) {
            dropMenu.classList.remove('active');
            closeBtn.classList.remove('active');
            toggleBtn.classList.remove('active');
        } else {
            // If the resize screen width is 990px or less, show the toggle button unless the drop menu is active
            toggleBtn.classList.add('active');
        } 

        // If the drop menu is active while resizing, hide the toggle button.
        if (dropMenu.classList.contains('active')) {
            toggleBtn.classList.remove('active');
        }
    });

    // ---------------------PREVIOUS/NEXT BUTTON ---------------------
    let tab1 = document.querySelector(".tab1");
    let tab2 = document.querySelector(".tab2");
    let prevBtn = document.querySelector(".prev-btn");
    let nextBtn = document.querySelector(".next-btn");
    // let submitBtn = document.querySelector(".submit-btn");
    
    // Next button click event
    nextBtn.addEventListener("click", function () {
        tab1.style.display = "none";
        tab2.style.display = "flex";
    });
    
    // Prev button click event
    prevBtn.addEventListener("click", function () {
        tab1.style.display = "flex";
        tab2.style.display = "none";
    });

    const password = document.querySelector("#password");
    const confirmPassword = document.querySelector("#confirm-password");
    const submit = document.querySelector(".submit-btn");

    submit.addEventListener("click", () => {
        if (password.value !== confirmPassword.value) {
            alert("Passwords did not match!");
            event.preventDefault(); 
        } 
        // else {
        //     alert("Passwords does match"); 
        // }
    });
});
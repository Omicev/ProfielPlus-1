
// let registrationForm = document.getElementsByClassName('registration-form');

// let passwordInput = document.getElementById('password');
// let confirmPasswordInput = document.getElementById('confirm-password');


document.addEventListener("DOMContentLoaded", () => {

    // --------------------- DROPMENU EVERY PAGE ---------------------
    let toggleBtn = document.querySelector('.toggle-btn');
    let closeBtn = document.querySelector('.close-btn');
    let dropMenu = document.querySelector('.drop-menu');
    let sessionMessage = document.querySelector('.session-message');

    // A toggle button will appear when the screen width is 990px or less.
    if (window.innerWidth <= 1300) {
        toggleBtn.classList.add('active');
    }

    // Click on the toggle button to open the drop menu. 
    // The toggle button will be replaced for the close button.
    // Session message will be removed
    toggleBtn.addEventListener('click', () => {
        toggleBtn.classList.remove('active');
        closeBtn.classList.add('active');
        dropMenu.classList.add('active');
        sessionMessage.style.display = "none";
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
        if (window.innerWidth > 1300) {
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

    // --------------------- SHOW/HIDE PASSWORD (LOGIN PAGE) ---------------------
    let password = document.querySelector("#password");
    let showPassword = document.querySelector(".fa-eye-slash");
    
    if (password && showPassword) {
        // Show/hide password function.
        showPassword.addEventListener('click', () => {
            if (password.type === "password") {
                password.type = "text";
                showPassword.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                password.type = "password";
                showPassword.classList.replace("fa-eye", "fa-eye-slash");
            }
        }); 
    }

    // --------------------- REPEAT PASSWORD CHECK (SIGN UP/RESET PASSWORD PAGE) ---------------------
    let firstPassword = document.querySelector("#password");
    let confirmPassword = document.querySelector("#confirm-password");
    let submit = document.querySelector("#submit");

    if (firstPassword && confirmPassword && submit) {
        submit.addEventListener("click", () => {
            if (firstPassword.value !== confirmPassword.value) {
                alert("Passwords did not match!");
                event.preventDefault(); 
            } 
        });
    }
    // --------------------- PREVIOUS/NEXT BUTTON (SIGN UP PAGE) ---------------------
    let tab1 = document.querySelector(".tab1");
    let tab2 = document.querySelector(".tab2");
    let prevBtn = document.querySelector(".prev-btn");
    let nextBtn = document.querySelector(".next-btn");
    // let submitBtn = document.querySelector(".submit-btn");
    
    if (tab1 && tab2 && prevBtn && nextBtn) { 
        // Next button click event
        nextBtn.addEventListener("click", () => {
            tab1.style.display = "none";
            tab2.style.display = "flex";
        });
        
        // Prev button click event
        prevBtn.addEventListener("click", () => {
            tab1.style.display = "flex";
            tab2.style.display = "none";
        });
    }

    // --------------------- CHANGE PROFILE PICTURE (MY ACCOUNT PAGE) ---------------------
    const image = document.querySelector("#change-profile-picture"); 
    const inputFile = document.querySelector("#change-profile-picture-file"); 

    if (image && inputFile) { 
        // Next button click event
        inputFile.addEventListener("change", () => {
            image.src = URL.createObjectURL(inputFile.files[0]);
        });
    }
});



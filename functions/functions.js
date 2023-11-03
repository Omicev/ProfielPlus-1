document.addEventListener("DOMContentLoaded", () => {
    // --------------------- DROPMENU EVERY PAGE ---------------------
    const toggleBtn = document.querySelector('.toggle-btn');
    const closeBtn = document.querySelector('.close-btn');
    const dropMenu = document.querySelector('.drop-menu');
    const sessionMessage = document.querySelector('.session-message');

    // Toggle button will appear when the screen width is 1300px or less.
    if (window.innerWidth <= 1300) {
        toggleBtn.classList.add('active');
    }

    // Click on the toggle button to open the drop menu. 
    // The toggle button will be replaced for the close button.
    // Session message will be removed.
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

    // Corrects for resizing.
    window.addEventListener('resize', () => {
        // When the resize screen width is greater than 1300px, hide the drop menu, toggle and close button.
        if (window.innerWidth > 1300) {
            dropMenu.classList.remove('active');
            closeBtn.classList.remove('active');
            toggleBtn.classList.remove('active');
        } else {
            // When the resize screen width is equal or less than 1300px, show the toggle button unless the drop menu is active.
            toggleBtn.classList.add('active');
        } 

        // When the drop menu is active while resizing, hide the toggle button.
        if (dropMenu.classList.contains('active')) {
            toggleBtn.classList.remove('active');
        }
    });

    // --------------------- SHOW/HIDE PASSWORD (LOGIN PAGE) ---------------------
    const password = document.querySelector("#password");
    const showPassword = document.querySelector(".fa-eye-slash");
    
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
    const firstPassword = document.querySelector("#password");
    const confirmPassword = document.querySelector("#confirm-password");
    const submit = document.querySelector("#submit");

    if (firstPassword && confirmPassword && submit) {
        submit.addEventListener("click", () => {
            if (firstPassword.value !== confirmPassword.value) {
                alert("Passwords did not match!");
                event.preventDefault(); 
            } 
        });
    }
    // --------------------- PREVIOUS/NEXT BUTTON (SIGN UP PAGE) ---------------------
    const tab1 = document.querySelector(".tab1");
    const tab2 = document.querySelector(".tab2");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    
    if (tab1 && tab2 && prevBtn && nextBtn) { 
        // Click on next button.
        nextBtn.addEventListener("click", () => {
            tab1.style.display = "none";
            tab2.style.display = "flex";
        });
        
        // Click on prev button.
        prevBtn.addEventListener("click", () => {
            tab1.style.display = "flex";
            tab2.style.display = "none";
        });
    }

    // --------------------- CHANGE PROFILE PICTURE (MY ACCOUNT PAGE) ---------------------
    const image = document.querySelector("#change-profile-picture"); 
    const inputFile = document.querySelector("#change-profile-picture-file"); 

    if (image && inputFile) { 
        // Change image to the input file.
        inputFile.addEventListener("change", () => {
            image.src = URL.createObjectURL(inputFile.files[0]);
        });
    }
});



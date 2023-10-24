document.addEventListener("DOMContentLoaded", () => {
    const password = document.querySelector("#password");
    const confirmPassword = document.querySelector("#confirm-password");
    const submit = document.querySelector("#create-account");

    submit.addEventListener("click", () => {
        if (password.value !== confirmPassword.value) {
            alert("Passwords did not match!"); 
        } else {
            alert("Passwords does match"); 
        }
    });

    // const password = document.querySelector("#password");
    // const showPassword = document.querySelector(".fa-eye-slash");
    
    // showPassword.addEventListener('click', () => {
    //     if (password.type === "password") {
    //         password.type = "text";
    //         showPassword.classList.replace("fa-eye-slash", "fa-eye");
    //     } else {
    //         password.type = "password";
    //         showPassword.classList.replace("fa-eye", "fa-eye-slash");
    //     }
    // }); 
});


document.addEventListener("DOMContentLoaded", () => {
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
});


    <!-- <input type="submit" name="create-account" value="Next" class="submit-style" id="create-account"> -->

    <?php require 'partials/header-sign-up.php'; ?>

    <main>
        <div class="main-container-login">
            <form action="add-user.php" class="registration-form" method="post">

                <div class="tab1">
                    <h1 class="header-text-login">Create an Account (1/2)</h1>
                    <div class="registration-text">

                        <input type="text" id="first-name" name="firstname" placeholder="First Name" class="registration-text-style">
                        <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="registration-text-style">
                        <input type="date" id="dob" name="dob" placeholder="Date of Birth" class="registration-text-style">
                        <input type="text" id="biography" name="biography" placeholder="Biography (Optional)" class="registration-text-style">

                        <!-- <input type="text" id="username" name="username" placeholder="Username" class="registration-text-style">
                        <input type="email" id="user-mail" name="email" placeholder="Email" class="registration-text-style">
                        <input type="password" id="password" name="password" placeholder="Password" class="registration-text-style" required>
                        <input type="password" id="confirm-password" placeholder="Repeat Password" class="registration-text-style"> -->
                    </div> 
                    <button class="next-btn" type="button" name="next-btn">Next</button>
                </div>

                <div class="tab2">
                    <h1 class="header-text-login">Create an Account (2/2)</h1>
                    <div class="registration-text">

                        <input type="text" id="username" name="username" placeholder="Username" class="registration-text-style">
                        <input type="email" id="user-mail" name="email" placeholder="Email" class="registration-text-style">
                        <input type="password" id="password" name="password" placeholder="Password" class="registration-text-style" required>
                        <input type="password" id="confirm-password" placeholder="Repeat Password" class="registration-text-style">
                        
                        <!-- <input type="text" id="first-name" name="firstname" placeholder="First Name" class="registration-text-style">
                        <input type="text" id="last-name" name="lastname" placeholder="Last Name" class="registration-text-style">
                        <input type="date" id="dob" name="dob" placeholder="Date of Birth" class="registration-text-style">
                        <input type="text" id="biography" name="biography" placeholder="Biography (Optional)" class="registration-text-style"> -->

                    </div>
                    <div class="prev-next-btn">
                        <button class="prev-btn" type="button" name="prev-btn">Prev</button>
                        <button class="submit-btn" type="submit" name="submit-btn">Submit</button>
                    </div>
                </div>




                <!-- <h1 class="header-text-login">Create an Account (1/2)</h1>
                <div class="registration-text">
                    <input type="text" id="username" placeholder="Username" class="registration-text-style" required>
                    <input type="email" id="user-mail" placeholder="Email" class="registration-text-style">
                    <input type="password" id="password" placeholder="Password" class="registration-text-style">
                    <input type="password" id="confirm-password" placeholder="Repeat Password" class="registration-text-style">
                </div>
                <button class="submit-btn" type="submit" name="submit-btn">Submit</button> -->
                
                <!-- <button class="next-btn" type="submit" name="next-btn">Next</button>  -->
                

            <!-- <h1 class="header-text-login">Create an Account (2/2)</h1>
                <div class="registration-text">
                    <input type="text" id="first-name" placeholder="First Name" class="registration-text-style">
                    <input type="text" id="last-name" placeholder="Last Name" class="registration-text-style">
                    <input type="date" name="dob" id="dob" placeholder="Date of Birth" class="registration-text-style">
                    <input type="email" id="biography" placeholder="Biography" class="registration-text-style">
                </div>
                <div class="prev-next-btn">
                    <button class="prev-btn" type="submit" name="prev-btn">Prev</button>
                    <button class="submit-btn" type="submit" name="submit-btn">Submit</button>
                </div> -->

                
            </form> 
        </div>
    </main>

    <?php require 'partials/footer.php';?>
<?php

// if (isset($_POST['submit'])){
//     session_start();
//     $userId = $_SESSION['user_id'];
//     // ----------
//     // die(var_dump($_FILES['profile-picture']));
//     // die(var_dump($imgContent));
//     // -----------
//     require 'database.php';

//     // Check if an image file was uploaded
//     if (isset($_FILES["profile-picture"]) && $_FILES["profile-picture"]["error"] == 0) {
//         $image = $_FILES['profile-picture']['tmp_name'];
//         $imgData = file_get_contents($image);

//         if ($imgData) {
//             $sql = "UPDATE profiles
//                     SET profile_image = :profile_image
//                     WHERE user_id = :user_id";
//             $stmt = $conn->prepare($sql);
//             $stmt->bindParam(':user_id', $userId);
//             $stmt->bindParam(':profile_image', $imgData, PDO::PARAM_LOB);
//             $stmt->execute();

//             $_SESSION['success_message'] = "Your profile picture has been successfully updated!";
//             header('Location: /my-account-profile');
//             exit();
//         } else {
//             echo "Failed to read the uploaded image data.";
//         }


//         // Insert image data into database as BLOB
//         // $sql = "INSERT INTO images(image) VALUES(?)";
//         // $statement = $conn->prepare($sql);
//         // $statement->bind_param('s', $imgContent);
//         // $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());
    
//     //     if ($current_id) {
//     //         echo "Image uploaded successfully.";
//     //     } else {
//     //         echo "Image upload failed, please try again.";
//     //     }
//     // } else {
//     //     echo "Please select an image file to upload.";
//     }

//     // if ($stmtProfile){
//     //     $_SESSION['success_message'] = "Your account has been updated successfully!";
//     //     header('Location: /my-account-general');
//     //     exit();
//     // }
    
    

// }

if (isset($_POST['submit'])) {
    
    session_start();
    $userId = $_SESSION['user_id'];
    $jobFunction = filter_input(INPUT_POST, 'job-function', FILTER_SANITIZE_SPECIAL_CHARS);

    require 'database.php';

    // Check if an image file was uploaded
    if (isset($_FILES["profile-picture"]) && $_FILES["profile-picture"]["error"] == 0) {
        $image = $_FILES['profile-picture']['tmp_name'];
        $imgData = file_get_contents($image);

        // Update the profile image.
        $sql = "UPDATE profiles
                SET profile_image = :profile_image
                WHERE user_id = :user_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':profile_image', $imgData);
        $resultImage =$stmt->execute();

        // Update the job function.
        $sqlProfile = "UPDATE profiles
                       SET job_function = :job_function
                       WHERE user_id = :user_id";
        $stmtProfile = $conn->prepare($sqlProfile);
        $stmtProfile->bindParam(':user_id', $userId);
        $stmtProfile->bindParam(':job_function', $jobFunction);
        $resultJob = $stmtProfile->execute();
        
        if ($resultImage || $resultJob) {
            $_SESSION['success_message'] = "11Your account has been successfully updated!";
            header('Location: /my-account-profile');
            exit();
        }

    } else {
        // Update only the job function if there is no file selected.
        $sqlProfile = "UPDATE profiles
                       SET job_function = :job_function
                       WHERE user_id = :user_id";
        $stmtProfile = $conn->prepare($sqlProfile);
        $stmtProfile->bindParam(':user_id', $userId);
        $stmtProfile->bindParam(':job_function', $jobFunction);
        $stmtProfile->execute();

        $_SESSION['success_message'] = "Your account has been successfully updated!";
        header('Location: /my-account-profile');
        exit();
    }
}
<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

function connectDb() {
    $path = 'file.txt';
    $stored = trim(file_get_contents($path));
    $servername = "45.84.204.154";
    $username = "u711777167_alicia2023";
    $password = $stored;
    $dbname = "u711777167_tapwpdb";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

function getAllPosts($conn) {
    $sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
    $result = $conn->query($sql);

    $posts = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    }
    return $posts;
}

function getPostById($conn, $id) {
    $stmt = $conn->prepare("SELECT id, title, content, created_at FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


function createPost($conn,$user, $title, $content) {

    $stmt = $conn->prepare("INSERT INTO posts (user_id,title, content,created_at) VALUES (?,?, ?,now())");
    $stmt->bind_param("iss", $user, $title, $content);
    return $stmt->execute();
}

function updatePost($conn, $id, $title, $content) {
    $stmt = $conn->prepare("UPDATE posts SET title = ?, content = ?,updated_at = now() WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id);
    return $stmt->execute();
}

function deletePost($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

function sanitizeInput($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
function validateUser($con, $username, $password,&$message) {


    // Determine if $username is an email or a username
    $isEmail = strpos($username, '@') !== false;

    // Prepare the SQL statement
    $sql = $isEmail
        ? "SELECT id,profile_img,bio, name,surname, username,email, password, last_logged_in FROM users WHERE email = ?"
        : "SELECT id,profile_img,bio, name,surname, username,email, password, last_logged_in FROM users WHERE username = ?";

    if ($stmt = $con->prepare($sql)) {
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['userName'] = $user['name'];
                $_SESSION['ID'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['surname'] = $user['surname'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['profile_img']= $user['profile_img'];
                $_SESSION['bio'] = $user['bio'];

                if (empty($user['last_logged_in'])) {
                    header('Location: MakeUsername.php');
                    lastLoggedIn($con,$user['id']);
                    exit;

                } else {
                    header('Location: UserDashboard.php');
                    lastLoggedIn($con,$user['id']);
                    exit;
                }
            } else {
                $message = "Incorrect password.";
            }
        } else {
            $message = "no user";
        }
    } else {
        return false;
    }
    return;

}
function updateProfile($conn, $id,$username, $name,$surname, $email,$bio,$birthdate, $password) {
    $stmt = $conn->prepare("UPDATE users SET username = ?,name = ?, surname = ?,email = ?, bio = ?,birthdate = ?,password = ? WHERE  id = ?");
    $stmt->bind_param("sssssssi", $username, $name,$surname, $email,$bio,$birthdate, $password, $id);
    $stmt->execute();
    $stmt2 = $conn ->prepare("Update users set updated_at = now() where id =?");
    $stmt2->bind_param("i",$id);
    $stmt2->execute();

}
function lastLoggedIn($con,$userId){
    $stmt = $con->prepare("UPDATE users SET last_logged_in = NOW() where id = $userId");
    $stmt->execute();
}

function registerUser($con, $name, $surname, $birthdate, $email, $password, $confirmPassword,&$message) {
    $email = sanitizeInput($email);
    $password = sanitizeInput($password);
    $confirmPassword = sanitizeInput($confirmPassword);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        $message = "Passwords do not match!";
        return;
    }

    // Calculate age
    $dobObject = new DateTime($birthdate);
    $now = new DateTime();
    $difference = $now->diff($dobObject);
    $age = $difference->y;

    // Check if age is 16 or older
    if ($age < 16) {
        $message = "You must be at least 16 years old to register.";
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $con->prepare("INSERT INTO users (profile_img,name, surname, birthdate, email, created_at, password) VALUES ('default_profile_img.png',?, ?, ?, ?, NOW(), ?)");
        $stmt->bind_param("sssss", $name, $surname, $birthdate, $email, $hashedPassword);

        $stmt->execute();
        header('Location: Welcome.php');
        exit;
    } catch (mysqli_sql_exception $e) {
        if ($stmt->errno == 1062) {
            $message= "This email has already been used.";
        } else {
//            echo "Error: " . $stmt->error;'
            return false;
        }
    }
    return;
}
function checkIfUserExist($con,$email){

    $stmt = $con->prepare("select email from users where email = $email");
    if($stmt->execute()){
        return true;
    }else return false;
}
function containsOffensiveLanguage($username) {
    $apiUrl = 'https://example-profanity-api.com/check';
    $data = ['text' => $username];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($apiUrl, false, $context);

    if ($result === FALSE) {
        /* Handle error */
    }

    $response = json_decode($result);

    return $response->containsOffensiveLanguage; // Assuming the API returns a JSON object with this field
}

function makeUsername($con, $username, $id, &$message) {
    // Input validation (basic example)
    if (!preg_match('/^[a-zA-Z0-9._]{1,30}$/', $username)) {
        $message = "Invalid username format.";
        return false;
    }

    if (preg_match('/[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $username)) {
        $message = "Usernames cannot be website URLs.";
        return false;
    }
    try {
        $stmt = $con->prepare("UPDATE users SET username = ? WHERE id = ?");
        $stmt->bind_param('si', $username, $id);
        $stmt->execute();

        // Check if the update was successful
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            $message = "No changes made or user not found.";
            return false;
        }
    } catch (mysqli_sql_exception $e) {
        // Handle duplicate username
        if ($e->getCode() == 1062) {
            $message = "Username has already been taken.";
        } else {
            // Log or handle other SQL exceptions
            $message = "Database error: " . $e->getMessage();
        }
        return false;
    }
}
function changeProfile($id, $file, &$statusMsg) {
    $targetDir = "img/";
    $conn = connectDb();

    // Step 1: Retrieve the current file name
    if (!empty($file['name'])) {
        // Step 1: Retrieve the current file name
        $sql = "SELECT profile_img FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && file_exists($targetDir . $result['profile_img'])) {
            // Step 2: Delete the existing file
            unlink($targetDir . $result['profile_img']);
        }
    } else {
        $statusMsg = 'Please select a file to upload.';
    }

        if (!empty($file['name'])) {
            $fileName = basename($file['name']);
            $targetFilePath = $targetDir . $fileName;
            $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

            // Allow certain file formats
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                try {
                    // Upload file to server
                    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {

                        // Insert image file name into database
                        $sql = "UPDATE users SET profile_img = :fileName, updated_at = NOW() WHERE id = :id";
                        $stmt = connectDb()->prepare($sql);
                        if (!$stmt) {
                            throw new Exception("Database query preparation error.");
                        }
                        $stmt->bindParam(':fileName', $fileName, PDO::PARAM_STR);
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

                        if ($stmt->execute()) {
                            $statusMsg = "You have updated your profile";
                            $_SESSION['profile_img'] = $fileName;
                        } else {
                            $statusMsg = "File upload failed, please try again.";
                        }
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } catch (Exception $e) {
                    $statusMsg = "Error: " . $e->getMessage();
                }
            } else {
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload. '.$targetFilePath;
            }
        } else {
            $statusMsg = 'Please select a file to upload.';
        }

}
function uploadProfileImageForm(){
    echo"        <div id='myModal' class='modal'>
            <div class='modal-content'>
                <span class='close'>&times;</span>        
                <form id='uploadForm' method='POST' enctype='multipart/form-data' action=''>            
                    <input type='file' id='imageInput' name='profileImage' style='display: none'>    
                    <input type='submit' name='submit' value='Upload'>
                </form>
            </div>
        </div>";
}
function setTitle($id,$pageTitle){
    echo"<script>
    function setPageTitle($pageTitle) {
        document.getElementById($id).textContent = $pageTitle;
    }
    </script>";
}
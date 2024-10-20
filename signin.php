<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up / Forgot Password - PG Finder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
            color: #333;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #007bff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        .toggle-link {
            cursor: pointer;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .toggle-link:hover {
            text-decoration: underline;
        }

        /* Footer Styling */
        .footer {
            background-color: #1c1c1c;
            color: #fff;
            padding: 40px 0;
        }

        .footer h5 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #007bff;
            text-decoration: underline;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            text-align: center;
        }

        .social-icon {
            font-size: 1.5rem;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .social-icon:hover {
            transform: scale(1.2);
            color: #e4e7eb;
        }

        .footer .col-md-6 {
            margin-top: 20px;
        }


        .form-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="bg-light py-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">PG Finder</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="properties.php">Properties</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    </ul>
                    <form class="d-flex ml-auto">
                        <input class="form-control" type="search" placeholder="Search PGs" aria-label="Search">
                        <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                    </form>
                    <a class="btn btn-outline-success ml-2" href="signin.php">Sign In</a>
                </div>
            </div>
        </nav>
    </header>

    <div class="form-container">
        <h2 id="formTitle">Sign In</h2>

        <!-- Sign In Form -->
<form id="signInForm" method="POST">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <a href="index.php"> <button type="button" id="submit" name="submit" class="btn btn-primary">Login</button></a>
    <div class="text-center mt-3">
        <a class="toggle-link" id="toggleToSignUp">New User? Sign Up</a>
    </div>
    <div class="text-center">
        <a class="toggle-link" id="toggleToForgotPassword">Forgot Password?</a>
    </div>
</form>

<!-- Sign Up Form -->
<form id="signUpForm" style="display: none;" method="POST">
    <h2>Sign Up</h2>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
    </div>
    <div class="form-group">
        <label for="newEmail">Email address</label>
        <input type="email" class="form-control" id="newEmail" name="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="newPassword">Password</label>
        <input type="password" class="form-control" id="newPassword" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender" required>
            <option value="" disabled selected>Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter your address" required></textarea>
    </div>
   <a href="index.php"> <button type="button" id="submit" name="submit" class="btn btn-primary">SignUP</button></a>
    
    <div class="text-center mt-3">
        <a class="toggle-link" id="toggleToSignIn">Already have an account? Sign In</a>
    </div>
</form>


        <!-- Forgot Password Form -->
        <form id="forgotPasswordForm" style="display: none;">
            <h2> </h2>
            <div class="form-group">
                <label for="forgotEmail">Email address</label>
                <input type="email" class="form-control" id="forgotEmail" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="forgotPassword">New Password</label>
                <input type="password" class="form-control" id="forgotPassword" placeholder="Enter new password" required>
            </div>
            <div class="form-group">
                <label for="confirmForgotPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmForgotPassword" placeholder="Confirm new password" required>
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
            <div class="text-center mt-3">
                <a class="toggle-link" id="toggleToSignInFromForgot">Back to Sign In</a>
            </div>
        </form>
    </div>

     <!-- Footer -->
     <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- About Us Section -->
                <div class="col-md-4 mb-4 text-center"> <!-- Centering added -->
                    <h5 class="text-uppercase mb-3">About PG Finder</h5>
                    <p>PG Finder helps students and professionals find safe and comfortable Paying Guest accommodations with verified properties and transparent deals.</p>
                </div>
    
                <!-- Quick Links Section -->
                <div class="col-md-4 mb-4 text-center"> <!-- Centering added -->
                    <h5 class="text-uppercase mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-light">Home</a></li>
                        <li><a href="about.html" class="text-light">About Us</a></li>
                        <li><a href="properties.html" class="text-light">Properties</a></li>
                        <li><a href="contact.html" class="text-light">Contact Us</a></li>
                    </ul>
                </div>
    
                <!-- Social Media Section -->
                <div class="col-md-4 mb-4 text-center"> <!-- Centering added -->
                    <h5 class="text-uppercase mb-3">Follow Us</h5>
                    <p>Stay connected through our social media channels:</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon text-light"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon text-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon text-light"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
    
            <!-- Footer Bottom Section -->
            <div class="row mt-4">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2024 PG Finder. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-light me-3">Privacy Policy</a>
                    <a href="#" class="text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
    

    <script>
        // JavaScript to handle dynamic form switching
        document.getElementById('toggleToSignUp').onclick = function () {
            document.getElementById('signInForm').style.display = 'none';
            document.getElementById('signUpForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Sign Up';
        };

        document.getElementById('toggleToSignIn').onclick = function () {
            document.getElementById('signUpForm').style.display = 'none';
            document.getElementById('signInForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Sign In';
        };

        document.getElementById('toggleToForgotPassword').onclick = function () {
            document.getElementById('signInForm').style.display = 'none';
            document.getElementById('forgotPasswordForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Forgot Password';
        };

        document.getElementById('toggleToSignInFromForgot').onclick = function () {
            document.getElementById('forgotPasswordForm').style.display = 'none';
            document.getElementById('signInForm').style.display = 'block';
            document.getElementById('formTitle').innerText = 'Sign In';
        };
    </script>
    <?php
// Start PHP session and connection
session_start();
$con = mysqli_connect("localhost", "root", "", "pg");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle Registration
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password = $_POST['password']; // Hash the password

    $sql = "INSERT INTO `signup`(`name`, `mobile`, `email`, `password`, `gender`, `Address`) VALUES ('$name', '$mobile', '$email', '$password', '$gender', '$address')";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Successfully Registered !');</script>";
        
        
    } else {
        echo "<script>alert('Something Went Wrong!');</script>";
    }
}

// Handle Login
// Handle Login
if (isset($_POST['submit1'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    $sql = "SELECT * FROM `signup` WHERE (email='$email') AND (password='$password')";
    $result = mysqli_query($con, $sql);

    
    if (!$result) {
        die("Error executing query: " . mysqli_error($con)); // To check query errors
    }

    // Check if user is found
    if (mysqli_num_rows($result) > 0) {

        echo "<script>alert(' Logged in successfully!');</script>";
        
        } 
        else {
            echo "<script>alert(' Invalid email or password Please try again!');</script>";   }
    } 



// Close the connection
mysqli_close($con);
?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

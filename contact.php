<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PG Finder</title>

    <!-- Google Fonts for professional typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS for structure -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS for enhanced design -->
    <style>

        body {
            font-family:'Poppins', sans-serif;
            color: #333;
        }

        .contact-container {
            padding: 60px 0;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-header h2 {
            font-size: 3rem;
            font-weight: 600;
            color: #003366;
            margin-bottom: 10px;
        }

        .contact-header p {
            font-size: 1.2rem;
            color: #666;
        }

        /* Contact Card Styling */
        .contact-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            padding: 40px;
            transition: box-shadow 0.3s ease;
        }

        .contact-card:hover {
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
        }

        /* Form Elements */
        .form-control {
            border: 1px solid #ced4da;
            padding: 12px;
            font-size: 1rem;
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        /* Submit Button */
        .btn-custom {
            background-color: #007bff;
            border: none;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 12px;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .contact-info-section {
            margin-top: 50px;
        }

        .contact-info {
            background-color: #f9fafc;
            border-radius: 12px;
            padding: 40px;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease;
        }

        .contact-info:hover {
            transform: translateY(-5px);
        }

        .contact-info i {
            font-size: 2.5rem;
            color: #007bff;
            margin-right: 20px;
        }

        .contact-info h5 {
            font-size: 1.2rem;
            color: #003366;
            font-weight: 500;
        }

        .contact-info p {
            color: #666;
            margin-bottom: 0;
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
        .social-icons .fa-facebook-f {
            color: #3b5998; /* Facebook color */
        }

        .social-icons .fa-twitter {
            color: #1da1f2; /* Twitter color */
        }

        .social-icons .fa-instagram {
            color: #e1306c; /* Instagram color */
        }

        .social-icons .fa-linkedin-in {
            color: #0077b5; /* LinkedIn color */
        }

        .social-icon:hover {
            transform: scale(1.2);
            
        }

        .footer .col-md-6 {
            margin-top: 20px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .contact-card {
                padding: 20px;
            }

            .contact-header h2 {
                font-size: 2.5rem;
            }

            .contact-info {
                flex-direction: column;
                text-align: center;
            }

            .contact-info i {
                margin-bottom: 15px;
            }

            .footer .col-md-6 {
                text-align: center;
            }

            .footer .text-md-end {
                text-align: center;
                margin-top: 15px;
            }
        }
        
    </style>
</head>

<body>
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
                    <a class="btn btn-outline-success ml-2" href="signin.html">Sign In</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Contact Section -->
    <div class="contact-container">
        <div class="container">
            <div class="contact-header">
                <h2>Contact Us</h2>
                <p>We're here to assist you. Reach out with any questions or concerns.</p>
            </div>

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="contact-card">
                    <form action="send_mail.php" method="POST">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message here" required></textarea>
                            </div>
                            <button type="submit" name="send" class="btn btn-custom w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="row contact-info-section mt-5">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h5>Phone</h5>
                            <p>+91 12345 67890</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5>Email</h5>
                            <p>support@pgfinder.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Location</h5>
                            <p>Pune, Maharashtra, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- About Us Section -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="text-uppercase mb-3">About PG Finder</h5>
                    <p>PG Finder helps students and professionals find safe and comfortable Paying Guest accommodations with verified properties and transparent deals.</p>
                </div>
    
                <!-- Quick Links Section -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="text-uppercase mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-light">Home</a></li>
                        <li><a href="about.html" class="text-light">About Us</a></li>
                        <li><a href="properties.html" class="text-light">Properties</a></li>
                        <li><a href="contact.html" class="text-light">Contact Us</a></li>
                    </ul>
                </div>
    
                <!-- Social Media Section -->
                <div class="col-md-4 mb-4 text-center">
                    <h5 class="text-uppercase mb-3">Follow Us</h5>
                    <p>Stay connected through our social media channels:</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
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
    
    

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

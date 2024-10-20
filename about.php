<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PG Finder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
          body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f5f7;
            color: #333;
        }
         

        h2, h3 {
            padding-top: 50px;
            color: #343a40;
            font-weight: 700;
        }

      
        .card {
            border: none;
            transition: transform 0.3s;
            background-color: #fff;
            border-radius: 15px;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .icon-hover {
            color: #007bff;
            transition: color 0.3s;
        }

        .icon-hover:hover {
            color: #0056b3;
        }

        .card-body h5 {
            font-size: 1.5rem;
            font-weight: 600;
        }
  

        .card-body p {
            font-size: 1rem;
            color: #6c757d;
        }

        .mission-section,
        .founders-section {
            padding: 70px 0;
        }

        .mission-section {
            background-color: #e9f7ff;
        }

        .founders-section {
            background-color: #fff;
        }

        .founders-section img {
            border-radius: 50%;
        }

        .founder-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mission-section img,
        .founders-section img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s, text-decoration 0.3s;
        }

        footer a:hover {
            text-decoration: underline;
            color: #007bff;
        }

        .about-pg-section {
            background-color: #f8f9fa;
            padding: 70px 0;
        }

        .about-card {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 15px;
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .icon-hover {
            color: #007bff;
            transition: color 0.3s, transform 0.3s ease;
        }

        .icon-hover:hover {
            color: #0056b3;
            transform: rotate(360deg);
        }

        @media (max-width: 768px) {
            .about-card {
                margin-bottom: 20px;
            }
        }

        .img-fluid {
            transition: transform 0.3s ease, box-shadow 0.3s;
        }

        .img-fluid:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
        }

        .mission-section:hover {
            background-color: #d0eaf9;
        }

       
        /* Footer Background and Text */
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

/* Footer Links */
/* Footer Background and Text */
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

/* Footer Links */
.footer a {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s ease;
    
}

.footer a:hover {
    color: #007bff;
    text-decoration: underline;
}

/* Social Media Icons */
.social-icons {
    display: flex;
    justify-content: center; /* Centers the icons horizontally */
    gap: 20px; /* Adds space between icons */
    text-align: center; /* Ensures proper alignment in the section */
}

.social-icon {
    font-size: 1.5rem;
    transition: transform 0.3s ease, color 0.3s ease;
}

.social-icon:hover {
    transform: scale(1.2);
    color: #007bff;
}

/* Footer Bottom Section */
.footer .col-md-6 {
    margin-top: 20px;
}

.footer .text-md-end a {
    margin-left: 20px;
}

/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .footer .col-md-6 {
        text-align: center;
    }

    .footer .text-md-end {
        text-align: center;
        margin-top: 15px;
    }
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
    

    
    <!-- About Us Section -->
    <div class="container" id="About">
        <h2 class="text-center mb-5">About Us</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-4 text-center shadow d-flex flex-column" style="min-height: 100%;">
                    <i class="fas fa-bullseye fa-3x mb-3 icon-hover"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text">Our mission is to simplify the process of finding Paying Guest
                            accommodations for students and working professionals by offering a trusted platform where
                            they can easily explore verified options, compare amenities, and secure a place they can
                            truly call home.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center shadow d-flex flex-column" style="min-height: 100%;">
                    <i class="fas fa-eye fa-3x mb-3 icon-hover"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">Our vision is to become the leading platform for PG accommodations across
                            all major cities, redefining convenience, comfort, and transparency in the real estate
                            sector. We strive to create a future where finding accommodation is as easy as a few clicks,
                            empowering users with choices that cater to their specific needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 text-center shadow d-flex flex-column" style="min-height: 100%;">
                    <i class="fas fa-star fa-3x mb-3 icon-hover"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Our Values</h5>
                        <p class="card-text">We are driven by a set of core values: transparency, trust, and customer
                            satisfaction. We prioritize building strong, lasting relationships with our users and
                            property partners, ensuring that every interaction on our platform is founded on reliability
                            and integrity.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission Section with High-Graphics Image -->
    <div class="mission-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>Why Choose Us?</h3>
                    <p>At PG Finder, we understand the challenges that students and professionals face when moving to a
                        new city. Finding a safe, comfortable, and affordable place to stay can be overwhelming. That's
                        why we created a platform that simplifies this process, offering curated options that suit
                        diverse needs and preferences.</p>
                    <p>Our platform features PG accommodations that are verified, with real reviews and ratings. We also
                        ensure that every property listed provides a safe and welcoming environment, so you can focus on
                        your studies or career while we handle the hard work of finding your next home.</p>
                </div>
                <div class="col-md-6">
                    <img src="img/bed.jpg" alt="High-Quality PG Finder Experience" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="about-pg-section">
        <div class="container">
            <h2 class="text-center mb-5">About PG Finder</h2>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="about-card p-4">
                        <i class="fas fa-home fa-3x mb-3 icon-hover"></i>
                        <h5>🏠 Comfortable Living</h5>
                        <p>We provide a range of comfortable  PG accommodations designed to make you feel
                            at home.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-card p-4">
                        <i class="fas fa-check-circle fa-3x mb-3 icon-hover"></i>
                        <h5>✅ Verified Listings</h5>
                        <p>All our PG listings are verified, ensuring you only see trusted , ensured and reliable accommodations and services.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-card p-4">
                        <i class="fas fa-handshake fa-3x mb-3 icon-hover"></i>
                        <h5>🤝 Transparent Deals</h5>
                        <p>We believe in transparency in all our deals, with no hidden costs or last-minute surprises.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-card p-4">
                        <i class="fas fa-users fa-3x mb-3 icon-hover"></i>
                        <h5>👥 Community Support</h5>
                        <p>Become part of a vibrant community where you can meet new people, share experiences, and make
                            memories.</p>
                    </div>
                </div>
            </div>
        </div>
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
    






</body>

</html>

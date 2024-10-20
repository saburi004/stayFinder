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
</head>


<style>
     body {
    font-family: 'Poppins', sans-serif;
    background-color: #f0f2f5;
    color: #333;
    padding: 0;
}
/* Search Box - Add margin-bottom for space between the search bar and Contact Us */
 
 

h2 {
    color: #333;
    font-weight: 700;
}

.my-card{
    padding: 30px;
    border-radius: 15px;
    background-color: #ffffff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    padding: 30px;
    margin: 20px 0;
}
.my-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}
.my-abt-card{
    transition: 0.3s ease;
    border-radius: 15px;
}

.my-abt-card:hover{
    transform: translateY(-5px);
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);


}
.my-contact-form{
    margin-bottom: 100px;
    margin-top: 30px;
}
.search-pg-btn{
    background-color: #17a2b8;
    border: none;
    font-size: 1.2rem;
    font-weight: 500;
    padding: 12px;
    border-radius: 12px;
    color: white;
    transition: background-color 0.3s ease, transform 0.3s ease;
}
.search-pg-btn:hover{
    background-color: #138496;
    transform: translateY(-2px);
}
.curr-location-btn{
    background-color: #fff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: 0.3s;
    
}
.curr-location-btn:hover{
    background-color: #0056b3;
    transform: scale(1.05);
}
</style>

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
                    <form class="d-flex ml-auto" action="properties.php" method="GET">
                    <input class="form-control" type="search" name="query" placeholder="Search PGs by name or address" aria-label="Search">
                    <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                    </form>

                    <a class="btn btn-outline-success ml-2" href="signin.php">Sign In</a>
                </div>
            </div>
        </nav>
    </header>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/bg1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/bg2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/bg3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    

    
    
    <!-- Hero Section -->
    <!-- <div class="hero">
        <h1>Find Your Perfect PG Accommodation</h1>
        <p>Comfortable living at affordable prices</p>
    </div>
     -->




<!-- Search Button -->

    <div class="container search-container">
        <h2 class="text-center mb-4">Search for Nearby PGs</h2>
        <div class="card shadow p-4">
            <form method="GET" action="properties.php">
                <div class="row align-items-end mb-4">
                    <!-- Search Input -->
                    <div class="col-md-8 mb-3">
                        <input type="text" class="form-control" name="location" placeholder="Enter location" required>
                    </div>

                    <!-- Use Current Location Button -->
                    <div class="col-md-4 mb-3">
                        <button type="button" class="btn btn-location w-100" onclick="getLocation()">Use Current Location</button>
                    </div>
                </div>

                <div class="row g-3">
                    <!-- Distance Dropdown -->
                    <div class="col-md-3">
                        <label for="distance" class="form-label">BHK Type</label>
                        <select class="form-select" id="roomtype" name="roomtype">
                            <option value="1 RK">1 RK</option>
                            <option value="1 BHK">1 BHK</option>
                            <option value="2 BHK">2 BHK</option>
                            <option value="3 BHK">3 BHK</option>
                            <option value="4 BHK">4 BHK</option>
                        </select>
                    </div>

                    <!-- Price Range Slider -->
                    <div class="col-md-3">
                        <label for="price" class="form-label">Price Range</label>
                        <input type="range" class="form-range" id="price" name="price" min="0" max="15000" value="5000" oninput="updatePriceDisplay(this.value)">
                        <div class="price-range-labels">
                            <span>&#8377;0</span>
                            <span>&#8377;15000</span>
                        </div>
                        <div class="mt-2">
                            <strong class="selected-price">Selected Price: &#8377;<span id="priceValue">5000</span></strong>
                        </div>
                    </div>

                    <!-- Amenities Checkboxes -->
                    <div class="col-md-6">
                        <label class="form-label">Amenities</label>
                        <div class="amenities-section">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="wifi" name="amenities[]" value="Wi-Fi">
                                <label class="form-check-label" for="wifi">Wi-Fi</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="meals" name="amenities[]" value="Meals Included">
                                <label class="form-check-label" for="meals">Meals Included</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="laundry" name="amenities[]" value="Laundry">
                                <label class="form-check-label" for="laundry">Laundry</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="parking" name="amenities[]" value="Parking">
                                <label class="form-check-label" for="parking">Parking</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search Button -->
                <button type="submit" class="btn btn-search mt-4 w-100">Search PGs</button>
            </form>
        </div>
    </div>

    <!-- JavaScript to update price value -->
    <script>
        function updatePriceDisplay(value) {
            document.getElementById('priceValue').innerText = value;
        }

        function getLocation() {
            alert("Location feature is under development.");
        }
    </script>
<!-- Search Button End -->

    <script>
        function updatePriceDisplay(value) {
            document.getElementById('priceValue').innerText = value;
        }
    
        function getLocation() {
            // Function to get user's current location
            alert("Current location feature not implemented.");
        }
    </script>
    <script>
        function updatePriceDisplay(value) {
            document.getElementById('priceValue').innerText = value;
        }
    
        function getLocation() {
            // Function to get user's current location
            alert("Current location feature not implemented.");
        }
    </script>
    
    
    <script>
        function updatePriceDisplay(value) {
            document.getElementById('priceValue').innerText = value;
        }
    </script>
    

        <!-- Search Results -->
        <div class="d-flex justify-content-center align-items-center my-5 flex-column flex-wrap" id="causes">
            <h2 class="my-5">Causes</h2>
            <div class="d-flex flex-row flex-wrap justify-content-around">
        
              <div class="card mx-3 cause-card my-card" style="width: 18rem;">
                <img src="img/bg1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Industrial emissions and waste lead to harmful air, water, and soil contamination.</p>
                </div>
              </div>
              <div class="card mx-3 cause-card my-card" style="width: 18rem;">
                <img src="img/bg2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Clearing forests for agriculture and urbanization disrupts ecosystems and biodiversity.
                  </p>
                </div>
              </div>
              <div class="card mx-3 cause-card my-card" style="width: 18rem;">
                <img src="img/bg3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Greenhouse gas emissions cause rising temperatures and extreme weather events.</p>
                </div>
              </div>
            </div>

            <div class="container my-5">
                <h2 class="text-center mb-4">Find PGs on the Map</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d11553.436049605107!2d73.85520172799099!3d18.458074659464046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spgs%20near%20vit%20pune!5e0!3m2!1sen!2sin!4v1727858263047!5m2!1sen!2sin" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        <!-- Map Section -->
        <!-- <div class="container mt-5"> -->
            <!-- <h4 class="text-center">Map of PGs Near VIT Pune</h4> -->
            <!-- <div id="map" class="map-container"></div> -->
        <!-- </div> -->


        <!-- Testimonials Section -->
        <h2 class="text-center my-5">What Our Guests Say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Great experience! The PG was clean and well-managed."</p>
                    <p><strong>- John Doe</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"Affordable rates and amazing amenities. Highly recommend!"</p>
                    <p><strong>- Jane Smith</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p>"The location was perfect for my needs. Would stay again!"</p>
                    <p><strong>- Mark Wilson</strong></p>
                </div>
            </div>
        </div>
    </div>


   <!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container mt-5" id="About">
    <!-- About Us Section -->
    <h2 class="text-center mb-4">About Us</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card p-4 text-center shadow d-flex flex-column my-abt-card" style="min-height: 100%;">
                <i class="fas fa-bullseye fa-3x mb-3 icon-hover"></i> <!-- Mission icon -->
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Our Mission</h5>
                    <p class="card-text">We aim to help students and professionals find affordable and comfortable PG accommodations easily.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-center shadow d-flex flex-column my-abt-card" style="min-height: 100%;">
                <i class="fas fa-eye fa-3x mb-3 icon-hover"></i> <!-- Vision icon -->
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Our Vision</h5>
                    <p class="card-text">To be the most reliable platform for finding Paying Guest accommodations across major cities.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 text-center shadow d-flex flex-column my-abt-card" style="min-height: 100%;">
                <i class="fas fa-star fa-3x mb-3 icon-hover"></i> <!-- Values icon -->
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Our Values</h5>
                    <p class="card-text">We value transparency, trust, and commitment in providing quality living spaces to our users.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    
    
    
    <!-- Contact Us Section -->
    <div class="container mt-5 my-contact-form" id="Contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="card p-4 shadow">
            <form action="send_mail.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" name="message" id="message" rows="4" placeholder="Write your message here" required></textarea>
                </div>
                <button type="submit" name="send" class="btn btn-success w-100">Submit</button>
            </form>
        </div>
    </div>
    
    <!-- Footer -->
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
    
    


    <script>
        function getLocation() {
            // Function to get user's current location
            alert("Current location feature not implemented.");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script>
        let map;
        const locations = [
            { lat: 18.5343, lng: 73.9244, name: "PG 1", description: "Comfortable PG near VIT" },
            { lat: 18.5353, lng: 73.9254, name: "PG 2", description: "Affordable rates and great amenities" },
            { lat: 18.5363, lng: 73.9264, name: "PG 3", description: "Conveniently located PG" }
            // Add more PG locations as needed
        ];

        function initMap() {
            // Initialize the map centered around VIT Pune
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 18.5343, lng: 73.9244 }, // Center the map on VIT Pune
                zoom: 15, // Set the zoom level
            });

            // Add markers for each PG location
            locations.forEach(location => {
                const marker = new google.maps.Marker({
                    position: { lat: location.lat, lng: location.lng },
                    map: map,
                    title: location.name,
                });

                // Add info window to display description on marker click
                const infoWindow = new google.maps.InfoWindow({
                    content: `<h5>${location.name}</h5><p>${location.description}</p>`,
                });

                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
            });
        }
    </script>
</body>

</body>
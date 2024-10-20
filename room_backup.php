<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Room Details</title>
    <style>
        .carousel-item img {
            height: 400px; /* Fixed height for images */
            object-fit: cover; /* Cover the entire area */
        }
    </style>
</head>

<body>
    <header class="bg-light py-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">PG Finder</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
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

    <div class="container my-5">
        <h2 class="text-center mb-4">Room Details</h2>
        <div id="roomCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id="carouselImages">
                <!-- Images will be populated here dynamically -->
            </div>
            <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="room-info mt-4" id="roomInfo">
            <!-- Room information will be populated here dynamically -->
        </div>
    </div>

    <script>
        // Room data - simulate an API response
        const rooms = {
            room1: {
                images: ["img/bg1.jpg", "img/bg2.jpg", "img/bg3.jpg"],
                type: "Private Room",
                price: "₹8,000/month",
                address: "123 PG Street, City Name, State, Zip Code",
                facilities: ["Wi-Fi", "AC", "Laundry", "Kitchen", "24/7 Security"],
                description: "A comfortable single room with attached bathroom and balcony."
            },
            room2: {
                images: ["img/bg2.jpg", "img/bg1.jpg", "img/bg3.jpg"],
                type: "Shared Room",
                price: "₹10,000/month",
                address: "456 PG Avenue, City Name, State, Zip Code",
                facilities: ["Wi-Fi", "Kitchen", "Gym", "Parking"],
                description: "Spacious double room ideal for students sharing."
            },
            room3: {
                images: ["img/bg3.jpg", "img/bg1.jpg", "img/bg2.jpg"],
                type: "Deluxe Room",
                price: "₹12,000/month",
                address: "789 PG Boulevard, City Name, State, Zip Code",
                facilities: ["Wi-Fi", "AC", "Laundry", "Gym", "Kitchen", "Private Bathroom"],
                description: "Luxurious room with modern amenities and great views."
            },
            // Add more rooms as needed
        };

        // Function to load room details based on room ID
        function loadRoomDetails() {
            // Get room ID from URL (e.g., room-details.html?room=room3)
            const params = new URLSearchParams(window.location.search);
            const roomId = params.get('room'); // e.g., "room3"
            const room = rooms[roomId];

            if (room) {
                // Populate carousel images
                const carouselImages = document.getElementById('carouselImages');
                room.images.forEach((image, index) => {
                    const item = document.createElement('div');
                    item.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                    item.innerHTML = `<img src="${image}" class="d-block w-100" alt="Room Image ${index + 1}">`;
                    carouselImages.appendChild(item);
                });

                // Populate room information
                const roomInfo = document.getElementById('roomInfo');
                roomInfo.innerHTML = `
                    <h3>Room Type: ${room.type}</h3>
                    <h6>Price: ${room.price}</h6>
                    <h5>Address:</h5>
                    <p>${room.address}</p>
                    <h5>Facilities:</h5>
                    <ul>
                        ${room.facilities.map(facility => `<li>${facility}</li>`).join('')}
                    </ul>
                    <p>${room.description}</p>
                `;
            } else {
                // Handle room not found (optional)
                const roomInfo = document.getElementById('roomInfo');
                roomInfo.innerHTML = `<p>Room not found.</p>`;
            }
        }

        // Load room details on page load
        window.onload = loadRoomDetails;
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

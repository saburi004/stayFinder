<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>PG Finder</title>
    <style>
          body {
            font-family:'Poppins', sans-serif;
            
            color: #333;
        }

        .room-card {
            margin-bottom: 20px;
            transition: transform 0.3s;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .room-card:hover {
            transform: scale(1.05);
        }

        .carousel-item img {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 150px;
        }

        .explore-btn {
            margin-top: 10px;
            display: block;
            width: 100%;
        }
    </style>
</head>

<body>
    <header class="bg-light py-3">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">PG Finder</a>
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
                    <a class="btn btn-outline-success ml-2" href="signin.html">Sign In</a>
                </div>
            </div>
        </nav>
    </header>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "pg");

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get search criteria from the URL (from search form)
$location = isset($_GET['location']) ? $_GET['location'] : '';
$roomtype = isset($_GET['roomtype']) ? $_GET['roomtype'] : '';
$price = isset($_GET['price']) ? (int)$_GET['price'] : 0;

// Build the query to filter the properties based on the search criteria
$query = "SELECT * FROM `properties` WHERE 1";

// Filter by location (partial match for flexibility)
if (!empty($location)) {
    $query .= " AND address LIKE '%" . mysqli_real_escape_string($con, $location) . "%'";
}

// Filter by room type (fixing the column used in the query)
if (!empty($roomtype)) {
    $query .= " AND roomtype LIKE '%" . mysqli_real_escape_string($con, $roomtype) . "%'";
}

// Filter by price
if ($price > 0) {
    $query .= " AND price <= $price";
}


// Execute the query and check for errors
$result = mysqli_query($con, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($con));  // Check if query execution fails
}

// Check if any results were returned
if (mysqli_num_rows($result) > 0) {
    // Display filtered properties
    echo '<div class="container my-5">';
    echo '<h2 class="text-center mb-4">Available Rooms</h2>';
    echo '<div class="row">';

    while ($row = mysqli_fetch_assoc($result)) {
        $carouselId = 'carouselRoom' . $row['id'];
        echo '
        <div class="col-md-4">
            <div class="card room-card">
                <div id="' . $carouselId . '" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="' . $row['image1'] . '" alt="' . $row['name'] . '" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="' . $row['image2'] . '" alt="' . $row['name'] . '" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="' . $row['image3'] . '" alt="' . $row['name'] . '" class="d-block w-100">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#' . $carouselId . '" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#' . $carouselId . '" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="card-title">' . $row['name'] . '</h6>
                    <p><strong>Price:</strong> ' . $row['price'] . '</p>
                    <p><strong>BHK Type:</strong> ' . $row['roomtype'] . '</p>
                    <p><strong>Facilities:</strong> ' . $row['facilities'] . '</p>
                </div>
            </div>
            <a href="room_details.php?room=' . $row['id'] . '" class="btn btn-primary explore-btn">Explore</a>
        </div>';
    }

    echo '</div>';
    echo '</div>';
} else {
    // No results found
    echo '<p>No rooms found based on your criteria.</p>';
}

// Close the connection
mysqli_close($con);
?>


<!-- Make sure Bootstrap's JS is included -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

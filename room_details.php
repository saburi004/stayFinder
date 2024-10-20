<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Room Details</title>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .carousel-item img {
            height: 400px; /* Fixed height for images */
            object-fit: cover; /* Cover the entire area */
        }

        .room-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .room-info h4 {
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }

        .room-info p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        .room-info ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .room-info ul li {
            margin-bottom: 8px;
        }

        .room-info hr {
            margin-top: 30px;
            margin-bottom: 30px;
            border-top: 1px solid #ddd;
        }

        /* Contact details section */
        .contact-details {
            margin-top: 30px;
        }

        .contact-details h5 {
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }

        .contact-details p {
            font-size: 16px;
            color: #555;
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

    <div class="container my-5">
        <h2 class="text-center mb-4">Room Details</h2>

        <?php
        // Connect to the database
        $con = mysqli_connect("localhost", "root", "", "pg");

        // Check the connection
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get room ID from URL (e.g., room_details.php?room=1)
        $roomId = isset($_GET['room']) ? $_GET['room'] : '';

        // Fetch room details from the database
        $query = "SELECT * FROM `properties` WHERE `id` = '$roomId'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $room = mysqli_fetch_assoc($result);

            // Carousel section
            echo '<div id="roomCarousel" class="carousel slide" data-ride="carousel">';
            echo '<div class="carousel-inner">';
            for ($i = 1; $i <= 3; $i++) {
                if (!empty($room["image$i"])) {
                    $activeClass = $i === 1 ? 'active' : '';
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<img src="' . $room["image$i"] . '" class="d-block w-100" alt="Room Image ' . $i . '">';
                    echo '</div>';
                }
            }
            echo '</div>';
            echo '<a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">';
            echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
            echo '<span class="sr-only">Previous</span>';
            echo '</a>';
            echo '<a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">';
            echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
            echo '<span class="sr-only">Next</span>';
            echo '</a>';
            echo '</div>';

            // Room information section
            echo '<div class="room-info mt-4">';
            echo '<h4>Room Type:</h4> ';
            echo '<p>' . $room['roomtype'] . '</p>';
            echo '<h4>Price:</h4> ' ;
            echo '<p>' . $room['price'] . '</p>';
            echo '<h4>Number of Rooms Available:</h4> ' ;
            echo '<p>' . $room['nosroom'] . '</p>';
            echo '<h4>Name of Area:</h4>';
            echo '<p>' . $room['area'] . '</p>';
            echo '<h4>Name of Building:</h4>';
            echo '<p>' . $room['buildingname'] . '</p>';
            echo '<h4>Landmark:</h4>';
            echo '<p>' . $room['landmark'] . '</p>';
            echo '<h4>Number of Roommates:</h4>';
            echo '<p>' . $room['roommates'] . '</p>';
            echo '<h4>Gender Preference:</h4>';
            echo '<p>' . $room['gender'] . '</p>';
            echo '<h4>Map:</h4>';
            echo '<iframe src="' . $room['map'] . '" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
            

            echo '<h4>Facilities:</h4>';
            echo '<ul>';
            $facilities = explode(',', $room['facilities']);
            foreach ($facilities as $facility) {
                echo '<li>' . trim($facility) . '</li>';
            }
           
            echo '</ul>';
            echo '<hr>';

            // Contact details section
            echo '<div class="contact-details">';
            echo '<h5>Contact Details:</h5>';
            echo '<h4>Owner Name:</h4>';
            echo '<p>' . $room['ownername'] . '</p>';
            echo '<h4>Owner Mobile No:</h4>';
            echo '<p>' . $room['ownermobile'] . '</p>';
            echo '<h4>Owner Address:</h4>';
            echo '<p>' . $room['owneraddress'] . '</p>';
            echo '</div>'; // end contact details
            echo '</div>'; // end room info
        } 
        else {
            echo '<p>Room not found.</p>';
        }

        // Close the connection
        mysqli_close($con);
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

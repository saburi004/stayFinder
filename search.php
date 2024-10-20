<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic PG Finder Search</title>

    <!-- Google Fonts for Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS for structure -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .search-container {
            margin-top: 80px;
        }

        .search-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .search-header h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #003366;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 40px;
        }

        /* Input Fields Styling */
        .form-control {
            border-radius: 10px;
            font-size: 1rem;
            padding: 12px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        /* Select Field */
        .form-select {
            padding: 12px;
            border-radius: 10px;
        }

        /* Search Button */
        .btn-search {
            background-color: #17a2b8;
            border: none;
            font-size: 1.2rem;
            font-weight: 500;
            padding: 12px;
            border-radius: 12px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            color: white;
        }

        .btn-search:hover {
            background-color: #17a2b8;
            transform: translateY(-2px);
        }

        .btn-location {
            background-color: #17a2b8;
            border: none;
            font-weight: 500;
            padding: 12px;
            border-radius: 12px;
            color: white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-location:hover {
            background-color: #138496;
            transform: translateY(-2px);
        }

        /* Price Range Styling */
        .form-range {
            width: 100%;
            height: 4px;
            background-color: #17a2b8;
            border-radius: 10px;
            cursor: pointer;
        }

        .price-range-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
        }

        .selected-price {
            font-weight: 600;
            color: #333;
        }

        /* Checkbox Styling */
        .form-check-input {
            width: 1.5rem;
            height: 1.5rem;
        }

        .form-check-label {
            font-size: 1rem;
            margin-left: 10px;
        }

        /* Amenities Section */
        .amenities-section {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .amenities-section {
                grid-template-columns: 1fr;
            }

            .btn-search {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
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
                        <label for="distance" class="form-label">Distance</label>
                        <select class="form-select" id="distance" name="distance">
                            <option value="1">1 km</option>
                            <option value="5">5 km</option>
                            <option value="10">10 km</option>
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

</body>


</html>

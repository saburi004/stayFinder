<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Details Form</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    height: 100vh; /* Set to 100vh */
    padding-top: 20px; /* Optional: add some padding to avoid top overlap */
}
        .form-container {
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #555;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-group input[type="file"] {
            padding: 3px;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #007bff;
            background-color: #fff;
        }

        .submit-btn {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .form-group small {
            display: block;
            margin-top: 6px;
            font-size: 12px;
            color: #888;
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "pg";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = '';
$next_id = 1; // Default to 1 if no records

// Check if editing an existing record
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch data for the given ID
    $sql = "SELECT * FROM properties WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        echo "<script>alert('No record found');</script>";
    }
} else {
    // Get the next available ID for new record
    $sql = "SELECT MAX(id) AS max_id FROM properties";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $next_id = $row['max_id'] + 1;
    }
}

// Initialize variables for flat details
$id1 = $_POST['flatID'];
$room_name = $_POST['roomname'];
$address = $_POST['address'];
$flat_type = $_POST['flatType'];
$facilities = $_POST['facilities'];
$rooms_available = isset($_POST['no_room']) ? $_POST['no_room'] : '';
$area_name = $_POST['areaName'];
$building_name = $_POST['buildingName'];
$no_of_roommates = $_POST['noOfRoommates'];
$gender = $_POST['gender'];
$landmark = $_POST['landmark'];
$google_embed = $_POST['googleEmbed'];
$price = $_POST['price'];
$owner_name = $_POST['ownername'];
$owner_mobile = $_POST['ownermobile'];
$owner_address = $_POST['owneraddress'];


// Handle file uploads
$target_file1 = isset($_FILES['flatImage1']) ? "uploads/" . basename($_FILES['flatImage1']['name']) : null;
$target_file2 = isset($_FILES['flatImage2']) ? "uploads/" . basename($_FILES['flatImage2']['name']) : null;
$target_file3 = isset($_FILES['flatImage3']) ? "uploads/" . basename($_FILES['flatImage3']['name']) : null;

// Prepare an array to hold the fields to update
$updates = [];

// Check if the user is trying to edit a record
if (isset($_POST['edit'])) {
    // Build the update query dynamically based on the fields that are set
    if (!empty($room_name)) $updates[] = "name = '$room_name'";
    if (!empty($address)) $updates[] = "address = '$address'";
    if (!empty($flat_type)) $updates[] = "roomtype = '$flat_type'";
    if (!empty($facilities)) $updates[] = "facilities = '$facilities'";
    if (!empty($area_name)) $updates[] = "area = '$area_name'";
    if (!empty($building_name)) $updates[] = "buildingname = '$building_name'";
    if (!empty($no_of_roommates)) $updates[] = "roommates = '$no_of_roommates'";
    if (!empty($gender)) $updates[] = "gender = '$gender'";
    if (!empty($landmark)) $updates[] = "landmark = '$landmark'";
    if (!empty($google_embed)) $updates[] = "map = '$google_embed'";
    if (!empty($price)) $updates[] = "price = '$price'";
    if (!empty($owner_name)) $updates[] = "ownername = '$owner_name'";
    if (!empty($owner_mobile)) $updates[] = "ownermobile = '$owner_mobile'";
    if (!empty($owner_address)) $updates[] = "owneraddress = '$owner_address'";
    if (!empty($rooms_available)) $updates[] = "nosroom = '$rooms_available'";
    
    // Handle image uploads separately
    if ($target_file1) $updates[] = "image1 = '$target_file1'";
    if ($target_file2) $updates[] = "image2 = '$target_file2'";
    if ($target_file3) $updates[] = "image3 = '$target_file3'";

    // Create the update query
    if (!empty($updates)) {
        $sql = "UPDATE properties SET " . implode(", ", $updates) . " WHERE id = '$id1'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Updated Successfully');</script>";
        } else {
            echo "<script>alert('Failed to Update: " . $conn->error . "');</script>";
        }
    } else {
        echo "<script>alert('No fields to update.');</script>";
    }
}

// Insert new flat details if 'insert' is pressed (unchanged)
if (isset($_POST['insert'])) {
    $sql = "INSERT INTO properties 
            (image1, image2, image3, name, price, facilities, roomtype, address, 
            ownername, ownermobile, owneraddress, area, buildingname, roommates, gender, 
            landmark, map,nosroom) 
            VALUES 
            ('$target_file1','$target_file2','$target_file3','$room_name','$price','$facilities',
            '$flat_type','$address','$owner_name','$owner_mobile','$owner_address','$area_name',
            '$building_name','$no_of_roommates','$gender','$landmark','$google_embed','$rooms_available')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Inserted Successfully');</script>";
    } else {
        echo "<script>alert('Failed to Insert');</script>";
    }
}

$conn->close();
?>




<div class="form-container">
<form method="POST" enctype="multipart/form-data">
   
        <h2>Submit Flat Details</h2>

        <div class="form-group">
            <label for="flatID">Flat ID:</label>
            <!-- Displaying the flat ID -->
            <input type="text" id="flatID" name="flatID" 
                   value="<?php echo isset($id) && !empty($id) ? $id : $next_id; ?>" 
                   >
        </div>
         
        <div class="form-group">
            <label for="name">Room Name:</label>
            <input type="text" id="roomname" name="roomname"  placeholder="Enter the Room Name">
        </div>
        <!-- Flat Images -->
        <div class="form-group">
            <label for="flatImages">Flat Images:</label>
            <input type="file" id="flatImage1" name="flatImage1" multiple accept="image/*">
            <input type="file" id="flatImage2" name="flatImage2" multiple accept="image/*">
            <input type="file" id="flatImage3" name="flatImage3" multiple accept="image/*">
            
        </div>

        <!-- Address -->
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter the complete address"></textarea>
        </div>

        <!-- Flat Type -->
        <div class="form-group">
            <label for="flatType">Flat Type:</label>
            <select id="flatType" name="flatType">
                <option value="1bhk">1 BHK</option>
                <option value="2bhk">2 BHK</option>
                <option value="3bhk">3 BHK</option>
                <option value="3bhk">4 BHK</option>
            </select>
        </div>

        <!-- Facilities -->
        <div class="form-group">
            <label for="facilities">Facilities:</label>
            <textarea id="facilities" name="facilities" rows="3" placeholder="E.g., Wi-Fi, Parking, Gym, etc."></textarea>
        </div>

        <div class="form-group">
            <label for="nosroom">Number of rooms Available :</label>
            <input type="text" id="no_room" name="no_room"  placeholder="Enter the no. of rooms available">
        </div>

        <!-- Name of Area -->
        <div class="form-group">
            <label for="areaName">Name of Area:</label>
            <input type="text" id="areaName" name="areaName" placeholder="Enter the area name">
        </div>

        <!-- Name of Building -->
        <div class="form-group">
            <label for="buildingName">Name of Building:</label>
            <input type="text" id="buildingName" name="buildingName" placeholder="Enter the building name">
        </div>

        <!-- Number of Roommates -->
        <div class="form-group">
            <label for="noOfRoommates">Number of Roommates:</label>
            <input type="number" id="noOfRoommates" name="noOfRoommates" min="0" placeholder="Enter the number of roommates">
        </div>

        <!-- Gender -->
        <div class="form-group">
            <label for="gender">Gender Preference:</label>
            <select id="gender" name="gender">
                <option value="any">Any</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <!-- Landmark -->
        <div class="form-group">
            <label for="landmark">Landmark:</label>
            <input type="text" id="landmark" name="landmark" placeholder="Enter nearby landmark">
        </div>

        <!-- Google Embedded Address -->
        <div class="form-group">
            <label for="googleEmbed">Google Embedded Address URL:</label>
            <input type="url" id="googleEmbed" name="googleEmbed" placeholder="Enter the embedded Google Maps URL">
            <small>Copy and paste the embedded Google Maps link or use the map picker below.</small>
        </div>

        <!-- Button to open Google Maps Picker -->
        <div class="form-group">
            <button type="button" class="submit-btn" onclick="openMapPicker()">Pick location on map</button>
        </div>

        <!-- Price in Rupees -->
        <div class="form-group">
            <label for="price">Price (in ₹):</label>
            <input type="number" id="price" name="price" min="0" placeholder="Enter the price in rupees">
        </div>

        <h2>Owner Details</h2>
    <div class="form-group">
        <label for="name">Owner Name:</label>
        <input type="text" id="ownername" name="ownername"  placeholder="Enter the Owner Name">
    </div>

    <div class="form-group">
        <label for="mobile">Owner Mobile No:</label>
        <input type="text" id="ownermobile" name="ownermobile"  placeholder="Enter the Owner Mobile No.">
    </div>
    
    <div class="form-group">
        <label for="address">Owner Address:</label>
        <textarea id="owneraddress" name="owneraddress" rows="3" placeholder="Enter the owner complete address"></textarea>
    </div>

        <!-- Submit Button -->
        <div class="form-group">
        <button type="submit" class="submit-btn" name="insert">Submit</button>
        <button type="submit" class="submit-btn" name="edit">Update</button>
        </div>
    </form>
</div>

<script>
    // Function to open a new window for Google Maps Picker
    function openMapPicker() {
        // Open a new window/tab for the Google Maps picker
        window.open('map-picker.html', '_blank', 'width=800,height=600');

    }

    // Function to handle location selection and return the embed URL
    function setLocationEmbedUrl(embedUrl) {
        document.getElementById('googleEmbed').value = embedUrl;
    }
</script>

</body>
</html>

<?php

// include header
include 'partials/header.php';

//include config
include 'config/config.php';




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    // Handle file upload (logo)
    $logo = '';
    if (isset($_FILES['logo']) && $_FILES['logo']['error'] == 0) {
        $target_dir = "uploads/logos/";  // Define the upload directory
        $target_file = $target_dir . basename($_FILES['logo']['name']);
        if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_file)) {
            $logo = $target_file;
        }
    }

    // Insert data into the database
    $sql = "INSERT INTO services (name, category, description, phone, location, latitude, longitude, logo) 
            VALUES ('$name', '$category', '$description', '$phone', '$location', '$latitude', '$longitude', '$logo')";

    if ($conn->query($sql) === TRUE) {
        $message = "New service added successfully!";
    } else {
        $error = true;
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>


<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg my-8">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Add Emergency Service</h2>


    <!-- success/error message div -->
    <?php if ($message != ''): ?>
        <div class="w-full p-4 mb-4 rounded-md 
                <?php echo ($error) ? 'bg-red-100 text-red-700 border-l-4 border-red-500' : 'bg-green-100 text-green-700 border-l-4 border-green-500'; ?> 
                shadow-md">

            <div class="flex items-center">
                <!-- Conditional Icon -->
                <i class="fas <?php echo ($error) ? 'fa-exclamation-triangle' : 'fa-check-circle'; ?> mr-2"></i>

                <!-- Message Text -->
                <span><?php echo $message; ?></span>
            </div>
        </div>
    <?php endif ?>


    <form action="add_service.php" method="POST" enctype="multipart/form-data">
        <div class="space-y-4">
            <!-- Service Name -->
            <div>
                <label for="name" class="block text-gray-700">Service Name</label>
                <input type="text" name="name" id="name" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-gray-700">Category</label>
                <select name="category" id="category" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="Medical">Medical</option>
                    <option value="Fire">Fire</option>
                    <option value="Police">Police</option>
                    <option value="Ambulance">Ambulance</option>
                    <option value="Rescue">Rescue</option>
                </select>
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone" class="block text-gray-700">Phone Number</label>
                <input type="text" name="phone" id="phone" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Location -->
            <div>
                <label for="location" class="block text-gray-700">Location</label>
                <input type="text" name="location" id="location" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Latitude -->
            <div>
                <label for="latitude" class="block text-gray-700">Latitude</label>
                <input type="text" name="latitude" id="latitude" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Longitude -->
            <div>
                <label for="longitude" class="block text-gray-700">Longitude</label>
                <input type="text" name="longitude" id="longitude" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Logo -->
            <div>
                <label for="logo" class="block text-gray-700">Service Logo</label>
                <input type="file" name="logo" id="logo" accept="image/*" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full p-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">Add Service</button>
            </div>
        </div>
    </form>
</div>
<?php include 'partials/footer.php'; ?>
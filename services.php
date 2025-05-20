<?php

require 'partials/header.php';
require 'config/config.php';

$selectedCategory = isset($_GET['category']) ? trim($_GET['category']) : '';
$location = isset($_GET['location']) ? trim($_GET['location']) : '';

$sql = "SELECT * FROM services";
$conditions = [];
$params = [];
$types = '';

// Build dynamic WHERE clause
if (!empty($selectedCategory)) {
    $conditions[] = "category = ?";
    $params[] = $selectedCategory;
    $types .= 's';
}

if (!empty($location)) {
    $conditions[] = "location LIKE ?";
    $params[] = "%" . $location . "%";
    $types .= 's';
}

if (count($conditions) > 0) {
    $sql .= " WHERE " . implode(" AND ", $conditions);
}

// Prepare and execute the query
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("SQL error: " . $conn->error);
}

if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();
$services = $result->fetch_all(MYSQLI_ASSOC);

?>



<div class="max-w-6xl min-h-[80vh] mx-auto p-4 md:p-6">
    <!-- Header with improved styling -->
    <header class="mb-8">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center text-gray-900">
            <span class="text-orange-600">Emergency Services (<?= count($services) ?>)</span>
            <?= $selectedCategory ? ' - ' . htmlspecialchars($selectedCategory) : '' ?>
        </h1>
        <p class="text-center text-gray-600 mt-2">Find and contact nearby emergency assistance</p>
    </header>

    <div class="bg-white rounded-xl shadow-md p-6 mb-8 max-w-6xl mx-auto">
        <form method="GET" class="flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Category Dropdown -->
            <div class="w-full md:w-1/3">
                <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                <select id="category" name="category" class="py-2 px-3 border w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
                    <option value="">All Categories</option>
                    <option value="Medical">Medical</option>
                    <option value="Fire">Fire</option>
                    <option value="Police">Police</option>
                    <option value="Accident">Accident</option>
                    <option value="Disaster">Disaster</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <!-- Location Input (optional) -->
            <div class="w-full md:w-1/3">
                <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Location (Optional)</label>
                <input type="text" id="location" name="location" placeholder="e.g. Nairobi, Nyeri"
                    class="py-2 px-3 border w-full border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500">
            </div>

            <!-- Submit Button -->
            <div class="w-full md:w-auto">
                <label class="block invisible mb-1">&nbsp;</label>
                <button type="submit"
                    class="w-full bg-red-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-red-700 transition duration-200">
                    Filter Services
                </button>
            </div>
        </form>
    </div>


    <?php if (count($services) > 0): ?>
        <div class="space-y-6">
            <?php foreach ($services as $service): ?>
                <div
                    data-aos="fade-up"
                    class="service-card bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100"
                    data-type="ambulance rescue"
                    data-lat="<?= $service['latitude'] ?>"
                    data-lon="<?= $service['longitude'] ?>">

                    <!-- Card content with responsive grid -->
                    <div class="grid md:grid-cols-4 gap-4">
                        <!-- Logo section with accent color -->
                        <div class="md:col-span-1 bg-orange-50 p-4 flex items-center justify-center">
                            <div class="w-24 h-24 md:w-32 md:h-32 rounded-md px-2 bg-white shadow-inner border-2 border-orange-100 flex items-center justify-center">
                                <?php if (!empty($service['logo'])): ?>
                                    <img src="<?= htmlspecialchars($service['logo']) ?>" alt="<?= htmlspecialchars($service['name']) ?> Logo" class="w-full h-full object-contain">
                                <?php else: ?>
                                    <i class="fas fa-ambulance text-orange-600 text-4xl"></i>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Service information section -->
                        <div class="md:col-span-3 p-6">
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <h3 class="text-xl md:text-2xl font-bold text-gray-800"><?= htmlspecialchars($service['name']) ?></h3>
                                    <span class="ml-3 px-2 py-1 bg-green-100 text-green-800 text-xs font-semibold rounded-full">Available</span>
                                </div>
                                <p class="text-gray-600 mt-2"><?= htmlspecialchars($service['description']) ?></p>
                            </div>

                            <!-- Service details with improved icons -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-6">
                                <div class="flex items-center text-gray-700">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-map-marker-alt text-orange-600"></i>
                                    </div>
                                    <span><?= htmlspecialchars($service['location']) ?></span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-phone-alt text-orange-600"></i>
                                    </div>
                                    <a href="tel:<?= htmlspecialchars($service['phone']) ?>" class="font-medium text-blue-600 hover:text-blue-800"><?= htmlspecialchars($service['phone']) ?></a>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-clock text-orange-600"></i>
                                    </div>
                                    <span>24/7 Dispatch Available</span>
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <div class="w-8 h-8 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                                        <i class="fas fa-route text-orange-600"></i>
                                    </div>
                                    <span class="distance font-medium">Calculating distance...</span>
                                </div>
                            </div>

                            <!-- Action buttons with prominent CTA -->
                            <div class="flex flex-col md:flex-row flex-wrap gap-3 mt-4">
                                <a href="tel:<?= htmlspecialchars($service['phone']) ?>" class="flex-1 bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 text-center flex items-center justify-center">
                                    <i class="fas fa-phone-alt mr-2"></i> Call Now
                                </a>
                                <a href="https://maps.google.com/?q=<?= $service['latitude'] ?>,<?= $service['longitude'] ?>" target="_blank" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition-colors duration-300 text-center flex items-center justify-center">
                                    <i class="fas fa-directions mr-2"></i> Get Directions
                                </a>
                                <!-- <button class="show-details-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-3 px-6 rounded-lg transition-colors duration-300 flex items-center justify-center">
                                    <i class="fas fa-info-circle mr-2"></i> More Info
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <!-- Empty state with improved styling -->
        <div class="bg-gray-50 rounded-xl p-8 text-center">
            <div class="w-20 h-20 mx-auto bg-gray-200 rounded-full flex items-center justify-center mb-4">
                <i class="fas fa-search text-gray-400 text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">No Services Found</h3>
            <p class="text-gray-600">No emergency services found for the selected category.</p>
            <a href="javascript:history.back()" class="mt-4 inline-block bg-orange-600 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-lg transition-colors duration-300">
                <i class="fas fa-arrow-left mr-2"></i> Go Back
            </a>
        </div>
    <?php endif; ?>

    <!-- Emergency tips section -->
    <div class="mt-12 bg-blue-50 rounded-xl p-6 border border-blue-100">
        <h3 class="text-xl font-bold text-blue-800 mb-3">Emergency Tips</h3>
        <ul class="space-y-2">
            <li class="flex items-start">
                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                <span>Stay calm and provide your exact location when calling emergency services</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                <span>If possible, send someone to the main road to guide emergency responders</span>
            </li>
            <li class="flex items-start">
                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                <span>Keep your phone line open after calling for any follow-up questions</span>
            </li>
        </ul>
    </div>
</div>



<script>
    // Haversine formula to calculate distance between two latitudes and longitudes
    function calculateDistance(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radius of the Earth in km
        const dLat = (lat2 - lat1) * Math.PI / 180;
        const dLon = (lon2 - lon1) * Math.PI / 180;
        const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
            Math.sin(dLon / 2) * Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c; // Distance in km
    }

    // Get user's current position
    function getUserLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const userLat = position.coords.latitude;
                const userLon = position.coords.longitude;
                const services = document.querySelectorAll('.service-card');
                services.forEach(function(service) {
                    const serviceLat = parseFloat(service.getAttribute('data-lat'));
                    const serviceLon = parseFloat(service.getAttribute('data-lon'));
                    const distance = calculateDistance(userLat, userLon, serviceLat, serviceLon);
                    service.querySelector('.distance').textContent = distance.toFixed(2) + ' km away';
                });
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    // Load user's location when the page is ready
    window.onload = getUserLocation;
</script>

<?php require 'partials/footer.php'; ?>
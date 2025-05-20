<?php

// Get the logged-in user information (if needed for admin or authentication)
session_start();

include 'partials/header.php';

// Include the database connection
require 'config/config.php';


$userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Fetch total number of services
$sql = "SELECT COUNT(*) AS total FROM services";
$result = $conn->query($sql);
$totalServices = $result->fetch_assoc()['total'];

// Fetch total number of unique service providers (assuming each provider has a unique ID)
$sql = "SELECT COUNT(DISTINCT provider_id) AS total FROM services";  // Assuming 'provider_id' is the field for providers
$result = $conn->query($sql);
$totalProviders = $result->fetch_assoc()['total'];

// Fetch total number of recent requests (for this example, I'm assuming a 'requests' table for tracking)
$sql = "SELECT COUNT(*) AS total FROM requests WHERE request_date > NOW() - INTERVAL 1 MONTH";  // Last month's requests
$result = $conn->query($sql);
$recentRequests = $result->fetch_assoc()['total'];

// Fetch the 5 most recent services added
$sql = "SELECT * FROM services ORDER BY created_at DESC LIMIT 5"; // Assuming 'created_at' is the timestamp of when the service was added
$result = $conn->query($sql);
$latestServices = $result->fetch_all(MYSQLI_ASSOC);

// Logout functionality (if needed)
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>


<div class="max-w-7xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-gray-900 mb-6">Welcome Back, User John!</h2>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
        <div class="bg-white shadow rounded-lg p-5 border-l-4 border-orange-500">
            <div class="flex items-center">
                <i class="fas fa-ambulance text-orange-600 text-3xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Services</p>
                    <p class="text-2xl font-bold text-gray-800"><?= $totalServices ?? 0 ?></p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg p-5 border-l-4 border-blue-500">
            <div class="flex items-center">
                <i class="fas fa-users text-blue-600 text-3xl mr-4"></i>
                <div>
                    <p class="text-sm font-medium text-gray-600">Service Providers</p>
                    <p class="text-2xl font-bold text-gray-800"><?= $totalProviders ?? 0 ?></p>
                </div>
            </div>
        </div>


    </div>

    <!-- Quick Actions -->
    <div class="bg-white shadow rounded-lg p-6 mb-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Quick Actions</h3>
        <div class="flex flex-wrap gap-4">
            <a href="add-service.php" class="inline-flex items-center px-5 py-3 bg-orange-600 text-white font-semibold rounded-lg hover:bg-orange-700 transition">
                <i class="fas fa-plus-circle mr-2"></i> Add New Service
            </a>
            <a href="manage-services.php" class="inline-flex items-center px-5 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-tools mr-2"></i> Manage Services
            </a>
            <a href="analytics.php" class="inline-flex items-center px-5 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
                <i class="fas fa-chart-line mr-2"></i> View Analytics
            </a>
            <!-- Logout Button -->
            <a href="logout.php" class="inline-flex items-center px-5 py-3 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 transition">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </a>
        </div>
    </div>

    <!-- Latest Services Table -->
    <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Latest Added Services (Top 5)</h3>
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="py-3 px-6 text-sm font-medium text-gray-600">Service Name</th>
                    <th class="py-3 px-6 text-sm font-medium text-gray-600">Category</th>
                    <th class="py-3 px-6 text-sm font-medium text-gray-600">Location</th>
                    <th class="py-3 px-6 text-sm font-medium text-gray-600">Phone</th>
                    <th class="py-3 px-6 text-sm font-medium text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <?php foreach ($latestServices as $service): ?>
                    <tr>
                        <td class="py-4 px-6"><?= htmlspecialchars($service['name']) ?></td>
                        <td class="py-4 px-6"><?= htmlspecialchars($service['category']) ?></td>
                        <td class="py-4 px-6"><?= htmlspecialchars($service['location']) ?></td>
                        <td class="py-4 px-6"><?= htmlspecialchars($service['phone']) ?></td>
                        <td class="py-4 px-6">
                            <a href="edit-service.php?id=<?= $service['id'] ?>" class="text-blue-600 hover:underline">Edit</a> |
                            <a href="delete-service.php?id=<?= $service['id'] ?>" class="text-red-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php'; ?>
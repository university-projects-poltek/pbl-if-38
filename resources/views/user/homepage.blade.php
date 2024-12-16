@extends('layouts.root-mobile', ['title' => 'Homepage'])

<!-- Hero Section -->
<header class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-3">Welcome to Wild Park Town</h1>
        <p class="lead">Explore nature, wildlife, and more in the heart of our town.</p>
    </div>
</header>

<!-- Park Overview Section -->
<section id="park-overview"
    class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Park Overview</h2>
        <p>The Wild Park is a vast and scenic nature reserve located in the town's heart. It serves as a home for local
            wildlife and a recreational space for visitors. Whether you are hiking, birdwatching, or simply relaxing, the
            park offers something for everyone.</p>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350"
                        class="card-img-top"
                        alt="Park Image">
                    <div class="card-body">
                        <h5 class="card-title">Hiking Trails</h5>
                        <p class="card-text">Explore scenic trails through the forest and enjoy breathtaking views of the town and
                            wildlife.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350"
                        class="card-img-top"
                        alt="Park Image">
                    <div class="card-body">
                        <h5 class="card-title">Wildlife Spotting</h5>
                        <p class="card-text">Observe diverse species of animals in their natural habitat, from deer to local
                            birdlife.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350"
                        class="card-img-top"
                        alt="Park Image">
                    <div class="card-body">
                        <h5 class="card-title">Family Picnic Areas</h5>
                        <p class="card-text">Enjoy a relaxing family picnic surrounded by the beauty of nature, with ample space
                            for children to play.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- APK Report Section -->
<section id="apk-report"
    class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">APK Specification Report</h2>
        <p>The APK specification for Wild Park details essential information regarding the park's features, facilities,
            and capacity. The following outlines the main components:</p>
        <h3>Park Features</h3>
        <ul>
            <li>Over 50 hectares of natural parkland</li>
            <li>Multiple hiking trails and viewing points</li>
            <li>Wildlife preservation area with local flora and fauna</li>
            <li>Picnic areas and recreational zones</li>
            <li>Accessibility options for disabled visitors</li>
        </ul>
        <h3>Park Specifications</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Specification</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Park Area</td>
                    <td>50 hectares</td>
                </tr>
                <tr>
                    <td>Trails</td>
                    <td>5 trails (easy, medium, difficult)</td>
                </tr>
                <tr>
                    <td>Wildlife</td>
                    <td>50+ species of birds, mammals, and reptiles</td>
                </tr>
                <tr>
                    <td>Visitor Capacity</td>
                    <td>500 visitors/day</td>
                </tr>
            </tbody>
        </table>
        <h3>Visitor Statistics</h3>
        <ul>
            <li>Annual visitors: 50,000</li>
            <li>Peak visitor months: April to September</li>
            <li>Average duration of visit: 3 hours</li>
            <li>Visitor satisfaction rate: 90%</li>
        </ul>
    </div>
</section>

<!-- Contact Section -->
<section id="contact"
    class="bg-dark text-white py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact Us</h2>
        <p class="text-center">For more information or inquiries, please reach out to us:</p>
        <div class="row">
            <div class="col-md-6">
                <p>Email: <a href="mailto:info@wildparktown.com"
                        class="text-white">info@wildparktown.com</a></p>
            </div>
            <div class="col-md-6">
                <p>Phone: <a href="tel:+1234567890"
                        class="text-white">+1 234-567-890</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Wild Park Town. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqZB6QGktvRaSjf9rRpaUlnl3s4aWj8z+71iX9oITejo"
    crossorigin="anonymous"></script>
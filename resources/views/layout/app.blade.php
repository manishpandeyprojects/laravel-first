<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-Commerce Site</title>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .navbar {
            background-color: #007bff;
            /* Bootstrap primary color */
        }

        .navbar-brand {
            color: #ffffff !important;
            /* White color for brand */
        }

        .nav-link {
            color: #ffffff !important;
            /* White color for links */
        }

        .nav-link:hover {
            color: #ffd700 !important;
            /* Gold color on hover */
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.5);
            /* White border for toggler */
        }

        .navbar-toggler-icon {
            background-color: rgba(255, 255, 255, 0.5);
            /* Toggler icon color */
        }

        footer {
            background-color: #343a40;
            /* Dark background for footer */
            color: white;
            padding: 30px 0;
        }

        footer a {
            color: #ffffff;
            /* White color for footer links */
        }

        footer a:hover {
            color: #ffd700;
            /* Gold color on hover */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <i class="fas fa-shopping-cart"></i> E-Commerce
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fas fa-th"></i> Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cart">
                            <i class="fas fa-shopping-basket"></i> Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/account">
                            <i class="fas fa-user-circle"></i> My Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">
                            <i class="fas fa-envelope"></i> Contact Us
                        </a>
                    </li>
                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <main class="py-5">
        <div class="container">
            @yield('hero-banner')
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Your go-to platform for all your shopping needs. Quality products at unbeatable prices!</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="/cart">Cart</a></li>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/account">My Account</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt"></i> 123 E-Commerce St, City, Country</p>
                    <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                    <p><i class="fas fa-envelope"></i> email@example.com</p>
                </div>
            </div>
            <hr class="bg-light">
            <p class="mb-0">&copy; {{ date('Y') }} E-Commerce. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
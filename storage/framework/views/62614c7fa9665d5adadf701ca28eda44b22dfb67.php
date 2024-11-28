<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Ticket Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px;
            /* This is to ensure space for the fixed navbar */
        }

        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background-color: #f8f9fa;
        }

        .booking-section {
            max-width: 100%;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
        }

        /* Fix the navbar on top */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            /* Make sure the navbar stays above other content */
        }

        .hero-section img {
            max-width: 100%;
            /* Ensures the image is responsive */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Train Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/my-bookings')); ?>">MY Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/contact')); ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-section">
        <div class="booking-section">
            <h2>Search for Trains</h2>
            <form action="<?php echo e(route('searchTrains')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="departure" class="form-label">Departure</label>
                    <input type="text" name="departure" class="form-control" id="departure" placeholder="Enter departure city">
                </div>
                <div class="mb-3">
                    <label for="destination" class="form-label">Destination</label>
                    <input type="text" name="destination" class="form-control" id="destination" placeholder="Enter destination city">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Travel Date</label>
                    <input type="date" name="date" class="form-control" id="date">
                </div>
                <div class="mb-3">
                    <label for="class" class="form-label">Class</label>
                    <select name="class" class="form-select" id="class">
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                        <option value="first">First Class</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Search Trains</button>
            </form>
        </div>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4T-s5BqSyy_j6j3pv71lJkxiPA6a7kSEp-w&s" alt="Train" class="img-fluid" style="max-width: 500px;">
        </div>
    </div>

    <section>
        <div class="container py-6 text-center">
            <div class="col-md-12 navbar-expand border-bottom pb-2 mb-4">
                <div lc-helper="shortcode" class="live-shortcode "> <!--  lc_nav_menu -->
                    <ul id="menu-menu-1" class="d-grid gap-2 d-md-flex justify-content-center">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-32739"><a href="https://library.livecanvas.com/starters" class="nav-link ">Book Your Tickets Made Easy</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home nav-item nav-item-32738"><a href="https://library.livecanvas.com/sections/" class="nav-link ">IRCTC</a></li>
                    </ul> <!-- /lc_nav_menu -->
                </div>
            </div>

            <div class="lc-block">
                <div editable="rich">
                    <p class="text-muted">© 2022 Acme, Inc</p>

                </div>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH C:\Users\hp\projectCA\projectCA\resources\views/welcome.blade.php ENDPATH**/ ?>
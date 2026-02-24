<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Hero Section Start -->
    <header class="header-section">
        <img src="{{asset('frontend/images/banner.webp')}}" class="img-responsive">

        <div class="hero-content">
            <h1>Organic Dry Food</h1>
            <p>Be fir and Healthy. Test our organic food</p>
            <a href="#checkout-form" class="btn-custom">Buy Now</a>
        </div>
    </header>
    <!-- Hero Section End -->

    <!-- Products Features Start -->
    <section class="Features-section">
        <div class="container">
            <h2>Why Choose our product</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="feature-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <h5>Feature-1</h5>
                        <p>This is a premium product</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Features End -->

    <!-- Customer Review Start -->
    <section class="Custmr-Revie-section" id="checkout-form">
        <div class="container">
            <h2>what our customer say</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="review-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <p>This is an amazing product</p>
                        <h5>Tareq Mahmud</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="review-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <p>This is an amazing product</p>
                        <h5>Tareq Mahmud</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="review-card">
                        <img src="{{asset('frontend/images/feature.webp')}}">
                        <p>This is an amazing product</p>
                        <h5>Tareq Mahmud</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customer Review End -->

    <!-- Checkout Form Start -->
    <section class="checkout-section">
        <div class="container">
            <h2>Checkout</h2>
            <form action="" method="" class="Checkout-form">
                <div class="mb-3">
                    <label class="form-label">Full Name*</label>
                    <input type="text" placeholder="Your Full Name" name="" value="" class="form-control custom-input"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number*</label>
                    <input type="tel" placeholder="Your Phone number" name="" value="" class="form-control custom-input"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address*</label>
                    <textarea class="form-control custom-input" name=""
                        placeholder="Enter Your Full Name Address"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Area*</label>
                    <select class="form-control custom-input" name="">
                        <option value="inside-dhaka">Inside Dhaka</option>
                        <option value="outside-dhaka">Outside Dhaka</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary"> Confirm Order</button>
            </form>
        </div>
    </section>
    <!-- Checkout Form End -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="footer-contnt">
                <div class="footer-logo">
                    <img src="https://placehold.co/150x60">
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <p>&copy 2025 Landingpage. All Right Reserved</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
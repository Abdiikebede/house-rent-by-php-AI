<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hope HomeRent - Find Your Dream Home Today</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    :root {
      --primary: #8B0033;
      --primary-light: #A81144;
      --gray-bg: #f8f9fa;
    }
    body { font-family: 'Inter', sans-serif; color: #333; background: white; }
    .navbar-brand { font-weight: 700; font-size: 1.8rem; color: var(--primary) !important; }
    .btn-primary, .btn-outline-primary {
      border-radius: 50px;
      padding: 8px 24px;
      font-weight: 600;
    }
    .btn-primary { background: var(--primary); border: none; }
    .btn-primary:hover { background: #6b0027; }

    /* Hero */
    .hero {
      background: linear-gradient(to right, rgba(255,255,255,0.95), rgba(255,255,255,0.4)),
                  url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2400') right center / cover no-repeat;
      min-height: 90vh;
      display: flex;
      align-items: center;
    }
    .hero h1 {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
    }
    .hero h1 span { color: var(--primary); }
    .search-bar {
      background: white;
      border-radius: 50px;
      padding: 10px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      max-width: 600px;
    }
    .search-bar input {
      border: none;
      padding: 12px 16px;
      font-size: 1rem;
    }
    .search-bar button {
      background: var(--primary);
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    /* Property Cards */
    .property-card {
      background: white;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: transform 0.3s;
    }
    .property-card:hover { transform: translateY(-10px); }
    .price-tag {
      background: var(--primary);
      color: white;
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 0.9rem;
      font-weight: 600;
      position: absolute;
      top: 15px;
      left: 15px;
    }
    .property-card img {
      height: 220px;
      object-fit: cover;
    }

    /* Steps */
    .step-circle {
      width: 70px; height: 70px;
      background: var(--primary);
      color: white;
      border-radius: 50%;
      font-size: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    /* Features & Testimonials */
    .feature-box, .testimonial-box {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.06);
    }

    /* Newsletter */
    .newsletter {
      background: var(--primary);
      border-radius: 30px;
      padding: 50px 20px;
      color: white;
    }

    footer a { color: #ccc; text-decoration: none; }
    footer a:hover { color: white; }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Hope HomeRent</a>
      <div class="ms-auto d-flex gap-3 align-items-center">
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Properties</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        <a href="./auths/login.php" class="btn btn-outline-primary rounded-pill">Login</a>
        <a href="./auths/signup.php" class="btn btn-primary rounded-pill">Sign Up</a>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="mb-3">Find Your <span>Dream</span><br>Home Today</h1>
          <p class="lead text-muted mb-4">Discover premium properties handpicked for you</p>
          <!-- <div class="search-bar d-flex mx-auto mx-lg-0">
            <input type="text" class="flex-fill" placeholder="Location">
            <input type="text" class="flex-fill" placeholder="Price Range">
            <input type="text" class="flex-fill" placeholder="Property Type">
            <button class="btn btn-primary text-white"><i class="bi bi-search"></i></button>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Properties -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-2"><span class="text-primary">Featured Properties</span></h2>
      <p class="text-center text-muted mb-5">Explore our curated selection of premium homes</p>

      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <div class="property-card position-relative">
            <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=600" class="w-100" alt="Modern Villa">
            <span class="price-tag">$2,500/mo</span>
            <div class="p-4">
              <h5>Modern Villa</h5>
              <p class="text-muted small"><i class="bi bi-geo-alt"></i> Downtown District</p>
              <div class="d-flex gap-4 text-muted small">
                <span><i class="bi bi-bed"></i> 4 Beds</span>
                <span><i class="bi bi-droplet"></i> 3 Baths</span>
                <span><i class="bi bi-arrows"></i> 2,400 Sqft</span>
              </div>
              <a href="#" class="btn btn-primary w-100 mt-3 rounded-pill">View Details →</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="property-card position-relative">
            <img src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=600" class="w-100" alt="Luxury Apartment">
            <span class="price-tag">$3,200/mo</span>
            <div class="p-4">
              <h5>Luxury Apartment</h5>
              <p class="text-muted small"><i class="bi bi-geo-alt"></i> Waterfront Area</p>
              <div class="d-flex gap-4 text-muted small">
                <span><i class="bi bi-bed"></i> 3 Beds</span>
                <span><i class="bi bi-droplet"></i> 2 Baths</span>
                <span><i class="bi bi-arrows"></i> 1,800 Sqft</span>
              </div>
              <a href="#" class="btn btn-primary w-100 mt-3 rounded-pill">View Details →</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="property-card position-relative">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600" class="w-100" alt="Contemporary House">
            <span class="price-tag">$1,800/mo</span>
            <div class="p-4">
              suburban-zone
              <h5>Contemporary House</h5>
              <p class="text-muted small"><i class="bi bi-geo-alt"></i> Suburban Zone</p>
              <div class="d-flex gap-4 text-muted small">
                <span><i class="bi bi-bed"></i> 3 Beds</span>
                <span><i class="bi bi-droplet"></i> 2 Baths</span>
                <span><i class="bi bi-arrows"></i> 1,600 Sqft</span>
              </div>
              <a href="#" class="btn btn-primary w-100 mt-3 rounded-pill">View Details →</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-5">
        <a href="#" class="btn btn-outline-primary btn-lg rounded-pill px-5">View All Properties →</a>
      </div>
    </div>
  </section>

  <!-- How It Works -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-2">How It Works</h2>
      <p class="text-center text-muted mb-5">Simple steps to find your perfect home</p>
      <div class="row text-center">
        <div class="col-md-3"><div class="step-circle">1</div><h5>Search Properties</h5><p class="text-muted small">Browse through our extensive collection of premium properties tailored to your needs</p></div>
        <div class="col-md-3"><div class="step-circle">2</div><h5>View Details</h5><p class="text-muted small">Get comprehensive information about each property including photos and specifications</p></div>
        <div class="col-md-3"><div class="step-circle">3</div><h5>Schedule Tour</h5><p class="text-muted small">Book a convenient time to visit the property with our professional agents</p></div>
        <div class="col-md-3"><div class="step-circle">4</div><h5>Move In</h5><p class="text-muted small">Complete the rental process and move into your dream home today</p></div>
      </div>
    </div>
  </section>

  <!-- Why Choose HomeRent -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-2">Why Choose Hope HomeRent</h2>
      <p class="text-center text-muted mb-5">We provide the best rental experience in the market</p>
      <div class="row g-4">
        <div class="col-md-4"><div class="feature-box text-center"><i class="bi bi-shield-check text-primary fs-1 mb-3"></i><h5>Verified Properties</h5><p class="text-muted small">All our properties are thoroughly vetted and verified to ensure quality and authenticity for our valued clients</p></div></div>
        <div class="col-md-4"><div class="feature-box text-center"><i class="bi bi-headset text-primary fs-1 mb-3"></i><h5>Expert Support</h5><p class="text-muted small">Our dedicated team is available 24/7 to assist you with any questions or concerns throughout your rental journey</p></div></div>
        <div class="col-md-4"><div class="feature-box text-center"><i class="bi bi-lock text-primary fs-1 mb-3"></i><h5>Secure Transactions</h5><p class="text-muted small">We use advanced encryption and secure payment methods to protect your personal and financial information</p></div></div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center mb-2">What Our Clients Say</h2>
      <p class="text-center text-muted mb-5">Real experiences from satisfied homeowners</p>
      <div class="row g-4">
        <div class="col-md-4"><div class="testimonial-box"><p class="mb-4">"Hope HomeRent made finding my perfect apartment incredibly easy..."</p><div class="d-flex align-items-center"><div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:50px;height:50px;">JD</div><div><strong>John Davis</strong><br><small>Satisfied Client</small><br><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></div></div></div></div>
        <div class="col-md-4"><div class="testimonial-box"><p class="mb-4">"I was impressed by the variety of properties..."</p><div class="d-flex align-items-center"><div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:50px;height:50px;">SM</div><div><strong>Sarah Mitchell</strong><br><small>Happy Tenant</small><br><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></div></div></div></div>
        <div class="col-md-4"><div class="testimonial-box"><p class="mb-4">"The entire experience was seamless from start to finish..."</p><div class="d-flex align-items-center"><div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:50px;height:50px;">RC</div><div><strong>Robert Chen</strong><br><small>New Resident</small><br><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i></div></div></div></div>
      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <section class="newsletter text-center my-5 mx-3 mx-lg-5">
    <h3 class="mb-3">Stay Updated</h3>
    <p class="mb-4">Subscribe to our newsletter for exclusive deals and property updates</p>
    <form class="row justify-content-center g-3">
      <div class="col-md-5">
        <input type="email" class="form-control form-control-lg rounded-pill" placeholder="Enter your email">
      </div>
      <div class="col-md-3">
        <button class="btn btn-light btn-lg rounded-pill w-100">Subscribe</button>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3"><h5 class="navbar-brand mb-3">Hope HomeRent</h5><p class="small">Your trusted platform for finding premium rental properties in the most desirable locations.</p></div>
        <div class="col-md-3"><h6>Quick Links</h6><ul class="list-unstyled"><li><a href="#">Browse Properties</a></li><li><a href="#">How It Works</a></li><li><a href="#">About Us</a></li><li><a href="#">Contact</a></li></ul></div>
        <div class="col-md-3"><h6>Support</h6><ul class="list-unstyled"><li><a href="#">Help Center</a></li><li><a href="#">FAQ</a></li><li><a href="#">Terms & Conditions</a></li><li><a href="#">Privacy Policy</a></li></ul></div>
        <div class="col-md-3"><h6>Contact Info</h6><p class="small">+1 (234) 567-890<br>info@homerent.com<br>123 Main Street<br>New York, NY 10001</p></div>
      </div>
      <hr class="my-4">
      <p class="text-center small">&copy; 2025 Hope HomeRent. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
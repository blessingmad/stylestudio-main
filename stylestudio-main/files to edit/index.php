<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dencia| Home of beauty to all</title>
  <!-- Link to Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="logo.jpg" />
  <style>
    /* Global adjustments to remove romantic colors/emojis */
    body {
      background: linear-gradient(to right, #ff9a9e, #fad0c4); /* Neutral gradient */
    }
    /* Carousel adjustments */
    .carousel-item {
      background-color: rgba(240, 240, 240, 0.9);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .carousel-content h2 {
      color: #333;
      font-weight: bold;
    }
    .special-button {
      background: #007bff;
      color: white;
      padding: 12px 25px;
      border-radius: 50px;
      font-size: 18px;
      font-weight: bold;
      box-shadow: 0 4px 10px rgba(0, 123, 255, 0.6);
      border: none;
      cursor: pointer;
    }
    .special-button:hover {
      background: #0056b3;
      transform: scale(1.05);
    }
    /* Monthly Specials Section (formerly Valentine’s Specials) */
    .monthly-specials {
      padding: 50px 20px;
      background: #444;
      color: #fff;
      text-align: center;
    }
    .monthly-specials h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.5rem;
      margin-bottom: 10px;
      color: #ffd700;
    }
    .monthly-specials p {
      font-size: 1.2rem;
      color: #fff;
      margin-bottom: 30px;
    }
    .monthly-specials .special-card {
      background: rgba(255, 255, 255, 0.1);
      border: 2px solid #888;
      border-radius: 10px;
      padding: 20px;
      transition: transform 0.3s, background 0.3s;
    }
    .monthly-specials .special-card:hover {
      transform: translateY(-10px);
      background: rgba(255, 255, 255, 0.2);
    }
    .monthly-specials .special-card .icon {
      font-size: 2.5rem;
      color: #ffd700;
      margin-bottom: 15px;
    }
    .monthly-specials .special-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      color: #ffd700;
      margin-bottom: 10px;
    }
    .monthly-specials .special-card p {
      font-size: 1rem;
      color: #fff;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <header>
    <!-- Top Header -->
    <div class="top-header">
      <!-- Logo and Company Name -->
      <div class="logo-container">
        <img src="logo.jpg" alt="Dencia| Home of beauty Logo" class="logo">
        <div class="company-name">Dencia</div>
      </div>
      <!-- Hamburger Menu Icon -->
      <div class="nav-toggle">&#9776;</div>
      <!-- Navigation Menu -->
      <nav>
        <ul>
          <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="services.php"><i class="fas fa-paint-brush"></i>Services</a></li>
          <li><a href="contact.php"><i class="fas fa-phone-alt"></i>Contact</a></li>
        </ul>
      </nav>
    </div>
    <!-- Second Ribbon -->
    <div class="nav-row"></div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const navToggle = document.querySelector('.nav-toggle');
      const navMenu = document.querySelector('nav ul');
      navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('open');
      });
    });
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-N44NWQPCCY"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-N44NWQPCCY');
  </script>

  <!-- Carousel Section -->
  <div class="carousel-container">
    <button class="carousel-btn left" onclick="moveSlide(-1)">&#10094;</button>
    <div class="carousel-track">
      <div class="carousel-item">
        <img src="hairstyle19.png" alt="Artificial Hair Braiding">
        <div class="carousel-content">
          <h2>Artificial Hair Braiding</h2>
          <p>Knotless braids style perfect for any occasion!</p>
          <p class="price"><span class="discount">R650</span> R400 (Monthly Special!)</p>
          <a href="https://wa.me/27710750428" target="_blank">
            <button class="special-button">
              <i class="fab fa-whatsapp"></i> Book Now
            </button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="swedish_massage.jpg" alt="Spa Service">
        <div class="carousel-content">
          <h2>Spa Service - Relax Together</h2>
          <p>Enjoy a luxurious couple’s spa experience.</p>
          <p class="price"><span class="discount">R550</span> R350 (Limited Time!)</p>
          <a href="https://wa.me/27710750428" target="_blank">
            <button class="special-button">
              <i class="fab fa-whatsapp"></i> Reserve Your Spot
            </button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="manicure.jpg" alt="Manicure">
        <div class="carousel-content">
          <h2>Manicure - Pamper Yourself</h2>
          <p>Give your hands the care they deserve with our professional acrylic manicure services.</p>
          <p class="price"><span class="discount">R250</span> R180 (Monthly Special!)</p>
          <a href="https://wa.me/27710750428" target="_blank">
            <button class="special-button">
              <i class="fab fa-whatsapp"></i> Book Your Glow Up
            </button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="facial.jpg" alt="Facial Treatment">
        <div class="carousel-content">
          <h2>Facial Treatment - Glow & Radiate</h2>
          <p>Rejuvenate your skin with our relaxing and refreshing facials.</p>
          <p class="price"><span class="discount">R350</span> R250 (Limited Offer!)</p>
          <a href="https://wa.me/27710750428" target="_blank">
            <button class="special-button">
              <i class="fab fa-whatsapp"></i> Book Your Glow
            </button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="couples_massage.jpg" alt="Couples Massage">
        <div class="carousel-content">
          <h2>Couples Massage - Relax Together</h2>
          <p>Experience the ultimate relaxation with a romantic couples massage session.</p>
          <p class="price"><span class="discount">R550</span> R350 (Monthly Special!)</p>
          <a href="https://wa.me/27710750428" target="_blank">
            <button class="special-button">
              <i class="fab fa-whatsapp"></i> Book for Two
            </button>
          </a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="beard_trim.jpg" alt="Beard Trim">
        <div class="carousel-content">
          <h2>Beard Trim - Stay Sharp</h2>
          <p>Keep your beard looking sharp and well-groomed with our expert trim services.</p>
          <p class="price"><span class="discount">R90</span> R60 (Monthly Exclusive!)</p>
          <a href="https://wa.me/27710750428" target="_blank">
            <button class="special-button">
              <i class="fab fa-whatsapp"></i> Trim & Impress
            </button>
          </a>
        </div>
      </div>
    </div>
    <button class="carousel-btn right" onclick="moveSlide(1)">&#10095;</button>
  </div>

  <script>
    let slideIndex = 0;
    const track = document.querySelector('.carousel-track');
    const totalSlides = document.querySelectorAll('.carousel-item').length;
    function moveSlide(direction) {
      slideIndex = (slideIndex + direction + totalSlides) % totalSlides;
      track.style.transform = `translateX(-${slideIndex * 100}%)`;
    }
    function autoScroll() {
      moveSlide(1);
    }
    setInterval(autoScroll, 3000);
  </script>

  <!-- Monthly Specials Section (formerly Valentine's Specials) -->
  <section class="monthly-specials">
    <div class="valentine-header">
      <h2>Monthly Specials</h2>
      <p>Enjoy our exclusive monthly beauty and fashion offers.</p>
    </div>
    <div class="valentine-grid">
      <!-- Special 1 -->
      <div class="special-card">
        <div class="icon">
          <i class="fas fa-star"></i>
        </div>
        <h3>Makeover Special</h3>
        <p>Get a stunning makeover perfect for any occasion.</p>
      </div>
      <!-- Special 2 -->
      <div class="special-card">
        <div class="icon">
          <i class="fas fa-spa"></i>
        </div>
        <h3>Couples' Spa Retreat</h3>
        <p>Enjoy a luxurious spa experience together.</p>
      </div>
      <!-- Special 3 -->
      <div class="special-card">
        <div class="icon">
          <i class="fas fa-gift"></i>
        </div>
        <h3>Gift Sets Special</h3>
        <p>Surprise your loved ones with our exclusive gift sets.</p>
      </div>
    </div>
  </section>

  <!-- Featured Hairstyles Section -->
  <h2>Featured Hairstyles</h2>
  <div class="featured-hairstyles">
    <!-- Classic Braids -->
    <div class="product-card">
      <img src="hairstyle1.jpg" alt="Classic Braids" class="product-image" loading="lazy">
      <div class="product-content">
        <div class="product-name">Classic Braids</div>
        <div class="product-price">
          <span class="discount"><s>R700</s></span> R450 (Monthly Special!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Classic%20Braids%20for%20R450.00" class="whatsapp-button" target="_blank">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Elegant Weave -->
    <div class="product-card">
      <img src="hairstyle2.jpg" alt="Elegant Weave" class="product-image" loading="lazy">
      <div class="product-content">
        <div class="product-name">Elegant Weave</div>
        <div class="product-price">
          <span class="discount"><s>R700</s></span> R450 (Limited Time!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Elegant%20Weave%20for%20R450.00" class="whatsapp-button" target="_blank">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Sleek Ponytail -->
    <div class="product-card">
      <img src="hairstyle3.jpg" alt="Sleek Ponytail" class="product-image" loading="lazy">
      <div class="product-content">
        <div class="product-name">Sleek Ponytail</div>
        <div class="product-price">
          <span class="discount"><s>R700</s></span> R450 (Monthly Deal!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Sleek%20Ponytail%20for%20R450.00" class="whatsapp-button" target="_blank">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
  </div>

  <!-- Featured Haircuts Section -->
  <h2>Featured Haircuts</h2>
  <div class="featured-hairstyles">
    <!-- Short Curley Cut -->
    <div class="hairstyle-card">
      <img src="haircut_men1.jpg" alt="Short Curley Cut" class="hairstyle-image" loading="lazy">
      <div class="hairstyle-content">
        <div class="hairstyle-name">Short Curley Cut</div>
        <div class="hairstyle-price">
          <span class="discount"><s>R90</s></span> R60 (Monthly Special!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Short%20Curley%20Cut%20for%20R60.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Buzz Cut -->
    <div class="hairstyle-card">
      <img src="buzz_cut.jpg" alt="Buzz Cut" class="hairstyle-image" loading="lazy">
      <div class="hairstyle-content">
        <div class="hairstyle-name">Buzz Cut</div>
        <div class="hairstyle-price">
          <span class="discount"><s>R85</s></span> R60 (Limited Time!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Buzz%20Cut%20for%20R60.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Sleek Bob -->
    <div class="hairstyle-card">
      <img src="sleek_bob.jpg" alt="Sleek Bob" class="hairstyle-image" loading="lazy">
      <div class="hairstyle-content">
        <div class="hairstyle-name">Sleek Bob</div>
        <div class="hairstyle-price">
          <span class="discount"><s>R250</s></span> R200 (Monthly Deal!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Sleek%20Bob%20for%20R200.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
  </div>

  <!-- Featured Nail Care Section -->
  <h2>Featured Nail Care</h2>
  <div class="featured-nails">
    <!-- Classic Manicure -->
    <div class="nail-card">
      <img src="classic_manicure.jpg" alt="Classic Manicure" class="nail-image">
      <div class="nail-content">
        <div class="nail-name">Classic Manicure</div>
        <div class="nail-price">
          <span class="discount"><s>R150</s></span> R100 (Monthly Special!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Classic%20Manicure%20for%20R100.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Gel Manicure -->
    <div class="nail-card">
      <img src="gel_manicure.jpg" alt="Gel Manicure" class="nail-image">
      <div class="nail-content">
        <div class="nail-name">Gel Manicure</div>
        <div class="nail-price">
          <span class="discount"><s>R200</s></span> R120 (Limited Time!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Gel%20Manicure%20for%20R120.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Spa Pedicure -->
    <div class="nail-card">
      <img src="spa_pedicure.jpg" alt="Spa Pedicure" class="nail-image">
      <div class="nail-content">
        <div class="nail-name">Spa Pedicure</div>
        <div class="nail-price">
          <span class="discount"><s>R200</s></span> R120 (Monthly Deal!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Spa%20Pedicure%20for%20R120.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
  </div>

  <!-- Featured Spa Services Section -->
  <h2>Featured Spa Services</h2>
  <div class="featured-spa">
    <!-- Facial Treatment -->
    <div class="spa-card">
      <img src="facial_treatment.jpg" alt="Facial Treatment" class="spa-image">
      <div class="spa-content">
        <div class="spa-name">Facial Treatment</div>
        <div class="spa-price">
          <span class="discount"><s>R450</s></span> R250 (Monthly Glow)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Facial%20Treatment%20for%20R250.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Body Massage -->
    <div class="spa-card">
      <img src="body_massage.jpg" alt="Body Massage" class="spa-image">
      <div class="spa-content">
        <div class="spa-name">Body Massage</div>
        <div class="spa-price">
          <span class="discount"><s>R350</s></span> R220 (Relax & Unwind)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Body%20Massage%20for%20R220.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
    <!-- Aromatherapy -->
    <div class="spa-card">
      <img src="aromatherapy.jpg" alt="Aromatherapy" class="spa-image">
      <div class="spa-content">
        <div class="spa-name">Aromatherapy</div>
        <div class="spa-price">
          <span class="discount"><s>R600</s></span> R500 (Soothing Special)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Aromatherapy%20for%20R500.00" 
           target="_blank" class="book-now-button">
          <i class="fab fa-whatsapp"></i> Book Now
        </a>
      </div>
    </div>
  </div>

  <!-- Featured Shop Products Section -->
  <h2>Featured Shop Products</h2>
  <div class="featured-products">
    <!-- Shampoo -->
    <div class="product-card">
      <img src="luodais.jpg" alt="Shampoo" class="product-image">
      <div class="product-content">
        <div class="product-name">Luodais</div>
        <div class="product-price">
          <span class="discount"><s>R80.00</s></span> R59.90 (Limited Offer!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20Luodais%20for%20R120.00" 
           class="whatsapp-button" target="_blank">
          <i class="fab fa-whatsapp"></i> Order Now
        </a>
      </div>
    </div>
    <!-- Conditioner -->
    <div class="product-card">
      <img src="inecto.jpg" alt="Conditioner" class="product-image">
      <div class="product-content">
        <div class="product-name">Inecto - Assorted</div>
        <div class="product-price">
          <span class="discount"><s>R37.50</s></span> R29.90 (Love Your Hair!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20Inecto%20-%20assorted%20for%20R150.00" 
           class="whatsapp-button" target="_blank">
          <i class="fab fa-whatsapp"></i> Get Yours Now
        </a>
      </div>
    </div>
    <!-- Hair Oil -->
    <div class="product-card">
      <img src="luodais1.jpg" alt="Hair Oil" class="product-image">
      <div class="product-content">
        <div class="product-name">Luodais Fragrance</div>
        <div class="product-price">
          <span class="discount"><s>R80.00</s></span> R59.90 (Monthly Special!)
        </div>
        <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20Luodais%20Fragrance%20for%20R170.00" 
           class="whatsapp-button" target="_blank">
          <i class="fab fa-whatsapp"></i> Shop Now
        </a>
      </div>
    </div>
  </div>
  <div class="see-more-container">
    <a href="services.php" class="see-more-button">See More Products</a>
  </div>

  <!-- Customer Testimonials Section -->
  <h2 id="testimonials">Customer Testimonials</h2>
  <div class="testimonials-container">
    <!-- Zulu Woman -->
    <div class="testimonial-card">
      <img src="lady1.jpg" alt="Zulu Woman" class="testimonial-image">
      <div class="testimonial-content">
        <div class="testimonial-name">Naledi Mthembu</div>
        <div class="testimonial-text">
          "This product transformed my hair! I have never felt more confident and my hair feels so healthy."
        </div>
      </div>
    </div>
    <!-- Tswana Woman -->
    <div class="testimonial-card">
      <img src="lady2.jpg" alt="Tswana Woman" class="testimonial-image">
      <div class="testimonial-content">
        <div class="testimonial-name">Keletso Moiloa</div>
        <div class="testimonial-text">
          "I love the results I've seen! The products are amazing, and my hair has never looked better."
        </div>
      </div>
    </div>
    <!-- Nigerian Woman -->
    <div class="testimonial-card">
      <img src="lady3.jpg" alt="Nigerian Woman" class="testimonial-image">
      <div class="testimonial-content">
        <div class="testimonial-name">Ngozi Okafor</div>
        <div class="testimonial-text">
          "These products work wonders! My hair is so much softer, and I’m loving the results."
        </div>
      </div>
    </div>
    <!-- Zimbabwean Woman -->
    <div class="testimonial-card">
      <img src="lady4.jpg" alt="Zimbabwean Woman" class="testimonial-image">
      <div class="testimonial-content">
        <div class="testimonial-name">Tariro Moyo</div>
        <div class="testimonial-text">
          "The hair salon services here are exceptional! My hair has never looked so vibrant, and I feel truly pampered."
        </div>
      </div>
    </div>
    <!-- Venda Woman -->
    <div class="testimonial-card">
      <img src="lady5.jpg" alt="Venda Woman" class="testimonial-image">
      <div class="testimonial-content">
        <div class="testimonial-name">Vho-Mutendi Rambuwani</div>
        <div class="testimonial-text">
          "From the friendly staff to the amazing hair treatments, I always leave feeling rejuvenated and beautiful."
        </div>
      </div>
    </div>
    <!-- Malawian Woman -->
    <div class="testimonial-card">
      <img src="lady6.jpg" alt="Malawian Woman" class="testimonial-image">
      <div class="testimonial-content">
        <div class="testimonial-name">Chikondi Kadzamira</div>
        <div class="testimonial-text">
          "I can always count on the best hair care here! The services are top-notch, and my hair feels amazing every time."
        </div>
      </div>
    </div>
  </div>

  <!-- Booking Form Section (Replaced with Contact Page version) -->
  <section id="booking" style="background-color: #f8f9fa; padding: 60px 20px; font-family: 'Merriweather', serif;">
    <div style="text-align: center; margin-bottom: 40px;">
      <h2 style="font-size: 2.5rem; font-family: 'Playfair Display', serif; color: #0CC0DF;">
        Book Your Appointment
      </h2>
      <p style="font-size: 1.2rem; color: #555;">
        Secure your spot with our online booking. Please fill in the details below.
      </p>
    </div>
    <div style="max-width: 800px; margin: 0 auto; background: #ffffff; padding: 40px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
      <form action="send_booking.php" method="POST">
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
          <div style="flex: 1; min-width: 280px;">
            <label for="name" style="font-size: 1.1rem; color: #333; font-weight: bold;">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
          </div>
          <div style="flex: 1; min-width: 280px;">
            <label for="email" style="font-size: 1.1rem; color: #333; font-weight: bold;">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
          </div>
        </div>
        <div style="margin-top: 20px;">
          <label for="phone" style="font-size: 1.1rem; color: #333; font-weight: bold;">Phone Number</label>
          <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
        </div>
        <div style="margin-top: 20px;">
          <label for="service" style="font-size: 1.1rem; color: #333; font-weight: bold;">Select Service</label>
          <select id="service" name="service" required style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
            <option value="" disabled selected>Select a service</option>
            <option value="haircut">Haircut & Styling</option>
            <option value="coloring">Hair Coloring</option>
            <option value="treatment">Hair Treatment</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 20px;">
          <div style="flex: 1; min-width: 280px;">
            <label for="date" style="font-size: 1.1rem; color: #333; font-weight: bold;">Preferred Date</label>
            <input type="date" id="date" name="date" required style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
          </div>
          <div style="flex: 1; min-width: 280px;">
            <label for="time" style="font-size: 1.1rem; color: #333; font-weight: bold;">Preferred Time</label>
            <input type="time" id="time" name="time" required style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
          </div>
        </div>
        <div style="margin-top: 20px;">
          <label for="notes" style="font-size: 1.1rem; color: #333; font-weight: bold;">Additional Notes</label>
          <textarea id="notes" name="notes" placeholder="Any specific requirements or details..." rows="6" style="width: 100%; padding: 12px 15px; margin-top: 8px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;"></textarea>
        </div>
        <div style="margin-top: 30px; text-align: center;">
          <input type="submit" value="Book Appointment" style="padding: 12px 30px; background-color: #0CC0DF; color: #ffffff; font-size: 1.2rem; border: none; border-radius: 8px; cursor: pointer;">
        </div>
      </form>
    </div>
  </section>

<section class="salon-interior">
    <h2 class="salon-heading">Explore Our Stunning Salon Interior</h2>
    <p class="salon-description">
        Experience the perfect blend of style and comfort in our salon. Every detail is designed to ensure a luxurious and uplifting beauty journey.
    </p>
    <div class="salon-gallery">
        <!-- Salon Image 1 -->
        <div class="salon-image-card">
            <img src="salon_main_area.jpg" alt="Salon Main Area" class="salon-image" loading="lazy">
            <div class="salon-image-caption">Modern Styling Stations</div>
        </div>
        <!-- Salon Image 2 -->
        <div class="salon-image-card">
            <img src="salon_main_area.jpg" alt="Salon Waiting Lounge" class="salon-image" loading="lazy">
            <div class="salon-image-caption">Modern Styling Stations</div>
        </div>
    </div>
</section>

<style>
/* Styling for Salon Interior Section */
.salon-interior {
    padding: 50px 20px;
    background-color: #fdf5e6; /* Light beige background */
    text-align: center;
    color: #333; /* Dark text for contrast */
}

.salon-heading {
    font-size: 2.5rem;
    font-family: 'Playfair Display', serif;
    color: #d2691e; /* Chocolate color */
    margin-bottom: 10px;
}

.salon-description {
    font-size: 1.2rem;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 30px;
    color: #555;
}

.salon-gallery {
    display: flex;
    justify-content: center;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.salon-image-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    flex: 1 1 calc(50% - 20px);
    max-width: calc(50% - 20px);
}

.salon-image-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
}

.salon-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    aspect-ratio: 16 / 9; /* Landscape orientation */
}

.salon-image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    color: #fff; /* White text */
    font-size: 1rem;
    font-family: 'Open Sans', sans-serif;
    padding: 10px;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .salon-gallery {
        flex-direction: column;
        align-items: center;
    }

    .salon-image-card {
        max-width: 90%;
    }

    .salon-description {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .salon-heading {
        font-size: 2rem;
    }

    .salon-description {
        font-size: 0.9rem;
    }
}
</style>

<section class="spa-interior">
    <h2 class="spa-heading">Discover Our Luxurious Spa Interior</h2>
    <p class="spa-description">
        Step into an oasis of tranquility and elegance. Our spa offers a serene atmosphere where luxury and relaxation intertwine to uplift your beauty and spirit.
    </p>
    <div class="spa-gallery">
        <!-- Spa Image 1 -->
        <div class="spa-image-card">
            <img src="spa_lounge.jpg" alt="Spa Lounge" class="spa-image" loading="lazy">
            <div class="spa-image-caption">Private Treatment Rooms</div>
        </div>
        <!-- Spa Image 2 -->
        <div class="spa-image-card">
            <img src="treatment_room.png" alt="Treatment Room" class="spa-image" loading="lazy">
            <div class="spa-image-caption">Private Treatment Rooms</div>
        </div>
        <!-- Spa Image 3 
        <div class="spa-image-card">
            <img src="relaxation_zone.jpg" alt="Relaxation Zone" class="spa-image" loading="lazy">
            <div class="spa-image-caption">Relaxation Zone</div>
        </div>
       
        <div class="spa-image-card">
            <img src="spa_details.jpg" alt="Elegant Details" class="spa-image" loading="lazy">
            <div class="spa-image-caption">Elegant Interior Details</div>
        </div>       -->
    </div>
</section>

<style>
/* Styling for Spa Interior Section */
.spa-interior {
    padding: 50px 20px;
    background-color: #f9f9f9; /* Light gray background */
    text-align: center;
    color: #333; /* Dark text for readability */
}

.spa-heading {
    font-size: 2.5rem;
    font-family: 'Playfair Display', serif;
    color: #b03060; /* Medium maroon */
    margin-bottom: 10px;
}

.spa-description {
    font-size: 1.2rem;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 30px;
    color: #555;
}

.spa-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.spa-image-card {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.spa-image-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
}

.spa-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    aspect-ratio: 16 / 9; /* Wide aspect ratio for a cinematic look */
}

.spa-image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    color: #fff; /* White text */
    font-size: 1rem;
    font-family: 'Open Sans', sans-serif;
    padding: 10px;
    text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .spa-description {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .spa-heading {
        font-size: 2rem;
    }

    .spa-description {
        font-size: 0.9rem;
    }
}
</style>

<!-- Floating Buttons -->
<div class="floating-buttons">
    <!-- WhatsApp Button -->
    <a href="https://wa.me/+27710750428" class="float-btn whatsapp" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Call Button -->
    <a href="tel:+27710750428" class="float-btn call" title="Call Now">
        <i class="fas fa-phone-alt"></i>
    </a>

    <!-- Back to Top Button -->
    <button class="float-btn top" onclick="scrollToTop()" title="Back to Top">
        <i class="fas fa-arrow-up"></i>
    </button>
</div>

<style>
/* Floating Buttons Container */
.floating-buttons {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 9999;
}

/* Floating Button Styling */
.float-btn {
    width: 50px;
    height: 50px;
    background-color: #b91c1c; /* Red */
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 22px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
    border: none;
    cursor: pointer;
}

/* Hover Effects */
.float-btn:hover {
    background-color: #8b1111; /* Darker Red */
    transform: scale(1.1);
}

/* WhatsApp Button */
.whatsapp {
    background-color: #25D366;
}

/* Call Button */
.call {
    background-color: #b91c1c;
}

/* Back to Top Button */
.top {
    background-color: #333;
}

/* Responsive Adjustments */
@media (max-width: 600px) {
    .float-btn {
        width: 45px;
        height: 45px;
        font-size: 20px;
    }
}

</style>

  <!-- Floating Buttons -->
  <div class="floating-buttons">
    <a href="https://wa.me/+27710750428" class="float-btn whatsapp" target="_blank" title="Chat on WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>
    <a href="tel:+27710750428" class="float-btn call" title="Call Now">
      <i class="fas fa-phone-alt"></i>
    </a>
    <button class="float-btn top" onclick="scrollToTop()" title="Back to Top">
      <i class="fas fa-arrow-up"></i>
    </button>
  </div>
  
<style>
.floating-buttons {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  z-index: 100;
}

.float-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  color: #fff;
  font-size: 24px;
  text-decoration: none;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  transition: background-color 0.3s, transform 0.3s;
  border: none;
  cursor: pointer;
}

.float-btn:hover {
  transform: scale(1.1);
}

/* WhatsApp button styled in green */
.float-btn.whatsapp {
  background-color: #25D366;
}
.float-btn.whatsapp:hover {
  background-color: #20b858;
}

/* Call button styled in blue */
.float-btn.call {
  background-color: #007BFF;
}
.float-btn.call:hover {
  background-color: #0069d9;
}

/* Back to Top button styled in grey */
.float-btn.top {
  background-color: #6c757d;
}
.float-btn.top:hover {
  background-color: #5a6268;
}

</style>

<script>
// Function to smoothly scroll back to the top of the page
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

// Optionally, show/hide the "Back to Top" button based on the scroll position
window.addEventListener('scroll', function() {
  const topButton = document.querySelector('.float-btn.top');
  // Show button when scrolled more than 300px, hide otherwise
  if (window.scrollY > 300) {
    topButton.style.display = 'flex';
  } else {
    topButton.style.display = 'none';
  }
});

// Initially hide the "Back to Top" button until the user scrolls down
document.addEventListener('DOMContentLoaded', function() {
  const topButton = document.querySelector('.float-btn.top');
  topButton.style.display = 'none';
});
</script>

  <!-- High-End Footer -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Logo and Salon Name -->
      <div class="footer-logo">
        <img src="logo.jpg" alt="Salon Logo" class="footer-logo-image">
        <div class="footer-salon-name">Dencia| Home of beauty</div>
      </div>
      <!-- Quick Links -->
      <div class="footer-links">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="services.php">Our Services</a></li>
          <li><a href="contact.php">Booking</a></li>
          <li><a href="#testimonials">Customer Testimonials</a></li>
        </ul>
      </div>
      <!-- Contact Information -->
      <div class="footer-contact">
        <h3>Contact Us</h3>
        <p><strong>Email:</strong> info@Denciabeauty.co.za</p>
        <p><strong>Phone:</strong> +27710750428</p>
        <p><strong>Address:</strong> shop no 561 Gerrit marits Rd, Pretoria North, 0182, South Africa</p>
      </div>
      <!-- Social Media Links -->
      <div class="footer-social-media">
        <h3>Follow Us</h3>
        <ul>
          <li><a href="https://facebook.com" target="_blank"><img src="facebook-icon.png" alt="Facebook"></a></li>
          <li><a href="https://www.tiktok.com/@denciahair" target="_blank"><img src="instagram-icon.png" alt="Instagram"></a></li>
          <li><a href="https://twitter.com" target="_blank"><img src="twitter-icon.png" alt="Twitter"></a></li>
        </ul>
      </div>
      <!-- WhatsApp Chat -->
      <div class="footer-whatsapp">
        <h3>Chat with Us</h3>
        <a href="https://wa.me/27710750428" target="_blank" class="whatsapp-button">
          <img src="whatsapp-icon.png" alt="WhatsApp" class="whatsapp-icon"> Chat with Us on WhatsApp
        </a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Dencia| Home of beauty. All rights reserved.</p>
      <p>This site was developed and is maintained by Diamond Pinnacle IT Solutions.</p>
    </div>
    <script>
      const leftButton = document.querySelector('.carousel-btn.left');
      const rightButton = document.querySelector('.carousel-btn.right');
      const carouselTrack = document.querySelector('.carousel-track');
      leftButton.addEventListener('click', () => {
        carouselTrack.style.transform = 'translateX(0)';
      });
      rightButton.addEventListener('click', () => {
        carouselTrack.style.transform = 'translateX(-100%)';
      });
      let currentIndex = 0;
      const slides = document.querySelectorAll('.carousel-item');
      const totalSlides = slides.length;
      function goToNextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        const offset = -currentIndex * 100;
        carouselTrack.style.transform = `translateX(${offset}%)`;
      }
      setInterval(goToNextSlide, 3000);
      document.querySelector('.carousel-btn.left').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        const offset = -currentIndex * 100;
        carouselTrack.style.transform = `translateX(${offset}%)`;
      });
      document.querySelector('.carousel-btn.right').addEventListener('click', () => {
        goToNextSlide();
      });
    </script>
  </footer>
</body>
</html>

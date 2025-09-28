<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dencia | Home of beauty</title>
  <!-- Link to Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="logo.jpg" />
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

  <!-- Contact Section -->
  <div class="contact-section">
    <h2 class="contact-header">Contact Us</h2>
    <div class="contact-info">
      <p><strong>Phone:</strong> +27710750428</p>
      <p><strong>Email:</strong>
        <a href="mailto:steve@Denciabeauty.co.za">steve@denciabeauty.co.za</a>,
        <a href="mailto:info@Denciabeauty.co.za">info@denciabeauty.co.za</a>
      </p>
      <p><strong>Address:</strong> 561 Gerrit Maritz Rd, Pretoria North, Pretoria, 0182, South Africa</p>
    </div>
    <div class="map-container">
      <a href="https://maps.google.com" target="_blank">
        <img src="maps.jpg" alt="Map location">
        <div class="view-live-button">View Live</div>
      </a>
    </div>
  </div>

  <!-- Booking Form Section -->
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
          <input type="submit" value="Book Appointment" style="padding: 12px 30px; background-color: #0CC0DF; color: #ffffff; font-size: 1.2rem; border: none; border-radius: 8px; cursor: pointer; transition: background-color 0.3s ease;">
        </div>
      </form>
    </div>
  </section>

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
          <li><a href="#services">Our Services</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#booking">Book Appointment</a></li>
          <li><a href="#testimonials">Customer Testimonials</a></li>
        </ul>
      </div>
      <!-- Contact Information -->
      <div class="footer-contact">
        <h3>Contact Us</h3>
        <p><strong>Email:</strong> info@Denciabeauty.co.za</p>
        <p><strong>Phone:</strong> +27710750428</p>
        <p><strong>Address:</strong> 561 Gerrit Maritz Rd, Pretoria North, 0182, South Africa</p>
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
  </footer>
</body>
</html>

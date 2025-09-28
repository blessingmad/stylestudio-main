<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dencia| Home of beauty</title>
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

    <h2>Hairstyles</h2>
    <div class="featured-products">
        <!-- Classic Braids -->
        <div class="product-card">
            <img src="hairstyle1.jpg" alt="Classic Braids" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Classic Braids</div>
                <div class="product-price">
                    <span class="discount"><s>R500</s></span> R350 (Limited Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Classic%20Braids%20for%20R550.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Mohawk Braids -->
        <div class="product-card">
            <img src="hairstyle2.jpg" alt="Mohawk Braids" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Mohawk Braids</div>
                <div class="product-price">
                    <span class="discount"><s>R700</s></span> R450 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Mohawk%20Braids%20for%20R1200.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Sleek Ponytail -->
        <div class="product-card">
            <img src="hairstyle3.jpg" alt="Sleek Ponytail" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Sleek Ponytail</div>
                <div class="product-price">
                    <span class="discount"><s>R700</s></span> R450 (Limited Time)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Sleek%20Ponytail%20for%20R1200.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Knotless Braids -->
        <div class="product-card">
            <img src="hairstyle5.jpg" alt="Knotless Braids" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Knotless Braids</div>
                <div class="product-price">
                    <span class="discount"><s>R700</s></span> R450 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Knotless%20Braids%20for%20R650.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Straight-Up -->
        <div class="product-card">
            <img src="hairstyle6.jpg" alt="Straight-Up" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Straight-Up</div>
                <div class="product-price">
                    <span class="discount"><s>R500</s></span> R350 (Limited Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Straight-Up%20for%20R450.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Two-Step Hairstyle -->
        <div class="product-card">
            <img src="hairstyle4.jpg" alt="Two-Step Hairstyle" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Two-Step Hairstyle</div>
                <div class="product-price">
                    <span class="discount"><s>R750</s></span> R500 (Special Deal)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Two-Step%20Hairstyle%20for%20R950.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Twists Hairstyle -->
        <div class="product-card">
            <img src="hairstyle7.jpg" alt="Twists Hairstyle" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Twists Hairstyle</div>
                <div class="product-price">
                    <span class="discount"><s>R600</s></span> R450 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Twists%20Hairstyle%20for%20R750.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
        <!-- Short Bob -->
        <div class="product-card">
            <img src="hairstyle8.jpg" alt="Short Bob" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Short Bob</div>
                <div class="product-price">
                    <span class="discount"><s>R750</s></span> R500 (Limited Time)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Short%20Bob%20for%20R1400.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
    </div>

    <h2>Haircuts</h2>
    <div class="featured-products">
        <!-- Short Curley Cut -->
        <div class="product-card">
            <img src="haircut_men1.jpg" alt="Short Curley Cut" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Short Curley Cut</div>
                <div class="product-price">
                    <span class="discount"><s>R70.00</s></span> R60.00 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Short%20Curley%20Cut%20for%20R60.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Buzz Cut -->
        <div class="product-card">
            <img src="buzz_cut.jpg" alt="Buzz Cut" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Buzz Cut</div>
                <div class="product-price">
                    <span class="discount"><s>R70.00</s></span> R65.00 (Limited Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Buzz%20Cut%20for%20R65.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Sleek Bob -->
        <div class="product-card">
            <img src="sleek_bob.jpg" alt="Sleek Bob" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Sleek Bob</div>
                <div class="product-price">
                    <span class="discount"><s>R220.00</s></span> R200.00 (Special Deal)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Sleek%20Bob%20for%20R1100.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Undercut -->
        <div class="product-card">
            <img src="undercut.jpg" alt="Undercut" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Undercut</div>
                <div class="product-price">
                    <span class="discount"><s>R70.00</s></span> R65.00 (Limited Time)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Undercut%20for%20R65.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Textured Cut -->
        <div class="product-card">
            <img src="textured_cut.jpg" alt="Textured Cut" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Textured Cut</div>
                <div class="product-price">
                    <span class="discount"><s>R70.00</s></span> R60.00 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Textured%20Cut%20for%20R60.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>
    </div>

    <h2>Nail Care</h2>
    <div class="featured-nails">

        <!-- Classic Manicure -->
        <div class="product-card">
            <img src="classic_manicure.jpg" alt="Classic Manicure" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Classic Manicure</div>
                <div class="product-price">
                    <span class="discount"><s>R150.00</s></span> R100.00 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Classic%20Manicure%20for%20R320.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Gel Manicure -->
        <div class="product-card">
            <img src="gel_manicure.jpg" alt="Gel Manicure" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Gel Manicure</div>
                <div class="product-price">
                    <span class="discount"><s>R200.00</s></span> R120.00 (Limited Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Gel%20Manicure%20for%20R450.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Acrylic Nails -->
        <div class="product-card">
            <img src="acrylic_nails.jpg" alt="Acrylic Nails" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Acrylic Nails</div>
                <div class="product-price">
                    <span class="discount"><s>R250.00</s></span> R150.00 (Special Deal)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Acrylic%20Nails%20for%20R550.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Spa Manicure -->
        <div class="product-card">
            <img src="spa_manicure.jpg" alt="Spa Manicure" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Spa Manicure</div>
                <div class="product-price">
                    <span class="discount"><s>R200.00</s></span> R120.00 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Spa%20Manicure%20for%20R400.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Shellac Manicure -->
        <div class="product-card">
            <img src="shellac_manicure.jpg" alt="Shellac Manicure" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Shellac Manicure</div>
                <div class="product-price">
                    <span class="discount"><s>R200.00</s></span> R110.00 (Limited Time Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Shellac%20Manicure%20for%20R500.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Luxury Manicure -->
        <div class="product-card">
            <img src="luxury_manicure.jpg" alt="Luxury Manicure" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Luxury Manicure</div>
                <div class="product-price">
                    <span class="discount"><s>R280.00</s></span> R150.00 (Pampering Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Luxury%20Manicure%20for%20R750.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

    </div>

    <h2>Spa Services</h2>
    <div class="featured-products">

        <!-- Facial Treatment -->
        <div class="product-card">
            <img src="facial_treatment.jpg" alt="Facial Treatment" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Facial Treatment</div>
                <div class="product-price">
                    <span class="discount"><s>R250.00</s></span> R150.00 (Glow Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Facial%20Treatment%20for%20R700.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Body Massage -->
        <div class="product-card">
            <img src="body_massage.jpg" alt="Body Massage" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Body Massage</div>
                <div class="product-price">
                    <span class="discount"><s>R350.00</s></span> R250.00 (Relaxation Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Body%20Massage%20for%20R900.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Aromatherapy -->
        <div class="product-card">
            <img src="aromatherapy.jpg" alt="Aromatherapy" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Aromatherapy</div>
                <div class="product-price">
                    <span class="discount"><s>R500.00</s></span> R350.00 (Bliss Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20Aromatherapy%20for%20R550.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Hot Stone Massage -->
        <div class="product-card">
            <img src="hot_stone_massage.jpg" alt="Hot Stone Massage" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Hot Stone Massage</div>
                <div class="product-price">
                    <span class="discount"><s>R650.00</s></span> R450.00 (Cozy Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Hot%20Stone%20Massage%20for%20R1050.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Thai Massage -->
        <div class="product-card">
            <img src="thai_massage.jpg" alt="Thai Massage" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Thai Massage</div>
                <div class="product-price">
                    <span class="discount"><s>R650.00</s></span> R450.00 (Relaxation Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Thai%20Massage%20for%20R900.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

        <!-- Couples Massage -->
        <div class="product-card">
            <img src="couples_massage.jpg" alt="Couples Massage" class="product-image" loading="lazy">
            <div class="product-content">
                <div class="product-name">Couples Massage</div>
                <div class="product-price">
                    <span class="discount"><s>R550.00</s></span> R400.00 (Celebrate Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20book%20a%20Couples%20Massage%20for%20R1400.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Book on WhatsApp
                </a>
            </div>
        </div>

    </div>

    <h2>Shop Products</h2>
    <div class="featured-products">
        <!-- Shampoo -->
        <div class="product-card">
            <img src="luodais.jpg" alt="Shampoo" class="product-image">
            <div class="product-content">
                <div class="product-name">Luodais</div>
                <div class="product-price">
                    <span class="discount"><s>R80.00</s></span> R59.90 (Limited Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20Luodais%20for%20R120.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp fa-beat"></i> Order Now!
                </a>
            </div>
        </div>

        <!-- Conditioner -->
        <div class="product-card">
            <img src="inecto.jpg" alt="Conditioner" class="product-image">
            <div class="product-content">
                <div class="product-name">Inecto - Assorted</div>
                <div class="product-price">
                    <span class="discount"><s>R37.50</s></span> R29.90 (Great for Your Hair)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20Inecto%20-%20assorted%20for%20R150.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp fa-shake"></i> Get Yours Now!
                </a>
            </div>
        </div>

        <!-- Hair Oil -->
        <div class="product-card">
            <img src="luodais1.jpg" alt="Hair Oil" class="product-image">
            <div class="product-content">
                <div class="product-name">Luodais Fragrance</div>
                <div class="product-price">
                    <span class="discount"><s>R80.00</s></span> R59.90 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20Luodais%20Fragrance%20for%20R170.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp fa-bounce"></i> Shop Now!
                </a>
            </div>
        </div>
    </div>

    <h2>Shop Wigs</h2>
    <div class="featured-products">
        <!-- Elegant Bob Cut Wig -->
        <div class="product-card">
            <img src="elegant-bob.jpg" alt="Elegant Bob Cut Wig" class="product-image">
            <div class="product-content">
                <div class="product-name">Elegant Bob Cut Wig</div>
                <div class="product-price">
                    <span class="discount"><s>R950.00</s></span> R750.00 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20the%20Elegant%20Bob%20Cut%20Wig%20for%20R850.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Order on WhatsApp
                </a>
            </div>
        </div>

        <!-- Long Layered Wig -->
        <div class="product-card">
            <img src="long-layered.jpg" alt="Long Layered Wig" class="product-image">
            <div class="product-content">
                <div class="product-name">Long Layered Wig</div>
                <div class="product-price">
                    <span class="discount"><s>R1150.00</s></span> R900.00 (Style Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20the%20Long%20Layered%20Wig%20for%20R1000.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Order on WhatsApp
                </a>
            </div>
        </div>

        <!-- Curly Pixie Wig -->
        <div class="product-card">
            <img src="curly-pixie.jpg" alt="Curly Pixie Wig" class="product-image">
            <div class="product-content">
                <div class="product-name">Curly Pixie Wig</div>
                <div class="product-price">
                    <span class="discount"><s>R1020.00</s></span> R750.00 (Special Offer)
                </div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20the%20Curly%20Pixie%20Wig%20for%20R1100.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Order on WhatsApp
                </a>
            </div>
        </div>

        <!-- Sleek Straight Wig -->
        <div class="product-card">
            <img src="sleek-straight.jpg" alt="Sleek Straight Wig" class="product-image">
            <div class="product-content">
                <div class="product-name">Sleek Straight Wig</div>
                <div class="product-price">Price: R500.00</div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20the%20Sleek%20Straight%20Wig%20for%20R400.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Order on WhatsApp
                </a>
            </div>
        </div>

        <!-- Beach Waves Wig -->
        <div class="product-card">
            <img src="beach-waves.jpg" alt="Beach Waves Wig" class="product-image">
            <div class="product-content">
                <div class="product-name">Beach Waves Wig</div>
                <div class="product-price">Price: R1500.00</div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20the%20Beach%20Waves%20Wig%20for%20R370.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Order on WhatsApp
                </a>
            </div>
        </div>

        <!-- Classic Afro Wig -->
        <div class="product-card">
            <img src="classic-afro.jpg" alt="Classic Afro Wig" class="product-image">
            <div class="product-content">
                <div class="product-name">Body Weave Wig</div>
                <div class="product-price">Price: R1200.00</div>
                <a href="https://wa.me/27710750428?text=I%20would%20like%20to%20order%20the%20Classic%20Afro%20Wig%20for%20R380.00" 
                   class="whatsapp-button" target="_blank">
                    <i class="fab fa-whatsapp whatsapp-icon"></i> Order on WhatsApp
                </a>
            </div>
        </div>
    </div>

    <style>
        /* Additional styling if needed for neutral theme */
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
            <p>&copy; 2024 Dencia| Home of beauty. All rights reserved.</p>
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
        </script>

        <script>
            let currentIndex = 0;  // Track the current slide
            const slides = document.querySelectorAll('.carousel-item');  // All slides in the carousel
            const track = document.querySelector('.carousel-track');  // The carousel container

            const totalSlides = slides.length;

            // Function to move to the next slide
            function goToNextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;  // Loop back to the first slide
                const offset = -currentIndex * 100;  // Calculate the offset for the new slide
                track.style.transform = `translateX(${offset}%)`;  // Apply the translation
            }

            // Initialize the carousel to change slides every 3 seconds
            setInterval(goToNextSlide, 3000);  // 3 seconds

            // Optional: Add functionality for previous/next buttons (left/right)
            document.querySelector('.carousel-btn.left').addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                const offset = -currentIndex * 100;
                track.style.transform = `translateX(${offset}%)`;
            });

            document.querySelector('.carousel-btn.right').addEventListener('click', () => {
                goToNextSlide();  // Use the same function for the right button
            });
        </script>
    </footer>
</body>

</html>

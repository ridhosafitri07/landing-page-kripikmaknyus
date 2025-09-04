<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kripik Pisang Maknyuss | UMKM Camilan Premium</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-brown: #8B4513;
            --secondary-brown: #A0522D;
            --light-brown: #D2B48C;
            --cream: #F5F1E8;
            --light-cream: #FAF7F0;
            --gold: #FFD700;
            --dark-text: #2C1810;
            --shadow: rgba(139, 69, 19, 0.1);
            --shadow-hover: rgba(139, 69, 19, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-cream);
            color: var(--dark-text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary-brown) 0%, var(--secondary-brown) 100%);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px var(--shadow);
        }

        .header.scrolled {
            background: rgba(139, 69, 19, 0.95);
            backdrop-filter: blur(15px);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        .logo i {
            color: var(--gold);
            font-size: 2rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gold);
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after,
        .nav-menu a.active::after {
            width: 100%;
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, var(--cream) 0%, #E8DCC0 100%);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="%23D2B48C" opacity="0.1"/><circle cx="80" cy="40" r="1.5" fill="%23A0522D" opacity="0.1"/><circle cx="40" cy="80" r="1" fill="%23D2B48C" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
            opacity: 0.3;
            z-index: 1;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-content {
            animation: slideInLeft 1s ease-out;
        }

        .hero-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content .highlight {
            color: var(--gold);
            position: relative;
        }

        .hero-content .highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--gold), transparent);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            color: var(--secondary-brown);
            line-height: 1.8;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
        }

        .cta-primary, .cta-secondary {
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .cta-primary {
            background: linear-gradient(135deg, var(--primary-brown), var(--secondary-brown));
            color: white;
            box-shadow: 0 8px 25px var(--shadow);
        }

        .cta-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px var(--shadow-hover);
        }

        .cta-secondary {
            background: transparent;
            color: var(--primary-brown);
            border: 2px solid var(--primary-brown);
        }

        .cta-secondary:hover {
            background: var(--primary-brown);
            color: white;
            transform: translateY(-2px);
        }

        .hero-visual {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            animation: slideInRight 1s ease-out;
        }

        .hero-image {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, var(--light-brown), #E6D3A3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 60px var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .hero-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(255, 215, 0, 0.1), transparent);
            animation: rotate 20s linear infinite;
        }

        .hero-image i {
            font-size: 8rem;
            color: var(--primary-brown);
            opacity: 0.8;
            z-index: 1;
        }

        /* Floating elements */
        .floating-element {
            position: absolute;
            opacity: 0.6;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            right: 10%;
            font-size: 2rem;
            color: var(--gold);
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            bottom: 20%;
            left: 10%;
            font-size: 1.5rem;
            color: var(--light-brown);
            animation-delay: 2s;
        }

        /* Sejarah Section */
        .sejarah-section {
            padding: 6rem 2rem;
            background: var(--secondary-brown);
            position: relative;
        }

        .sejarah-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .sejarah-content {
            color: white;
        }

        .sejarah-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--gold);
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        .sejarah-content p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .sejarah-image {
            background: var(--light-brown);
            border-radius: 20px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 25px 50px var(--shadow);
        }

        .sejarah-image i {
            font-size: 5rem;
            color: var(--primary-brown);
        }

        /* Products Section */
        .products-section {
            padding: 6rem 2rem;
            background: var(--light-cream);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            color: var(--primary-brown);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--secondary-brown);
            max-width: 600px;
            margin: 0 auto;
        }

        .products-grid {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .product-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 35px var(--shadow);
            transition: all 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px var(--shadow-hover);
        }

        .product-image {
            height: 280px;
            background: linear-gradient(135deg, var(--light-brown), #E6D3A3);
            position: relative;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--gold);
            color: var(--primary-brown);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(255, 215, 0, 0.3);
        }

        .product-info {
            padding: 2rem;
        }

        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--primary-brown);
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .product-description {
            color: var(--secondary-brown);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-brown);
            margin-bottom: 1.5rem;
        }

        .product-features {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .feature-tag {
            background: var(--cream);
            color: var(--primary-brown);
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .order-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-brown), var(--secondary-brown));
            color: white;
            border: none;
            padding: 15px;
            border-radius: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }

        .order-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px var(--shadow);
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, var(--primary-brown) 0%, var(--secondary-brown) 100%);
            color: white;
            padding: 4rem 2rem 2rem;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--gold);
            margin-bottom: 1.5rem;
        }

        .footer-section p, .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 1.8;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--gold);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-link {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            color: white;
            text-decoration: none;
        }

        .social-link:hover {
            background: var(--gold);
            color: var(--primary-brown);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.6);
        }

        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
            }

            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-image {
                width: 300px;
                height: 300px;
            }

            .sejarah-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2.2rem;
            }
        }

        /* Scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        /* Loading animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-leaf"></i>
                Kripik Pisang Maknyuss
            </a>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#hero" class="nav-link active">Beranda</a></li>
                    <li><a href="#produk-original" class="nav-link">Produk Original</a></li>
                    <li><a href="#produk-lain" class="nav-link">Camilan Lain</a></li>
                    <li><a href="#tentang" class="nav-link">Tentang</a></li>
                </ul>
            </nav>
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1>
                    Lezatnya<br>
                    <span class="highlight">Kripik Pisang</span><br>
                    Maknyuss
                </h1>
                <p>
                    Nikmati sensasi kriuk dan rasa yang menggoda, langsung dari UMKM lokal terbaik.
                    Dibuat dengan bahan pilihan dan proses tradisional yang higienis.
                </p>
                <div class="cta-buttons">
                    <a href="#produk-original" class="cta-primary">
                        <i class="fas fa-shopping-bag"></i>
                        Lihat Produk
                    </a>
                    <a href="https://wa.me/62895378213230" class="cta-secondary">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image">
                    <img src="assets/depan.png">
                </div>
            </div>
        </div>
        <div class="floating-element">
            <i class="fas fa-star"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-heart"></i>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section class="sejarah-section">
        <div class="sejarah-container">
            <div class="sejarah-content animate-on-scroll">
                <h2>Sejarah</h2>
                <p>
                    Keripik Nusantara telah menjadi bagian dari tradisi kuliner Indonesia selama bertahun-tahun.
                    Kami menghadirkan cita rasa autentik dengan menggunakan bahan-bahan pilihan terbaik dan proses pengolahan yang higienis.
                </p>
                <p>
                    Setiap gigitan keripik kami menghadirkan kelezatan yang tak terlupakan, mulai dari keripik pisang
                    dengan berbagai varian rasa hingga keripik talas yang gurih dan renyah.
                </p>
            </div>
            <div class="sejarah-image animate-on-scroll">
                <i class="fas fa-leaf"></i>
            </div>
        </div>
    </section>

    <!-- Products Original Section -->
    <section id="produk-original" class="products-section">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Produk Original</h2>
            <p class="section-subtitle">
                Kami sajikan kripik pisang dengan rasa autentik pilihan
            </p>
        </div>

        <div class="products-grid">
            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/manis.jpg" alt="Kripik Pisang Manis">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Manis</h3>
                    <p class="product-description">Manis alami dari pisang pilihan.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Pisang Manis%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/asin_fix.jpg" alt="Kripik Pisang Asin">
                    <div class="product-badge">Terlaris</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Asin</h3>
                    <p class="product-description">Gurih asin yang bikin nagih.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Pisang Asin%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/coklat.jpg" alt="Kripik Pisang Cokelat">
                    <div class="product-badge">Premium</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Cokelat</h3>
                    <p class="product-description">Kripik pisang dibalut coklat.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Pisang Cokelat%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/balado.jpg" alt="Kripik Pisang Balado">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Balado</h3>
                    <p class="product-description">Bumbu baladonya bikin beda.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Pisang Balado%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/kripik-talas.jpg" alt="Kripik Talas">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Talas</h3>
                    <p class="product-description">Renyaaan talas pilihan.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Talas%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/kripik-sukun.jpg" alt="Kripik Sukun">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Sukun</h3>
                    <p class="product-description">Nikmatnya sukun yang garing.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Sukun%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Products Section -->
    <section id="produk-lain" class="products-section">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Camilan Lain</h2>
            <p class="section-subtitle">
                Varian camilan gurih dan renyah lainnya
            </p>
        </div>

        <div class="products-grid">
            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/basreng.jpg" alt="Basreng">
                    <div class="product-badge">Hot</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Basreng</h3>
                    <p class="product-description">Baso goreng renyah pedas.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Basreng%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/kripca.jpg" alt="Kripik Kaca">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Kaca</h3>
                    <p class="product-description">Tipis, garing, dan pedas.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Kripik Kaca%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/kerupuk_seblak.jpg" alt="Krupuk Seblak">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Krupuk Seblak</h3>
                    <p class="product-description">Krupuk pedas khas seblak.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Krupuk Seblak%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/sus_kering.jpg" alt="Sus Kering">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Sus Kering</h3>
                    <p class="product-description">Seblak instan siap makan.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Sus Kering%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/makaroni.jpg" alt="Makaroni Pedas">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Makaroni Pedas</h3>
                    <p class="product-description">Makaroni kering bumbu pedas.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Makaroni Pedas%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/emping_jagung.jpg" alt="Emping Jagung">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Emping Jagung</h3>
                    <p class="product-description">Kripik Jagung renyah.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Emping Jagung%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/sus_coklat.jpg" alt="Sus Coklat">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Sus Coklat</h3>
                    <p class="product-description">Sus coklat lumer.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Sus Coklat%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/basreng_gapedes.jpg" alt="Basreng Ori">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Basreng Ori</h3>
                    <p class="product-description">Basreng renyah rasa tidak pedas.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Basreng Ori%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="assets/potato_panjang.jpg" alt="Potato Panjang">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Potato Panjang</h3>
                    <p class="product-description">Potato panjang gurih.</p>
                    <a href="https://wa.me/62895378213230?text=Saya ingin memesan%0A%0ANama:%0AAlamat:%0ANama Produk: Potato Panjang%0AJumlah:%0AMetode (Ambil Sendiri / Antar oleh Penjual):" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>UMKM Kripik Pisang Maknyuss menghadirkan camilan khas dengan cita rasa autentik dan kualitas terbaik.</p>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/62895378213230" class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Hubungi Kami</h3>
                <p>WhatsApp: 0831-0777-2136</p>
                <p>Email: info@maknyuss.com</p>
            </div>
            <div class="footer-section">
                <h3>Ikuti Kami</h3>
                <p>Dapatkan update terbaru tentang produk dan promo menarik dari kami.</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Kripik Pisang Maknyuss. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                // Add active class to clicked link
                this.classList.add('active');

                // Smooth scroll to target
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Active navigation based on scroll position
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');

            let currentSection = '';

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 120;
                const sectionHeight = section.offsetHeight;

                if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                    currentSection = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + currentSection) {
                    link.classList.add('active');
                }
            });
        });

        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Order button loading effect
        document.querySelectorAll('.order-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const originalContent = this.innerHTML;
                this.innerHTML = '<div class="loading"></div> Menghubungkan...';
                this.style.pointerEvents = 'none';

                setTimeout(() => {
                    this.innerHTML = originalContent;
                    this.style.pointerEvents = 'auto';
                }, 2000);
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroImage = document.querySelector('.hero-image');
            if (heroImage) {
                heroImage.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
    </script>
</body>
</html>

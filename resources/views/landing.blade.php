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

        /* Featured Section */
        .featured {
            padding: 6rem 2rem;
            background: white;
            position: relative;
        }

        .featured::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--light-brown), transparent);
        }

        .featured-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .featured-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--primary-brown);
            margin-bottom: 2rem;
            line-height: 1.3;
        }

        .featured-content p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: var(--secondary-brown);
            line-height: 1.8;
        }

        .featured-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: var(--cream);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-brown);
            display: block;
        }

        .stat-label {
            color: var(--secondary-brown);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .featured-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px var(--shadow);
        }

        .featured-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .featured-image:hover img {
            transform: scale(1.1);
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

        /* Process Section */
        .process-section {
            padding: 6rem 2rem;
            background: white;
        }

        .process-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .process-step {
            text-align: center;
            padding: 2rem;
            border-radius: 20px;
            background: var(--light-cream);
            transition: transform 0.3s ease;
            position: relative;
        }

        .process-step:hover {
            transform: translateY(-5px);
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-brown), var(--secondary-brown));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1.5rem;
        }

        .step-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary-brown);
            margin-bottom: 1rem;
        }

        .step-description {
            color: var(--secondary-brown);
            line-height: 1.6;
        }

        /* About Section */
        .about-section {
            padding: 6rem 2rem;
            background: var(--cream);
        }

        .about-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .about-content h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--primary-brown);
            margin-bottom: 2rem;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--secondary-brown);
            margin-bottom: 2rem;
        }

        .about-features {
            list-style: none;
        }

        .about-features li {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .about-features i {
            color: var(--gold);
            font-size: 1.2rem;
            width: 20px;
        }

        .about-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px var(--shadow);
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

            .featured-container,
            .about-container {
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

            .process-steps {
                grid-template-columns: 1fr;
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
                    <li><a href="#proses" class="nav-link">Proses</a></li>
                    <li><a href="#produk-lain" class="nav-link">Produk Lain</a></li>
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
                    Nikmati Kelezatan<br>
                    <span class="highlight">Kripik Pisang</span><br>
                    Premium
                </h1>
                <p>
                    Dibuat dengan bahan pilihan terbaik dan proses tradisional yang higienis. 
                    Setiap gigitan menghadirkan kerenyahan sempurna dan cita rasa autentik 
                    yang tak terlupakan.
                </p>
                <div class="cta-buttons">
                    <a href="#produk-original" class="cta-primary">
                        <i class="fas fa-shopping-bag"></i>
                        Lihat Produk
                    </a>
                    <a href="https://wa.me/6283107772136" class="cta-secondary">
                        <i class="fab fa-whatsapp"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-image">
                    <i class="fas fa-cookie-bite"></i>
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

    <!-- Featured Section -->
    <section class="featured">
        <div class="featured-container">
            <div class="featured-content animate-on-scroll">
                <h2>Tradisi Rasa yang Autentik</h2>
                <p>
                    Sejak tahun 2018, kami telah menghadirkan kripik pisang berkualitas premium 
                    dengan mempertahankan resep tradisional yang diwariskan turun temurun.
                </p>
                <p>
                    Setiap produk kami dibuat dengan penuh cinta dan kehati-hatian, menggunakan 
                    pisang pilihan yang matang sempurna dan bumbu rahasia keluarga.
                </p>
                <div class="featured-stats">
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Pelanggan Puas</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15+</span>
                        <span class="stat-label">Varian Rasa</span>
                    </div>
                </div>
            </div>
            <div class="featured-image animate-on-scroll">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Pisang Premium">
            </div>
        </div>
    </section>

    <!-- Products Original Section -->
    <section id="produk-original" class="products-section">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Produk Original Kami</h2>
            <p class="section-subtitle">
                Koleksi kripik pisang premium dengan berbagai varian rasa yang menggugah selera
            </p>
        </div>

        <div class="products-grid">
            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Pisang Manis">
                    <div class="product-badge">Terlaris</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Asin</h3>
                    <p class="product-description">Gurih asin yang bikin nagih, cocok sebagai teman santai atau camilan sehat.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <div class="product-features">
                        <span class="feature-tag">Gurih</span>
                        <span class="feature-tag">Rendah Lemak</span>
                        <span class="feature-tag">Krispy</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Kripik%20Pisang%20Asin" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1511381939415-e44015466834?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Pisang Cokelat">
                    <div class="product-badge">Premium</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Cokelat</h3>
                    <p class="product-description">Perpaduan sempurna pisang renyah dengan lapisan cokelat premium yang meleleh di mulut.</p>
                    <div class="product-price">Rp 75.000/kg</div>
                    <div class="product-features">
                        <span class="feature-tag">Cokelat Premium</span>
                        <span class="feature-tag">Manis</span>
                        <span class="feature-tag">Limited</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Kripik%20Pisang%20Cokelat" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ca4b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Pisang Balado">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Pisang Balado</h3>
                    <p class="product-description">Sensasi pedas manis bumbu balado yang khas, memberikan pengalaman rasa yang unik.</p>
                    <div class="product-price">Rp 65.000/kg</div>
                    <div class="product-features">
                        <span class="feature-tag">Pedas Manis</span>
                        <span class="feature-tag">Bumbu Tradisional</span>
                        <span class="feature-tag">Spicy</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Kripik%20Pisang%20Balado" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1582450871667-5d5876cbcb6d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Talas">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Talas</h3>
                    <p class="product-description">Kripik talas pilihan dengan tekstur renyah yang khas dan rasa gurih yang otentik.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <div class="product-features">
                        <span class="feature-tag">Talas Pilihan</span>
                        <span class="feature-tag">Renyah</span>
                        <span class="feature-tag">Organik</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Kripik%20Talas" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Sukun">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Sukun</h3>
                    <p class="product-description">Nikmatnya sukun yang diolah menjadi kripik garing dengan cita rasa yang menggugah selera.</p>
                    <div class="product-price">Rp 60.000/kg</div>
                    <div class="product-features">
                        <span class="feature-tag">Sukun Fresh</span>
                        <span class="feature-tag">Garing</span>
                        <span class="feature-tag">Natural</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Kripik%20Sukun" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="proses" class="process-section">
        <div class="process-container">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Proses Produksi Berkualitas</h2>
                <p class="section-subtitle">
                    Setiap tahap produksi dilakukan dengan standar kebersihan tinggi dan kontrol kualitas ketat
                </p>
            </div>

            <div class="process-steps">
                <div class="process-step animate-on-scroll">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Pemilihan Bahan</h3>
                    <p class="step-description">
                        Memilih pisang, talas, dan sukun yang matang sempurna dengan kualitas terbaik dari petani lokal terpercaya.
                    </p>
                </div>

                <div class="process-step animate-on-scroll">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Persiapan & Pencucian</h3>
                    <p class="step-description">
                        Membersihkan dan mempersiapkan bahan dengan standar kebersihan tinggi menggunakan air bersih dan peralatan steril.
                    </p>
                </div>

                <div class="process-step animate-on-scroll">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Pemotongan Presisi</h3>
                    <p class="step-description">
                        Memotong bahan dengan ketebalan yang konsisten menggunakan alat pemotong khusus untuk hasil yang optimal.
                    </p>
                </div>

                <div class="process-step animate-on-scroll">
                    <div class="step-number">4</div>
                    <h3 class="step-title">Penggorengan Tradisional</h3>
                    <p class="step-description">
                        Menggoreng dengan minyak berkualitas tinggi pada suhu yang tepat untuk menghasilkan tekstur renyah sempurna.
                    </p>
                </div>

                <div class="process-step animate-on-scroll">
                    <div class="step-number">5</div>
                    <h3 class="step-title">Pembumbuan Premium</h3>
                    <p class="step-description">
                        Menambahkan bumbu dan rasa menggunakan resep rahasia keluarga yang telah teruji selama bertahun-tahun.
                    </p>
                </div>

                <div class="process-step animate-on-scroll">
                    <div class="step-number">6</div>
                    <h3 class="step-title">Pengemasan Higienis</h3>
                    <p class="step-description">
                        Mengemas produk dalam kemasan food grade yang kedap udara untuk menjaga kesegaran dan kualitas.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Products Section -->
    <section id="produk-lain" class="products-section">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Camilan Spesial Lainnya</h2>
            <p class="section-subtitle">
                Beragam pilihan camilan gurih dan renyah untuk melengkapi koleksi snack favorit Anda
            </p>
        </div>

        <div class="products-grid">
            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1599490659213-e2b9527bd087?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Basreng">
                    <div class="product-badge">Hot</div>
                </div>
                <div class="product-info">
                    <h3 class="product-name">Basreng Premium</h3>
                    <p class="product-description">Baso goreng renyah dengan bumbu pedas yang menggigit, cocok untuk pecinta makanan pedas.</p>
                    <div class="product-features">
                        <span class="feature-tag">Extra Pedas</span>
                        <span class="feature-tag">Renyah</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Basreng%20Premium" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1606787564060-b2f2f7351c8e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Kripik Kaca">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Kripik Kaca</h3>
                    <p class="product-description">Kripik tipis transparan dengan rasa pedas manis yang unik dan tekstur yang renyah.</p>
                    <div class="product-features">
                        <span class="feature-tag">Tipis</span>
                        <span class="feature-tag">Pedas Manis</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Kripik%20Kaca" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1621939514649-280e2ee25f60?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Krupuk Seblak">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Krupuk Seblak</h3>
                    <p class="product-description">Krupuk dengan cita rasa khas seblak yang pedas dan gurih, mengingatkan pada street food favorit.</p>
                    <div class="product-features">
                        <span class="feature-tag">Rasa Seblak</span>
                        <span class="feature-tag">Gurih Pedas</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Krupuk%20Seblak" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Seblak Kering">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Seblak Kering</h3>
                    <p class="product-description">Seblak instan siap makan dengan bumbu pedas yang autentik dan tekstur kenyal yang pas.</p>
                    <div class="product-features">
                        <span class="feature-tag">Instan</span>
                        <span class="feature-tag">Pedas Otentik</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Seblak%20Kering" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Makaroni Pedas">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Makaroni Pedas</h3>
                    <p class="product-description">Makaroni kering dengan bumbu pedas yang meresap sempurna, camilan favorit anak dan dewasa.</p>
                    <div class="product-features">
                        <span class="feature-tag">Bumbu Meresap</span>
                        <span class="feature-tag">Family Favorite</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Makaroni%20Pedas" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>

            <div class="product-card animate-on-scroll">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1606787564060-b2f2f7351c8e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Keripik Singkong">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Keripik Singkong</h3>
                    <p class="product-description">Singkong renyah dengan bumbu balado yang pedas dan gurih, camilan tradisional yang tak lekang waktu.</p>
                    <div class="product-features">
                        <span class="feature-tag">Tradisional</span>
                        <span class="feature-tag">Balado</span>
                    </div>
                    <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20Keripik%20Singkong" class="order-btn">
                        <i class="fab fa-whatsapp"></i>
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="about-section">
        <div class="about-container">
            <div class="about-content animate-on-scroll">
                <h2>Tentang Kripik Pisang Maknyuss</h2>
                <p class="about-text">
                    Didirikan sejak 2018, Kripik Pisang Maknyuss telah menjadi pilihan utama untuk camilan premium 
                    berkualitas tinggi. Kami berkomitmen untuk menghadirkan produk terbaik dengan mempertahankan 
                    cita rasa autentik dan standar kualitas yang tinggi.
                </p>
                <p class="about-text">
                    Dengan menggunakan bahan-bahan pilihan dari petani lokal dan proses produksi yang higienis, 
                    setiap produk kami dibuat dengan penuh dedikasi untuk kepuasan pelanggan.
                </p>
                <ul class="about-features">
                    <li><i class="fas fa-check-circle"></i> Bahan baku pilihan berkualitas premium</li>
                    <li><i class="fas fa-check-circle"></i> Proses produksi higienis dan modern</li>
                    <li><i class="fas fa-check-circle"></i> Tanpa pengawet berbahaya</li>
                    <li><i class="fas fa-check-circle"></i> Kemasan food grade yang aman</li>
                    <li><i class="fas fa-check-circle"></i> Rasa autentik dengan resep turun temurun</li>
                    <li><i class="fas fa-check-circle"></i> Harga terjangkau untuk kualitas premium</li>
                </ul>
            </div>
            <div class="about-image animate-on-scroll">
                <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tim Kripik Pisang Maknyuss">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Kripik Pisang Maknyuss</h3>
                <p>
                    UMKM terpercaya yang menghadirkan camilan premium dengan cita rasa autentik 
                    dan kualitas terbaik untuk keluarga Indonesia.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/6283107772136" class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Produk Kami</h3>
                <p><a href="#produk-original">Kripik Pisang Original</a></p>
                <p><a href="#produk-original">Kripik Talas & Sukun</a></p>
                <p><a href="#produk-lain">Camilan Spesial</a></p>
                <p><a href="#produk-lain">Paket Hemat</a></p>
            </div>
            <div class="footer-section">
                <h3>Hubungi Kami</h3>
                <p><i class="fas fa-phone"></i> WhatsApp: 083107772136</p>
                <p><i class="fas fa-envelope"></i> Email: info@kripikpisangmaknyuss.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Godean, Yogyakarta, Indonesia</p>
                <p><i class="fas fa-clock"></i> Senin - Sabtu: 08:00 - 17:00</p>
            </div>
            <div class="footer-section">
                <h3>Informasi</h3>
                <p><a href="#tentang">Tentang Kami</a></p>
                <p><a href="#proses">Proses Produksi</a></p>
                <p><a href="#">Cara Pemesanan</a></p>
                <p><a href="#">Syarat & Ketentuan</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Kripik Pisang Maknyuss. Semua Hak Dilindungi. | Dibuat dengan ❤️ untuk UMKM Indonesia</p>
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

        // Mobile menu toggle (for future enhancement)
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

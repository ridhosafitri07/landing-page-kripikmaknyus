<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keripik Nusantara - UMKM Keripik Terbaik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f1e8 0%, #ede4d3 100%);
            color: #5d4e37;
            line-height: 1.6;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #8b4513 0%, #a0522d 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: #ffd700;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        .nav-menu a:hover {
            color: #ffd700;
        }

        .cart-icon {
            position: relative;
            cursor: pointer;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .cart-icon:hover {
            color: #ffd700;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff4444;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(139, 69, 19, 0.9), rgba(160, 82, 45, 0.9)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23deb887" width="1200" height="600"/><circle cx="200" cy="150" r="80" fill="%23cd853f" opacity="0.3"/><circle cx="800" cy="400" r="100" fill="%23d2b48c" opacity="0.4"/><circle cx="1000" cy="200" r="60" fill="%23f4a460" opacity="0.3"/></svg>');
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background-size: cover;
            background-position: center;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #8b4513;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
        }

        /* Main Content */
        .main-content {
            margin-top: 80px;
            padding: 4rem 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Featured Section */
        .featured {
            background: linear-gradient(135deg, #8b4513 0%, #a0522d 100%);
            color: white;
            padding: 4rem 2rem;
            border-radius: 20px;
            margin: 2rem auto;
            max-width: 1200px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .featured-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .featured-text h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #ffd700;
        }

        .featured-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .featured-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .featured-image img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .featured-image:hover img {
            transform: scale(1.05);
        }

        /* Products Section */
        .products-section {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: #8b4513;
            margin-bottom: 0.5rem;
        }

        .section-title p {
            font-size: 1.1rem;
            color: #a0522d;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: all 0.3s;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .product-image {
            height: 250px;
            background: linear-gradient(45deg, #deb887, #d2b48c);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image i {
            font-size: 4rem;
            color: #8b4513;
            opacity: 0.7;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-info h3 {
            font-size: 1.3rem;
            color: #8b4513;
            margin-bottom: 0.5rem;
        }

        .product-info p {
            color: #a0522d;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }

        .product-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #d2691e;
            margin-bottom: 1rem;
        }

        .product-variants {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .variant-tag {
            background: #f5f1e8;
            color: #8b4513;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            border: 1px solid #deb887;
        }

        .add-to-cart {
            background: linear-gradient(45deg, #8b4513, #a0522d);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .add-to-cart:hover {
            background: linear-gradient(45deg, #a0522d, #8b4513);
            transform: translateY(-1px);
        }

        .best-seller {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ffd700;
            color: #8b4513;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* About Section */
        .about-section {
            background: white;
            padding: 4rem 2rem;
            border-radius: 20px;
            margin: 2rem 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.2rem;
            color: #8b4513;
            margin-bottom: 1rem;
        }

        .about-features {
            list-style: none;
            margin-top: 1.5rem;
        }

        .about-features li {
            padding: 0.5rem 0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .about-features i {
            color: #ffd700;
            width: 20px;
        }

        /* Footer */
        .footer {
            background: linear-gradient(135deg, #8b4513 0%, #a0522d 100%);
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: #ffd700;
            margin-bottom: 1rem;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #ffd700;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background: #ffd700;
            color: #8b4513;
            transform: translateY(-2px);
        }

        /* Cart Modal */
        .cart-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 2000;
        }

        .cart-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 20px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .close-cart {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #8b4513;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }

        .cart-total {
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 2px solid #8b4513;
            text-align: center;
        }

        .checkout-btn {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #8b4513;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 1rem;
            transition: all 0.3s;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .featured-content,
            .about-content {
                grid-template-columns: 1fr;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .hero-content p {
                font-size: 1rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .product-card:nth-child(2) { animation-delay: 0.1s; }
        .product-card:nth-child(3) { animation-delay: 0.2s; }
        .product-card:nth-child(4) { animation-delay: 0.3s; }
        .product-card:nth-child(5) { animation-delay: 0.4s; }
        .product-card:nth-child(6) { animation-delay: 0.5s; }
        .product-card:nth-child(7) { animation-delay: 0.6s; }
        .product-card:nth-child(8) { animation-delay: 0.7s; }
        .product-card:nth-child(9) { animation-delay: 0.8s; }

        /* Loading Animation */
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
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <i class="fas fa-seedling"></i>
                Keripik Nusantara
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
            <div class="cart-icon" onclick="toggleCart()">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cartCount">0</span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Keripik Nusantara</h1>
            <p>Cita Rasa Tradisional, Kualitas Premium</p>
            <a href="#products" class="cta-button">
                <i class="fas fa-arrow-down"></i> Lihat Produk
            </a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Featured Section -->
        <section class="featured">
            <div class="featured-content">
                <div class="featured-text">
                    <h2>Sejarah</h2>
                    <p>Keripik Nusantara telah menjadi bagian dari tradisi kuliner Indonesia selama bertahun-tahun. Kami menghadirkan cita rasa autentik dengan menggunakan bahan-bahan pilihan terbaik dan proses pengolahan yang higienis.</p>
                    <p>Setiap gigitan keripik kami menghadirkan kelezatan yang tak terlupakan, mulai dari keripik pisang dengan berbagai varian rasa hingga keripik talas yang gurih dan renyah.</p>
                </div>
                <div class="featured-image">
                    <div style="width: 100%; height: 300px; background: linear-gradient(45deg, #deb887, #d2b48c); display: flex; align-items: center; justify-content: center; border-radius: 15px;">
                        <i class="fas fa-leaf" style="font-size: 5rem; color: #8b4513; opacity: 0.7;"></i>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="products-section">
            <div class="container">
                <div class="section-title">
                    <h2>Produk</h2>
                    <p>Nikmati berbagai pilihan keripik berkualitas premium</p>
                </div>
                
                <div class="products-grid">
                    <!-- Keripik Pisang Manis -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-cookie"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Pisang Manis</h3>
                            <p>Keripik pisang dengan rasa manis yang lezat, dibuat dari pisang raja pilihan</p>
                            <div class="product-variants">
                                <span class="variant-tag">Manis</span>
                                <span class="variant-tag">Renyah</span>
                            </div>
                            <div class="product-price">Rp 15.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Pisang Manis', 15000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                        <div class="best-seller">Terlaris</div>
                    </div>

                    <!-- Keripik Pisang Asin -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-cookie-bite"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Pisang Asin</h3>
                            <p>Keripik pisang asin yang gurih dan renyah, cocok untuk camilan sehat</p>
                            <div class="product-variants">
                                <span class="variant-tag">Asin</span>
                                <span class="variant-tag">Gurih</span>
                            </div>
                            <div class="product-price">Rp 15.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Pisang Asin', 15000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Pisang Coklat -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-candy-cane"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Pisang Coklat</h3>
                            <p>Keripik pisang dengan lapisan coklat premium yang menggugah selera</p>
                            <div class="product-variants">
                                <span class="variant-tag">Coklat</span>
                                <span class="variant-tag">Premium</span>
                            </div>
                            <div class="product-price">Rp 18.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Pisang Coklat', 18000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Talas -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-carrot"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Talas</h3>
                            <p>Keripik talas segar dengan cita rasa unik dan tekstur yang renyah</p>
                            <div class="product-variants">
                                <span class="variant-tag">Talas</span>
                                <span class="variant-tag">Sehat</span>
                            </div>
                            <div class="product-price">Rp 16.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Talas', 16000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Singkong -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Singkong</h3>
                            <p>Keripik singkong tradisional dengan bumbu rahasia yang menggoda</p>
                            <div class="product-variants">
                                <span class="variant-tag">Tradisional</span>
                                <span class="variant-tag">Pedas</span>
                            </div>
                            <div class="product-price">Rp 14.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Singkong', 14000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Ubi -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Ubi Ungu</h3>
                            <p>Keripik ubi ungu yang kaya antioksidan dan memiliki warna menarik</p>
                            <div class="product-variants">
                                <span class="variant-tag">Ubi Ungu</span>
                                <span class="variant-tag">Antioksidan</span>
                            </div>
                            <div class="product-price">Rp 17.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Ubi Ungu', 17000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Nangka -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-lemon"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Nangka</h3>
                            <p>Keripik nangka dengan aroma yang harum dan rasa yang unik</p>
                            <div class="product-variants">
                                <span class="variant-tag">Nangka</span>
                                <span class="variant-tag">Harum</span>
                            </div>
                            <div class="product-price">Rp 19.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Nangka', 19000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Bayam -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Bayam</h3>
                            <p>Keripik bayam yang sehat dan bergizi tinggi untuk camilan sehat</p>
                            <div class="product-variants">
                                <span class="variant-tag">Bayam</span>
                                <span class="variant-tag">Sehat</span>
                            </div>
                            <div class="product-price">Rp 20.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Bayam', 20000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>

                    <!-- Keripik Jamur -->
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-mushroom"></i>
                        </div>
                        <div class="product-info">
                            <h3>Keripik Jamur</h3>
                            <p>Keripik jamur tiram yang renyah dengan cita rasa yang lezat</p>
                            <div class="product-variants">
                                <span class="variant-tag">Jamur</span>
                                <span class="variant-tag">Protein</span>
                            </div>
                            <div class="product-price">Rp 22.000</div>
                            <button class="add-to-cart" onclick="addToCart('Keripik Jamur', 22000)">
                                <i class="fas fa-shopping-cart"></i>
                                Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>Tentang Kami</h2>
                        <p>Keripik Nusantara adalah UMKM yang berkomitmen menghadirkan keripik berkualitas tinggi dengan cita rasa autentik Indonesia. Kami menggunakan bahan-bahan segar pilihan dan proses produksi yang higienis.</p>
                        <ul class="about-features">
                            <li><i class="fas fa-check"></i> Bahan-bahan segar dan berkualitas</li>
                            <li><i class="fas fa-check"></i> Proses produksi yang higienis</li>
                            <li><i class="fas fa-check"></i>
{{-- resources/views/landing.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kripik Pisang Maknyuss</title>
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
            background-image: url('{{ asset('assets/bg.png') }}');
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #8b4513;
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

    {{-- Header --}}
    <header class="header">
        <div class="nav-container">
            <div class="logo"><i class="fas fa-leaf"></i> Kripik Pisang Maknyuss</div>
            <ul class="nav-menu">
                <li><a href="#original">Produk Original</a></li>
                <li><a href="#proses">Proses Produksi</a></li>
                <li><a href="#lainnya">Camilan Lain</a></li>
            </ul>
        </div>
    </header>

    {{-- Hero --}}
    <section class="hero">
        <div class="hero-content">
            <h1>Lezatnya Kripik Pisang Maknyuss</h1>
            <p>Nikmati sensasi kriuk dan rasa yang menggoda, langsung dari UMKM lokal terbaik.</p>
            <a href="#original" class="cta-button">Lihat Produk</a>
        </div>
    </section>

    <main class="main-content">
        <div class="container">

            <!-- Tentang Kami -->
            <section id="sejarah" style="padding: 50px 0; background-color: #A0522D; border-radius: 20px; box-shadow: 0 6px 15px rgba(0,0,0,0.15); display: flex; flex-direction: column; justify-content: center;">
                <div style="max-width: 1100px; margin: auto; display: flex; gap: 40px; align-items: stretch; flex-wrap: wrap;">

                    <!-- Kotak teks -->
                    <div style="flex: 1; min-width: 320px; background-color: #A0522D; color: white; padding: 40px; display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="color: #FFD700; font-size: 28px; font-weight: bold; margin-bottom: 20px;">Sejarah</h2>
                        <p style="line-height: 1.6; margin-bottom: 15px;">
                            Keripik Nusantara telah menjadi bagian dari tradisi kuliner Indonesia selama bertahun-tahun.
                            Kami menghadirkan cita rasa autentik dengan menggunakan bahan-bahan pilihan terbaik dan proses pengolahan yang higienis.
                        </p>
                        <p style="line-height: 1.6;">
                            Setiap gigitan keripik kami menghadirkan kelezatan yang tak terlupakan, mulai dari keripik pisang
                            dengan berbagai varian rasa hingga keripik talas yang gurih dan renyah.
                        </p>
                    </div>

                    <!-- Kotak gambar -->
                    <div style="flex: 1; min-width: 320px; background-color: #D2A679; border-radius: 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 6px 15px rgba(0,0,0,0.15);">
                        <img src="https://img.icons8.com/ios-filled/100/8b4513/leaf.png" alt="Ikon Daun" style="width: 80px; height: auto;">
                    </div>

                </div>
            </section>


            {{-- Produk Original --}}
            <section id="original" class="products-section">
                <div class="section-title">
                    <h2>Produk Original</h2>
                    <p>Kami sajikan kripik pisang dengan rasa autentik pilihan</p>
                </div>

                <div class="products-grid">
                    @php
                        $produkOriginal = [
                            ['nama' => 'Kripik Pisang Manis','harga' => '60.000/kg', 'deskripsi' => 'Manis alami dari pisang pilihan.', 'gambar' => 'kripik-manis.jpg'],
                            ['nama' => 'Kripik Pisang Asin', 'harga' => '60.000/kg', 'deskripsi' => 'Gurih asin yang bikin nagih.', 'gambar' => 'kripik-asin.jpg'],
                            ['nama' => 'Kripik Pisang Cokelat', 'harga' => '60.000/kg', 'deskripsi' => 'Kripik pisang dibalut coklat.', 'gambar' => 'kripik-cokelat.jpg'],
                            ['nama' => 'Kripik Pisang Balado', 'harga' => '60.000/kg', 'deskripsi' => 'Bumbu baladonya bikin beda.', 'gambar' => 'kripik-balado.jpg'],
                            ['nama' => 'Kripik Talas', 'harga' => '60.000/kg', 'deskripsi' => 'Renyaaan talas pilihan.', 'gambar' => 'kripik-talas.jpg'],
                            ['nama' => 'Kripik Sukun', 'harga' => '60.000/kg', 'deskripsi' => 'Nikmatnya sukun yang garing.', 'gambar' => 'kripik-sukun.jpg'],
                        ];
                    @endphp

                    @foreach ($produkOriginal as $produk)
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/'.$produk['gambar']) }}" alt="{{ $produk['nama'] }}" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="product-info">
                            <h3>{{ $produk['nama'] }}</h3>
                            <p>{{ $produk['deskripsi'] }}</p>
                            <a href="https://wa.me/6283107772136?text=Halo%20saya%20mau%20pesan%20{{ urlencode($produk['nama']) }}" target="_blank" class="add-to-cart">
                                <i class="fab fa-whatsapp"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <!-- Proses Produksi -->
            <section id="proses" style="padding: 40px 0;">
                <h2 style="text-align: center;">Proses Produksi Kami</h2>
                <div style="
                    display: flex;
                    gap: 0;
                    border: 8px solid #e2c78f; /* warna frame */
                    box-shadow: 4px 4px 8px rgba(0,0,0,0.2);
                    margin-top: 20px;
                ">
                    <img src="{{ asset('assets/mentah.jpg') }}" style="width: 20%; height: auto;">
                    <img src="{{ asset('assets/goreng.jpg') }}" style="width: 20%; height: auto;">
                    <img src="{{ asset('assets/mateng.jpg') }}" style="width: 20%; height: auto;">
                    <img src="{{ asset('assets/mateng.jpg') }}" style="width: 20%; height: auto;">
                    <img src="{{ asset('assets/mateng.jpg') }}" style="width: 20%; height: auto;">
                </div>
            </section>


            {{-- Produk Camilan Lain --}}
            <section id="lainnya" class="products-section">
                <div class="section-title">
                    <h2>Camilan Lain</h2>
                    <p>Varian camilan gurih dan renyah lainnya</p>
                </div>

                <div class="products-grid">
                    @php
                        $produkLain = [
                            ['nama' => 'Basreng', 'deskripsi' => 'Baso goreng renyah pedas.', 'gambar' => 'basreng.jpg'],
                            ['nama' => 'Kripik Kaca', 'deskripsi' => 'Tipis, garing, dan pedas.', 'gambar' => 'kripik-kaca.jpg'],
                            ['nama' => 'Krupuk Seblak', 'deskripsi' => 'Krupuk pedas khas seblak.', 'gambar' => 'krupuk-seblak.jpg'],
                            ['nama' => 'Seblak Kering', 'deskripsi' => 'Seblak instan siap makan.', 'gambar' => 'seblak-kering.jpg'],
                            ['nama' => 'Makaroni Pedas', 'deskripsi' => 'Makaroni kering bumbu pedas.', 'gambar' => 'makaroni-pedas.jpg'],
                            ['nama' => 'Keripik Singkong', 'deskripsi' => 'Singkong renyah bumbu balado.', 'gambar' => 'kripik-singkong.jpg'],
                            ['nama' => 'Kacang Bawang', 'deskripsi' => 'Kacang goreng bawang gurih.', 'gambar' => 'kacang-bawang.jpg'],
                            ['nama' => 'Pilus Pedas', 'deskripsi' => 'Pilus renyah rasa pedas.', 'gambar' => 'pilus-pedas.jpg'],
                            ['nama' => 'Kerupuk Kulit', 'deskripsi' => 'Kerupuk kulit sapi gurih.', 'gambar' => 'kerupuk-kulit.jpg'],
                        ];
                    @endphp

                    @foreach ($produkLain as $produk)
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/'.$produk['gambar']) }}" alt="{{ $produk['nama'] }}" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="product-info">
                            <h3>{{ $produk['nama'] }}</h3>
                            <p>{{ $produk['deskripsi'] }}</p>
                            <a href="https://wa.me/6281234567890?text=Halo%20saya%20mau%20pesan%20{{ urlencode($produk['nama']) }}" target="_blank" class="add-to-cart">
                                <i class="fab fa-whatsapp"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Tentang Kami</h3>
                <p>UMKM Kripik Pisang Maknyuss menghadirkan camilan khas dengan cita rasa autentik dan kualitas terbaik.</p>
            </div>
            <div class="footer-section">
                <h3>Hubungi Kami</h3>
                <p>WhatsApp: 0812-3456-7890</p>
                <p>Email: info@maknyuss.com</p>
            </div>
            <div class="footer-section">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <p>&copy; 2025 Kripik Pisang Maknyuss. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>

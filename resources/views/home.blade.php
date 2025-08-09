@extends('app')

@section('title', 'Beranda - Keripik Nusantara')

@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>Keripik Nusantara</h1>
        <p>Cita Rasa Tradisional, Kualitas Premium</p>
        <a href="{{ route('products') }}" class="cta-button">
            <i class="fas fa-arrow-down"></i> Lihat Produk
        </a>
    </div>
</section>

<div class="main-content">
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
                <h2>Produk Unggulan</h2>
                <p>Nikmati berbagai pilihan keripik berkualitas premium</p>
            </div>
            
            <div class="products-grid">
                @forelse($allProducts as $product)
                <div class="product-card">
                    <div class="product-image">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        @else
                            <i class="fas fa-cookie"></i>
                        @endif
                    </div>
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        @if($product->variants)
                        <div class="product-variants">
                            @foreach($product->variants as $variant)
                            <span class="variant-tag">{{ $variant }}</span>
                            @endforeach
                        </div>
                        @endif
                        <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        <button class="add-to-cart" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }})">
                            <i class="fas fa-shopping-cart"></i>
                            Tambah ke Keranjang
                        </button>
                    </div>
                    @if($product->is_bestseller)
                    <div class="best-seller">Terlaris</div>
                    @endif
                </div>
                @empty
                <p>Produk belum tersedia.</p>
                @endforelse
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('products') }}" class="cta-button">
                    <i class="fas fa-eye"></i> Lihat Semua Produk
                </a>
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
                        <li><i class="fas fa-check"></i> Rasa autentik Indonesia</li>
                        <li><i class="fas fa-check"></i> Kemasan yang menarik dan tahan lama</li>
                        <li><i class="fas fa-check"></i> Harga terjangkau untuk semua kalangan</li>
                    </ul>
                </div>
                <div class="about-image">
                    <div style="width: 100%; height: 300px; background: linear-gradient(45deg, #ffd700, #ffed4e); display: flex; align-items: center; justify-content: center; border-radius: 15px;">
                        <i class="fas fa-award" style="font-size: 5rem; color: #8b4513; opacity: 0.7;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
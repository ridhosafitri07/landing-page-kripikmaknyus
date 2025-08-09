@extends('app')

@section('title', 'Produk - Keripik Nusantara')

@section('content')
<div class="main-content" style="margin-top: 100px;">
    <section class="products-section">
        <div class="container">
            <div class="section-title">
                <h2>Semua Produk</h2>
                <p>Koleksi lengkap keripik berkualitas premium</p>
            </div>
            
            <div class="products-grid">
                @forelse($products as $product)
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
                <div style="text-align: center; padding: 3rem;">
                    <h3>Produk belum tersedia</h3>
                    <p>Silakan cek kembali nanti atau hubungi kami untuk informasi lebih lanjut.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</div>
@endsection
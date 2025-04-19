<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk - {{ $product['name'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $product['name'] }}</h1>
        <p>Harga: Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
        <p>{{ $product['description'] }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
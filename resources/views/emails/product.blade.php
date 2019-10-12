<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        Hello <strong>{{ $name }}</strong>,

        <p>Kopi Azzahrah Punya Product baru Nih Namanya {{$productName}} hanya Dengan Harga {{$productPrice}} Kamu Udah Bisa NIkamtin Menu Baru kami Loh Yuk Di Cek Di :</p>
        <a href="{{ route('front.product.page') }}" class="btn btn-primary">Liat Product</a>
</body>
</html>
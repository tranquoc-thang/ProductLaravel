<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="style/product_style.css">
</head>
<body>
    <div class="container-fluid">
        <h1 class="banner">ĐIỆN MÁY ABC</h1>
        <nav class="justify-content-center navbar navbar-expand-sm bg-dark navbar-dark">
          <a class="navbar-brand" href="{{route('home')}}">Trang chủ</a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('prodadd')}}">Thêm sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('prodlist')}}">Danh mục sản phẩm</a>
            </li>
          </ul>
        </nav>
        @yield('content')
        <p class="footer">Copyright @php echo date('m/y'); @endphp</p>
    </div>
</body>
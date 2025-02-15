<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Welcome {{ $name }} to my website!</h1>

            <nav>
                @if (!is_logged())
                <a class="btn btn-primary" href="{{ url('auth/login') }}">Login</a>
                @endif

                @if (is_logged())
                <a class="btn btn-danger" href="{{ url('auth/logout') }}">Logout</a>
                @endif
            </nav>

        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IMG THUMBNAIL</th>
                    <th>NAME</th>
                    <th>Category Name</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
            <tbody>

                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>
                        <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">
                    </td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['c_name'] }}</td>
                    <td>{{ $product['created_at'] }}</td>
                    <td>{{ $product['updated_at'] }}</td>
                    <td>
                        <a href="{{ url("admin/products/{$product['id']}/show") }}" class="btn btn-info">Xem</a>
                    </td>
                </tr>

            </tbody>
            </tbody>
        </table>
    </div>


</body>

</html>
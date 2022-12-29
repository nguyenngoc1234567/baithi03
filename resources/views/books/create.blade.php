<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<div class="container">

    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên sách</label>
            <input type="text" name="name" class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label class="form-label">Mã sách</label>
            <input type="text" name="code" class="form-control">
        </div>
        @error('code')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label class="form-label">Loại sách</label>
            <input type="text" name="category"  class="form-control">
        </div>
        @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <select name="author" id="">
                <option name="author">Nguyễn Ngọc Thạch</option>
                <option name="author">Nguyễn Nhật Ánh</option>
                <option name="author">Du Phong</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Số Trang</label>
            <input type="text" name="pages" class="form-control">
        </div>
        @error('pages')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label class="form-label">Năm sản xuất</label>
            <input type="text" name="year" class="form-control">
        </div>
        @error('year')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('books.index') }}" class="btn btn-success">Back</a>
    </form>
</div>

</body>

</html>

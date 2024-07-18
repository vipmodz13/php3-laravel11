<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Views</title>
    @vite(['resources/sass/app.scss', 'resource/js/app.js'])
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css"> -->
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    </head>
<body>
    <section class="py-5">
        
        <div class="container mt-5">

            <h1 class="mb-4">Danh sách bài viết <b class="text-danger">{{$category->name}}</b></h1>
            <div id="search" class="my-5">
                <form action="{{ url('new/search') }}" method="get">
                    <div class="row">
                        <div class="col-10">
                        <input type="hidden" name="category" value="{{$category->id}}">
                        <input type="text" class="form-control shadow-sm border" placeholder="Nhập từ khóa cần tìm kiếm" name="key" value="{{ isset($key) ? $key : '' }}">
                        </div>
                        <div class="col-2">
                        <button type="submit" class="btn btn-success" >Tìm kiếm </button>
                        </div>
                    </div>
                </form>
            </div>
        @if (count($news) > 0)
        <table id="table" class="table table-bordered shadow-sm border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Views</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->content }}</td>
                        <td>{{ $new->view }}</td>
                        <td><img src="{{ $new->img }}" alt="Image" style="width: 100px;"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else

        <h3>Không tìm thấy bài viết</h3>

        @endif
    </div>
    </section>



    <!-- jQuery (nếu chưa có) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</body>
</html>

<script>
    new DataTable('#table');
</script>


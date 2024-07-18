<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Views</title>
    @vite(['resources/sass/app.scss', 'resource/js/app.js'])
    </head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Top 10 News by Views</h1>
        <table class="table table-bordered">
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
                @foreach ($topView as $news)
                    <tr>
                        <td>{{ $news->id }}</td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->content }}</td>
                        <td>{{ $news->view }}</td>
                        <td><img src="{{ $news->img }}" alt="Image" style="width: 100px;"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

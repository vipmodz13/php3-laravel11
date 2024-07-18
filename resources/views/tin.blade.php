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
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->content }}</td>
                        <td>{{ $new->view }}</td>
                        <td><img src="{{ $new->img }}" alt="Image" style="width: 100px;"></td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

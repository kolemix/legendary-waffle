<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Movies</title>
</head>
<body>

<h2>Top 10 phim có doanh thu cao nhất</h2>

@foreach($movies as $movie)
    <p>
        <strong>Tên phim:</strong> {{ $movie->movie_name }} <br>
        <strong>Ngày phát hành:</strong> {{ $movie->release_date }} <br>
        <strong>Doanh thu:</strong> {{ number_format($movie->budget) }} <br>
    </p>
    <hr>
@endforeach

</body>
</html>
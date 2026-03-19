<!DOCTYPE html>
<html>
<head>
    <title>Top 10 phim điểm cao nhất</title>
</head>
<body>
    <h1>Top 10 phim có điểm bình chọn cao nhất</h1>
    @foreach($movies as $m)
        <p>{{ $m->movie_name }} - {{ $m->release_date }} - {{ $m->vote_average }}</p>
    @endforeach
</body>
</html>
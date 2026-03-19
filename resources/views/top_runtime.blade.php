<!DOCTYPE html>
<html>
<head>
    <title>Top 10 phim thời lượng > 120 phút</title>
</head>
<body>
    <h1>Top 10 phim có thời lượng lớn hơn 120 phút</h1>
    @foreach($movies as $m)
        <p>{{ $m->movie_name }} - {{ $m->release_date }} - {{ $m->runtime }}</p>
    @endforeach
</body>
</html>
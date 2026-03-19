<h1>Danh sách thể loại phim</h1>

@foreach($data as $item)
    <p>{{ $item->genre_name }} - {{ $item->genre_name_vn }}</p>
@endforeach
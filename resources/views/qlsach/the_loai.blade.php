<html>
<head>
    <title>Thể Loại Sách</title>
</head>
<body>
    <h2>Danh Sách Thể Loại Sách</h2>
    @foreach($the_loai_sach as $row)
        Mã thể loại: {{$row->id}}, Tên thể loại: {{$row->ten_the_loai}}<br>
    @endforeach
</body>
</html>

<html>
<head>
    <title>Thông Tin Sách</title>
</head>
<body>
    <h2>Sách của NXB Văn Học</h2>
    @foreach($sach as $row)
        Tiêu đề: {{$row->tieu_de}}, Tác giả: {{$row->tac_gia}}<br>
    @endforeach
</body>
</html>

<html>
<head>
    <title>Tác Phẩm Kinh Điển</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        img { width: 60px; height: auto; }
        tr:nth-child(even) { background-color: #fafafa; }
    </style>
</head>
<body>
    <h2>Danh Sách Tác Phẩm Kinh Điển</h2>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Giá bán</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sach as $i => $row)
            <tr>
                <td>{{$i + 1}}</td>
                <td>
                    @if($row->link_anh_bia)
                        <img src="{{$row->link_anh_bia}}" alt="{{$row->tieu_de}}"
                             onerror="this.style.display='none'">
                    @endif
                </td>
                <td>{{$row->tieu_de}}</td>
                <td>{{$row->tac_gia}}</td>
                <td>{{$row->nha_xuat_ban}}</td>
                <td>{{number_format($row->gia_ban, 0, ',', '.')}} ₫</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku - SIB NFacademy</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .navbar {
            background-color: #2c3e50;
            padding: 15px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar h2 {
            margin: 0;
            font-size: 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
            font-size: 14px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        .page-header h3 {
            margin: 0;
            color: #2c3e50;
        }
        .btn {
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            color: white;
            font-size: 14px;
            display: inline-block;
            text-align: center;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #ecf0f1;
            color: #2c3e50;
        }
        tr:nth-child(even) {
            background-color: #fcfcfc;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .text-muted {
            color: #7f8c8d;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <div class="page-header">
            <h3>Daftar Buku Manga</h3>
        </div>

        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Sampul</th>
                    <th>Judul Buku</th>
                    <th>Genre</th>
                    <th>Penulis (Author)</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    
                    <td style="text-align: center;">
                        @if($book->cover_photo)
                            <span class="text-muted">[{{ $book->cover_photo }}]</span>
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>

                    <td>
                        <strong>{{ $book->title }}</strong><br>
                        <small style="color: #666;">{{ $book->description }}</small>
                    </td>

                    <td>{{ $book->genre ? $book->genre->name : '-' }}</td>
                    <td>{{ $book->author ? $book->author->name : 'Tidak diketahui' }}</td>
                    
                    <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
                    
                    <td>{{ $book->stock }} pcs</td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>
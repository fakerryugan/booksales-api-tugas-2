<!DOCTYPE html>
<html>
<head>
    <title>Daftar Author</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Data Author</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Photo (Filename)</th>
            <th>Bio</th>
        </tr>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author['id'] }}</td>
            <td>{{ $author['name'] }}</td>
            <td>{{ $author['photo'] }}</td>
            <td>{{ $author['bio'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Genre</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Data Genre</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['name'] }}</td>
            <td>{{ $genre['description'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
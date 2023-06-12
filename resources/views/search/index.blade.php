<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        } */
        
        .search{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            margin-top: 12vh
        }
        
        .search input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .search button[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        
        .search button[type="submit"]:hover {
            background-color: #0056b3;
            
        }
    </style>
</head>
<body>
    <header>
        @include('navbar.navbar')
    </header>
    <form action="{{ route('search.results') }}" method="GET" class="search">
        <input type="text" name="query" placeholder="Cari pengguna atau postingan...">
        <button type="submit">Cari</button>
    </form>
</body>
</html>

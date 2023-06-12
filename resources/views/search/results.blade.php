<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hasil pencarian</title>
    <style>
        .container h1 {
            color: #333;
            text-align: center;
        }
        
        .container h2 {
            color: #555;
            margin-top: 30px;
        }
        
        .container p {
            color: #777;
        }
        
        .container ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        .container li {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }
        
        .container input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .container button[type="submit"] {
            padding: 8px 16px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .container button[type="submit"]:hover {
            background-color: #0056b3;
        }
        
        .container {
            margin-left: 20vh;
            margin-top: 5vh;
            margin-right: 20vh;
        }
        
        .profile-pic {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .user-name {
            text-align: left;
        }
      a{
            text-decoration: none;
            color: #333
        }
    </style>
</head>
<body>
    <header>
        @include('navbar.navbar')
    </header>
    @include('search.index')
    <div class="container">
        <h1>hasil pencarian</h1>

        <h2>Users</h2>
        @if($users->isEmpty())
            <p>No users found.</p>
        @else
            <ul>
                @foreach($users as $user)
                <a href="/profile/{{ $user->username }}">  <li>
                        @if (isset($user->foto))
                            <img class="profile-pic" src="{{ asset($user->foto) }}" alt="Gambar">
                        @else
                         <img class="profile-pic" src="data:image/jpeg;base64,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" alt="">
            
                        @endif
                        <span class="user-name">{{ $user->name }}</span>
                    </li></a>
                @endforeach
            </ul>
        @endif

        <h2>Postingan</h2>
        @if($posts->isEmpty())
            <p>No posts found.</p>
        @else
            <ul>
                @foreach($posts as $post)
                    <li>{{ $post->isi }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>

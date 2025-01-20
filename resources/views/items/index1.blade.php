

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Items</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            /* background-color: hidden; */
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background-color: hidden;
            border-radius: 0px;
            padding: 20px;
            margin-bottom: 20px;
            /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        }
        h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }
        p {
            margin-top: 0;
            margin-bottom: 10px;
            color: #555;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .no-results {
            text-align: center;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">

        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Search execises..." value="{{ request('query') }}">
            <button type="submit">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149852.png" alt="Search Icon" width="20">
            </button>
        </form>

        @if(!empty($items))
            <ul>
                @foreach($items as $item)
                    <li>
                        <h2>{{ $item['name'] }}</h2>
                        <p>{{ $item['description'] }}</p>
                        <img src="{{ $item['photo'] }}" alt="{{ $item['name'] }}">
                        <p>Target Muscle: {{ $item['targetMuscle'] }}</p>
                        <a href="{{ $item['videoLink'] }}" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube Icon" width="50"></a>

                    </li>
                @endforeach
            </ul>
        @else
            <script>console.log('No items found');</script>
        @endif
    </div>
</body>
</html>
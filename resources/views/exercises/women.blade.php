<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women Exercises</title>
</head>
<body>
    <h1>Women Exercises</h1>
    <ul>
        @foreach ($exercises as $exercise)
            <li>
                <strong>{{ $exercise['name'] }}</strong>
                <img src="{{ $exercise['gifUrl'] }}" alt="{{ $exercise['name'] }}">
                <p>{{ $exercise['bodyPart'] }} - {{ $exercise['target'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>


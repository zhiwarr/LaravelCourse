<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{ "this is a blade format" }}
    @php
    $foods = ['pizza','shawrma','chesse'];
    $color = 'red';
    @endphp
    <ul>
        @foreach ($foods as $food)
        <li>
            {{ $food }}
        </li>
        @endforeach
    </ul>
    @if ($color == 'red')
    <h1 style="color: red;">This is a red text</h1>
    @elseif($color == 'green')
    <h1 style="color: green;">This is a green text</h1>
    @else
    <h1>This is a default text</h1>
    @endif
</body>

</html>

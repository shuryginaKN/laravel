<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/style.css">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $content }}</p>

    {{-- Задание 10.2 --}}
    {{-- @foreach ($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a><br>
    @endforeach --}}

    <table>
        <tr>
            <th>№</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Статус</th>
        </tr>
        @foreach ($users as $key => $user)
            <tr class = "@if ($user['banned'])
            banned
            @else
            active
            @endif">
                <td>{{ $key + 1 }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname']  }}</td>
                @if ( $user['banned'] )
                    <td>забанен</td>
                @else
                    <td>активен</td>
                @endif
            </tr>
        @endforeach
    </table>

</body>
</html>

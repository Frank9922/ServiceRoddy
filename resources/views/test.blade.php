<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Test de datos relacionados!</h1>
    <div>
        @forelse ($marcas as $item)
            <h2>{{ $item->name }}</h2>
            @forelse ($item->models as $item)
                <ul>
                    <li> {{ $item->name }} </li>
                </ul>
            @empty

            @endforelse
        @empty

        @endforelse
    </div>
</body>
</html>

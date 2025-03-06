<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo</title>
    <link rel='stylesheet' href="{{asset('css/videojuegos/create.css')}}" type='text/css'>
</head>
<body>
    <header>
        <h1>Crear nuevo producto</h1>
    </header>
    
    <main>
        <form action="{{route('videojuegos.store')}}" method="post">

            @csrf

            <article>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Introducir título">
            </article>
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror

            <article>
                <label for="consola">Consola: </label>
                <input type="text" name="consola" id="consola" value="{{old('consola')}}" placeholder="Introducir consola">
            </article>
            @error('consola')
                <div class="error">{{ $message }}</div>
            @enderror

            <article>
                <label for="precio">Precio: </label>
                <input type="number" name="precio" id="precio" value="{{old('precio')}}" step="0.01" placeholder="Introducir precio">
            </article>
            @error('precio')
                <div class="error">{{ $message }}</div>
            @enderror

            <input class="crear" type="submit" value="CREAR">
        </form>
    </main>
    
    <footer>
        <a class="volver" href="{{route('videojuegos.index')}}">VOLVER</a>
    </footer>
</body>
</html>
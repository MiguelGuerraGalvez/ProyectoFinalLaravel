<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel='stylesheet' href="{{asset('css/videojuegos/edit.css')}}" type='text/css'>
</head>
<body>
    <header>
        <h1>Editar un producto</h1>
    </header>
    
    <main>
        <form action="{{route('videojuegos.update', $videojuego)}}" method="post">

            @csrf

            @method('put')

            <article>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre" value="{{old('nombre', $videojuego->nombre)}}" placeholder="Introducir título">
            </article>
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror

            <article>
                <label for="consola">Consola: </label>
                <input type="text" name="consola" id="consola" value="{{old('consola', $videojuego->consola)}}" placeholder="Introducir consola">
            </article>
            @error('consola')
                <div class="error">{{ $message }}</div>
            @enderror

            <article>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" step="0.01" value="{{old('precio', $videojuego->precio)}}" placeholder="Introducir precio">
            </article>
            @error('precio')
                <div class="error">{{ $message }}</div>
            @enderror

            <input class="editar" type="submit" value="EDITAR">
        </form>
    </main>
    
    <footer>
        <a class="volver" href="{{route('videojuegos.index')}}">VOLVER</a>
    </footer>
</body>
</html>
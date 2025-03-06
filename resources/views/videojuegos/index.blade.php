<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link rel='stylesheet' href="{{asset('css/videojuegos/index.css')}}" type='text/css'>
</head>
<body>
    <header>
        <h1>Catálogo de videojuegos</h1>
    </header>

    <div>
        <a class="crear" href="{{route('videojuegos.create')}}">Crear Nuevo</a>
    </div>

    <main>

        <table border="0">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CONSOLA</th>
                <th>PRECIO</th>
                <th colspan="3">ACCIONES</th>
            </tr>
                @foreach ($videojuegos as $videojuego)
                    <tr>
                        <td><?=$videojuego->id?></td>
                        <td><?=$videojuego->nombre?></td>
                        <td><?=$videojuego->consola?></td>
                        <td><?=$videojuego->precio?></td>
                        <td>
                            <a class="editar" href="{{route('videojuegos.edit', $videojuego)}}">EDITAR</a>
                        </td>
                        <td>
                            <a class="eliminar" href="{{route('videojuegos.delete', $videojuego)}}">ELIMINAR</a>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="submit" value="">
                            </form>
                        </td>
                    </tr>
                @endforeach
        </table>

        {{$videojuegos->links()}}

        <div class="divCerrar">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link class="cerrar" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('CERRAR SESIÓN') }}
                </x-dropdown-link>
            </form>
        </div>
        
    </main>
</body>
</html>
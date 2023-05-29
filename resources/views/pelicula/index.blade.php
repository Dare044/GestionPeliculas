<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        
        nav ul li {
            margin-right: 10px;
        }
        
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
            border-radius: 3px;
        }
        
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        h1 {
            margin-top: 0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .actions {
            display: flex;
            gap: 8px;
        }
        
        .actions a {
            padding: 6px 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }
        
        .actions form {
            margin: 0;
        }
        
        .actions input[type="submit"] {
            padding: 6px 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('pelicula') }}">Películas</a></li>
            <li><a href="{{ url('director') }}">Directores</a></li>
            <li><a href="{{ url('actor') }}">Actores</a></li>
        </ul>
    </nav>

    @if (Session::has('mensaje'))
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 10px;">{{ Session::get('mensaje') }}</div>
    @endif

    <h1>Listado de Películas</h1>

    <a href="{{ url('pelicula/create') }}" style="display: inline-block; margin-bottom: 10px;">Registrar nueva Película</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Productora</th>
                <th>Género</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $peliculas as $pelicula ) 
            <tr>
                <td>{{ $pelicula->id }}</td>
                <td>{{ $pelicula->Nombre}}</td>
                <td>{{ $pelicula->Productora}}</td>
                <td>{{ $pelicula->Genero}}</td>
                <td>{{ $pelicula->Descripcion}}</td>
                <td class="actions">
                    <a href="{{ url('/pelicula/'.$pelicula->id.'/edit') }}">Editar</a>
                    <form action="{{ url('/pelicula/'.$pelicula->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Estás seguro de que quieres borrar?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


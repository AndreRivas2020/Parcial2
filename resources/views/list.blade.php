<html>
<body>
@forelse($personas as $persona)
   <p>{{$persona->nombre}}</p>
            @empty
            <p>No hay personas</p>
             @endforelse
<form action="{{route('addpersonas')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <button id="btn-add">Agregar</button>
    </form>
</body>
</html>
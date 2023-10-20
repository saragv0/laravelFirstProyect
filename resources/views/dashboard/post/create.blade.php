<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1> Crear posts</h1>
    @include('dashboard.post.fragment._errors-from')

    

    <form action="{{route('post.store')}}" method="post">
        
        @csrf
        <button type="submit">Enviar</button>
        
        
        <label for="">Titulo</label>
        <input type="text" name="title" >

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Categoria</label>
        <select name="category_id">
            <option value=""></option>

            @foreach ($categories as $title => $id)
                <option value="{{$id}}">{{$title}}</option>
                
            @endforeach

        </select>

        <label for="">Posteado</label>
        <select name="posted" >
            <option value="not">No</option>
            <option value="yes">Si</option>
            
        </select>

        <label for="">Contenido</label>
        <textarea name="content" ></textarea>

        <label for="">Descripcion</label>
        <textarea name="description" ></textarea>



    </form>

    

</body>
</html>
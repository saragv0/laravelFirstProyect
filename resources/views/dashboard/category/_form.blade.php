@csrf

<label for="">Titulo</label>
<input class="form-control" type="text" name="title" value="{{old("title", $category->title)}}">

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" value="{{old("slug", $category->slug)}}">


<button class="btn btn-danger" type="submit">Enviar</button>


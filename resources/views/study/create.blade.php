<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estudio</title>
</head>
<body>
  <h1>Alta de estudio</h1>
  <form action="/studies" method="post">
    @csrf
    <div>
      <label for="">Código</label>
      <input type="text"name="code" value="{{old('code')}}">

      @error('code')
        <div> <small>{{ $message }}</small></div>
      @enderror

    </div>
    <div>
      <label for="">Nombre</label>
      <input type="text"name="name">
    </div>
    <div>
      <label for="">Abreviatura</label>
      <input type="text"name="abreviation">
    </div>
    <div>
      <input type="submit" value="Guardar">
    </div>  
  </form>
</body>
</html>
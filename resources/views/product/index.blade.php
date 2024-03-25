<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 align="center">List of Product</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
       <tbody class="table-group-divider">
        @foreach($view as $view)
        <tr>
          <th>{{$view->name}}</th>
          <th>{{$view->type}}</th>
          <th>{{$view->price}}</th>
        </tr>
        @endforeach  
        </tbody>
      </table> 
</body>
</html>

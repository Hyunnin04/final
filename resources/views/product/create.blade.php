<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="contaniner mt-5">
        <div class="text-center">
            <h2 class="display-6 mb-4"><strong>Product</strong></h2>
        </div>
        <div class="main row justify-content-center">
        <form action="/productinfo" id="form" class="row justify-content-center mb-4" autocomplete="off" method="POST">
            @csrf
           <div class="col-10 col-md-8 mb-3">
                <label for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" placeholder="Enter Name Product">
           </div>
           <div class="col-10 col-md-8 mb-3">
                <label for="type">Type</label>
                <input class="form-control" id="" type="text" name="type" placeholder="Enter Type Product">
           </div>
           <div class="col-10 col-md-8 mb-3">
            <label for="price">Price</label>
            <input class="form-control" id="" type="text" name="price" placeholder="Enter Price Product">
       </div>
           <div class="col-10 col-md-8">
               <button class="btn btn-success add-btn" id="submit"  type="submit" name="submit">Submit</button>
           </div>
        </form>
        </div>
    </div>

</body>
</html>
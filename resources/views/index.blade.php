<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="{{ route('create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label class="mt-2">Name</label>
            <input type="text" class="form-control" name="name">
            <label class="mt-2">Email</label>
            <input type="text" class="form-control" name="email">
            <label class="mt-2">Phone</label>
            <input type="number" class="form-control"  name="phone">
            <label class="mt-2">Description</label>
            <textarea name="description" class="form-control"></textarea>
            <label class="mt-2">image</label>
            <input type="file" class="form-control" name="image">
            <button class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
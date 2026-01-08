<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <style>
    .t-header {
      text-align: center;
    }
    tr {
      border: 1px solid red;
    }
  </style>
  <body>
    
    <div class="container my-3">
        <a class="btn btn-success" href="{{ url('/') }}">Create</a>
        <br/>
        @if($products->count() > 0)
          <table>
            <tr class="t-header">
              <td>Name</td>
              <td>email</td>
              <td>phone</td>
              <td>Desc</td>
              <td>Image</td>
              <td>Action</td>
            </tr>
            @foreach($products as $product)
              <tr>
                <td>
                  {{$product->name}}
                </td>
                <td>
                  {{$product->email}}
                </td>
                <td>
                  {{$product->phone}}
                </td>
                <td>
                  {{ str($product->description)->limit(20) }}
                </td>
                <td>
                  <img src="{{ asset('uploads') }}/{{ $product->image }}" height="50" weight="50" alt="Image">
                </td>
                <td>
                  <a class="btn btn-sm btn-primary" href="{{ route('edit', $product->id) }}">Edit</a>
                  <form action="{{route('product.delete', $product->id)}}", method="post" style="display: inline;">
                    @csrf
                    @method('delete')
                    <button class='btn btn-sm btn-danger' type='submit'>Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </table>  
        @else
         <span>There is no products in your collection.</span>
        @endif  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>register</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <h1>Registration Page :</h1>
            <div class="col-6 my-5">
                <form action="{{ route ('auth.post.register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="mt-2" >name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name">
                        @error ('name') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="email">
                        @error ('email') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="password" >
                        @error ('password') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="mt-2" >confirm password <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="confirm_password" >
                        @error ('confirm_password') <span class="text danger">{{$message}}</span>@enderror
                    </div>
                    <button class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
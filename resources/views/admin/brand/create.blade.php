<html>
    <head>
        <title>Create New Brand</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="application/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Create New Brand</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="{{ route('create.brand.submit') }}">
                {{ csrf_field() }}
            <div class="form-group">
                Brand Name : <input id="name" type="text" class="form-control" name="name"  placeholder="Brand name" required>
            </div>
                <button type="submit" class="btn btn-primary">
                    Create
                </button>
            </form>
        </div>
    </body>
</html>
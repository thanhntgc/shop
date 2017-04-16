<html>
    <head>
        <title>Brand</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="application/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <h1>Brand</h1>
        <a href="{{route('create.brand')}}" class="btn btn-primary">Create New Brand</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <th>{{$brand -> id}}</th>
                        <th>{{$brand -> name}}</th>
                        <th>{{$brand -> created_at}}</th>
                        <th>{{$brand -> updated_at}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
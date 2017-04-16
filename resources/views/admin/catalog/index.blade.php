<html>
    <head>
        <title>Catalog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="application/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
        <h1>Catalog</h1>
        <a href="{{route('create.catalog')}}" class="btn btn-primary">Create New Catalog</a>
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
                @foreach($catalogs as $catalog)
                    <tr>
                        <th>{{$catalog -> id}}</th>
                        <th>{{$catalog -> name}}</th>
                        <th>{{$catalog -> created_at}}</th>
                        <th>{{$catalog -> updated_at}}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </body>
</html>
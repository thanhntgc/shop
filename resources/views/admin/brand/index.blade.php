@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <h1>Brand</h1>
        <a href="{{route('create.brand')}}" class="btn btn-primary">Create New Brand</a>
        <table id="datatablebrand" class="table" cellspacing="0" width="100%">
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
@endsection

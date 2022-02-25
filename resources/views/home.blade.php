@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Courses</th>
        <th scope="col">Course Code</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                    <td>CPP</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <th scope="row">4</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <th scope="row">5</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
        </tbody>
    </table>
</div>
@endsection

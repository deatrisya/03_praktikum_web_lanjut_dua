@extends('app');

@section('title')
Cafe House - Food Menu
@endsection

@section('content')
<section>
    <div class="container tm-position-relative">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Food Menu</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarmenu as $f)
                    <tr>
                        <td>{{$f ->id}}</td>
                        <td>{{$f->food_name}}</td>
                        <td>{{$f->description}}</td>
                        <td>{{$f->price}}</td>
                        <td>{{$f->category}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

@section('js')
    <script>
        $('#link-foodmenu').addClass('active');
    </script>
@endsection

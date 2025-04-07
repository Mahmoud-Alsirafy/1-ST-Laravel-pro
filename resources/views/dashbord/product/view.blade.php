@extends('dashbord.layout.main')

@section('content')

    <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>


    <div class="container-fluid page-body-wrapper full-page-wrapper ">



        <table class="table w-100">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">name</th>
              <th scope="col">price</th>
              <th scope="col">count</th>
              <th scope="col">cat</th>
              <th scope="col">images</th>

              <th> Edit / delete </th>
            </tr>
          </thead>
          <tbody>

@forelse ($products as $key=>$value)
<tr>
    <td scope="col">{{ ++$key }}</td>
    <td scope="col">{{ $value->name }}</td>
    <td scope="col">{{ $value->price }}</td>
    <td scope="col">{{ $value->count }}</td>
    <td scope="col">{{ $value->cat }}</td>
    <td scope="col" class="w-25 img-fluid">
        @foreach ( $value->image as $v )
            <img src="{{ asset("storage/i/".$v->image) }}" class="w-25" alt="">
        @endforeach
    </td>
    <td>
        <a href="{{ route('product.show',$value->id) }}" class="btn btn-primary" >edit</a>
      <form action="{{ route('product.destroy',$value->id) }}" method="post">
        @csrf
        @method("DELETE")
       <button class="btn btn-danger" type="submit">Delete</button>
      </form>
    </td>
  </tr>
@empty


  <div class="alert alert-danger w-25 text-center mt-3" role="alert">
   No Products Found
  </div>
@endforelse





          </tbody>
        </table>


        </div>
@endsection

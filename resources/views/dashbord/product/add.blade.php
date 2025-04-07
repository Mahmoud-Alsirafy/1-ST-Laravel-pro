@extends("dashbord.layout.main")

@section('content')


<form action="{{ route('product.store') }}" method="POST" class="row g-3 p-5" enctype="multipart/form-data">

    @csrf

    <div class="col-md-6">
        @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
        <label for="validationDefault01" class="form-label">Name</label>

        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="validationDefault01">
    </div>


    <div class="col-md-6">
        @error('price')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
            <label for="validationDefaultUsername" class="form-label">Price</label>
            <input type="text" name="price" value="{{ old('price') }}" class="form-control">
    </div>
    <div class="col-md-6">
        @error('count')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
        <label for="validationDefault03" class="form-label">Count</label>
        <input type="text" name="count" value="{{ old('count') }}" class="form-control" id="validationDefault03">
    </div>

    <div class="col-md-6 ">
        @error('cat')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
          </div>
        @enderror
        <label for="validationDefault04" class="form-label">Category</label>
                <select class="form-control" name="cat" id="validationDefault04">
                    @foreach (config('cat.cat') as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
        </select>
    </div>

    <div class="col-md-6">
        @error('image')

        @enderror

        <label for="validationDefaultUsername" class="form-label">image</label>
            <input type="file" name="image[]"  class="form-control">
    </div>




    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit">Add Product</button>
    </div>
</form>

@endsection

@extends("dashbord.layout.main")

@section('content')


<form action="{{ route('product.update',$product->id) }}" method="POST" class="row g-3 p-5" enctype="multipart/form-data">

    @csrf
    @method("PUT")
    <div class="col-md-6">
        @error('name')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <label for="validationDefault01" class="form-label">Name</label>

        <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="validationDefault01">
    </div>


    <div class="col-md-6">
        @error('price')
        <p style="color:red">{{ $message }}</p>
        @enderror
            <label for="validationDefaultUsername" class="form-label">Price</label>
            <input type="number" name="price" value="{{ $product->price }}" class="form-control">
    </div>
    <div class="col-md-6">
        @error('count')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <label for="validationDefault03" class="form-label">Count</label>
        <input type="number" name="count" value="{{ $product->count }}" class="form-control" id="validationDefault03">
    </div>

    <div class="col-md-6 ">
        @error('cat')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <label for="validationDefault04" class="form-label">Category</label>
                <select class="form-control" name="cat" id="validationDefault04">
                    @foreach (config('cat.cat') as $value)
                    <option @selected($product["cat"]==$value) value="{{ $value }}">{{ $value }}</option>
                    @endforeach
        </select>
    </div>

    <div class="col-md-6">
        @error('image')

        @enderror

        <label for="validationDefaultUsername" class="form-label">image</label>
            <input type="file" name="image[]" multiple class="form-control">
    </div>




    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit">Add Product</button>
    </div>
</form>

@endsection

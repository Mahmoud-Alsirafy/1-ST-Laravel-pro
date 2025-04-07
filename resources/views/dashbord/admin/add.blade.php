@extends("dashbord.layout.main")
@section("content")




<form action="{{ route('admin.store') }}" method="post" class="row g-3 ">


@csrf


    <div class="col-md-4">
        @error('name')
            <p style="color:red">{{ $message }}</p>
        @enderror
      <label for="validationDefault01" class="form-label"> name</label>
      <input type="text" class="form-control" value="{{ old('name') }}" id="validationDefault01" name="name" value="" >
    </div>





    <div class="col-md-4">
        @error('email')
            <p style="color:red">{{ $message }}</p>
        @enderror
      <label for="validationDefaultUsername" class="form-label">Email</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" value="{{ old('email') }}" name="email" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" >
      </div>


    </div>
    <div class="col-md-6">
        @error('password')
            <p style="color:red">{{ $message }}</p>
        @enderror
      <label for="validationDefault03" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="validationDefault03" >
    </div>

    <br>





    <div class="col-md-3 ">
      <label for="validationDefault04" class="form-label">gender</label>
      <select class="form-control" name="gender" id="validationDefault04" >
        <option @selected(old("gender")=="male") value="male">male</option>
        <option @selected(old("gender")=="female") value="female">female</option>
      </select>
    </div>

    <div class="d-flex">
        @error('permission')
            <p style="color:red">{{ $message }}</p>
        @enderror

    @foreach (config('per.permission') as $key=>$value )

        <div class="form-check d-flex flex-column">
            <input type="checkbox" name="permission[]" value="{{ $value }}" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{ $key }}</label>
        </div>

    @endforeach

    </div>

    <div class="col-12 mt-3">
      <button class="btn btn-primary" type="submit">Add User</button>
    </div>
</form>

@endsection


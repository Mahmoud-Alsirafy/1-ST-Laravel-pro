@extends("dashbord.layout.main")
@section("content")




<form action="{{ route('admin.update',$admin->id) }}" method="post" class="row g-3 ">


@csrf
@method("PUT")

    <div class="col-md-4">
        @error('name')
        <p style="color:red">{{ $message }}</p>
        @enderror
      <label for="validationDefault01" class="form-label"> name</label>
      <input type="text" class="form-control" value="{{ $admin->name }}" id="validationDefault01" name="name" value="" >
    </div>





    <div class="col-md-4">
        @error('email')
        <p style="color:red">{{ $message }}</p>
        @enderror
      <label for="validationDefaultUsername" class="form-label">Email</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" value="{{ $admin->email }}" name="email" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" >
      </div>


    </div>


    <br>





    <div class="col-md-3 ">
        @error('gender')
        <p style="color:red">{{ $message }}</p>
        @enderror
      <label for="validationDefault04" class="form-label">gender</label>
      <select class="form-control" name="gender" id="validationDefault04" >
        <option @selected($admin->gender=="male") value="male">male</option>
        <option @selected($admin->gender=="female") value="female">female</option>
      </select>
    </div>

    <div class="d-flex">


    @foreach (config('per.permission') as $key=>$value )

        <div class="form-check d-flex flex-column">
            <input @checked(in_array($value,$admin["permission"])) type="checkbox" name="permission[]" value="{{ $value }}"   class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">{{ $key }}</label>
        </div>

    @endforeach

    </div>

    <div class="col-12 mt-3">
      <button class="btn btn-primary" type="submit">Add User</button>
    </div>
</form>

@endsection


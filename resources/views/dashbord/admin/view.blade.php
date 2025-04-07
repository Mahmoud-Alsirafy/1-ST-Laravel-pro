@extends("dashbord.layout.main")

@section("content")
<a class="btn btn-primary" href="{{ route('admin.create') }}">Add User</a>

<div class="container-fluid page-body-wrapper full-page-wrapper ">



    <table class="table w-100 mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">gender</th>
          <th scope="col">permission</th>
          <th> Edit </th>
          <th> delete </th>
        </tr>
      </thead>
      <tbody>

        @forelse ($users as $key=>$value )
        <tr>
            <td scope="col">{{ ++$key }}</td>
            <td scope="col">{{ $value["name"] }}</td>
            <td scope="col">{{ $value["email"] }}</td>
            <td scope="col">{{ $value["gender"] }}</td>
            <td class="col" class="w-25">
                @foreach ($value["permission"] as $v )
                    {{ $v }}
                @endforeach
            </td>

            <td>
              <a href="{{ route('admin.show',$value->id) }}" class="btn btn-primary" >edit</a>
            </td>
            <td>
              <form action="{{ route('admin.destroy',$value->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          Not Users Found
        @endforelse






      </tbody>
    </table>


    </div>
@endsection

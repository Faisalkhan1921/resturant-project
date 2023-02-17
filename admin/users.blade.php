<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Users</title>
</head>
<body>

    <x-app-layout>   </x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    
    @include('admin.css')
</head>
  <body>
    <div class="container-scroller">

    @include('admin.navbar')

        
        <div class="container" > 
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h1 class="text-center"><span class="bg-danger">Display & Delete User Records</span>
                
                  </h1>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-dark">
                    <thead >
                        <tr >
                            <th scope="row">Name</th>
                            <th>Email</th>
                            <th>Action</th>
                            </tr>
                    </thead>
                    @foreach($data as $data)
                    <tbody>
                        <tr>
                            <td>{{$data['name']}}</td>
                            <td>{{$data['email']}}</td>
                            @if($data->usertype=="0")
                            
                            <td>
                              <a href="{{url('/deleteusers',$data->id)}}" class="btn btn-lg bg-danger text-light">Delete</a>
                            </td>
                            
                            @else
                            
                              <td><p><b class="text-danger text-center">Not Allowed</b></p></td>
                            
                            @endif
                        </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
        </div>
      </div>
    </div>
  </div>
    </div>
    {{-- all javascript links are here --}}
    @include('admin.scripts')

  </body>
</html>
</body>
</html>
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
                  <h1 class="text-center"><span class="bg-danger">Display FoodMenu</span></h1>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-dark">
                    <thead >
                        <tr >
                            <th scope="row">Title</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                            </tr>
                    </thead>
                    @foreach($data as $data)
                    <tbody>
                        <tr>
                            <td>{{$data['title']}}</td>
                            <td>{{$data['price']}}</td>
                            <td>{{$data['description']}}</td>
                            <td><img src="/foodimage/{{$data['image']}}" alt=""></td>
                            <td>
                               <a href="{{url('/deletemenu',$data->id)}}" class="btn btn-lg bg-danger text-light">Delete</a>

                               <a href="{{url('/updatefoodmenu',$data->id)}}" class="btn btn-lg bg-danger text-light">Update</a>
                            </td>

                           
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
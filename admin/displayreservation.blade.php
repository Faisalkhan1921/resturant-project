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
                            <th scope="row">Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Guests</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Message</th>
                            <th>Actions</th>
                            </tr>
                    </thead>
                    @foreach($data as $data)
                    <tbody>
                        <tr>
                            <td>{{$data['name']}}</td>
                            <td>{{$data['email']}}</td>
                            <td>{{$data['phone']}}</td>
                            <td>{{$data['guests']}}</td>
                            <td>{{$data['date']}}</td>
                            <td>{{$data['time']}}</td>
                            <td>{{$data['message']}}</td>
                            <td>
                               <a href="{{url('/deletereservation',$data->id)}}" class="btn btn-sm bg-danger text-light">Delete</a>

                               <a href="{{url('/updatereservation',$data->id)}}" class="btn btn-sm bg-danger text-light">Update</a>
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
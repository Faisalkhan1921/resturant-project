<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <x-app-layout>   </x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    
    @include('admin.css')
    <style>
       .form-control
       {
        color: white;
       }
       .form-control:focus
       {
        color: white;
       }
    </style>
</head>
  <body>
    <div class="container-scroller">

    @include('admin.navbar')

     <div class="container mt-2 ml-2">
        <div class="card" >
            <div class="card-header" >
                <h1 class="text-light bg-danger text-center">Update Chefs</h1>
                {{-- <a href="{{url('/+')}}" class="btn btn-lg bg-danger text-light float-right">DisplayFood</a> --}}
            </div>
            <div class="card-body">
                <form action="{{url('/updatechefs',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" required value="{{$data['name']}}" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Speciality</label>
                        <input type="text" class="form-control" required value="{{$data['speciality']}}" name="speciality">
                    </div>

                    <div class="form-group">
                        <label for="">OldImage</label>
                        <img width="100" height="100" src="/chefimage/{{$data['image']}}" alt="">
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg bg-danger text-light text-center form-control"  name="submitbtn">Save</button>
                    </div>
                </form>
            </div>
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
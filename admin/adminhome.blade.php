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
    {{-- all navbar code path  --}}
    @include('admin.navbar')
    {{-- all javascript links are here --}}
    @include('admin.scripts')

  </body>
</html>
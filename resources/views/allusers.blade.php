<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>All Users</title>
   <style>
      nav .w-5{
         display: none;
      }
   </style>
</head>
<body>
   <h1>All Users List</h1>
<a href="/newuser">Add new user</a>
{{-- @dd($data); --}}
@foreach($data as  $user)
         <h3>
            {{ $user->name }} |
            {{ $user->email }} |
            {{ $user->age }} |
            {{ $user->city }} |
            <a href="{{ route('view.user',$user->id)  }}">View</a>
            <a href="{{ route('update.page',$user->id)  }}">Update</a>
         </h3>
@endforeach
<div >
   {{ $data->links()  }}
</div>
</body>
</html>

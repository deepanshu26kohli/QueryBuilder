<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Form</title>
</head>
<body>
    <h1>Update User Data</h1>
    <form action="{{ route('update.user',$data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" value="{{ $data->name }}" placeholder="Name" name="username">
        <input type="text" value="{{ $data->email }}" placeholder="Email" name="useremail">
        <input type="number" value="{{ $data->age }}"  placeholder="Age" name="userage">
        <input type="text" value="{{ $data->city }}"  placeholder="City" name="usercity">
        <button>Update</button>
    </form>
</body>
</html>
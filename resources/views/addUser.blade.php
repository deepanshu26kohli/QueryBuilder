<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
</head>
<body>
    <h1>Add New User</h1>
    <form action="{{ route('addUser') }}" method="POST">
        @csrf
        <input type="text" placeholder="Name" name="username">
        <input type="text" placeholder="Email" name="useremail">
        <input type="number" placeholder="Age" name="userage">
        <input type="text" placeholder="City" name="usercity">
        <button>Submit</button>
    </form>
</body>
</html>
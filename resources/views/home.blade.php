<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <div>
        <h1>Welcome</h1>
    </div>
    <div>
     <form action="{{route('dashboard')}}" method="post">
        @csrf
        Name:<input type="text" name="name">
        Email:<input type="email" name="email">
        <input type="submit" value="Proceed">
     </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get" style="padding: 30px;" action="/client">
        <input name="id" type="text">
        <input name="name" type="text">

        <button type="submit">Submit</button>
    </form>
    <h1>Create New Post</h1>
    url {{$url}} <br>method {{$method}} <br>{{$id}} <br> {{$name}} <br> {{$check}} <br> path : {{$path}}
    <br>full url : {{$full_url}}
    <br>{{$isMethodPost}}
    <br> {{$name}}
    <br> {{$ip}}
    <br> {{$client_ip}}
    <br> {{$age}}
    <br> {{$name1}}

</body>

</html>

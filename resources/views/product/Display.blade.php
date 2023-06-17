<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
</head>
<body>

<form action="/Display/{{$proes->id}}}" method="post" aria-orientation="center">
    {{csrf_field()}}
    <br>
    <br>
    <br>
        Enter The Name : <input type="text" name="name" value={{$proes->name}} > <br><br><br>
        Enter The Quantity : <input type="text" name="quantity" value={{$proes->quantity}} ><br><br><br>
        Enter The Type : <input type="text" name ="type" value={{$proes->type}} ><br><br><br>
        <button name="btnSave">Save</button>
</form>



{{--</body>--}}
{{--</html>--}}
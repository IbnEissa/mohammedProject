<table>
    <tr>

        <td>Name</td>
        <td>Quentity</td>
        <td>Type</td>


    </tr>

    <tr>
        @foreach ($product as $pro)
            <td> {{$pro->name}}</td>
            <td>{{$pro->quantity}}</td>
            <td> {{$pro->type}}</td>
            <td ><a href="Display/{{$pro->id}}">Edit</a></td>
            <td ><a href="home/{{$pro->id}}">Delete</a></td>

    </tr>
    @endforeach
</table>


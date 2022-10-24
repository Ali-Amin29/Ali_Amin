<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($product as $value)
    <ul>
        <li>{{ $value->id }}</li>
        <li>{{ $value->name }}</li>
        <li>{{ $value->price }}</li>
        <li>{{ $value->amount }}</li>
        <li>{{ $value->create_at }}</li>
        <li>
            <form action="{{ route('product.destroy',$value->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button>Delete</button>
            </form>
        </li>
        {{--  <li><a href="{{ route('product.destroy',$value->id) }}"> Delete Product</a></li>  --}}
        <li><a href="{{ route('product.edit',$value->id) }}"> Edit Product</a></li>
    </ul>
    @endforeach

</body>

</html>

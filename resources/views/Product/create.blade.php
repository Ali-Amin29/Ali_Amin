<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('product.store')}}" method="POST">
        @csrf
        Name:
        <input type="text" name="name">
        Price:
        <input type="number" name="price" >
        Amount:
        <input type="number" name="amount">
        Confirmation:
        <button>insert</button>
    </form>
  <a href="{{  route('product.index')}}"> back to show products </a>
</body>

</html>

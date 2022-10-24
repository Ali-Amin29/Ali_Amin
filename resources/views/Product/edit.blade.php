<form action="{{ route('product.update',$product->id)}}" method="post">
    @method('PUT')
    @csrf
    Name:
    <input type="text" name="name" value={{ $product->name }}>
    Price:
    <input type="number" name="price" value={{ $product->price }}>
    Amount:
    <input type="number" name="amount" value={{ $product->amount }}>
    Confirmation:
    <button>insert</button>
</form>

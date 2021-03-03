@include('superadmin.include.alert')
<form action="" method="POST">
    @csrf
    <input type="text" name="product_name"  value="{{ $product['product_name'] }}"><br>
    <input type="text" name="quantity"  value="{{ $product['quantity'] }}"><br>
    <input type="text" name="price"  value="{{ $product['price'] }}"><br>
    <input type="text" name="status"  value="{{ $product['status'] }}"><br>
    <input type="text" name="category_name" value="{{ $product['category_name'] }}"><br>

    <input  type="submit">
</form>

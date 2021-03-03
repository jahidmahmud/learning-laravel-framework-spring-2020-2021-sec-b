@include('superadmin.include.alert')
<form action="{{ route('product.addProduct') }}" method="POST">
    @csrf
    <input type="text" name="product_name" placeholder="Product Name" value="{{ old('product_name') }}"><br>
    <input type="text" name="quantity" placeholder="Quantity" value="{{ old('quantity') }}"><br>
    <input type="text" name="price" placeholder="Price" value="{{ old('price') }}"><br>
    <input type="text" name="status" placeholder="Status" value="{{ old('status') }}"><br>
    <input type="text" name="category_name" placeholder="Category Name" value="{{ old('category_name') }}"><br>

    <input  type="submit">
</form>


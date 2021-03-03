<h2>Sell Product</h2>
@include('superadmin.include.alert')
<form action="{{ route('Sales.physical.salesLog') }}" method="POST">
    @csrf
    <input type="text" name="customer_name" placeholder="Customer Name" value="{{ old('customer_name') }}"><br>
    <input type="text" name="address" placeholder="Address" value="{{ old('address') }}"><br>
    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}"><br>
    <input type="text" name="product_id" placeholder="Product Id" value="{{ old('product_id') }}"><br>
    <input type="text" name="product_name" placeholder="Product Name" value="{{ old('product_name') }}"><br>
    <input type="text" name="unit_prics" placeholder="Unit Price" value="{{ old('unit_prics') }}"><br>
    <input type="text" name="quantity" placeholder="CQuantity" value="{{ old('quantity') }}"><br>
    <input type="text" name="total_price" placeholder="Total Price" value="{{ old('total_price') }}"><br>
    <input type="text" name="payment_type" placeholder="Payment Type" value="{{ old('payment_type') }}"><br>
    <input type="text" name="status" placeholder="Status" value="{{ old('status') }}"><br>

    <input  type="submit">
</form>
{{--  @foreach ($errors->all() as $item)
        {{ $item }}<br>
@endforeach  --}}



<h2>Are you sure want to delete?</h2>
<form action="{{ route('product.existing.delete',$product['id']) }}" method="POST">
    @csrf
    <button type="submit">Yes</button>
</form>
<button><a href="{{ route('product.existing') }}">No</a></button>

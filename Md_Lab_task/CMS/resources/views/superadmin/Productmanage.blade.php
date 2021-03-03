<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<button type="button" class="btn btn-primary"><a href="{{ route('product.existing') }}" style="color: white">Existing Product</a></button>
<button  type="button" class="btn btn-primary"><a href="{{ route('product.upcoming') }}" style="color: white">Upcoming Product</a></button>
<button  type="button" class="btn btn-primary"><a href="{{ route('product.add') }}" style="color: white">Add Product</a></button>

<br>
<br>
<h2>No of existing product::{{ count($data1 )}}</h2>
<br>
<br>
<h2>No of upcoming product::{{ count($data2 ) }}</h2>

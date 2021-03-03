<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<button type="button" class="btn btn-primary"><a href="{{ route('Sales.physical.salesLog') }}" style="color: white">Sales Log</a></button>

<div>
   Total Count Today : {{ count($data1) }}
</div>
<br><br><br><br>

<div>
    Total Count Last 7 Days : {{ count($data2) }}
 </div>
 <br><br><br><br>

<div>
    Most sold item : {{ $data3[0]['product_name'] }}
 </div>

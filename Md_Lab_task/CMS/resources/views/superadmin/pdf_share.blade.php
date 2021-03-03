<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr class="table-danger">
        <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Product Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Unit Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Total Price</th>
            <th scope="col">Payment Type </th>
            <th scope="col">Status </th>
      </tr>
      </thead>
      <tbody>
        @foreach ($Sales as $data)
        <tr>
            <th >{{ $data->id }}</th>
            <td>{{ $data->customer_name }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->product_id }}</td>
            <td>{{ $data->product_name }}</td>
            <td>{{ $data->unit_prics }}</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->total_price }}</td>
            <td>{{ $data->payment_type }}</td>
            <td>{{ $data->status }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>

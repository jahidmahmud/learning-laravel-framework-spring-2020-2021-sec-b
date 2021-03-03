<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-3">Sold Item</h2>

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ route('Sales.pdf.download') }}">Export to PDF</a>
        </div>

        <table class="table table-bordered mb-5">
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
                @foreach($store ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
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

    </div>
</body>

</html>

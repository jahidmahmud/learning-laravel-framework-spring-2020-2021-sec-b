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
      <div class="container">
          <form action="{{ route('product.upcoming.sort') }}" method="POST">
              @csrf
        <select name="sort" id="">
            <option value="date">Date</option>
            <option value="quantity">Quantity</option>
            <option value="category">Category</option>
        </select>
        <input type="submit" value="Sort">
    </form>
      </div>
      <br>
      <br>
    <table class="table table-bordered">
    <thead>
      <tr class="table-danger">
        <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">price</th>
            <th scope="col">Status</th>
            <th scope="col">Category Name</th>
            <th scope="col">Actions</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($item as $data)
        <tr>
            <th >{{ $data->id }}</th>
            <td>{{ $data->product_name }}</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->price }}</td>
            <td>{{ $data->status }}</td>
            <td>{{ $data->category_name }}</td>
            <td>
                <a href="{{ route('product.upcoming.edit',$data->id) }}">Edit</a>
                <a href="{{ route('product.upcoming.delete',$data->id) }}">Delete</a>
                <a href="{{ route('product.upcoming.details',$data->id) }}">Details</a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>

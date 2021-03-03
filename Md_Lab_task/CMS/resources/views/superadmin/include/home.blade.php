@extends('superadmin.master')

@section('title')
    Admin || Dashboard
@endsection

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <h1>Welcome {{ session('name')}}</h1>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>



@endsection

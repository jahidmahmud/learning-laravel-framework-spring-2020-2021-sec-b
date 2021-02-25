@extends('layout.main');
    @section('main_content')
    <h1>welcome Home</h1>
    @endsection
    @section('header')
    <a href="{{ route('home.create') }}" style="text-decoration: none;">Create User</a>|
    <a href="{{ route('home.list') }}" style="text-decoration: none;">View UserList</a>|
    <a href="/logout" style="text-decoration: none;">LogOut</a>
    @endsection
    @section('title')
        Home
    @endsection


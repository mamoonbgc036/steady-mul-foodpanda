@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <p>You are logged into Foodpanda App.</p>
    <a href="http://ecommerce.app.test/dashboard" target="_blank" class="text-blue-600 hover:underline">Visit Ecommerce Dashboard</a>
</div>
@endsection
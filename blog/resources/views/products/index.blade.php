@extends('products.layout') 
@section('content')
<table class="table table-bordered"> 
<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<labels-component></labels-component>
@foreach ($products as $product)
<tr><td>{{ ++$i }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->detail }}</td><td>
<form action="{{ route('products.destroy',$product->id) }}" method="POST">									   
<a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>    
<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
@csrf
@method('DELETE')
<closer-component></closer-component>
@endforeach
</table>									  
{!! $products->links() !!}
@endsection

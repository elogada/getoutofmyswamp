@extends('products.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
</div>
<div class="pull-right">
<a class="shadow-md btn hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-opacity-50" href="{{ route('products.create') }}"> Create New Product</a>
</div>
</div>
</div>
   
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div>
<table class="table table-auto">
<tr>
<th>No</th>
<th>Name</th>
<th>Details</th>
<th width="280px">Action</th>
</tr>
@foreach ($products as $product)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $product->name }}</td>
<td>{{ $product->detail }}</td>
<td>
<form action="{{ route('products.destroy',$product->id) }}" method="POST">
<a class="shadow-md btn hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-opacity-50" href="{{ route('products.show',$product->id) }}">Show</a>  
<a class="shadow-md btn hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-opacity-50" href="{{ route('products.edit',$product->id) }}">Edit</a>  
@csrf
@method('DELETE')
<button type="submit" class="shadow-md btn hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-opacity-50">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</div>
{!! $products->links() !!}    
@endsection

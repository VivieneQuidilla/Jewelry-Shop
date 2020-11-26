@extends('layouts.master')

@section('content')
  <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
        <!-- title -->
<div class="d-md-flex align-items-center">
<div>
            <h3 class="card-title">Jewelry-Store {{ $branch->location }}</h3>

                                    </div>
                                </div>
<!-- title -->
                            </div>
            <div class="table-responsive">
     <table class="table v-middle">
        <thead>
           <tr class="bg-light">
                <th class="border-top-0">Product Name</th>
                <th class="border-top-0">Type</th>
                <th class="border-top-0">Material</th>
            </tr>
        </thead>
 <tbody>
    @foreach($branch->products as $product)
       <tr>
	<div class="d-flex align-items-center">
    <div class="m-r-10">
		<td> {{ $product->name }} </td>
		<td> {{ $product->type }} </td>
		<td> {{ $product->material }} </td>
	</div>
</div>
	</tr>
    @endforeach
</tbody>
    </table>
                <!-- ============================================================== -->
                <!-- Table -->

<div class="col-12">
	<br>
	<a href="/branches">
		<h6 class="card-subtitle">Back</h6>
	</a>
</div>

@endsection
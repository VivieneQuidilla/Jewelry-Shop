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
<div class="d-md-flex align-items-center">  <div>
    <h3 class="card-title">Jewelry-Store Products</h3>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
        <thead>
           <tr class="bg-light">
            <th class="border-top-0">Product ID</th>
                <th class="border-top-0">Name</th>
                <th class="border-top-0">Product Type</th>
                <th class="border-top-0">Material</th>
                <th class="border-top-0">Product Branch Location</th>
                <th class="border-top-0">Product Latest Transaction</th>
            </tr>
        </thead>
        
        <tbody>
            
            @foreach($products as $product)
    <tr>
        <td>
            <div class="d-flex align-items-center">
            <div class="m-r-10">
                <center> {{ $product->id }} 
                </a></center>
            </div>
        </div>
    </td>
        <td> {{ $product->name }} </td>
        <td> {{ $product->type }} </td>
        <td> {{ $product->material }} </td>
       <td> {{ $product->branch->location }} </td>
       <td>
    @foreach($product->transactions as $transaction)
        <p> {{ $transaction->restocked }} <p>
    @endforeach    
        </td>
    </div>
</div>
    </tr>
            @endforeach 
        </tbody>
    </table>
                <!-- ============================================================== -->
                <!-- Table -->

@endsection
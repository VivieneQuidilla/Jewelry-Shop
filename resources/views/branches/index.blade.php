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
<a href="/branches">
    <h3 class="card-title">Jewelry-Store Branches</h3></a>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
        <thead>
           <tr class="bg-light">
                <th class="border-top-0">Branch ID</th>
                <th class="border-top-0">Branch Location</th>
            </tr>
        </thead>
        
        <tbody>
            
            @foreach($branches as $branch)
    <tr>
        <td>
            <div class="d-flex align-items-center">
            <div class="m-r-10">
                <center><a href="/branches/{{ $branch->id }}"> {{ $branch->id }} </a></center>
            </div>
        </div>
    </td>
        <td> {{ $branch->location }} </td>
       
    </tr>
            @endforeach 
        </tbody>
    </table>
                <!-- ============================================================== -->
                <!-- Table -->
@endsection
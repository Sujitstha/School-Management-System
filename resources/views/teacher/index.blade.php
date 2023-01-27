@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/teacher/create " class="btn btn-primary btn-sm my-2">Add Teacher</a>
                </div>
           
    <div class="card-body">
        <table class="table" id="datatable">
    </div>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Faculty</th>
                <th>Action</th>
            </tr>
        </thead>

      <tbody>
        @foreach ($teachers as $teacher)
        <tr>
         <td>{{ $teacher->id }}</td>
         <td>{{ $teacher->name }}</td>
         <td>{{ $teacher->address }}</td>
         <td>{{ $teacher->mobile }}</td>
         <td>{{ $teacher->faculty->name }}</td>
         <td>
             <a href="">Edit</a>
         </td>
     </tr>
        @endforeach
      </tbody>
    </table>
    </div>
   </div>
 </div>
</div>
    
@endsection
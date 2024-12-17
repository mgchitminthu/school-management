@extends("layouts.app")
@section("content")
<div class="container-fluid bg-light py-4">
    <div class="container">
        @if (session("flash_message"))
            <div class="alert alert-info" style="max-width: 300px; background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
                {{session("flash_message")}}
            </div>
        @endif
        <div class="card border-success" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))">
            <div class="card-header">
                <h4>Enrollment {{$enrollment->student->name}} Detail</h4>
            </div>
           <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Enrollment No:</b>{{$enrollment->id}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Student Name:</b>{{$enrollment->student->name}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Course:</b>{{$enrollment->course->name}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Fee:</b>{{$enrollment->course->fee}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Duration:</b>{{$enrollment->course->duration}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Join Date:</b>{{$enrollment->join_date}}</li>
            </ul>
           </div>
           <div class="card-footer">
                <a href="{{url("/enrollments/edit/$enrollment->id")}}" class="btn text-white" style="background: rgb(5, 152, 98)">Edit</a>
                <a href="{{url("/enrollments/delete/$enrollment->id")}}" class="btn text-white" style="background: red">Delete</a>
           </div>
        </div>
    </div>
</div>
@endsection
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
                <h4>Teacher {{$teacher->name}} Detail</h4>
            </div>
           <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">No:</b>{{$teacher->id}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Name:</b>{{$teacher->name}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Address:</b>{{$teacher->address}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Phone:</b>{{$teacher->phone}}</li>
            </ul>
           </div>
           <div class="card-footer">
                <a href="{{url("/teachers/edit/$teacher->id")}}" class="btn text-white" style="background: rgb(5, 152, 98)">Edit</a>
                <a href="{{url("/teachers/delete/$teacher->id")}}" class="btn text-white" style="background: red">Delete</a>
           </div>
        </div>
    </div>
</div>
@endsection
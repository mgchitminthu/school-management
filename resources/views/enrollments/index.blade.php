@extends("layouts.app")
@section("content")
<div class="container-fluid py-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
    <div class="container">
        <div class="card mb-5 border-dark" style="background: white">
            <div class="card-body">
                <h3 class="mb-4"> <b>Enrollments Management</b> </h3>
                <h4 class="mb-4"><b>Add New Enrollment give Student,Course and class Join Date </b></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit at, dignissimos culpa laboriosam obcaecati saepe aliquid officia et magni magnam? Sed, rem dolore dolor aliquam dolorum, et laboriosam est voluptas, earum facere illum. Consequuntur pariatur atque doloribus ea doloremque cupiditate quidem iure illo. Voluptates laboriosam nisi quis soluta commodi, qui similique distinctio esse, cumque nemo sed corporis eveniet fugiat quos molestias cupiditate ipsam. Ducimus, aperiam. Ea eius soluta quo atque, sunt sed aliquid optio voluptate doloremque animi. Veritatis velit eaque corporis voluptates ullam officiis vero nihil inventore porro harum vel numquam at tempore obcaecati mollitia, praesentium adipisci! Ipsa, consequatur cumque!</p>
                <a href="{{url("/enrollments/add")}}" class="btn text-white" style="background: rgb(5, 152, 98)">+Add New Enrollment</a>
            </div>
        </div>
       @if (session("flash_message"))
       <div class="alert alert-danger" style="max-width: 350px">
            {{session("flash_message")}}
       </div>
       @endif

       @if (session("info"))
       <div class="alert alert-light" style="max-width: 400px">
            {{session("info")}}
       </div>
       @endif
       <div class="row">
            @foreach ($enrollments as $enrollment)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-secondary mb-3" style="border-radius: 10px;">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item border-success text-white" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )"> <b>Enrollment No:</b> {{$enrollment->id}} </li>
                            <li class="list-group-item border-success text-white" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )"> <b>Student Name:</b> {{$enrollment->student->name}} </li>
                            <li class="list-group-item border-success text-white" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )"><b>Course:</b> {{$enrollment->course->name}} </li>
                            <li class="list-group-item border-success text-white" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )"> <b>Fee:</b>  {{$enrollment->course->fee}}</li>
                            <li class="list-group-item border-success text-white" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )"><b>Duration:</b>{{$enrollment->course->duration}} </li>
                            <li class="list-group-item border-success text-white" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )"><b>Join Date:</b> {{$enrollment->join_date}}</li>
                            <li class="list-group-item border-success" style="background: linear-gradient(30deg,rgb(100, 50, 151), rgb(2, 0, 4) )">
                                <a href="{{url("/enrollments/show/$enrollment->id")}}" class="btn btn-sm" style="background: white">View</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
       </div>
       <footer class="mt-4 py-4 text-center text-muted border-top">
        <small>&copy; Copyright 2025</small>
    </footer>
    </div>
</div>
@endsection

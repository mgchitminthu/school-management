@extends("layouts.app")
@section("content")
<div class="container-fluid py-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
    <div class="container">
        <div class="card mb-5 border-dark" style="background: white">
            <div class="card-body">
                <h3 class="mb-4"> <b>Courses Management</b> </h3>
                <h4 class="mb-4"><b> Add New Course give Course Name,Start Date,Duration and Fee </b></h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore a autem esse possimus ut nostrum nemo illum magni quasi nesciunt quisquam, enim omnis fuga reprehenderit ipsa, quo aperiam minus? Officiis, hic sed. Debitis animi, iusto iste molestiae quasi nam sunt vel porro in delectus dolor possimus aliquam beatae atque eius sint inventore quibusdam amet asperiores? Corporis quos ullam et molestiae porro quidem minus, fuga id, quod laboriosam necessitatibus vitae, tenetur temporibus asperiores cupiditate nobis. Fugiat, sit autem quis optio, amet repellat perspiciatis sapiente quod voluptatum expedita illo nisi iure neque ipsa laboriosam quibusdam blanditiis velit. Possimus iusto laboriosam ullam voluptatum.</p>
                <a href="{{url("/courses/add")}}" class="btn text-white" style="background: rgb(5, 152, 98)">+Add New Course</a>
            </div>
        </div>
       @if (session("flash_message"))
       <div class="alert alert-danger" style="max-width: 350px">
            {{session("flash_message")}}
       </div>
       @endif

       @if (session("info"))
       <div class="alert alert-light" style="max-width: 350px">
            {{session("info")}}
       </div>
       @endif

       <div class="row">
        @foreach ($courses as $course)
        <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-secondary mb-3" style="border-radius: 10px;">
            <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item border-secondary" style="background: linear-gradient(30deg,rgb(255, 255, 255),rgb(221, 180, 255) )"> <b>No:</b> {{$course->id}} </li>
                        <li class="list-group-item border-secondary" style="background: linear-gradient(30deg,rgb(255, 255, 255),rgb(221, 180, 255) )"> <b>Course Name:</b> {{$course->name}} </li>
                        <li class="list-group-item border-secondary" style="background: linear-gradient(30deg,rgb(255, 255, 255),rgb(221, 180, 255) )"><b>Start Date:</b> {{$course->start_date}}</li>
                        <li class="list-group-item border-secondary" style="background: linear-gradient(30deg,rgb(255, 255, 255),rgb(221, 180, 255) )"> <b>Duration:</b> {{$course->duration}} </li>
                        <li class="list-group-item border-secondary" style="background: linear-gradient(30deg,rgb(255, 255, 255),rgb(221, 180, 255) )"><b>Fee:</b> {{$course->fee}}</li>
                        <li class="list-group-item border-secondary" style="background: linear-gradient(30deg,rgb(255, 255, 255),rgb(221, 180, 255) )">
                            <a href="{{url("/courses/show/$course->id")}}" class="btn btn-sm" style="background: greenyellow">View</a>
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

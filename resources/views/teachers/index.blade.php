@extends("layouts.app")
@section("content")
<div class="container-fluid py-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
    <div class="container">
        <div class="card mb-5 border-dark" style="background: white">
            <div class="card-body">
                <h3 class="mb-4"> <b>Teachers Management</b> </h3>
                <h4 class="mb-4"><b> Add New Teacher give Name,Address and Phone </b></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusantium sint cum voluptatem necessitatibus voluptas eos debitis illo officiis distinctio temporibus earum laboriosam at minus tempore blanditiis est, atque saepe eius adipisci alias quam pariatur placeat? Dolor vitae quas quidem explicabo laudantium numquam unde. Natus architecto sequi maxime necessitatibus laborum aspernatur molestias magni, et iusto, perspiciatis, molestiae ad similique. Fugit in incidunt a minus molestiae odit nihil accusantium eligendi consequatur totam! Officia veritatis eveniet quaerat quae repellendus asperiores corrupti veniam non perferendis voluptate aliquam ipsa consequatur sunt odit aut quod nostrum explicabo praesentium minus a, magnam odio, dicta rem. Non?</p>
                <a href="{{url("/teachers/add")}}" class="btn text-white" style="background: rgb(5, 152, 98)">+Add New Teacher</a>
            </div>
        </div>
       @if (session("flash_message"))
       <div class="alert alert-danger" style="max-width: 350px">
            {{session("flash_message")}}
       </div>
       @endif

       @if (session("info"))
       <div class="alert alert-light" style="max-width: 370px">
            {{session("info")}}
       </div>
       @endif

        <table class="table table-sm table-bordered table-striped table-dark">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{$teacher->id}}</td>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->address}}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>
                        <a href="{{url("/teachers/show/$teacher->id")}}" class="btn btn-sm btn-outline-info">View</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <footer class="mt-4 py-4 text-center text-muted border-top">
            <small>&copy; Copyright 2025</small>
        </footer>
    </div>
</div>
@endsection
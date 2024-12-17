@extends("layouts.app")
@section("content")
<div class="container-fluid py-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
<div class="container">
    <div class="card mb-5 border-dark" style="background: white">
        <div class="card-body">
            <h3 class="mb-4"> <b>Students Management</b> </h3>
            <h4 class="mb-4"><b> Add New Student give Name,Address and Phone </b></h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, illum. Excepturi magni quia corporis rerum provident iusto blanditiis repellendus delectus, tenetur exercitationem non totam minima maiores adipisci voluptas architecto perspiciatis, laboriosam, odio placeat facilis? Ipsum, repellat quisquam tenetur mollitia voluptatum minus doloremque sapiente? Maiores dolores possimus earum sequi quis cupiditate enim soluta ipsa labore sapiente. Magni amet aliquam impedit repellendus illo blanditiis id voluptatum veniam! Tempora ut obcaecati modi reiciendis! Sequi quo, dolor tempora similique enim aperiam! Exercitationem, quis voluptates fuga maiores optio itaque mollitia quae explicabo voluptatem libero iure totam quaerat facilis? Beatae rem magnam quibusdam, perferendis neque harum.</p>
            <a href="{{url("/students/add")}}" class="btn text-white" style="background: rgb(5, 152, 98)">+Add New Student</a>
        </div>
    </div>

   @if (session("flash_message"))
   <div class="alert alert-danger" style="max-width: 350px;">
        {{session("flash_message")}}
   </div>
   @endif

   @if (session("info"))
   <div class="alert alert-light" style="max-width: 400px;">
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
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->phone}}</td>
                <td>
                    <a href="{{url("/students/show/$student->id")}}" class="btn btn-sm btn-outline-info">View</a>
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
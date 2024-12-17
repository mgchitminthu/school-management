@extends("layouts.app")
@section("content")
<div class="container-fluid bg-light py-4">
    <div class="container" style="max-width: 500px">
        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <ul class="list-group" style="max-width: 230px">
                        <li class="list-group-item bg-danger text-white">{{$error}}</li>
                    </ul>
                @endforeach
        @endif
        <div class="card border-dark mt-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control mb-4 border-dark" value="{{$course->name}}">
                    <input type="text" name="start_date" class="form-control mb-4 border-dark" value=" {{$course->start_date}}">
                    <input type="text" name="duration" class="form-control mb-4 border-dark" value="{{$course->duration}}">
                    <input type="text" name="fee" class="form-control mb-4 border-dark" value="{{$course->fee}}">
                    <button type="submit" class="btn btn-light border-dark">Edit Course</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
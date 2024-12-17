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
                        <input type="text" name="name" class="form-control mb-4 border-dark" value="{{$student->name}}">
                        <textarea name="address" class="form-control mb-4 border-dark">
                            {{$student->address}}
                        </textarea>
                        <input type="text" name="phone" class="form-control mb-4 border-dark" value="{{$student->phone}}">
                        <button type="submit" class="btn btn-light border-dark">Edit Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
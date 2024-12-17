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
                    <select name="student_id" class="form-select mb-4 border-dark">
                        @foreach ($students as $student)
                            <option value="{{$student->id}}"  @selected($enrollment->student_id === $student->id)>{{$student->name}}</option>
                        @endforeach
                    </select>
                
                    <select name="course_id" class="form-select mb-4 border-dark">
                        @foreach ($courses as $course)
                            <option value="{{$course->id}}"  @selected($enrollment->course_id === $course->id)>{{$course->name}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="join_date" class="form-control mb-4 border-dark" value="{{$enrollment->join_date}}">
                    <button type="submit" class="btn btn-light border-dark">Edit Enrollment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
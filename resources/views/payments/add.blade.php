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
        <div class="card border-danger mt-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <select name="enrollment_id" class="form-select mb-4 border-danger">
                        @foreach ($enrollments as $enrollment)
                            <option value="{{$enrollment->id}}">{{$enrollment->student->name}}</option>
                        @endforeach
                    </select>

                    <input type="text" name="paid_date" class="form-control mb-4 border-danger" placeholder="Paid Date">
                    <input type="text" name="amount" class="form-control mb-4 border-danger" placeholder="Amount">
                    <button type="submit" class="btn btn-light border-danger">Add Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
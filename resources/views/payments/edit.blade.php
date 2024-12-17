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
                    <select name="enrollment_id" class="form-select mb-4 border-dark">
                        @foreach ($enrollments as $enrollment)
                            <option value="{{$enrollment->id}}"  @selected($payment->enrollment_id === $enrollment->id)>{{$enrollment->student->name}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="paid_date" class="form-control mb-4 border-dark" value="{{$payment->paid_date}}">
                    <input type="text" name="amount" class="form-control mb-4 border-dark" value="{{$payment->amount}}">
                    <button type="submit" class="btn btn-light border-dark">Edit Payment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
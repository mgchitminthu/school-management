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
                <h4>Payment {{$payment->enrollment->student->name}} Detail</h4>
            </div> 
           <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Payment No:</b>{{$payment->id}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Student Name:</b>{{$payment->enrollment->student->name}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Paid Date:</b>{{$payment->paid_date}}</li>
                <li class="list-group-item border-light" style="background: linear-gradient(90deg, rgb(247, 218, 240), rgb(183, 215, 240))"><b class="me-2">Amount:</b>{{$payment->amount}}</li>
            </ul>
           </div>
           <div class="card-footer">
                <a href="{{url("/payments/edit/$payment->id")}}" class="btn text-white" style="background: rgb(5, 152, 98) ">Edit</a>
                <a href="{{url("/payments/delete/$payment->id")}}" class="btn text-white" style="background: red">Delete</a>
           </div>
        </div>
    </div>
</div>
@endsection
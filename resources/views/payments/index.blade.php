@extends("layouts.app")
@section("content")
<div class="container-fluid py-4" style="background: linear-gradient(90deg,rgb(247, 218, 240), rgb(183, 215, 240) )">
    <div class="container">
        <div class="card mb-5 border-dark" style="background: white">
            <div class="card-body">
                <h3 class="mb-4"> <b>Payments Management</b> </h3>
                <h4 class="mb-4"><b>Add New payment give Enrollment, Paid Date and Amount</b></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ducimus enim incidunt architecto nihil iste error velit mollitia adipisci, nesciunt officia ex, aliquid deserunt placeat? Nulla molestias facere culpa, mollitia eaque neque iste et porro sunt? Adipisci, impedit ex illum libero nam quis est officia, sunt minus ullam in veniam quia deserunt consectetur animi nesciunt eos! Adipisci quod nobis, recusandae facere quisquam repellendus, neque voluptate aliquid officia asperiores natus error beatae quibusdam voluptates doloremque velit molestiae quas perspiciatis! Praesentium at cumque vel molestiae eveniet exercitationem repellat corrupti doloremque nam reprehenderit ipsam quis ratione, libero recusandae? Qui sunt animi officiis dicta.</p>
                <a href="{{url("/payments/add")}}" class="btn text-white"  style="background: rgb(5, 152, 98)">+Add New Payment</a>
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
        @foreach ($payments as $payment)
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card border-secondary mb-3" style="border-radius: 8px;">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item border-secondary text-white" style="background: linear-gradient(50deg, black,red)"> <b>Payment No:</b> {{$payment->id}} </li>
                        <li class="list-group-item border-secondary text-white" style="background: linear-gradient(50deg, black,red)"> <b>Enrollment:</b> {{$payment->enrollment->student->name}} </li>
                        <li class="list-group-item border-secondary text-white" style="background: linear-gradient(50deg, black,red)"><b>Paid Date:</b> {{$payment->paid_date}} </li>
                        <li class="list-group-item border-secondary text-white" style="background: linear-gradient(50deg, black,red)"> <b>Amount:</b> {{$payment->amount}} </li>
                        <li class="list-group-item border-secondary" style="background: linear-gradient(50deg, black,red)">
                            <a href="{{url("/payments/show/$payment->id")}}" class="btn btn-sm" style="background: rgb(210, 189, 250)">View</a>
                             <a href="{{url("report/$payment->id")}}" class="btn btn-sm text-white" style="background: rgb(5, 152, 98)">Print</a>
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
</div>
@endsection

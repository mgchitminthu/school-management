<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function index()
    {
        return view("payments.index",[
            "payments"=> Payment::all(),
        ]);
    }

    public function add()
    {
        return view("payments.add", [
            "enrollments"=> Enrollment::all(),
        ]);
    }
    public function create()
    {
        $validator = validator(request()->all(),[
            "enrollment_id"=> "required",
            "paid_date"=> "required|date_format:Y-m-d",
            "amount"=> "required",
        ]);
        
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $payment = new Payment;
        $payment->enrollment_id = request()->enrollment_id;
        $payment->paid_date = request()->paid_date;
        $payment->amount = request()->amount;
        $payment->save();
        return redirect("/payments")->with("info", "No: {$payment->id} Add Payment {$payment->enrollment->student->name} Successfully");
    }
    public function show($id)
    {
        return view("payments.show", [
            "payment"=> Payment::find($id),
        ]);
    }

    public function edit($id)
    {
        return view("payments.edit",[
            "payment"=> Payment::find($id),
            "enrollments"=> Enrollment::all(),
        ]);
    }

    public function update($id)
    {
        $validator = validator(request()->all(), [
            "enrollment_id"=> "required",
            "paid_date"=> "required|date_format:Y-m-d",
            "amount"=> "required",
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $payment = Payment::find($id);
        $payment->enrollment_id = request()->enrollment_id;
        $payment->paid_date = request()->paid_date;
        $payment->amount = request()->amount;
        $payment->save();

        return redirect("/payments/show/$id")->with("flash_message", "Edit Successfully");
    }

    public function delete($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect("/payments")->with("flash_message", "No: {$payment->id}-Payment {$payment->enrollment->student->name} Delete!");
    }

}

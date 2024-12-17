<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use function Laravel\Prompts\table;

class ReportController extends Controller
{
    public function report1($id) {
        $payment = Payment::find($id);
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin: 20px; padding:20px;'>";
        $print.= "<h1 align='center'>Payment Receipt </h1>";
        $print.= "<hr>";
        $print.= "<p>Receipt No: <b>" . $id ." </b> </p>";
        $print.= "<p>Student Name: <b>". $payment->enrollment->student->name ."</b></p>";
        $print.= "<p>Address : <b>". $payment->enrollment->student->address ."</b></p>";
        $print.= "<p>Phone: <b>". $payment->enrollment->student->phone ."</b></p>";

        $print.= "<hr>";

        $print.= "<table style='width: 100%;'>";
        $print.= "<tr>";
        $print.= "<td>Course</td>";
        $print.= "<td>Class Join Date</td>";
        $print.= "<td>Duration</td>";
        $print.= "<td>Amount</td>";
        $print.= "</tr>";

        $print.= "<tr>";
        $print.= "<td><h3>". $payment->enrollment->course->name . "</h3> </td>";
        $print.= "<td><h3>". $payment->enrollment->join_date . "</h3> </td>";
        $print.= "<td><h3>". $payment->enrollment->course->duration . "</h3> </td>";
        $print.= "<td><h3>". $payment->amount . "</h3> </td>";
        $print.= "</tr>";
        $print.= "</table>";
        $print.= "<hr>";

        $print.= "<span>Printed By: <b>Technology School</b> </span>";
        // auth use and no use think
        $print.= "<span style='margin-left: 240px'>Printed Date: <b>" . date("Y-m-d"). "</b> </span>";
        $print.= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\GuaranteeLetter2018 as Gl;

class GuaranteeLetterController extends Controller
{
    public function index(){
        $data = Gl::all();

        return response()->json($data);
    }

    public function new_control_no(){
        $now = Carbon::now();
        $year_now = $now->year;
        $month_now = $now->month;
        $month = sprintf('%02d', $month_now);
        $year_month = $year_now.'-'.$month.'-';

        $count = Gl::whereYear('created_at', $year_now)->count();

        if ($count > 0) {

            $last_iar = Gl::orderBy('iar_no', 'desc')->first();
            $last_iar_no = substr($last_iar->iar_no, -4);
            $new = (int)$last_iar_no + 1;
            $new_gl_no = sprintf('%04d', $new);
            $control_no = $year_month.$new_control_no;
            
        } else {

            $control_no = $mlc_year_month.'0001';

        }

        return $control_no;
    }

    public function new_gl_no(){
        $new_control_no = $this->new_control_no;

        $gl_no = 'MLC-'.$new_control_no;

        return $gl_no;
    }

    public function store(Request $request){

    }

    public function update(Request $request, $id){

    }

    public function show($id){

    }

    public function destroy($id){

    }
}

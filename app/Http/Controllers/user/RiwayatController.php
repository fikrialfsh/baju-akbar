<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Detailorder;
use App\Rekening;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bayar()
    {
        $user_id = \Auth::user()->id;

        $order = DB::table('order')
                    ->join('status_order','status_order.id','=','order.status_order_id')
                    ->select('order.*','status_order.name')
                    ->where('order.status_order_id',1)
                    ->where('order.user_id',$user_id)->get();
        $dicek = DB::table('order')
                    ->join('status_order','status_order.id','=','order.status_order_id')
                    ->select('order.*','status_order.name')
                    ->where('order.status_order_id','!=',1)
                    ->Where('order.status_order_id','!=',5)
                    ->Where('order.status_order_id','!=',6)
                    ->where('order.user_id',$user_id)->get();
        $histori = DB::table('order')
        ->join('status_order','status_order.id','=','order.status_order_id')
        ->select('order.*','status_order.name')
        ->where('order.status_order_id','!=',1)
        ->Where('order.status_order_id','!=',2)
        ->Where('order.status_order_id','!=',3)
        ->Where('order.status_order_id','!=',4)
        ->where('order.user_id',$user_id)->get();
        $data = array(
            'order' => $order,
            'dicek' => $dicek,
            'histori'=> $histori
        );
       
        return view('user.order.belumbayar', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function riwayat()
    {
        $user_id = \Auth::user()->id;

        $order = DB::table('order')
                    ->join('status_order','status_order.id','=','order.status_order_id')
                    ->select('order.*','status_order.name')
                    ->where('order.status_order_id',1)
                    ->where('order.user_id',$user_id)->get();
        $dicek = DB::table('order')
                    ->join('status_order','status_order.id','=','order.status_order_id')
                    ->select('order.*','status_order.name')
                    ->where('order.status_order_id','!=',1)
                    ->Where('order.status_order_id','!=',5)
                    ->Where('order.status_order_id','!=',6)
                    ->where('order.user_id',$user_id)->get();
        $histori = DB::table('order')
        ->join('status_order','status_order.id','=','order.status_order_id')
        ->select('order.*','status_order.name')
        ->where('order.status_order_id','!=',1)
        ->Where('order.status_order_id','!=',2)
        ->Where('order.status_order_id','!=',3)
        ->Where('order.status_order_id','!=',4)
        ->where('order.user_id',$user_id)->get();
        $data = array(
            'order' => $order,
            'dicek' => $dicek,
            'histori'=> $histori
        );
       
        return view('user.order.riwayat', $data);
    }
    public function proses()
    {
        $user_id = \Auth::user()->id;

        $order = DB::table('order')
                    ->join('status_order','status_order.id','=','order.status_order_id')
                    ->select('order.*','status_order.name')
                    ->where('order.status_order_id',1)
                    ->where('order.user_id',$user_id)->get();
        $dicek = DB::table('order')
                    ->join('status_order','status_order.id','=','order.status_order_id')
                    ->select('order.*','status_order.name')
                    ->where('order.status_order_id','!=',1)
                    ->Where('order.status_order_id','!=',5)
                    ->Where('order.status_order_id','!=',6)
                    ->where('order.user_id',$user_id)->get();
        $histori = DB::table('order')
        ->join('status_order','status_order.id','=','order.status_order_id')
        ->select('order.*','status_order.name')
        ->where('order.status_order_id','!=',1)
        ->Where('order.status_order_id','!=',2)
        ->Where('order.status_order_id','!=',3)
        ->Where('order.status_order_id','!=',4)
        ->where('order.user_id',$user_id)->get();
        $data = array(
            'order' => $order,
            'dicek' => $dicek,
            'histori'=> $histori
        );
       
        return view('user.order.proses', $data);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

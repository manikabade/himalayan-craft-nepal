<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\StoreOrderValidation;
use App\Http\Requests\Admin\Order\UpdateOrderValidation;
use App\Models\Admin\Order;
use App\Models\Admin\Item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $orders =Order::latest()->paginate(1000);
            $edit =0;
            return view('admin.order.index',compact('orders','edit'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orders['items']=Item::select('item_name','id')->active()->get();
        $edit =0;
        return view('admin.order.create',compact('orders','edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderValidation $request)
    {
        $data = $request->validated();
        $order =Order::create($request->validated());

        return redirect()->route('admin.order.index')
            ->with($order? 'success' :'error', $order? 'Created Successfully' :'Error Creating Data');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [];
        $orders['items']=Item::select('item_name','id')->active()->get();
        $data['row']=Order::find($id);
        $edit =1;
        return view('admin.order.edit',compact('data','orders','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderValidation $request,Order $order)
    {
        $data = $request->validated();
        $order->update($data);
        return redirect()->route('admin.order.index')
            ->with($order? 'success' : 'error', $order ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.order.index')->with('sucess','order has been deleted sucessfully');
    }
}

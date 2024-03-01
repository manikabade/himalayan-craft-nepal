<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Item;
use App\Models\Admin\Order;
use App\Models\Admin\Feedback;
use App\Models\Admin\News;
use App\Models\Admin\Picture;
// use App\Models\Admin\Video;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [];
        $data['_order'] = Order::count();
        $data['_item'] = Item::count();
        $data['_feedback'] = Feedback::count();
        $data['_news'] = News::count();
        $data['_picture'] = Picture::count();
        // $data['_video'] =Video::count();


        return view('admin.index',compact('data'));
    }
}

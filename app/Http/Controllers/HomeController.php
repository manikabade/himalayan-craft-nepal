<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Order\StoreOrderValidation;
use App\Http\Requests\Admin\Feedback\StoreFeedbackValidation;
// use App\Models\Admin\MedicalReport;
use App\Models\Admin\News;
use App\Models\Admin\Item;
use App\Models\Admin\Feedback;
use App\Models\Admin\Slider;
use App\Models\Admin\Picture;
use App\Models\Admin\Video;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
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
        $data = [] ;

        $data['_items'] = Item::active()->get();
        $data['_news'] = News::active()->get();
        $data['_sliders'] = Slider::active()->get();
        $data['_pictures'] = Picture::active()->get();
        $data['_videos'] = Video::active()->get();
        // $data['_aboutus'] = AboutUs::active()->get();

        return view('welcome',compact('data') );
    }

    public function orderForm(StoreOrderValidation $request)
    {
        try {
            $data = $request->validated();
            $order = Order::create($data);

            Alert::success('Success', 'Order Successfully.');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Order Creation Failed.');
            return back()->withInput($data);
        }
    }


    public function feedbackForm(StoreFeedbackValidation $request)
    {
        try {
            $data = $request->validated();
            $feedback = Feedback::create($data);

            Alert::success('Success', 'Feedback Successfully.');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Feedback Failed.');
            return back()->withInput($data);
        }
    }


}


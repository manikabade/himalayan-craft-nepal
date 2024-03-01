<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Picture\StorePictureValidation;
use App\Http\Requests\Admin\Picture\UpdatePictureValidation;
use App\Models\Admin\Picture;

class PictureController extends Controller
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
        $pictures =Picture::latest()->paginate(1000);
        $edit =0;
        return view('admin.picture.index',compact('pictures','edit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit =0;
        return view('admin.picture.create',compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePictureValidation $request)
    {
        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/picture')))
                @mkdir(public_path('images/picture'));
            $file->move(public_path('images/picture'),$file_name);
            $data['image'] =$file_name;
        }
        $picture =Picture::create($data);
        return redirect()->route('admin.picture.index')
            ->with($picture? 'success' :'error', $picture? 'Created Successfully' :'Error Creating Data');
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
        $data=[];
        $data['row']=Picture::find($id);
        $edit =1;
        return view('admin.picture.edit',compact('data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePictureValidation $request,Picture $picture)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/picture')))
                @mkdir(public_path('/images/picture'));
            $file->move(public_path('images/picture'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =Picture::where('id',$request['id'])->first();

            $old_path ='images/picture/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }
        }
        $picture->update($data);
        return redirect()->route('admin.picture.index')
            ->with($picture ? 'success' : 'error', $picture ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        return redirect()->route('admin.picture.index')->with('sucess','picture has been deleted sucessfully');
    }

}


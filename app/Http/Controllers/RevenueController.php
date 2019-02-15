<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revenue;
use App\Category;

class RevenueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $revenue_select = Revenue::all();
        $category_select = Category::all()->where('status', '=', 'revenue');
        return view('revenue.main', [
            'revenue_select' => $revenue_select,
            'category_revenue' => $category_select,
            'count' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('revenue.create');
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
        $input['users_id'] = $request->users_id;
        $input['category_id'] = $request->category_id;
        $input['image'] = 'images/noimage.png';
        if($file = $request->file('photo')){
            $name = time().$file->getClientOriginalName();
            $file->move('images/uploads/images',$name);
            $icon = Revenue::create(['name' => $name]);
            $input['image'] = $icon->id;
        }
        $input['name'] = $request->name;
        $input['content'] = $request->content;
        $input['price']  = $request->price;
        Revenue::create($input);
        return redirect('/revenue')->with('success', 'เพิ่ม รายรับ เรียบร้อย');
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
        $revenum_show = Revenue::where('id', '=', $id)->get();
        return view('revenue.show', ['revenue_show'=>$revenum_show]);
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

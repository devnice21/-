<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenditure;
use App\Category;

class ExpenditureController extends Controller
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
        $expenditure_select = Expenditure::all();
        $category_select = Category::all()->where('status', '=', 'expenditure');
        return view('expenditure.main', [
            'expenditure_select' => $expenditure_select,
            'category_expenditure' => $category_select,
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
        return view('expenditure.create');
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
            $icon = Expenditure::create(['name' => $name]);
            $input['image'] = $icon->id;
        }
        $input['name'] = $request->name;
        $input['content'] = $request->content;
        $input['price']  = $request->price;
        Expenditure::create($input);
        return redirect('/expenditure')->with('success', 'เพิ่ม รายจ่าย เรียบร้อย');
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
        $expenditure_show = Expenditure::where('id', '=', $id)->get();
        return view('expenditure.show', ['expenditure_show'=>$expenditure_show]);
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

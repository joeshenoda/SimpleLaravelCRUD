<?php

namespace App\Http\Controllers;


use App\Demoyoue;
use App\demoyouesrele;
use Illuminate\Http\Request;


class adminyou extends Controller
{
    //
    public function con($id){
        $arr=array('id'=>$id,'name'=>'youssef11');
        return view("admin.you",$arr);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewmodel(){
       // $product=Demoyoue::where('id','>',15)->count();
       // echo $product;
        $product=Demoyoue::all();
        $product1=demoyouesrele::all();
        /** @var TYPE_NAME $product */
      $arr= array('product'=>$product,'product1'=>$product1);
      return view("admin.view",$arr);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request){
        if($request-> isMethod('post')){
            $this->validate($request,[
                'name'=>'required|max:25|unique:demoyoues',
                'std_no'=>'required|max:9|min:2|'
            ]);
            $newrequest=new Demoyoue();
            $newrequest->name=$request->input('name');
            $newrequest->std_no=$request->input('std_no');
            $newrequest->save();
             return redirect('/product');

        }

        return view("admin.add");
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function edit(Request $request, $id){
        if($request-> isMethod('post')){
            $this->validate($request,[
                'name'=>'required|max:25|unique:demoyoues',
                'std_no'=>'required|max:9|min:2|'
            ]);
            $newrequest= Demoyoue::find($id);
            $newrequest->name=$request->input('name');
            $newrequest->std_no=$request->input('std_no');
            $newrequest->save();
            return redirect('/product');
        }
        else{
            $product=Demoyoue::find($id);
            /** @var TYPE_NAME $product */
            $arr= array('product'=>$product);
            return view("admin.edit",$arr);}


    }


}

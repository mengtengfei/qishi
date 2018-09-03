<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //显示列表
        // $list=DB::table('qishi_links')->get();
        // 分页加搜索
        $name=$request->input('keyword');
        $list=DB::table('qishi_links')->where('l_name','like',"%".$name."%")->paginate(2);
        return view('admin.links.index',['title'=>'友情链接列表','data'=>$list,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('admin.links.add.add',['title'=>'友情链接添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //接受数据
        $res=$request->except(['_token']);
        // 设置时间戳
        $res['l_time']=time();
        // dd($res);
        // 执行添加到数据库
        if (DB::table('qishi_links')->insert($res)) {
            // 添加成功跳转到列表页
            return redirect('/qishiadmin/links')->with('success','数据添加成功');
        }else{
            // 失败返回添加页
            return redirect('/qishiadmin/links/create')->with('error','数据添加失败');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
      
        // 状态修改
        // 获取当前id的数据
        $data2=DB::table('qishi_links')->where('l_id','=',$id)->first();

        // 如果状态=1
        if ($data2->l_state==1) {
            // 修改字段值为0表示下架
          if ( DB::table('qishi_links')->where('l_id','=',$id)->update(['l_state'=>0])) {
             return back()->with('success','下架成功');
          }else{
            return back()->with('error','下架失败');
          }
        }else{

            if (DB::table('qishi_links')->where('l_id','=',$id)->update(['l_state'=>1])) {
                return back()->with('success','上架成功');
            }else{
            return back()->with('error','上架失败');
          }
        }
        // dd($data2);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 获取当前id的数据
        $str=DB::table('qishi_links')->where('l_id','=',$id)->first();
        //加载修改页面
        return view('admin.links.edit.edit',['title'=>'修改链接','data'=>$str]);
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
        //获取修改信息
        $user=$request->except(['_method','_token']);
        // dd($user);
        // 将修改的数据存入数据库
        $data1=DB::table('qishi_links')->where('l_id','=',$id)->update($user);
        if ($data1) {
            return redirect('/qishiadmin/links')->with('success','修改成功');

        }else{
            return back()->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除
        if (DB::table('qishi_links')->where('l_id','=',$id)->delete()) {
            return redirect('/qishiadmin/links')->with('success','删除成功');
        }else{
            return redirect('/qishiadmin/links')->with('error','删除失败');
        }
    }
    // public function state(Request $request)
    // {
    //     // 状态修改
    //     $data2=$request->input(['l_state']);
    //     dd($data2);
    // }
}
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// 导入哈希
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 获取搜索关键字
        $k=$request->input('keyword');
        // 分页加搜索
        $user=DB::table('qishi_admin_users')->where('u_name','like','%'.$k.'%')->paginate(1);
        //加载管理员列表 返回参数
        return view('admin.users.index',['title'=>'管理员列表','user'=>$user,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载管理员添加视图
        return view('admin.users.add.add',['title'=>'管理员添加']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 获取添加的数据
        $data=$request->all();
        // 判断密码是否一致
        if ($data['u_pass'] !== $data['u_repass']) {
            // 存入闪存
            // $request->flashOnly($data['u_name']);
            return back()->with('error','密码不一致，请重新输入')->withInput();
        }

        $data=$request->except(['_token','u_repass']);
        // 密码加密
        $data['u_pass']=Hash::make($data['u_pass']);
        // 设置添加时间
        $data['u_time']=time();
        // dd($data);
        // 插入数据库
        if (DB::table('qishi_admin_users')->insert($data)) {
            // 成功
            return redirect('/qishiadmin/users')->with('success','添加成功');
        }else{
            // 失败
            return back()->with('error','添加失败');
        }
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
       
        // 删除数据
        if (DB::table('qishi_admin_users')->where('u_id','=',$id)->delete()) {
            return redirect('/qishiadmin/users')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }

    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 删除session
        $request->session()->pull('u_id');
        $request->session()->pull('u_name');
        $request->session()->pull('nodelist');
       return redirect("/qishiadmin/login/create");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示登录页面
        return view('admin.login.login');
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
        $data=$request->only(['u_account','u_pass']);
        $user=DB::table('qishi_admin_users')->where('u_account','=',$data['u_account'])->first();
        if ($user) {
            if (Hash::check($data['u_pass'],$user->u_pass)) {
                // id存入session
                session(['u_id'=>$user->u_id]);
                // name存入session
                session(['u_name'=>$user->u_name]);
                $list=DB::table("qishi_user_node")
                // 用户权限id=权限表的id
                ->join("qishi_node","qishi_user_node.nid",'=',"qishi_node.n_id")
                // 用户权限id=传过来的用户id
                ->where("qishi_user_node.uid",'=',"{$user->u_id}")
                ->select("qishi_node.n_name","qishi_node.n_controller","qishi_node.n_method")
                ->get();
                // dd($list);
                // 把后台首页权限写入到权限列表里
                $nodelist['IndexController'][]='index';
                // 遍历
                foreach ($list as $v) {
                    $nodelist[$v->n_controller][]=$v->n_method;
                    // 如果有create方法就添加store方法
                    if ($v->n_method=='create') {
                        $nodelist[$v->n_controller][]='store';
                    }
                    if ($v->n_method=='edit') {
                        // 如果有edit方法就添加update方法
                        $nodelist[$v->n_controller][]='update';
                    }
                }

                // dd($nodelist);
                // 把权限列表存入到session里
                session(['nodelist'=>$nodelist]);



                return redirect('/qishiadmin')->with('success','登录成功');
            }else{
                return back()->with('error','抱歉，密码有误');
            }
        }else{
            return back()->with('error','抱歉，用户名有误');
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
        //
    }

}

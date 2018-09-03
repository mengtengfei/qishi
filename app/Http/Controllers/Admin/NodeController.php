<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class NodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
    // 分配权限
    public function auth($id)
    {
        // echo $id;
        // 获取当前的用户名
        $user=DB::table('qishi_admin_users')->where('u_id','=',$id)->first();
        $node=DB::table('qishi_node')->get();
        // 获取当前用户所拥有的权限
        $data=DB::table('qishi_user_node')->where('uid','=',$id)->get();
        // dd($data);
        // 判断
        if (count($data)) {
            foreach ($data as $v) {
                $nids[]=$v->nid;
            }
             return view('admin.users.node.index',['node'=>$node,'user'=>$user,'nids'=>$nids]);
        }else{
             return view('admin.users.node.index',['node'=>$node,'user'=>$user,'nids'=>array()]);
        }
       
    }
    // 保存权限
    public function save(Request $request)
    {
        // echo '1';
        $uids=$_POST['uids'];
        // dd($nids);
        // 获取权限id
        $nid=$request->input('nids');
        // dd($nid);
        // 删除当前用户拥有的权限
        DB::table('qishi_user_node')->where('uid','=',$uids)->delete();
        // 遍历$nid
        foreach ($nid as $v) {
            $data['uid']=$uids;
            $data['nid']=$v;
            // dd($data);
            DB::table('qishi_user_node')->insert($data);
        }
        return redirect('/qishiadmin/users')->with('success','权限分配成功');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

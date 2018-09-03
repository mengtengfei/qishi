<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         
        if($request->session()->has('u_id')) {
        // 获取控制器和方法名
        $action=$request->route()->getActionMethod();
        $actions=explode('\\', \Route::current()->getActionName());
        //或$actions=explode('\\', \Route::currentRouteAction());
        $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
        $func=explode('@', $actions[count($actions)-1]);
        // 控制器名
        $controller=$func[0];
        // 方法名
        $actionName=$func[1]; 

        // echo $controllerName.':'.$actionName;exit;
        $nodelist=session('nodelist');
        // if (empty($nodelist[$controller]) || !in_array($action,$nodelist[$controller])) {
        //       return redirect('/qishiadmin')->with('error','抱歉，你没有权限访问该模块，请联系大佬');
        //   }  

            return $next($request);
        }else{
             return redirect('/qishiadmin/login/create');
        } 
           
       
    }
}

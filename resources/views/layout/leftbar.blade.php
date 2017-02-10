<div class="left-aside desktop-view">

        <a href="{{ url('/') }}" class="iconic-logo">
            <img class="common-page-logo"  src="{{url('/images/shengshilong.jpg')}} " alt="Matmix Logo" style="width: 260px">
        </a>

       {{-- <a href="{{ url('/') }}" class="large-logo">
            <img class="common-page-logo" src="/shnegshilogo.png" alt="Matmix Logo">
        </a>--}}
        {{--<div class="common-logo-text">盛事后台管理系统</div>
        <span class="aside-pin waves-effect"><i class="fa fa-thumb-tack"></i></span>
        <span class="aside-close waves-effect"><i class="fa fa-times"></i></span>--}}

    <div class="left-navigation">
        <ul class="list-accordion">
            <li>
                <a href="{{url('/')}}" class="{{ mla('DashboardController@index') }}">
                    <span class="nav-icon"><i class="fa fa-dashboard"></i></span>
                    <span class="nav-home">首页</span>
                </a>
            </li>

            <li>
                <a href="#" class="waves-effect {{ mla('UserController') }}">
                    <span class="nav-icon"><i class="fa fa-user"></i></span>
                    <span class="nav-label">用户中心</span>
                </a>
                <ul>
                    <li><a href="{{route('user.my',Auth::user()->id)}}" class="{{ mla('UserController@my') }}">我的资料</a></li>
                    <li><a href="{{route('user.index') }}" class="{{ mla('UserController@index') }}">用户列表</a></li>
                    <li><a href="{{route('user.trash',Auth::user()->id) }}" class="{{ mla('UserController@trash') }}">用户回收站</a></li>
                    <li><a href="{{route('user.create')}}" class="{{ mla('UserController@create', 'UserController@store','UserController@show') }}">创建用户</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#" class="waves-effect {{ mla('Acl*Controller') }}">
                    <span class="nav-icon"><i class="ico-push-pin"></i></span>
                    <span class="nav-label">权限配置</span>
                </a>
                <ul>
                    <li><a href="{{ route('acl.resource.index') }}" class="{{ mla('AclResourceController@index') }}">权限列表</a></li>
                    <li><a href="{{ route('acl.role.index') }}" class="{{ mla('AclRoleController@index') }}">角色列表</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="waves-effect {{ mla('SystemController') }}">
                    <span class="nav-icon"><i class="ico-hammer-wrench"></i></span>
                    <span class="nav-label">系统编辑</span>
                </a>
                <ul>
                    <li><a href="{{ route('system.logs') }}" class="{{ mla('SystemController@logs') }}">日志</a></li>
                    <li><a href="{{ route('system.action') }}" class="{{ mla('SystemController@action') }}">操作记录</a></li>
                    <li><a href="{{ route('system.login-history') }}" class="{{ mla('SystemController@loginHistory') }}">登录记录</a></li>

                </ul>
            </li>



        </ul>
    </div>
</div>

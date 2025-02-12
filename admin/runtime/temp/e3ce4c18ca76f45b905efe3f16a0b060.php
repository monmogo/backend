<?php /*a:6:{s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/banks/index.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/meta.html";i:1638604915;s:72:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/style.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/menu.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/head.html";i:1638604915;s:73:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/footer.html";i:1638604915;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>密獾娱乐</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="author" content="yinqi">

<link href="/static/admin/index/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/admin/index/css/materialdesignicons.min.css" rel="stylesheet">
<link href="/static/admin/index/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css" />
<style type="text/css" media="all">
.layui-form-label {
    width: 100px;
}
.layui-layout{
    margin-top: 10px;
}
.sidebar-header {
    height: 70px;
}
.sidebar-header a {
    font-size: 30px;
    color:#fff;
    line-height: 68px;
}

</style>
</head>
  
<body data-logobg="color_8" data-sidebarbg="color_8">
<div class="layout-web">
  <div class="layout-container">
    <!--左侧导航-->
    <aside class="layout-sidebar">
      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="<?php echo url('index/index'); ?>">蜜獾娱乐</a>
      </div>
      <div class="layout-sidebar-scroll"> 
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item <?php if(Request::controller() == 'Index'): ?> active <?php endif; ?>"> <a href="<?php echo url('index/index'); ?>"><i class="mdi mdi-home"></i>首页</a></li>
            <li class="nav-item nav-item-has-subnav <?php if(Request::controller() == 'Data'): ?> active open <?php endif; ?>">
              <a href="javascript:void(0)"><i class="mdi mdi-poll"></i>数据统计</a>
              <ul class="nav nav-subnav">
                <li><a href="<?php echo url('data/register'); ?>">注册统计</a></li>
                <li><a href="<?php echo url('data/recharge'); ?>">充值统计</a></li>
                <li><a href="<?php echo url('data/withdrawal'); ?>">提现统计</a></li>
              </ul>
            </li>   
            <li class="nav-item nav-item-has-subnav <?php if(Request::controller() == 'Withdrawal' 
            || Request::controller() == 'Banks'): ?> active open <?php endif; ?>">
              <a href="javascript:void(0)"><i class="mdi mdi-bank"></i>财务管理</a>
              <ul class="nav nav-subnav">
                <li><a href="<?php echo url('withdrawal/index'); ?>">提现管理</a></li>
                <li><a href="<?php echo url('Banks/index'); ?>">银行管理</a></li>
              </ul>
            </li>     
            <li class="nav-item nav-item-has-subnav <?php if(Request::controller() == 'Log' || Request::controller() == 'User' || Request::controller() == 'Role'): ?> active open <?php endif; ?>">
              <a href="javascript:void(0)"><i class="mdi mdi-account"></i>超管管理</a>
              <ul class="nav nav-subnav">
                <li> <a href="<?php echo url('user/index'); ?>">管理员管理</a></li>
                <li> <a href="<?php echo url('role/index'); ?>">管理组管理</a> </li>
                <li> <a href="<?php echo url('log/index'); ?>">日志管理</a> </li>
              </ul>
            </li>
            <li class="nav-item-has-subnav 
            <?php if(Request::controller()=='Member'
            || Request::controller() == 'Agent'): ?> active open <?php endif; ?>">
                <a href="javascript:void(0)"><i class="mdi mdi-account-multiple"></i>会员管理</a>
                <ul class="nav nav-subnav">
                     <li> <a href="<?php echo url('agent/index'); ?>">代理列表</a></li>
                     <li> <a href="<?php echo url('member/index'); ?>">会员列表</a></li>
                </ul>
            </li>            
            <li class="nav-item nav-item-has-subnav 
            <?php if(Request::controller() == 'Lotteryclass' 
            || Request::controller() == 'Lottery'
            || Request::controller() == 'Openlottery'
            || Request::controller() == 'Yulottery'
            || Request::controller() == 'Buylottery'): ?> active open <?php endif; ?>">
              <a href="javascript:void(0)"><i class="mdi mdi-gamepad-variant"></i>彩票管理</a>
              <ul class="nav nav-subnav">
                <li> <a href="<?php echo url('lotteryclass/index'); ?>">彩票分类</a></li>
                <li> <a href="<?php echo url('lottery/index'); ?>">彩票列表</a></li>
                <li> <a href="<?php echo url('openlottery/index'); ?>">开奖记录</a></li>
                <li> <a href="<?php echo url('buylottery/index'); ?>">投注记录</a></li>
                <li> <a href="<?php echo url('Yulottery/index'); ?>">预设开奖</a></li>
              </ul>
            </li>            
            <li class="nav-item nav-item-has-subnav <?php if(Request::controller() == 'Video' || Request::controller() == 'Videoclass'): ?> active open <?php endif; ?>">
              <a href="javascript:void(0)"><i class="mdi mdi-video"></i>视频管理</a>
              <ul class="nav nav-subnav">
                <li> <a href="<?php echo url('videoclass/index'); ?>">视频分类</a> </li>
                <li> <a href="<?php echo url('video/index'); ?>">视频列表</a> </li>
              </ul>
            </li>
            <li class="nav-item nav-item-has-subnav <?php if(Request::controller() == 'System' 
            || Request::controller() == 'Notice'
            || Request::controller() == 'Banner'): ?> active open <?php endif; ?>">
              <a href="javascript:void(0)"><i class="mdi mdi-settings"></i>系统管理</a>
              <ul class="nav nav-subnav">
                <li> <a href="<?php echo url('system/index'); ?>">基本配置</a> </li>
                <li> <a href="<?php echo url('notice/index'); ?>">公告配置</a> </li>
                <li> <a href="<?php echo url('banner/index'); ?>">广告配置</a> </li>
              </ul>
            </li>  
          </ul>
        </nav>
        
        <div class="sidebar-footer">
          <p class="copyright">Copyright &copy; 2019.  All rights <a href="http://www.bootstrapmb.com/">reserved</a>. </p>
        </div>
      </div>
      
    </aside>
    <!--End 左侧导航-->
    <!--头部信息-->
    <header class="layout-header">
      
      <nav class="navbar navbar-default">
        <div class="topbar">
          
          <div class="topbar-left">
            <div class="aside-toggler">
              <span class="toggler-bar"></span>
              <span class="toggler-bar"></span>
              <span class="toggler-bar"></span>
            </div>
            <!--<span class="navbar-page-title"> </span>-->
          </div>
          
          <ul class="topbar-right">
            <li class="dropdown dropdown-profile">
              <a href="javascript:void(0)" data-toggle="dropdown">
                <img class="img-avatar img-avatar-48 m-r-10" src="/static/admin/index/images/users/avatar.jpg" alt="管理员" />
                <span><?php echo htmlentities($userinfo['username']); ?>【<?php echo htmlentities($role['name']); ?>】<span class="caret"></span></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li> <a href="pages_profile.html"><i class="mdi mdi-account"></i> 个人信息</a> </li>
                <li> <a href="pages_edit_pwd.html"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
                <li class="divider"></li>
                <li> <a href="<?php echo url('base/Logout'); ?>"><i class="mdi mdi-logout-variant"></i> 退出登录</a> </li>
              </ul>
            </li>
            <!--切换主题配色-->
		    <li class="dropdown dropdown-skin">
			  <span data-toggle="dropdown" class="icon-palette"><i class="mdi mdi-palette"></i></span>
			  <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                <li class="drop-title"><p>主题</p></li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="site_theme" value="default" id="site_theme_1" checked>
                    <label for="site_theme_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="dark" id="site_theme_2">
                    <label for="site_theme_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="translucent" id="site_theme_3">
                    <label for="site_theme_3"></label>
                  </span>
                </li>
			    <li class="drop-title"><p>LOGO</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>头部</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>侧边栏</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
				</li>
			  </ul>
			</li>
            <!--切换主题配色-->
          </ul>
          
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->

<!--页面主要内容-->
<main class="layout-content">
<div class="container-fluid">
<div class="row">
      <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><h4>银行管理</h4></div>
            <div class="card-body">
                <form class="layui-form" action="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">会员用户名</label></label>
                        <div class="layui-input-inline">
                          <input type="text" name="username" placeholder="请输入关键字搜索"  autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-inline" id="time">
                            <label class="layui-form-label">起始时间</label>
                            <div class="layui-input-inline">
                                <input name="start_time" type="text" autocomplete="off" id="startDate" class="layui-input" placeholder="开始日期">
                            </div>
                            <label class="layui-form-label">结束时间</label>
                            <div class="layui-input-inline">
                                <input name="end_time" type="text" autocomplete="off" id="endDate" class="layui-input" placeholder="结束日期">
                            </div>  
                        </div> 
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label"></label>
                            <div class="layui-input-inline">
                                <input class="layui-btn layui-btn-search" type="button" lay-submit="" lay-filter="submitSearch" value="检索">
                                <button type="reset" class="layui-btn layui-btn-primary layui-border-orange">重置</button>
                            </div>
                        </div>
                    </div>                    
                </form>
           </div>
          </div>
      </div>
      
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <table style="height: 125px;" border="1" width="640" cellspacing="0" cellpadding="2" class="layui-hide" id="table" lay-filter="table"></table>
          </div>
        </div>
      </div>
</div>

</div>

</main>
  </div>
</div>

<script type="text/javascript" src="/static/admin/index/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/index/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/admin/index/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/static/admin/index/js/main.js"></script>
<script src="https://www.layuicdn.com/layui/layui.js"></script>
<!--图表插件-->
<script type="text/javascript" src="/static/admin/index/js/Chart.js"></script>
</body>
</html>
<!--End 页面主要内容-->
<script type="text/html" id="toolbar">
  <div class="layui-btn-container">
    <!--<button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
    <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
    <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>-->
    <button type="button" class="layui-btn layui-btn-sm" lay-event="add"><i class="layui-icon">&#xe654;</i>添加</button>
    <button type="button" class="layui-btn layui-btn-sm" lay-event="refresh"><i class="layui-icon">&#xe669;</i>刷新</button>
  </div>
</script>
<script type="text/html" id="bar">
  <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
  <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
<script>
    layui.use(['table','element','form','layer','laydate'], function(){
        var $ = layui.$, 
        table = layui.table, 
        form = layui.form, 
        layer = layui.layer, 
        laydate = layui.laydate;
        laydate.render({
            elem: '#time'
            //设置开始日期、日期日期的 input 选择器
            //数组格式为 2.6.6 开始新增，之前版本直接配置 true 或任意分割字符即可
            ,range: ['#startDate', '#endDate']
        });
        function table_reload(field) {
            layer.msg('请稍候！', { icon: 16 , shade: 0.01, time: 2000000});
            table.reload('table', {
                url: "<?php echo url('list'); ?>",
                where: {
                    name: field.name,
                    username: field.username,
                    key: field.key,
                    start_time: field.start_time,
                    end_time: field.end_time
                }
            });
    
            layer.close(layer.index);
        }
        form.on('submit(submitSearch)', function(data){
            
            table_reload(data.field);
        });
        form.on('switch(state)', function(data){
          var state = data.elem.checked ?1:0;
          var id = data.elem.attributes['dataid'].nodeValue;
          var index = layer.load(0, {shade: false});
            $.ajax({
                type: 'post',
                url: "<?php echo url('doEditState'); ?>",
                data:{id:id,state:state},
                dataType:"json",
                success: function(data) {
                    if(data.code === 200){
                        layer.msg(data.msg, {
                          icon: 1,
                          time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                            table.reload('table');
                        });                      
                    }else{
                        layer.msg(data.msg, {
                          icon: 1,
                          time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                            table.reload('table');
                        }); 
                    }  
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    layer.closeAll();
                    if (textStatus == "timeout") {
                        layer.msg('请求超时！', {
                          icon: 2,
                          time: 1500 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        });                      
                    } else {
                        layer.msg('服务器错误！', {
                          icon: 2,
                          time: 1500 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        });                         
                    }
                },                    
            });                  
        });         
        table.render({
            elem: '#table',
            url: "<?php echo url('list'); ?>"
            ,toolbar: '#toolbar' // 开启头部工具栏，并为其绑定左侧模板
            ,defaultToolbar: ['filter', 'exports', 'print']
            ,title: '银行列表'
            ,cols: [[
                {type: 'checkbox', fixed: 'left'},
                {field:'id', title:'ID', fixed: 'left', unresize: true, sort: true,width:100},
                {field:'username', title:'用户', sort: true},
                {field:'name', title:'姓名', sort: true},
                {field:'bankid', title:'银行卡号', sort: true},
                {field:'bankinfo', title:'银行信息', sort: true},
                {field:'create_time', title:'添加时间', sort: true},
                {fixed: 'right', title:'操作', fixed: 'right', unresize: true, toolbar: '#bar'}
            ]]
            ,page: true
        });
  
        //头工具栏事件
        table.on('toolbar(table)', function(obj){
            var checkStatus = table.checkStatus(obj.config.id);
            switch(obj.event){
                case 'getCheckData':
                    var data = checkStatus.data;
                    layer.alert(JSON.stringify(data));
                    break;
            case 'getCheckLength':
                var data = checkStatus.data;
                layer.msg('选中了：'+ data.length + ' 个');
                break;
            case 'isAll':
                layer.msg(checkStatus.isAll ? '全选': '未全选');
                break;
            case 'refresh':
                table.reload('table')       
                break;
            case 'add':
                layer.open({
                    type: 2,
                    title: '添加银行',
                    shadeClose: true,
                    shade: false,
                    resize:true,
                    maxmin: true, //开启最大化最小化按钮
                    area: ['893px', '600px'],
                    content: "<?php echo url('operation'); ?>"+"?operation=add"
                });          
                break;
        };
  });
        form.on('switch(status)', function(data){
          var status = data.elem.checked ?1:0;
          var id = data.elem.attributes['dataid'].nodeValue;
          var index = layer.load(0, {shade: false});
            $.ajax({
                type: 'post',
                url: "<?php echo url('doEditStatus'); ?>",
                data:{id:id,status:status},
                dataType:"json",
                success: function(data) {
                    if(data.code === 200){
                        layer.msg(data.msg, {
                          icon: 1,
                          time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                            table.reload('table');
                        });                      
                    }else{
                        layer.msg(data.msg, {
                          icon: 1,
                          time: 1000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                            table.reload('table');
                        }); 
                    }  
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    layer.closeAll();
                    if (textStatus == "timeout") {
                        layer.msg('请求超时！', {
                          icon: 2,
                          time: 1500 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                        });                      
                    } else {
                        layer.msg('服务器错误！', {
                          icon: 2,
                          time: 1500 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                            layer.closeAll();
                        });                         
                    }
                },                    
            });                  
        });  
  //监听行工具事件
  table.on('tool(table)', function(obj){
    var data = obj.data;
    if(obj.event === 'del'){
      layer.confirm('确认删除数据？', function(index){
        $.ajax({
            type: 'post',
            url: "<?php echo url('doDel'); ?>",
            data:{id:data.id},
            dataType:"json",
            success: function(data) {
                if(data.code === 200){
                    layer.msg(data.msg, {
                      icon: 1,
                      time: 1000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        obj.del();
                        layer.close(index);
                        table.reload('table');
                    });                      
                }else{
                     layer.msg(data.msg);
                }  
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                layer.closeAll();
                if (textStatus == "timeout") {
                    layer.msg('请求超时！', {
                      icon: 2,
                      time: 1500 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                    });                      
                } else {
                    layer.msg('服务器错误！', {
                      icon: 2,
                      time: 1500 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                    });                         
                }
            },                    
        });        
      });
    }else if(obj.event === 'open_ico'){
        layer.open({
          type: 1,
          title: false,
          closeBtn: 0,
          area: ['auto'],
          skin: 'layui-layer-nobg', //没有背景色
          shadeClose: true,
          content: "<img style='height:300px' src='"+obj.data.url+"'>"
        });
    }else if(obj.event === 'edit'){
        layer.open({
          type: 2,
          title: '编辑银行',
          shadeClose: true,
          shade: false,
          resize:true,
          maxmin: true, //开启最大化最小化按钮
          area: ['900px', '600px'],
          content: "<?php echo url('operation'); ?>"+"?operation=edit&id="+obj.data.id
        }); 
    }
  });
});
</script>


<?php /*a:6:{s:88:"C:\wwwroot\kongjiangrenwu\hld3\admin\tp6_bhzRC3\application\admin\view\system\index.html";i:1638604915;s:87:"C:\wwwroot\kongjiangrenwu\hld3\admin\tp6_bhzRC3\application\admin\view\public\meta.html";i:1638604915;s:88:"C:\wwwroot\kongjiangrenwu\hld3\admin\tp6_bhzRC3\application\admin\view\public\style.html";i:1638604915;s:87:"C:\wwwroot\kongjiangrenwu\hld3\admin\tp6_bhzRC3\application\admin\view\public\menu.html";i:1638604915;s:87:"C:\wwwroot\kongjiangrenwu\hld3\admin\tp6_bhzRC3\application\admin\view\public\head.html";i:1638604915;s:89:"C:\wwwroot\kongjiangrenwu\hld3\admin\tp6_bhzRC3\application\admin\view\public\footer.html";i:1638604915;}*/ ?>
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
    <main class="layout-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
				<div class="card-header">
					<h4>
						基本配置
					</h4>
				</div>
				<div class="card-body">
					<form class="layui-form" id="loginfrom">
    						<div class="form-group">
    							<label>
    								站点名称
    							</label>
                                <input class="form-control" type="text" id="name" name="name"
    								placeholder="请输入您的站点名称" value="<?php echo isset($base['name'])?$base['name']:''; ?>">	
    							<small class="help-block">显示在线客服里面的标题</small>
    						</div>
							<div class="form-group">
							<label>
								每日提现次数
							</label>
                            <input class="form-control" type="text" id="withraw_num" name="withraw_num"
								placeholder="请输入每日提现次数" value="<?php echo isset($base['withraw_num'])?$base['withraw_num']:'3'; ?>">	
							<small class="help-block">玩家提现次数限制</small>
						</div>
								<div class="form-group">
							<label>
								视频观看时长限制
							</label>
                            <input class="form-control" type="text" id="see_num" name="see_num"
								placeholder="视频观看时长限制(秒)" value="<?php echo isset($base['see_num'])?$base['see_num']:'10'; ?>">	
							<small class="help-block">玩家提现次数限制</small>
						</div>
							<div class="form-group">
							<label>
								提现最小金额
							</label>
                            <input class="form-control" type="text" id="withraw_min" name="withraw_min"
								placeholder="请输入提现最小金额" value="<?php echo isset($base['withraw_min'])?$base['withraw_min']:'50'; ?>">	
							<small class="help-block">玩家提现最小金额限制</small>
						</div>
							<div class="form-group">
							<label>
								提现最大金额
							</label>
                            <input class="form-control" type="text" id="withraw_max" name="withraw_max"
								placeholder="请输入提现最大金额" value="<?php echo isset($base['withraw_max'])?$base['withraw_max']:'500'; ?>">	
							<small class="help-block">玩家提现最大金额限制</small>
						</div>
						<div class="form-group">
							<label>
								站点LOGO
							</label>
                            <div class="form-group">
                                <div class="layui-upload-drag" id="ico">
                                  <i class="layui-icon"></i>
                                  <p>点击上传，或将文件拖拽到此处</p>
                                  <div <?php if(!isset($base['ico'])): ?>class="layui-hide"<?php endif; ?> id="uploadDemoView">
                                    <hr>
                                    <input type="hidden" id="icoinput" name="ico" value="<?php echo isset($base['ico'])?$base['ico']:''; ?>">
                                    <img src="<?php echo isset($base['ico'])?$base['ico']:''; ?>" alt="图标" style="max-width: 130px;height: 30%;">
                                  </div>
                                </div>  
                            </div>	
                            <small class="help-block">显示在登录、注册和忘记密码的图标</small>
						</div>
						<div class="form-group">
							<label>
								三方客服连接
							</label>
                            <input class="form-control" type="text" id="kefu" name="kefu"
								placeholder="请输入您的三方客户连接" value="<?php echo isset($base['kefu'])?$base['kefu']:''; ?>">	
							<small class="help-block">显示在个人中心的在线客服</small>
						</div>
                        <!--<div class="form-group">-->
                        <!--    <label>-->
                        <!--        是否允许撤单-->
                        <!--    </label>-->
                        <!--    <div>-->
                        <!--        <input type="radio" name="chedan" value="1" title="是" <?php if(isset($base['chedan'])): if($base['chedan'] == 1): ?>checked <?php endif; ?><?php endif; ?>>-->
                        <!--        <input type="radio" name="chedan" value="0" title="否" <?php if(isset($base['chedan'])): if($base['chedan'] == 0): ?>checked <?php endif; else: ?>checked<?php endif; ?>>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="form-group">
                            <label>
                                是否开启客服
                            </label>
                            <div>
                                <input type="radio" name="iskefu" value="1" title="是" <?php if(isset($base['iskefu'])): if($base['iskefu'] == 1): ?>checked <?php endif; ?><?php endif; ?>>
                                <input type="radio" name="iskefu" value="0" title="否" <?php if(isset($base['iskefu'])): if($base['iskefu'] == 0): ?>checked <?php endif; else: ?>checked<?php endif; ?>>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label>
                                是否有余额观看视频
                            </label>
                            <div>
                                <input type="radio" name="isplay" value="1" title="是" <?php if(isset($base['isplay'])): if($base['isplay'] == 1): ?>checked <?php endif; ?><?php endif; ?>>
                                <input type="radio" name="isplay" value="0" title="否" <?php if(isset($base['isplay'])): if($base['isplay'] == 0): ?>checked <?php endif; else: ?>checked<?php endif; ?>>
                            </div>
                        </div>                        
						<div class="form-group">
							<button class="layui-btn" type="button" lay-submit lay-filter="save">
							    保存	
							</button>
						</div>
					</form>
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
<script>

layui.use(['form','upload', 'element'], function(){
  var layer = layui.layer
  ,form = layui.form  
  ,upload = layui.upload
  ,element = layui.element
  ,layer = layui.layer;
  //拖拽上传
  upload.render({
    elem: '#ico'
    ,url: "<?php echo url('doupload'); ?>" //此处用的是第三方的 http 请求演示，实际使用时改成您自己的上传接口即可。
    ,before: function(obj){
      layer.msg('上传中', {icon: 16, time: 0});
    }
    ,done: function(res){
      $("#icoinput").val(res.data);
      layui.$('#uploadDemoView').removeClass('layui-hide').find('img').attr('src', res.data);
      layer.msg('上传成功');
    }
  }); 
   //监听提交
  form.on('submit(save)', function(data){
        var loading = layer.load(0, {shade: false});
        $.ajax({
            type: 'post',
            url: "<?php echo url('doSave'); ?>",
            data:$("#loginfrom").serialize(),
            dataType:"json",
            success: function(data) {
                if(data.code === 200){
                    layer.msg(data.msg, {
                      icon: 1,
                      time: 1500 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        layer.closeAll();
                        window.location.reload();
                    });                      
                }else{
                     layer.closeAll();
                     layer.msg(data.msg);
                     return false;
                }  
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                layer.closeAll();
                if (textStatus == "timeout") {
                    layer.msg('请求超时！', {
                      icon: 2,
                      time: 1500 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        return false;
                    });                      
                } else {
                    layer.msg('服务器错误！', {
                      icon: 2,
                      time: 1500 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        return false;
                    });                         
                }
            },                    
        }); 
    });
});

</script>


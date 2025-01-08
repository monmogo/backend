<?php /*a:4:{s:76:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/member/operation.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/meta.html";i:1638604915;s:72:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/style.html";i:1638604915;s:77:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/onlyfooter.html";i:1638604915;}*/ ?>
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

<main class="layui-layout">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>
							<?php if($operation == 'add'): ?>添加用户<?php else: ?>编辑用户<?php endif; ?>
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <?php if($operation == 'edit'): ?><input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>"><?php endif; ?>
							<div class="form-group">
                                <label>
                                    所属代理
                                </label>
                                <select id="uid" name="uid">
                                  <option value="">请选择</option>
                                  <?php foreach($class as $key=>$vo): ?> 
                                      <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($operation == 'edit'): if($vo['id'] == $info['uid']): ?> selected="" <?php endif; ?><?php endif; ?>><?php echo htmlentities($vo['username']); ?></option>
                                  <?php endforeach; ?>                                
                                </select>
							</div>						    
							<div class="form-group">
								<label>
									用户账号
								</label>
								<input class="form-control" type="text" id="username" name="username"
								placeholder="请输入您的用户账号" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['username'])?$info['username']:''; ?>" <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									用户密码
								</label>
								<input class="form-control" type="text" id="password" name="password"
								placeholder="请输入您的用户密码" >
							</div>	
							<div class="form-group">
								<label>
									提现密码
								</label>
								<input class="form-control" type="text" id="paypassword" name="paypassword"
								placeholder="请输入您的用户密码" >
							</div>								
							<div class="form-group">
								<label>
									用户余额
								</label>
								<input class="form-control" type="text" id="money" name="money"
								placeholder="请输入您的用户余额" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['money'])?$info['money']:''; ?>" readonly <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									用户姓名（提现时用到）
								</label>
								<input class="form-control" type="text" id="name" name="name"
								placeholder="请输入您的用户姓名" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['name'])?$info['name']:''; ?>" <?php endif; ?>>
							</div>							
							<div class="form-group">
								<label>
									用户提现次数
								</label>
								<input class="form-control" type="text" id="num" name="num"
								placeholder="请输入您的用户提现次数" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['num'])?$info['num']:''; ?>" <?php else: ?>  value="3" <?php endif; ?>>
							</div>
							
							<div class="form-group">
								<label>
									用户最少提现金额
								</label>
								<input class="form-control" type="text" id="min" name="min"
								placeholder="请输入您的最少提现金额" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['min'])?$info['min']:''; ?>" <?php else: ?>  value="50"   <?php endif; ?>>
							</div>
							
							<div class="form-group">
								<label>
									用户最多提现金额
								</label>
								<input class="form-control" type="text" id="max" name="max"
								placeholder="请输入您的用户最多提现金额" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['max'])?$info['max']:''; ?>" <?php else: ?>  value="100"  <?php endif; ?>>
							</div>

                            <div class="form-group">
                                <label>
                                    头像
                                </label>
                                <div class="form-group">
                                    <div class="layui-upload-drag" id="ico">
                                      <i class="layui-icon"></i>
                                      <p>点击上传，或将文件拖拽到此处</p>
                                      <div <?php if($operation == 'add'): ?>class="layui-hide"<?php endif; ?> id="uploadDemoView">
                                        <hr>
                                        <input type="hidden" id="icoinput" name="header_img" value="<?php echo isset($info['header_img'])?$info['header_img']:''; ?>">
                                        <img src="<?php echo isset($info['header_img'])?$info['header_img']:''; ?>" alt="头像" style="max-width: 130px;border-style: solid;width: 125px;height: 125px;border-radius: 50%;">
                                      </div>
                                    </div>
                                </div>
                            </div>
							<div class="form-group">
								<button class="layui-btn" type="button" lay-submit lay-filter="save">
								    <?php if($operation == 'add'): ?>提交<?php else: ?>更新<?php endif; ?>
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
<script src="https://www.layuicdn.com/layui/layui.js"></script>
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
        var uid = $('#uid').val();
        var username = $('#username').val();
        var password = $('#password').val();
        if(uid == "" || uid == null || uid == undefined){
            layer.msg("请选择所属代理");
            return false;
        } 
        if(username == "" || username == null || username == undefined){
            layer.msg("请输入用户账号");
            return false;
        }  
        <?php if($operation == 'add'): ?>
        if(password == "" || password == null || password == undefined){
            layer.msg("请输入用户密码");
            return false;
        }  
        <?php endif; ?>
         
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
                        window.parent.location.reload();
                        var index = parent.layer.getFrameIndex(window.name);
                        parent.layer.close(index);
                        
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
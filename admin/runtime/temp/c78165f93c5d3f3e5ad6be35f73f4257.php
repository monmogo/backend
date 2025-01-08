<?php /*a:4:{s:75:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/member/addmoney.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/meta.html";i:1638604915;s:72:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/style.html";i:1638604915;s:77:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/onlyfooter.html";i:1638604915;}*/ ?>
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
							操作余额
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>">
							<div class="form-group">
								<label>
									金额
								</label>
								<input class="form-control" type="text" id="money" name="money"
								placeholder="请输入需要操作的金额，填整数是增加，负整数就代表扣钱。">
							</div>
                            <div class="form-group">
                                <label>
                                    类型
                                </label>
                                <div>
                                    <input type="radio" name="type" value="1" title="充值" >
                                    <input type="radio" name="type" value="2" title="彩金" checked>
                                </div>
                            </div>							
							<div class="form-group">
								<label>
								    说明
								</label>
								<input class="form-control" type="text" id="desc" name="desc"
								placeholder="请输入您增减款说明" >
							</div>					
							<div class="form-group">
								<button class="layui-btn" type="button" lay-submit lay-filter="save">
								    提交
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

layui.use(['form'], function(){
  var layer = layui.layer
  ,form = layui.form  
  ,layer = layui.layer;

   //监听提交
  form.on('submit(save)', function(data){
        var loading = layer.load(0, {shade: false});
        $.ajax({
            type: 'post',
            url: "<?php echo url('doAddMoney'); ?>",
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
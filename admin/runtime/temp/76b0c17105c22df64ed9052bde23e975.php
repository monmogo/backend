<?php /*a:4:{s:82:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/yulottery/edit_lottery.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/meta.html";i:1638604915;s:72:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/style.html";i:1638604915;s:77:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/onlyfooter.html";i:1638604915;}*/ ?>
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
							修改开奖
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
							<div class="form-group">
								<label>
									开奖号码1
								</label>
								<input class="form-control" type="number" id="opencode1" name="opencode1" placeholder="请输入开奖号码第1位数字" value="<?php echo htmlentities($opencode[0]); ?>">

								<label>
									开奖号码2
								</label>
								<input class="form-control" type="number" id="opencode2" name="opencode2" placeholder="请输入开奖号码第2位数字" value="<?php echo htmlentities($opencode[1]); ?>">

								<label>
									开奖号码3
								</label>
								<input class="form-control" type="number" id="opencode3" name="opencode3" placeholder="请输入开奖号码第3位数字" value="<?php echo htmlentities($opencode[2]); ?>">
							</div>
							<input type="hidden" name="name" value="<?php echo htmlentities($info['name']); ?>">
							<input type="hidden" name="key" value="<?php echo htmlentities($info['key']); ?>">
							<input type="hidden" name="expect" value="<?php echo htmlentities($info['expect']); ?>">
							<input type="hidden" name="create_time" value="<?php echo htmlentities($info['create_time']); ?>">
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
	  layer.confirm('确认保存预开奖？', function (index) {
		  $.ajax({
			  type: 'post',
			  url: "<?php echo url('doSave'); ?>",
			  data: data.field,
			  dataType: "json",
			  success: function (data) {
				  console.log(data)
				  if (data.code === 200) {
					  layer.msg(data.msg, {
						  icon: 1,
						  time: 1000 //2秒关闭（如果不配置，默认是3秒）
					  }, function () {
						  /*layer.close(index);
						  // table.reload('table');
						  reloadView();*/

						  /*layer.closeAll();
						  window.parent.location.reload();
						  var index = parent.layer.getFrameIndex(window.name);
						  parent.layer.close(index);*/
					  });
				  } else {
					  layer.close(index);
					  layer.msg(data.msg);
				  }
			  },
			  error: function (XMLHttpRequest, textStatus, errorThrown) {
				  layer.closeAll();
				  if (textStatus == "timeout") {
					  layer.msg('请求超时！', {
						  icon: 2,
						  time: 1500 //2秒关闭（如果不配置，默认是3秒）
					  }, function () {
						  layer.close(index);
					  });
				  } else {
					  layer.msg('服务器错误！', {
						  icon: 2,
						  time: 1500 //2秒关闭（如果不配置，默认是3秒）
					  }, function () {
						  layer.close(index);
					  });
				  }
			  },
		  });
	  });
    });
});

</script>
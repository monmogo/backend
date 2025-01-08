<?php /*a:4:{s:75:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/banks/operation.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/meta.html";i:1638604915;s:72:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/style.html";i:1638604915;s:77:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/onlyfooter.html";i:1638604915;}*/ ?>
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
							<?php if($operation == 'add'): ?>添加银行<?php else: ?>编辑银行<?php endif; ?>
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <?php if($operation == 'edit'): ?>
							<input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>">

							<?php endif; ?>
							<div class="form-group">
								<label>
									用户名
								</label>
                            <?php if($operation == 'add'): ?>
<!--								<div class="layui-col-md4">-->
<!--									<div class="layui-input-block">-->
										<input type="text" id="HandoverCompany" class="layui-input" style="position:absolute;z-index:2;width:80%;" lay-verify="required" value=""  autocomplete="off">
										<select type="text" name="uid" id="uid" lay-filter="uid" autocomplete="off"  lay-verify="required" class="layui-select" lay-search>
											<?php foreach($bankinfo as $key=>$vo): ?>
											<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['username']); ?></option>
											<?php endforeach; ?>
										</select>
<!--									</div>-->
<!--								</div>-->

								<?php else: ?>
								<input type="hidden" id="uid" name="uid" value="<?php echo isset($info['uid'])?$info['uid']:''; ?>">
								<input type="text" name="username" id="username" class="layui-input"  lay-verify="required" value="<?php echo htmlentities($info['username']); ?>" disabled>
								<!--								<select id="uid" name="uid"  <?php if($operation == 'edit'): ?>disabled="disabled"<?php endif; ?>>-->
<!--								<option value="">请选择</option>-->
<!--								<?php foreach($bankinfo as $key=>$vo): ?>-->
<!--								<option value="<?php echo htmlentities($vo['id']); ?>" <?php if($operation == 'edit'): if($vo['id'] == $info['uid']): ?> selected=""<?php endif; ?><?php endif; ?>><?php echo htmlentities($vo['username']); ?></option>-->
<!--								<?php endforeach; ?>-->
<!--								</select>-->
								<?php endif; ?>
							</div>

							<div class="form-group">
								<label>
									银行卡用户名
								</label>
								<input class="form-control" type="text" id="name" name="name"
									   placeholder="请输入您的银行卡用户名" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['name'])?$info['name']:''; ?>" <?php endif; ?>>
							</div>

							<div class="form-group">
								<label>
									银行账号
								</label>
								<input class="form-control" type="text" id="bankid" name="bankid"
								placeholder="请输入您的银行账号" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['bankid'])?$info['bankid']:''; ?>" <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									银行信息
								</label>
                                <input class="form-control" type="text" id="bankinfo" name="bankinfo"
								placeholder="请输入您的银行信息" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['bankinfo'])?$info['bankinfo']:''; ?>" <?php endif; ?>>
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

layui.use(['form'], function(){
  var layer = layui.layer
  ,form = layui.form;

   //监听提交
  form.on('submit(save)', function(data){
        var bankinfo = $('#bankinfo').val();
        var uid = $('#uid').val();
        var bankid = $('#bankid').val();
        if(bankinfo == "" || bankinfo == null || bankinfo == undefined){
            layer.msg("请输入银行信息");
            return false;
        }   
        if(uid == "" || uid == null || uid == undefined){
            layer.msg("请选择用户");
            return false;
        }
        if(bankid == "" || bankid == null || bankid == undefined){
            layer.msg("请选择用户");
            return false;
        }          
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


	form.on('select(uid)', function (data) {   //选择移交单位 赋值给input框
		var select_text = data.elem[data.elem.selectedIndex].text;
		$("#HandoverCompany").val(select_text );
		$("#uid").next().find("dl").css({ "display": "none" });
		form.render();
	});


	$('#HandoverCompany').bind('input propertychange', function () {
		var value = $("#HandoverCompany").val();
		$("#uid").val(value);
		form.render();
		$("#uid").next().find("dl").css({ "display": "block" });
		var dl = $("#uid").next().find("dl").children();
		var j = -1;
		for (var i = 0; i < dl.length; i++) {
			if (dl[i].innerHTML.indexOf(value) <= -1) {
				dl[i].style.display = "none";
				j++;
			}
			if (j == dl.length-1) {
				$("#uid").next().find("dl").css({ "display": "none" });
			}
		}

	})



});


$('#HandoverCompany').on('input propertychange',function (){
	if($(this).val() !== ''){
		console.log($(this).val());
	}
})

</script>
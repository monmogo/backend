<?php /*a:4:{s:65:"/www/wwwroot/www/admin/application/admin/view/role/operation.html";i:1638604914;s:62:"/www/wwwroot/www/admin/application/admin/view/public/meta.html";i:1638604914;s:63:"/www/wwwroot/www/admin/application/admin/view/public/style.html";i:1638604914;s:68:"/www/wwwroot/www/admin/application/admin/view/public/onlyfooter.html";i:1638604914;}*/ ?>
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
<style type="text/css" media="all">
* {
    box-sizing: ;
}
</style>
<main class="layui-layout">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>
							<?php if($operation == 'add'): ?>添加管理组<?php else: ?>编辑管理组<?php endif; ?>
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <?php if($operation == 'edit'): ?><input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>"><?php endif; ?>
							<div class="form-group">
								<label>
									管理组名称
								</label>
								<input class="form-control" type="text" id="name" name="name"
								placeholder="请输入您的管理组名称" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['name'])?$info['name']:''; ?>" <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									权限树
								</label>
								<div id="role"></div>
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

layui.use(['tree', 'util','form'], function(){
  var tree = layui.tree
  ,layer = layui.layer
  ,util = layui.util
  ,form = layui.form;
  <?php if($operation == 'add'): ?>
      $.get("<?php echo url('role/roleTree'); ?>",function (res) {
          //基本演示
          tree.render({
            elem: '#role'
            ,data: res.data
            ,showCheckbox: true  //是否显示复选框
            ,id: 'role'
            ,isJump: true //是否允许点击节点时弹出新窗口跳转
            ,click: function(obj){
              var data = obj.data;  //获取当前点击的节点数据
            }
         });
        },'json');
    <?php else: ?>
      $.get("<?php echo url('role/userRoleTree'); ?>",{id:"<?php echo isset($info['id'])?$info['id']:''; ?>"},function (res) {
          //基本演示
          tree.render({
            elem: '#role'
            ,data: res.data
            ,showCheckbox: true  //是否显示复选框
            ,id: 'role'
            ,click: function(obj){
              var data = obj.data;  //获取当前点击的节点数据
            }
         });
        },'json');
    <?php endif; ?>	
   //监听提交
  form.on('submit(save)', function(data){
        var roleData = tree.getChecked('role'); //获取选中节点的数据
        var name = $('#name').val();
        <?php if($operation == 'add'): ?>
            var id = null;
        <?php else: ?>
            var id = $('#id').val();
        <?php endif; ?>
        if(name == "" || name == null || name == undefined){
            layer.msg("请输入管理组名称");
            return false;
        }   
        if(roleData == "" || roleData == null || roleData == undefined){
            layer.msg("请选择权限树");
            return false;
        }    
        var loading = layer.load(0, {shade: false});
        $.ajax({
            type: 'post',
            url: "<?php echo url('doSave'); ?>",
            data:{name:name,role:roleData,id:id},
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
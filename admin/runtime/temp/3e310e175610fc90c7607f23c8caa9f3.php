<?php /*a:4:{s:64:"/www/wwwroot/www/admin/application/admin/view/lottery/peilv.html";i:1638604914;s:62:"/www/wwwroot/www/admin/application/admin/view/public/meta.html";i:1638604914;s:63:"/www/wwwroot/www/admin/application/admin/view/public/style.html";i:1638604914;s:68:"/www/wwwroot/www/admin/application/admin/view/public/onlyfooter.html";i:1638604914;}*/ ?>
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
							配置赔率
						</h4>
					</div>
					<div class="card-body">
					    <div class="alert alert-warning" role="alert">点击单元格即可编辑</div>
						<form class="layui-form" id="loginfrom">
						    <input type="hidden" id="id" name="id" value="<?php echo isset($id)?$id:''; ?>">
						    <table style="height: 125px;" border="1" width="640" cellspacing="0" cellpadding="2" class="layui-hide" id="table" lay-filter="table"></table>
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

layui.use(['table','form', 'util'], function(){
  var layer = layui.layer
  ,form = layui.form
  ,table = layui.table 
  ,util = layui.util
  ,layer = layui.layer;
   //监听提交
   table.render({
        elem: '#table',
        url: "<?php echo url('peilvlist'); ?>"+"?id=<?php echo htmlentities($id); ?>"
        ,title: '赔率设置'
        ,cols: [[
            {field:'name', edit: 'text', title:'名称'},
            {field:'type', title:'玩法'},
            {field:'proportion', edit: 'text', title:'赔率'},
            {title:'状态', templet: function (d) {
                let checked = '';
                if (d.status == 1) {
                    checked = 'checked';
                }else{
                    checked = ' ';
                }
                return '<input type="checkbox" '+ checked +' name="status" json='+JSON.stringify(d)+' dataid = "'+ d.id+'" lay-skin="switch" lay-filter="status" lay-text="开启|关闭">';
            }}
        ]]
    });
        form.on('switch(status)', function(data){
              var index = layer.load(0, {shade: false});
              var formdata = JSON.parse(this.getAttribute("json"));
              formdata.status = data.elem.checked ? 1:0;
                $.ajax({
                    type: 'post',
                    url: "<?php echo url('doEditPeilvState'); ?>"+"?id=<?php echo htmlentities($id); ?>",
                    data:formdata,
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
                              icon: 2,
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
    
      //监听单元格编辑
      table.on('edit(table)', function(obj){
            var value = obj.value //得到修改后的值
            ,data = obj.data //得到所在行所有键值
            ,field = obj.field; //得到字段
            $.post("<?php echo url('editPeilv'); ?>"+"?id=<?php echo htmlentities($id); ?>",data,function(res){
                if(res.code === 200){
                   layer.msg(res.msg, {
                      icon: 1,
                      time: 2000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        layer.closeAll();
                        table.reload('table');
                    });
                }else{
                   layer.msg(res.msg, {
                      icon: 2,
                      time: 2000 //2秒关闭（如果不配置，默认是3秒）
                    }, function(){
                        layer.closeAll();
                    });
                }
            });
      });
    
});

</script>
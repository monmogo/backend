<?php /*a:4:{s:68:"/www/wwwroot/www/admin/application/admin/view/lottery/operation.html";i:1638604914;s:62:"/www/wwwroot/www/admin/application/admin/view/public/meta.html";i:1638604914;s:63:"/www/wwwroot/www/admin/application/admin/view/public/style.html";i:1638604914;s:68:"/www/wwwroot/www/admin/application/admin/view/public/onlyfooter.html";i:1638604914;}*/ ?>
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
							<?php if($operation == 'add'): ?>添加彩票<?php else: ?>编辑彩票<?php endif; ?>
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <?php if($operation == 'edit'): ?><input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>"><?php endif; ?>
							<div class="form-group">
                                <label>
                                    所属分类
                                </label>
                                <select id="cid" name="cid">
                                  <option value="">请选择</option>
                                  <?php foreach($class as $key=>$vo): ?> 
                                      <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($operation == 'edit'): if($vo['id'] == $info['cid']): ?> selected="" <?php endif; ?><?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                                  <?php endforeach; ?>                                
                                </select>
							</div>						    
							<div class="form-group">
								<label>
									彩票名称
								</label>
								<input class="form-control" type="text" id="name" name="name"
								placeholder="请输入您的彩票名称" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['name'])?$info['name']:''; ?>" <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									彩票描述
								</label>
								<input class="form-control" type="text" id="desc" name="desc"
								placeholder="请输入您的彩票描述" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['desc'])?$info['desc']:''; ?>" <?php endif; ?>>
							</div>							
							<div class="form-group">
								<label>
									彩票标识
								</label>
								<input class="form-control" type="text" id="key" name="key"
								placeholder="请输入您的彩票标识（不重复即可，建议以盘口英文缩写命名，比如盘口叫：名媛汇，就填 myh01）" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['key'])?$info['key']:''; ?>" readonly <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									彩票玩法(开奖时间)
								</label>
								<input class="form-control" type="text" id="rule" name="rule"
								placeholder="请输入您的彩票玩法（填数字，比如填1，就代表1分钟一期）" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['rule'])?$info['rule']:''; ?>" <?php endif; ?>>
							</div>
							<div class="form-group">
								<label>
									做单要求
								</label>
								<input class="form-control" type="text" id="condition" name="condition"
								placeholder="请输入您的彩种做单要求（大于此处金额才可做单）" <?php if($operation == 'edit'): ?>  value="<?php echo isset($info['condition'])?$info['condition']:''; ?>" <?php endif; ?>>
							</div>							
                            <div class="form-group">
                                <label>
                                    是否热门
                                </label>
                                <div>
                                    <input type="radio" name="hot" value="1" title="是" <?php if($operation == 'edit'): if($info['hot'] == 1): ?>checked <?php endif; ?><?php endif; ?>>
                                    <input type="radio" name="hot" value="0" title="否" <?php if($operation == 'edit'): if($info['hot'] == 0): ?>checked <?php endif; else: ?>checked<?php endif; ?>>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    图标
                                </label>
                                <div class="form-group">
                                    <div class="layui-upload-drag" id="ico">
                                      <i class="layui-icon"></i>
                                      <p>点击上传，或将文件拖拽到此处</p>
                                      <div <?php if($operation == 'add'): ?>class="layui-hide"<?php endif; ?> id="uploadDemoView">
                                        <hr>
                                        <input type="hidden" id="icoinput" name="ico" value="<?php echo isset($info['ico'])?$info['ico']:''; ?>">
                                        <img src="<?php echo isset($info['ico'])?$info['ico']:''; ?>" alt="图标" style="max-width: 130px;border-style: solid;width: 125px;height: 125px;border-radius: 35px;">
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
        var name = $('#name').val();
        var desc = $('#desc').val();
        var key = $('#key').val();
        var rule = $('#rule').val();
        var cid = $("#cid ").val();
        if(cid == "" || cid == null || cid == undefined){
            layer.msg("请选择所属分类");
            return false;
        }         
        if(name == "" || name == null || name == undefined){
            layer.msg("请输入彩票名称");
            return false;
        } 
        if(desc == "" || desc == null || desc == undefined){
            layer.msg("请输入彩票分类描述");
            return false;
        }  
        if(key == "" || key == null || key == undefined){
            layer.msg("请输入彩票标识符");
            return false;
        }  
        if(rule == "" || rule == null || rule == undefined){
            layer.msg("请输入彩票玩法");
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
});

</script>
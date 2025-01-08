<?php /*a:4:{s:75:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/video/operation.html";i:1638604915;s:71:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/meta.html";i:1638604915;s:72:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/style.html";i:1638604915;s:77:"/www/wwwroot/tongchengmiyue/tp6/application/admin/view/public/onlyfooter.html";i:1638604915;}*/ ?>
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
							<?php if($operation == 'add'): ?>添加视频<?php else: ?>编辑视频<?php endif; ?>
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>">
							<div class="form-group">
								<label>
									视频名称
								</label>
								<input class="form-control" type="text" id="vod_name" name="vod_name"
								placeholder="请输入您的视频名称" <?php if($operation == 'edit'): ?>readonly="readonly"<?php endif; ?> value="<?php echo isset($info['vod_name'])?$info['vod_name']:''; ?>">
							</div>
							<div class="form-group">
								<label>
									封面图片
								</label>
								<input class="form-control" type="text" id="vod_pic" name="vod_pic"
								placeholder="请输入您的封面图片" value="<?php echo isset($info['vod_pic'])?$info['vod_pic']:''; ?>">
							</div>
							<div class="form-group">
								<label>
									封面图片
								</label>
								<div class="form-group">
									<div class="layui-upload-drag" id="ico">
										<i class="layui-icon"></i>
										<p>点击上传，或将文件拖拽到此处</p>
										<div <?php if($operation=='add'): ?>class="layui-hide"<?php endif; ?> id="uploadDemoView">
										<hr>
										<input type="hidden" id="vod_pic1" name="vod_pic1" value="<?php echo isset($info['vod_pic'])?$info['vod_pic']:''; ?>">
										<img src="<?php echo isset($info['vod_pic'])?$info['vod_pic']:''; ?>" alt="头像" style="max-width: 130px;border-style: solid;width: 125px;height: 125px;border-radius: 50%;">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>
									视频链接
								</label>
								<input class="form-control" type="text" id="vod_play_url" name="vod_play_url"
								placeholder="请输入您的视频链接" value="<?php echo isset($info['vod_play_url'])?$info['vod_play_url']:''; ?>">
							</div>
							<div class="form-group">
                                <label>
                                    视频类型
                                </label>
                                <select id="vod_class_id" name="vod_class_id">
                                  <option value="">请选择</option>
                                  <?php foreach($class as $key=>$vo): ?>
                                      <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($operation == 'edit'): if($vo['id'] == $info['vod_class_id']): ?> selected="" <?php endif; ?><?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
                                  <?php endforeach; ?>
                                </select>
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
  ,form = layui.form
	upload = layui.upload;
	//拖拽上传
	upload.render({
		elem: '#ico'
		,url: "<?php echo url('doupload'); ?>" //此处用的是第三方的 http 请求演示，实际使用时改成您自己的上传接口即可。
		,before: function(obj){
			layer.msg('上传中', {icon: 16, time: 0});
		}
		,done: function(res){
			$("#vod_pic1").val(res.data);
			layui.$('#uploadDemoView').removeClass('layui-hide').find('img').attr('src', res.data);
			layui.$('#vod_pic').val('');
			layer.msg('上传成功');
		}
	});

	//监听提交
  form.on('submit(save)', function(data){
        var vod_name = $('#vod_name').val();
        var vod_play_url = $('#vod_play_url').val();
        var vod_pic = $('#vod_pic').val();
        var vod_pic1 = $('#vod_pic1').val();
        var vod_class_id = $('#vod_class_id').val();
        if(vod_name == "" || vod_name == null || vod_name == undefined){
            layer.msg("请输入视频名称");
            return false;
        }
        if(vod_play_url == "" || vod_play_url == null || vod_play_url == undefined){
            layer.msg("请输入视频链接");
            return false;
        }
        if(vod_pic == "" || vod_pic == null || vod_pic == undefined){
        	if(vod_pic1 == "" || vod_pic1 == null || vod_pic1 == undefined){
				layer.msg("请输入视频封面图片");
				return false;
			}
        }
        if(vod_class_id == "" || vod_class_id == null || vod_class_id == undefined){
            layer.msg("请选择视频分类");
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
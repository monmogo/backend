<?php /*a:4:{s:72:"/www/wwwroot/www/admin/application/admin/view/xuanfeilist/operation.html";i:1662541997;s:62:"/www/wwwroot/www/admin/application/admin/view/public/meta.html";i:1638604914;s:63:"/www/wwwroot/www/admin/application/admin/view/public/style.html";i:1638604914;s:68:"/www/wwwroot/www/admin/application/admin/view/public/onlyfooter.html";i:1638604914;}*/ ?>
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
    .layui-upload-img {
    width: 92px;
    height: 92px;
}
</style>
<main class="layui-layout">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4>
							<?php if($operation == 'add'): ?>添加选妃<?php else: ?>编辑选妃<?php endif; ?>
						</h4>
					</div>
					<div class="card-body">
						<form class="layui-form" id="loginfrom">
						    <input type="hidden" id="id" name="id" value="<?php echo isset($info['id'])?$info['id']:''; ?>">
							<div class="form-group">
								<label>
									选妃名称
								</label>
								<input class="form-control" type="text" id="xuanfei_name" name="xuanfei_name"
								placeholder="请输入您的选妃名称" <?php if($operation == 'edit'): ?>readonly="readonly"<?php endif; ?> value="<?php echo isset($info['xuanfei_name'])?$info['xuanfei_name']:''; ?>">
							</div>

							 <div class="layui-upload">
                              <button type="button" class="layui-btn" id="test2">多图片上传</button> 
                              <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
                                预览图：
                                <div class="layui-upload-list" id="demo2">
                                    <?php if(!(empty($info['id']) || (($info['id'] instanceof \think\Collection || $info['id'] instanceof \think\Paginator ) && $info['id']->isEmpty()))): foreach($info['vod_pic'] as $key=>$vo): ?>
                                            <img src="../../../<?php echo htmlentities($vo); ?>" alt="" class="layui-upload-img">
                                            <input type="hidden" id="pc_src" name="pc_src[]" value="<?php echo htmlentities($vo); ?>" />
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                             </blockquote>
                            </div>
							<div class="form-group">
                                <label>
                                    所属地区
                                </label>
                                <select id="class_id" name="class_id">
                                  <option value="">请选择</option>
                                  <?php foreach($class as $key=>$vo): ?>
                                      <option value="<?php echo htmlentities($vo['id']); ?>" <?php if($operation == 'edit'): if($vo['id'] == $info['class_id']): ?> selected="" <?php endif; ?><?php endif; ?>><?php echo htmlentities($vo['name']); ?></option>
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
// 	upload.render({
// 		elem: '#ico'
// 		,url: "<?php echo url('doupload'); ?>" //此处用的是第三方的 http 请求演示，实际使用时改成您自己的上传接口即可。
// 		,before: function(obj){
// 			layer.msg('上传中', {icon: 16, time: 0});
// 		}
// 		,done: function(res){
// 			$("#vod_pic1").val(res.data);
// 			layui.$('#uploadDemoView').removeClass('layui-hide').find('img').attr('src', res.data);
// 			layui.$('#vod_pic').val('');
// 			layer.msg('上传成功');
// 		}
// 	});

  //多图片上传
  upload.render({
    elem: '#test2'
    ,url: "<?php echo url('doupload'); ?>"//此处配置你自己的上传接口即可
    ,multiple: true
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      layer.msg('上传中', {icon: 16, time: 0});
      obj.preview(function(index, file, result){
        $('#demo2').append('<img src="'+ result +'" alt="'+ file.name +'" class="layui-upload-img">')
      });
    }
    ,done: function(res){
      //上传完毕
      if (res.code === 1) {
            return layer.msg(res.msg);
        }
        $('#demo2').append('<input type="hidden" id="pc_src" name="pc_src[]" value="'+res.data+'" />')
        layer.msg('上传成功');
    }
  });

	//监听提交
  form.on('submit(save)', function(data){
        var xuanfei_name = $('#xuanfei_name').val();
        // var vod_play_url = $('#vod_play_url').val();
        // var pc_src = $('#pc_src').val();
        $("#pc_src").each(function(index,item){
            var pc_src = $(this).val();            //获取value值
        });
        // console.log(pc_src);
        // var vod_pic1 = $('#vod_pic1').val();
        var class_id = $('#class_id').val();
        if(xuanfei_name == "" || xuanfei_name == null || xuanfei_name == undefined){
            layer.msg("请输入视频名称");
            return false;
        }
        // if(vod_play_url == "" || vod_play_url == null || vod_play_url == undefined){
        //     layer.msg("请输入视频链接");
        //     return false;
        // }
        if(pc_src == "" || pc_src == null || pc_src == undefined){
        // 	if(vod_pic1 == "" || vod_pic1 == null || vod_pic1 == undefined){
				layer.msg("请输入图片");
				return false;
// 			}
        }
        if(class_id == "" || class_id == null || class_id == undefined){
            layer.msg("请选择地区");
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
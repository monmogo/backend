<?php /*a:1:{s:61:"/www/wwwroot/www/admin/application/admin/view/video/play.html";i:1638604914;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />

  <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
  
</head>
<body>
  <video id="my_video_1" class="video-js vjs-default-skin"  autoplay="autoplay" controls preload="auto" width="880" height="580" 
  data-setup='{}'>
    <source src="<?php echo htmlentities($url); ?>" type="application/x-mpegURL">
  </video>
  
  <script>
  </script>
  
</body>
</html>
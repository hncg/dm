<?php if (!defined('THINK_PATH')) exit();?><!-- saved from url=(0043)http://m.z.jd.com/project/details/2406.html --><html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- width：设备的宽度，最小的缩放比例，最大的缩放比例 ,不能缩放--><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- 手机号码不被显示为拨号连接 --><meta name="format-detection" content="telephone=no"><!-- ios设备对meta定义的私有属性：（可以添加至主屏幕） --><meta name="apple-mobile-web-app-capable" content="yes"><meta charset="utf-8"><title>呆萌网详情触屏版</title><link rel="stylesheet" href="__PUBLIC__/res/mobile/res/css/zc-common.css"><link rel="stylesheet" href="__PUBLIC__/res/mobile/res/css/zc-index.css"><link rel="stylesheet" href="__PUBLIC__/res/mobile/res/css/detail_mobile.css"><link rel="stylesheet" href="__PUBLIC__/res/bootstrap/css/bootstrap.css"/><script language="javascript" type="text/javascript" src="__PUBLIC__/res/jquery/jquery-1.9.0.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/jquery/lib/jquery.cookies.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/mobile/res/js/Mobile.js" ></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/bootstrap/js/bootstrap.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/login.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/hf.js"></script><script>
			     prise_ajax='<?php echo U('index/detail/prise_ajax','','')?>';//赞的ajax
				 opinion_url='<?php echo U('index/detail/attention_ajax','','')?>';//关注的ajax
				 check_phone = '<?php echo U("/index/mobile/check_phone");?>';//手机验证码的ajax
				 check_code = '<?php echo U("/index/mobile/check_code");?>';//手机验证码的ajax
				 var fund_item_id =  <?php echo ($data[0]['id']); ?>;
				 var fund_repay_id = <?php if($fund_repay_id) echo ($fund_repay_id);else echo "null";?>;
	</script><style>
	.modal-content
	{
		width:400px !important;
	}
	.mobile
	{
		background:url("/Public/res/images/index/phonetest1.jpg") no-repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
	}
	.mobile_text
	{
		border:1px solid ##041C4C !important;
	}
	</style></head><body><div class="wrapbox1"><!-- heard --><header class="header"><h2><a href="/index"><span class="title">呆萌众筹</span></a></h2><a href="/index" clstag="jr|keycount|zc_m_product|zc_zy" class="icon btn-home" style="left: 0px"></a><a href="/my" clstag="jr|keycount|zc_m_product|zc_zcdetail" class="icon btn-person"></a></header><!-- 模态框（Modal） --><img src="/Public/res/images/detailed/<?php echo ($data[0]['new_details']); ?>"><!-- main --><!-- 猜你喜欢推荐 --><h2 class="h2-title">猜你喜欢</h2><ul class="goods-list youlike"><!-- 推荐开始 --><?php if(is_array($like_items)): $i = 0; $__LIST__ = $like_items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$like): $mod = ($i % 2 );++$i;?><li><a clstag="jr|keycount|zc_m_product|zc_cnxh" href="#" class="gridbox"><div class="goods-pic"><!-- 图片 --><a href="/detail/<?php echo ($like['id']); ?>"><img width="100" height="100" src="__PUBLIC__/res/images/Items/<?php echo ($like["items_img"]); ?>" alt=""></a></div><div class="grid-1"><h5 class="h5-title"><!-- 标题 --><a href="/detail/<?php echo ($like['id']); ?>"><?php echo ($like["title"]); ?></a></h5><!-- 详细内容 --><p class="pheight"><a href="/detail/<?php echo ($like['id']); ?>"><?php echo ($like["items_description"]); ?></a></p></div></a></li><?php endforeach; endif; else: echo "" ;endif; ?><!-- 推荐结束，下面依次类推 --><!--百度一键分享--><div class="bdsharebuttonbox" data-tag="share_1" style="display:none;"><a class="bds_qzone" id="qzone" data-cmd="qzone" href="#"></a><a class="bds_tsina" id="tsina" data-cmd="tsina"></a><a class="bds_weixin" id="weixin" data-cmd="weixin"></a></div><!--百度一键分享--></ul><!-- 微博空间分享 --><div class="bdsharebuttonbox" data-tag="share_1"><div class="gridbox sharebox" ><div class="grid-1" id="wxShareBtn"><a class="bds_qzone qzone" id="qzone" data-cmd="qzone" href="#" style="margin-top:20px;margin-left:40px;"></a></div><div class="grid-1"><a class="bds_tsina weibo" id="tsina" data-cmd="tsina" style="margin-top:20px;margin-left:40px;"></a></div><div class="grid-1"><a class="bds_weixin  weixin" id="weixin" data-cmd="weixin" style="margin-top:20px;margin-right:20px;"></a></div></div></div><!-- 微博空间结束 --><!--微信扫一扫分享开始--><div class="wxShare-layer notInWx" id="wxShareLayer-1"><div class="wxShareCloseBtn"></div><div class="pro-title"><?php echo ($data[0]['title']); ?></div><div class="ercodeHolder"><a href=""><img src="__PUBLIC__/res/mobile/res/images/detail/m_get_wxcode.html" alt="呆萌众筹"></a></div><div class="shareTxt"><h5> 截屏到相册后，使用微信扫一扫</h5><h6> 即可将发起的项目分享给微信好友或微信好友圈</h6></div></div><div class="wxShare-layer InWx" id="wxShareLayer-2"></div><!--微信扫一扫分享结束--><div class="mypanel f-text2"><a clstag="jr|keycount|zc_m_product|zc_dl" href="/login">登录</a><a clstag="jr|keycount|zc_m_product|zc_hddb" href="javascript:;" class="fr" id="goTop">回到顶部</a></div><div class="footer"><p class="f-text1">Copyright © 2004－2014呆萌daimeng.com版权所有</p><p class="f-text2"><span>|</span><a href="/help/130">联系我们</a></p></div><!--一键分享--><script>
	window._bd_share_config = {
		common : {
			bdText : '<?php echo ($data[0]["title"]); ?>',
			bdDesc : '<?php echo ($data[0]["items_description"]); ?>',
			bdPic : 'http://www.daymeng.com/Public/res/images/items/<?php echo ($data[0]["new_img"]); ?>'
		},
		share : [{
			"bdSize" : 24
		}]
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
	
	$("#d_weixin").click(function(){
		document.getElementById("weixin").click(); //既触发了a标签的点击事件，又触发了页面跳转 微信的点击事件
	})

	$("#d_weibo").click(function(){
		document.getElementById("tsina").click(); //既触发了a标签的点击事件，又触发了页面跳转  微博的点击事件
	})
	$("#d_qzone").click(function(){
		alert(document.getElementById("qzone")[0]);
		document.getElementById("qzone").click(); //既触发了a标签的点击事件，又触发了页面跳转  qq空间的点击事件
	})
	
	$(".btn_self").click(function(){

		if("<?php echo $_SESSION['user_id'] ?>"=="")
		{
			alert("请先登陆哦！！");
			window.location.href="<?php echo U('/login'); ?>";
		}
		else
		{
			//alert($(this).parents("form"));
			$(this).parents("form")[0].submit();
		}
	})
</script><!--一键分享--></div></div><!-- end main --></body></html>
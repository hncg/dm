<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><link rel="Shortcut Icon" href="__PUBLIC__/res/images/sty.ico"><link rel="stylesheet" type="text/css" href="__PUBLIC__/res/css/personalPagebase.css"><link rel="stylesheet" type="text/css" href="__PUBLIC__/res/css/newsCenter.css"><script language="javascript" type="text/javascript" src="__PUBLIC__/res/jquery/jquery-1.9.0.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/myInterstItem.js"></script><script>		 myInterstItem_ajax ="<?php echo U('index/personalPage/myInterstItem_ajax','','');?>";
	</script><title>我的众筹-感兴趣的项目</title></head><body><!-- 头部 --><!-- 头部 --><div class="header"><div class="wrap clearfix" pbid="header"><div class="img-logo"><h1><a title="呆萌众筹" class="ie6fixpic" href="<?php echo U('/index','','');?>" alt="呆萌众筹">呆萌众筹</a></h1></div><!--menu start--><div class="menu"><ul class="clearfix"><li><a href="<?php echo U('/my','','');?>">个人中心 </a></li><li><a href="<?php echo U('/support','','');?>">我的众筹 </a></li><!-- <li><a href="/open">我的好友 </a></li> --><li><a href="<?php echo U('/news','','');?>">消息中心 &nbsp;<span style="color:red;font-size:12px;" ><?php echo session('news');?></span></a></li><li><a href="<?php echo U('/mp/index','','');?>">公众平台 </a></li></ul></div><div style="float:right;"><a href="<?php echo U('/person/'.session("user_id"));?>"><img style="width:50px;height:50px;margin-top:20px;" src="/Public/res/images/person_img/<?php echo ($person_info[0]['img']); ?>" /></a><span style="margin-left:5px;margin-top:-10px;"><a href="/my"><?php echo ($person_info[0]["niker"]); ?></a>&nbsp;|
		   		 <a href="<?php echo u('exit1');?>" calss="one" style="margin-left:5px;margin-top:-10px;">退出</a></span></div></div><!-- user menu end--></div><!-- 主内容去区--><div class="main clearfix"><div class="setting wrap"><div class="setting-title clearfix"><h3>我的众筹</h3></div><div class="setting-content clearfix"><div class="setting-menu"><ul class="clearfix"><!--
						<li><a class="icons msg ie6fixpic" href="<?php echo U('index/personalPage/myCrowdfunding','','');?>">发起的项目</a></li>--><li><a class="icons rec-com ie6fixpic" href="<?php echo U('/support','','');?>">支持的项目</a></li><li class="select"><a class="icons rec-com ie6fixpic" href="<?php echo U('/atten','','');?>">关注的项目</a></li></ul></div><div class="setting-detail"><div class="setting-address"><h3 class="green">关注的项目</h3><p>您可以查看您感兴趣的项目详情</p><!--address tab 地址管理列表 static--><div class="address-tab" id="addr_list" style="display: block; padding-top:50px;"><!-- 						<div class="btn-add"><a class="btn-base btn-red-h30 common-sprite" onclick="add_addr()"><span class="common-sprite">添加地址</span></a></div> --><!-- 所有，审核通过，未通过分类显示 --><!-- <div class=""></div> --><div class="ads-list"><table><colgroup><col width="70"><col width="150"><col width="300"><col width="155"></colgroup><thead><tr><th>图片</th><td>项目名称</td><td>关注日期</td><td>操作</td></tr></thead><tbody><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><th><a href="__GROUP__/detail/index.php?item_id=<?php echo ($vo['id']); ?>"><img style="width:50px;" src="__PUBLIC__/res/images/Items/<?php echo ($vo["items_img"]); ?>"></a></th><td><?php echo ($vo["title"]); ?></td><td>2014-9-8</td><td data-id="57264"><div style="display:none"><?php echo ($vo["id"]); ?></div><a class="green Js-addr-del del" href="javascript:;">取消关注</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div></div><!--setting address end--></div></div></div></div><!-- 尾部 --><div class="gbottom"><div class="gbottom-nav"><a href="<?php echo U('/help','','');?>">关于呆萌</a><a href="<?php echo U('/help/130','','');?>">洽谈合作</a><a href="<?php echo U('/help/130','','');?>">加入我们</a><a href="<?php echo U('/help/130','','');?>">联系我们</a><a href="<?php echo U('/help/127','','');?>">免责声明</a><a href="javascript:;">呆萌社区</a><a href="javascript:;">呆萌基金</a></div><div class="gbottom-i">©2014呆萌网&nbsp;湘ICP备09043258号-2</div></div></body></html>
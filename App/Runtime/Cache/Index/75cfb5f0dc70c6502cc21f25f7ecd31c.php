<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!-- saved from url=(0018)http://m.z.jd.com/ --><html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><!-- width：设备的宽度，最小的缩放比例，最大的缩放比例 ,不能缩放--><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- 手机号码不被显示为拨号连接 --><meta name="format-detection" content="telephone=no"><!-- ios设备对meta定义的私有属性：（可以添加至主屏幕） --><meta name="apple-mobile-web-app-capable" content="yes"><meta charset="utf-8"><title>呆萌网主页触屏版</title><link rel="stylesheet" href="__PUBLIC__/res/css/zc-common.css"><link rel="stylesheet" href="__PUBLIC__/res/css/zc-index.css"></head><body><!-- heard --><header class="header"><!-- 回到首页连接 --><a clstag="jr|keycount|zc_m_frontpage|zc_sytq" class="btn-guide" id="guideIcon" href="javascript:;"></a><h2><span class="icon logo"></span></h2><!-- 个人中心连接 --><a clstag="jr|keycount|zc_m_frontpage|zc_wdzc" href="/my" class="icon btn-person"></a></header><!-- / --><!-- main --><div class="p-index"><div class="slide-box" id="slider"><!-- 首页大图，图片和对应的链接 --><div class="swiper-wrapper" id="scrollHolder" style="transition:ease-out; transform: translateX(-16188px); background-color: rgb(255, 255, 255); -webkit-backface-visibility: hidden; -webkit-transition: 0s; -webkit-transform: translateX(-16188px); -webkit-transition-timing-function: ease-out;"><div class="swiper-slide"><a href="#" clstag="jr|keycount|zc_m_frontpage|zc_zcgg"><img src="__PUBLIC__/res/images/index/1.png" /></a></div><div class="swiper-slide"><a href="#" clstag="jr|keycount|zc_m_frontpage|zc_zcgg"><img  src="__PUBLIC__/res/images/index/2.png"></a></div><div class="swiper-slide"><a href="#" clstag="jr|keycount|zc_m_frontpage|zc_zcgg"><img  src="__PUBLIC__/res/images/index/3.png"></a></div><div class="swiper-slide"><a href="#" clstag="jr|keycount|zc_m_frontpage|zc_zcgg"><img src="__PUBLIC__/res/images/index/4.png"></a></div></div><!-- 图片下方显示图片所在序号的东东 --><div class="slide-circle" id="slideCircle"><span class="swiper-pagination-switch swiper-active-switch"></span><span class="swiper-pagination-switch "></span><span class="swiper-pagination-switch "></span><span class="swiper-pagination-switch "></span></div></div><h2 class="h2-title bdl">精品项目</h2><div class="tabbox"><div class="tabul-box"><a name="classify"></a><div class="tabul-div"><ul class="tab-ul"><li><a id="zhtj" clstag="jr|keycount|zc_m_frontpage|zc_zhtj" href="<?php echo U('index/index/mb','','');?>?type=0" class="current">综合推荐</a></li><li><a id="zxsx" clstag="jr|keycount|zc_m_frontpage|zc_zxsx" href="<?php echo U('index/index/mb','','');?>?type=1">最新上线</a></li><li><a id="jezg" clstag="jr|keycount|zc_m_frontpage|zc_jezg" href="<?php echo U('index/index/mb','','');?>?type=2">金额最高</a></li><li><a id="zczd" clstag="jr|keycount|zc_m_frontpage|zc_zczd" href="<?php echo U('index/index/mb','','');?>?type=3">支持最多</a></li></ul></div></div><div class="tab-con pd-0-10"><ul class="zc-list"><!-- 第一个项目开始 --><?php if(is_array($items)): foreach($items as $key=>$v): ?><li><div><!-- 项目对应的连接和图片 --><a clstag="jr|keycount|zc_m_frontpage|zc_dpy" href="#"><img src="__PUBLIC__/res/images/index/<?php echo ($v["new_img"]); ?>"></a></div><!-- 项目对应百分比和金额 --><div class="gridbox zc-datum"><div class="grid-3"><strong><?php echo ($v["gained"]); ?>%</strong><p>已达到</p></div><div class="grid-3"><strong><?php echo ($v["gain"]); ?>￥</strong><p>已筹集</p></div><div class="grid-2"><div class="fr"><strong><?php echo ($v["remaining_day"]); ?>天</strong><p>剩余时间</p></div></div></div></li><?php endforeach; endif; ?></ul></div></div><!-- 底部登陆和回到顶部 ，要写js--><div class="mypanel f-text2"><a clstag="jr|keycount|zc_m_frontpage|zc_yhdl" href="/login">登录</a><a clstag="jr|keycount|zc_m_frontpage|zc_hddb" href="javascript:;" class="fr" id="goTop">回到顶部</a></div><div class="footer"><p class="f-text1">Copyright © 2014－2014呆萌网daimeng.com版权所有</p><p class="f-text2"><span>|</span><a href="/help/130">联系我们</a></p></div></div><!-- end main --><!-- 首页大图滑动js --><script src="__PUBLIC__/res/js/zepto.js" type="text/javascript"></script><script src="__PUBLIC__/res/js/zepto.picLazyLoad.min.js" type="text/javascript"></script><script src="__PUBLIC__/res/js/proTools.js" type="text/javascript"></script><script src="__PUBLIC__/res/js/home.js" type="text/javascript"></script></body></html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title></title><style type="text/css">	body{
		background-color:#f3f3f3;
	}
	.manage_user td{
		max-width:300px;
		max-height: 100px;
		padding: 5px 3px;
	}
	table{
		border-color: #a7ce37;
		width: 1000px;

	}
	td a{
		margin: 5px 0px;
	}
	.pages a{
		padding: 10px;
	}
	.opration a:hover{
		position: relative;
		left: -2px;
		top: -2px;
	}
	input{
		border: 1px solid #a7ce37;
		border-radius: 3px 3px;
		-web-kit-border-radius: 3px 3px;
		-moz-border-radius: 3px 3px;
	}

	</style></head><body><table  border="1px" cellspacing="0px" style="margin:0px auto;" class="manage_user"><tr ><td colspan="10"><h2 style="text-align:center">评论一览</h2><form action="<?php echo U('admin/index/comment_second_search','','');?>"method="post" style="text-align:right"><input type="text" value="" name="search_first" placeholder="请输入评论者的昵称或者评论内容进行搜索" style="width:200px;height:20px;" /><input type="submit" value="搜索帖子"  name="sub_search" style="width:80px;height:25px;"  /></form></td></tr><tr><td>id</td><td>昵称</td><td>评论时间</td><td>用户id</td><td>评论内容</td><td>父id</td><td>操作</td></tr><?php if(is_array($user)): foreach($user as $key=>$v): ?><tr><td><?php echo ($v["id"]); ?></td><td><?php echo ($v["niker"]); ?></td><td><?php echo date("Y-m-d H:i:s",$v['time'])?></td><td><?php echo ($v["user_id"]); ?></td><td><?php echo ($v["content"]); ?></td><td><?php echo ($v["from_id"]); ?></td><td class="opration"><a href="<?php echo U('admin/management/delete_comment','','');?>?id=<?php echo ($v["id"]); ?>&table_name=dm_community_comments_second&kinds=comment_second_manage" style="margin-right:5px;" ><img src="__PUBLIC__/res/images/small/sc.gif" title="删除"></a></td></tr><?php endforeach; endif; ?><tr><td colspan="10" style="text-align:center;" class="pages"><?php echo ($page); ?></td></tr></table></body></html><!--
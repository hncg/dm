<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">body{

	font-family: 'Microsoft Yahei';

}

td{

		max-width:750px;

		max-height: 100px;

		padding: 5px 10px;

		text-align: left;



	}

	.page{

		text-align: center;

	}

	.page a{

	padding: 5px 10px;

	}



</style><table border="1px" cellspacing="0px" style="margin:0px auto;"><tr><td colspan="3"><h2 style="text-align:center">其它类型的申请信息</h2><form action="<?php echo U('admin/index/others_apply_info_check','','');?>" method="post"><input type="text" maxlength="30" name="search_info" placeholder="请输入其它类型的名称进行搜索" /><input type="submit" value="搜索"  name="search"  /></form></td></tr><?php if(is_array($apply_info)): foreach($apply_info as $key=>$v): ?><form action="<?php echo U('admin/management/others_apply_info_check','','');?>" method="post" enctype="multipart/form-data"><tr><td colspan="3" style="text-align:center;"><a  href="<?php echo U('admin/management/apply_info_delete','','');?>?id=<?php echo ($v["id"]); ?>&kinds=dm_others_info">删除</a></td></tr><tr><td>项目名称</td><td><?php echo ($v["title"]); ?></td></tr><tr><td>ID</td><td><input type="text" value="<?php echo ($v["id"]); ?>"maxlength="30" name="id" readonly /></td></tr><tr><td>用户id</td><td><input type="text" value="<?php echo ($v["user_id"]); ?>"maxlength="126"  name="user_id" readonly /></td></tr><tr><td>组织名称</td><td><input type="text" value="<?php echo ($v["name"]); ?>"maxlength="30"  name="name"   /></td></tr><tr><td>组织邮箱</td><td><input type="text" value="<?php echo ($v["email"]); ?>"maxlength="30" name="email" ="" /></td></tr><tr><td>组织地址</td><td><input type="text" value="<?php echo ($v["address"]); ?>"maxlength="30" name="address"  /></td></tr><tr><td>组织证件</td><td><img style="max-width:400px" src="__ROOT__/<?php echo preg_replace('/\//', "",$v["license_address"] );?>" /></td><td><input type="file" value="上传" name="new_license_address" /></td></tr><tr><td>新的组织证件照片</td><td><img style="max-width:400px"src="__ROOT__/<?php echo ($v["new_license_address"]); ?>"

		 /></td></tr><tr><td>身份证姓名</td><td><input type="text" value="<?php echo ($v["card_id"]); ?>"maxlength="30" name="card_id"  /></td></tr><tr><td>身份证号码</td><td><input type="text" value="<?php echo ($v["id_num"]); ?>"maxlength="30" name="id_num"  /></td></tr><tr><td>身份证证件照片</td><td><img style="max-width:400px" src="__ROOT__/<?php echo preg_replace('/\//', "",$v["card_address"] );?>" /><td><input type="file" value="上传" name="new_card_address" /></td></tr><tr><td>新的身份证证件照片</td><td><img  style="max-width:400px"src="__ROOT__/<?php echo ($v["new_card_address"]); ?>"

		 /></td></tr><tr><td>手机号码</td><td><input type="text" value="<?php echo ($v["phone_number"]); ?>" maxlength="300" name="phone_number" /></td></tr><tr><td>审核状态</td><td><input type="radio" value="0"maxlength="30" name="success"   

		<?php
 if($items[""]==0){ echo " checked"; } ?>		/>0

		 <input type="radio" value="1"maxlength="30" name="success" 

		 <?php
 if($items["lock"]==1){ echo " checked"; } ?>		 />1

		 <span style="margin-left:30px;color:#ea544a">(0表示未通过审核,1表示通过审核)</span></td></tr><tr><td style="margin-left:30px;color:#ea544a">在此填写不通过原因(此信息将被发给申请者)</td><td><textarea rows="4" cols="45" name="content"></textarea></td></tr><tr><td colspan="2" style="text-align:center"><input type="submit" value="确认通过审核" /></td></tr><tr><td colspan="3" class="page"><?php echo ($page); ?></td></tr></form><?php endforeach; endif; ?></table>
<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('spacecp_avatar');
0
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_header.htm', 1526465000, '2', './data/template/2_2_home_spacecp_avatar.tpl.php', './template/yeei_dream1', 'home/spacecp_avatar')
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_footer.htm', 1526465000, '2', './data/template/2_2_home_spacecp_avatar.tpl.php', './template/yeei_dream1', 'home/spacecp_avatar')
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_header_name.htm', 1526465000, '2', './data/template/2_2_home_spacecp_avatar.tpl.php', './template/yeei_dream1', 'home/spacecp_avatar')
|| checktplrefresh('./template/default/home/spacecp_avatar.htm', './template/default/home/spacecp_header_name.htm', 1526465000, '2', './data/template/2_2_home_spacecp_avatar.tpl.php', './template/yeei_dream1', 'home/spacecp_avatar')
;?><?php include template('common/header'); ?><div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em>
<a href="home.php?mod=spacecp">����</a> <em>&rsaquo;</em><?php if($actives['profile']) { ?>
��������
<?php } elseif($actives['verify']) { ?>
��֤
<?php } elseif($actives['avatar']) { ?>
�޸�ͷ��
<?php } elseif($actives['credit']) { ?>
����
<?php } elseif($actives['usergroup']) { ?>
�û���
<?php } elseif($actives['privacy']) { ?>
��˽ɸѡ
<?php } elseif($actives['sendmail']) { ?>
�ʼ�����
<?php } elseif($actives['password']) { ?>
���밲ȫ
<?php } elseif($actives['promotion']) { ?>
�����ƹ�
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></div>
</div>
<div id="ct" class="ct2_a wp cl">
<div class="mn">
<div class="bm bw0">
<h1 class="mt"><?php if($actives['profile']) { ?>
��������
<?php } elseif($actives['verify']) { ?>
��֤
<?php } elseif($actives['avatar']) { ?>
�޸�ͷ��
<?php } elseif($actives['credit']) { ?>
����
<?php } elseif($actives['usergroup']) { ?>
�û���
<?php } elseif($actives['privacy']) { ?>
��˽ɸѡ
<?php } elseif($actives['sendmail']) { ?>
�ʼ�����
<?php } elseif($actives['password']) { ?>
���밲ȫ
<?php } elseif($actives['promotion']) { ?>
�����ƹ�
<?php } elseif($actives['plugin']) { ?>
<?php echo $_G['setting']['plugins'][$pluginkey][$_GET['id']]['name'];?>
<?php } ?></h1>
<!--don't close the div here--><?php if(!empty($_G['setting']['pluginhooks']['spacecp_avatar_top'])) echo $_G['setting']['pluginhooks']['spacecp_avatar_top'];?>
<script type="text/javascript">
function updateavatar() {
window.location.href = document.location.href.replace('&reload=1', '') + '&reload=1';
}
<?php if(!$reload) { ?>
saveUserdata('avatar_redirect', document.referrer);
<?php } ?>
</script>
<form id="avatarform" enctype="multipart/form-data" method="post" autocomplete="off" action="home.php?mod=spacecp&amp;ac=avatar&amp;ref">
<table cellspacing="0" cellpadding="0" class="tfm">
<caption>
<span id="retpre" class="y xi2"></span>
<h2 class="xs2">��ǰ�ҵ�ͷ��</h2>
<p>�������û�������Լ���ͷ��ϵͳ����ʾΪĬ��ͷ������Ҫ�Լ��ϴ�һ������Ƭ����Ϊ�Լ��ĸ���ͷ�� </p>
</caption>
<tr>
<td><?php echo avatar($space[uid],big);?></td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" class="tfm">
<caption>
<h2 class="xs2">�����ҵ���ͷ��</h2>
<p>��ѡ��һ������Ƭ�����ϴ��༭��<br />ͷ�񱣴����������Ҫˢ��һ�±�ҳ��(��F5��)�����ܲ鿴���µ�ͷ��Ч�� </p>
</caption>
<tr>
<td>
<?php if(!empty($_GET['old'])) { ?>
<script type="text/javascript">document.write(AC_FL_RunContent('<?php echo implode("','", $uc_avatarflash);; ?>'));</script>
<?php } else { include template('home/spacecp_avatar_body'); } ?>							
</td>
</tr>
</table>
<?php if(empty($_GET['old'])) { ?>
    <a href="home.php?mod=spacecp&amp;ac=avatar&amp;old=1" class="xg1">���޷������ϴ�ͷ�����˴��л�Ϊ Flash ��ʽ�ϴ�</a>				
<?php } ?>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
</form>
<?php if(!empty($_G['setting']['pluginhooks']['spacecp_avatar_bottom'])) echo $_G['setting']['pluginhooks']['spacecp_avatar_bottom'];?>
</div>
</div>
<script type="text/javascript">
var redirecturl = loadUserdata('avatar_redirect');
if(redirecturl) {
jQuery('retpre').innerHTML = '<a href="' + redirecturl + '">������һҳ</a>';
}
</script>
<div class="appl"><div class="tbn">
<h2 class="mt bbda">����</h2>
<ul>
<li<?php echo $actives['avatar'];?>><a href="home.php?mod=spacecp&amp;ac=avatar">�޸�ͷ��</a></li>
<li<?php echo $actives['profile'];?>><a href="home.php?mod=spacecp&amp;ac=profile">��������</a></li>
<?php if($_G['setting']['verify']['enabled'] && allowverify()) { ?>
<li<?php echo $actives['verify'];?>><a href="<?php if($_G['setting']['verify']['enabled']) { ?>home.php?mod=spacecp&ac=profile&op=verify<?php } else { ?>home.php?mod=spacecp&ac=videophoto<?php } ?>">��֤</a></li>
<?php } ?>
<li<?php echo $actives['credit'];?>><a href="home.php?mod=spacecp&amp;ac=credit">����</a></li>
<li<?php echo $actives['usergroup'];?>><a href="home.php?mod=spacecp&amp;ac=usergroup">�û���</a></li>
<li<?php echo $actives['privacy'];?>><a href="home.php?mod=spacecp&amp;ac=privacy">��˽ɸѡ</a></li>

<?php if($_G['setting']['sendmailday']) { ?><li<?php echo $actives['sendmail'];?>><a href="home.php?mod=spacecp&amp;ac=sendmail">�ʼ�����</a></li><?php } ?>
<li<?php echo $actives['password'];?>><a href="home.php?mod=spacecp&amp;ac=profile&amp;op=password">���밲ȫ</a></li>

<?php if($_G['setting']['creditspolicy']['promotion_visit'] || $_G['setting']['creditspolicy']['promotion_register']) { ?>
<li<?php echo $actives['promotion'];?>><a href="home.php?mod=spacecp&amp;ac=promotion">�����ƹ�</a></li>
<?php } if(!empty($_G['setting']['plugins']['spacecp'])) { if(is_array($_G['setting']['plugins']['spacecp'])) foreach($_G['setting']['plugins']['spacecp'] as $id => $module) { if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?><li<?php if($_GET['id'] == $id) { ?> class="a"<?php } ?>><a href="home.php?mod=spacecp&amp;ac=plugin&amp;id=<?php echo $id;?>"><?php echo $module['name'];?></a></li><?php } } } ?>
</ul>
</div></div>
</div><?php include template('common/footer'); ?>
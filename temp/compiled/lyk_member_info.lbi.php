<?php if ($this->_var['user_info']): ?>
<div id="lyk_user">
    <?php echo $this->_var['user_info']['hello']; ?>,<strong><?php echo $this->_var['user_info']['username']; ?></strong> <?php echo $this->_var['lang']['welcome_return']; ?>
    <a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
    <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
</div>
<?php else: ?>
 <a href="user.php"><img src="themes/default/images/bnt_log.gif" /></a>
 <a href="user.php?act=register"><img src="themes/default/images/bnt_reg.gif" /></a>
<?php endif; ?>
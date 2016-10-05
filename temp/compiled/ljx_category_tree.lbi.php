<div class="box">
 <div class="box_1">
  <div id="category_tree">
    <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
     <dl>
     <dt><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></dt>
     

       </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
 </div>
</div>
<div class="blank5"></div>

     <ul>
     <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_47840000_1475681312');if (count($_from)):
    foreach ($_from AS $this->_var['article_0_47840000_1475681312']):
?>
       <li>
     	[<a href="<?php echo $this->_var['article_0_47840000_1475681312']['cat_url']; ?>"><?php echo $this->_var['article_0_47840000_1475681312']['cat_name']; ?></a>] <a href="<?php echo $this->_var['article_0_47840000_1475681312']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_0_47840000_1475681312']['title']); ?>"><?php echo sub_str($this->_var['article_0_47840000_1475681312']['short_title'],10); ?></a>
     	</li>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </ul>
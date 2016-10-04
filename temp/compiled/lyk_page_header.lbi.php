<div id="lyk_header">
    <div id="lyk_top">
        <div id="lyk_top_inner">
            <div id="lyk_top_left"><?php 
$k = array (
  'name' => 'member_info_wel',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
             <div id="lyk_top_right"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
             <div id="lyk_top_center">
                <?php if ($this->_var['navigator_list']['top']): ?>
                <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                    <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                 <?php endif; ?>
             </div>
        </div>
   </div>
    <div id="lyk_bottom">
        <a id="lyk_log_pic" href="index.php" name="top"><img src="themes/default/images/lyk_main_logo.jpg" alt="website logo"/></a>
        <div id="lyk_cart_title">
            产品分类
            <ul id="lyk_cart">
                <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                     <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <form id="lyk_search" method="get" action="search.php">
            <ul id="lyk_search_dir">
                <?php $_from = $this->_var['lyk_category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['list']['iteration']++;
?>
                     <li onclick="addId(this)"><?php echo $this->_var['nav']; ?></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <script type="text/javascript">
                
                    <!--
                    var lis = document.getElementById("lyk_search_dir").getElementsByTagName("li");
                    lis[0].id = "lyk_search_dir_on";
                    function addId(e)
                    {
                        for ( var i=0; i<lis.length; i++ )
                        {
                            lis[i].id = "";
                        }
                        e.id = "lyk_search_dir_on";
                    }
                    -->
                    
            </script>
            <input name="keywords" type="text" id="lyk_keywords" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"/>
            <input name="imageField" type="submit" id="lyk_submit" value="搜索" />
        </form>
    </div>

</div>
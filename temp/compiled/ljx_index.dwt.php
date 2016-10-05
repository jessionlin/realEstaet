<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
      <body>
<?php echo $this->fetch('library/lyk_page_header.lbi'); ?>
<div class="blank"></div>
  <div class="ljx_center">
        <div class="ljx_f_l" id="focus">
               <?php echo $this->fetch('library/ljx_index_ab.lbi'); ?>
        </div>
         
                         <div id="ljx_mallNews" class="f_r">
                          <div class="ljx_NewsTit"></div>
                          <div class="ljx_NewsList ljx_tc">
                           
                  
                          <?php echo $this->fetch('library/ljx_new_articles.lbi'); ?>
                          </div>
                         </div>
                         
                         <div class="block ljx_clearfix">
                           
                           <div class="ljx_areaL">
                             
                             <div class="box">
                              <div class="box_1">
                               <h3><span><?php echo $this->_var['lang']['shop_notice']; ?></span></h3>
                               <div class="boxCenterList RelaArticle">
                                 <?php echo $this->_var['shop_notice']; ?>
                               </div>
                              </div>
                             </div>
                             <div class="blank5"></div>
  </div>
<!--<div class="block ljx_clearfix">
  
  <div class="ljx_areaL">
    
    <div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['shop_notice']; ?></span></h3>
      <div class="boxCenterList RelaArticle">
        <?php echo $this->_var['shop_notice']; ?>
      </div>
     </div>
    </div>
    <div class="blank5"></div>-->
  
  
  <div class="ljx_AreaR">
   
       <!--news
       <div id="ljx_mallNews" class="f_r">
        <div class="ljx_NewsTit"></div>
        <div class="ljx_NewsList ljx_tc">
         

        <?php echo $this->fetch('library/ljx_new_articles.lbi'); ?>
        </div>
       </div>
       -->
   
   
<?php echo $this->fetch('library/auction.lbi'); ?>
<?php echo $this->fetch('library/group_buy.lbi'); ?>

  </div>
  
</div>
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>

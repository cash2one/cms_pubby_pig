<?php /* Smarty version 2.6.18, created on 2014-03-22 10:28:03
         compiled from tpls/v19/footer.html */ ?>
 <div class="clear"></div>
    <div class="footbg">
      <div class="footnav">
        <ul>
          <?php if ($this->_tpl_vars['navChannels']): ?>
<?php $_from = $this->_tpl_vars['navChannels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m'] => $this->_tpl_vars['n']):
?>
	<?php if ($this->_tpl_vars['m'] < 5): ?>
	<li><a href="<?php echo $this->_tpl_vars['n']['link']; ?>
" title="<?php echo $this->_tpl_vars['n']['name']; ?>
"><?php echo $this->_tpl_vars['n']['shortname']; ?>
</a></li>
    <?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
        </ul>
      </div>
      <div class="footbar">
        <div class="search">
        <form id="search" name="search" method="post" action="?m=site&c=home&a=search&token=<?php echo $this->_tpl_vars['token']; ?>
" data-ajax="false">
          <input type="text" class="search_txt" name="SeaStr" id="SeaStr" data-role="none" placeholder="请输入关键词"/>
          <input type="submit" class="search_but" data-role="none" value="">
        </form>
        </div>

      <div class="footer">
        <ul>
          <li class="foottel" style="border-left:0;"><a href="http://site.tg.qq.com/forwardToPhonePage?siteId=1&phone=<?php echo $this->_tpl_vars['company']['tel']; ?>
" title="电话"><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/tel.png"  />电话</a></li>
          <li class="footmess"><a href="sms:<?php echo $this->_tpl_vars['company']['mp']; ?>
" title="短信"><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/mess.png"  />短信</a></li>
          <li class="footmap"><a href="?token=<?php echo $this->_tpl_vars['token']; ?>
&m=site&c=home&a=map"  title="地图"><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/map.png"  />地图</a></li>
          <li class="footshare" style="border-right:0;">
          <!--分享(-->
					          <a href="?token=<?php echo $this->_tpl_vars['token']; ?>
&m=site&c=home&a=share" ><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/share.png" >分享</a>
                    <!--)分享-->
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>
<!--menu start-->
<?php if ($this->_tpl_vars['showPlugMenu']): ?>
<link rel="stylesheet" href="/tpl/Wap/default/common/css/flash/css/plugmenu.css">
<div class="plug-div">
        <div class="plug-phone">
            <div class="plug-menu themeStyle" style="background:<?php echo $this->_tpl_vars['site']['plugmenucolor']; ?>
"><span class="close"></span></div> 
               <?php $_from = $this->_tpl_vars['plugmenus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['vo']):
?>
                        <div class="themeStyle plug-btn plug-btn<?php echo $this->_tpl_vars['k']+1; ?>
 close" style="background:<?php echo $this->_tpl_vars['site']['plugmenucolor']; ?>
">
							<a  href="<?php echo $this->_tpl_vars['vo']['url']; ?>
">
								<span style="background-image: url(/tpl/Wap/default/common/css/flash/images/img/<?php echo $this->_tpl_vars['vo']['name']; ?>
.png);" ></span>
							</a>
						</div>
                     <?php endforeach; endif; unset($_from); ?>
<div class="plug-btn plug-btn5 close"></div>
                    </div>
</div>
<script src="/tpl/Wap/default/common/css/flash/js/zepto.min.js" type="text/javascript"></script>
<script src="/tpl/Wap/default/common/css/flash/js/plugmenu.js" type="text/javascript"></script>
<?php endif; ?>
<!--menu end-->
</body>
</html>
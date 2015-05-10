<?php /* Smarty version Smarty-3.1.19, created on 2015-05-10 21:38:36
         compiled from "/Applications/MAMP/htdocs/prestashop/admin398faerix/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1036728352554f8284bd59b2-96867471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '742f20b24250a055d56d5fe998570a5b7f61b309' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin398faerix/themes/default/template/content.tpl',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036728352554f8284bd59b2-96867471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554f8284be5084_99377192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f8284be5084_99377192')) {function content_554f8284be5084_99377192($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>

<?php
/* Smarty version 3.1.33, created on 2019-04-03 20:32:28
  from 'C:\xampp\htdocs\gitRepository\LPDIM-php-smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca4fc3c3a0702_43299744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f71abd611bf6858f2c1dc62d1de3dd251fec146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gitRepository\\LPDIM-php-smarty\\templates\\index.tpl',
      1 => 1554043197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ca4fc3c3a0702_43299744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<!DOCTYPE html>
<html lang="fr">


<body id="page-top" class="index">

<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['emailTxt']->value;?>

<?php }?>

<div id="notif" class="" role="alert"></div>
    <section>
        <div class="container">
            <div class="row">		
                <form action="message.php" method="POST" enctype="multipart/form-data">
                    <div class="col-sm-10"> 
                        <div class="form-group"> 
						<?php if ($_smarty_tpl->tpl_vars['select']->value) {?>   
							<?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['prep']->value->fetch()) {
$_smarty_tpl->_assignInScope('data', $_prefixVariable1 ,true);?>
								<textarea id='message' name='message' class='form-control' placeholder='Message'><?php echo $_smarty_tpl->tpl_vars['data']->value['contenu'];?>
</textarea>
								<input type='hidden' name='id' value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
							<?php }?>

						<?php } else { ?>
							<textarea id='message' name='message' class='form-control' placeholder='Message'></textarea>
						<?php }?>
                        </div>
                    </div>
                    <div class="col-sm-2">
						<?php if (!$_smarty_tpl->tpl_vars['select']->value) {?>
							<button type='submit' class='btn btn-success btn-lg'>Envoyer</button>
						<?php } else { ?>
							<button type='submit' class='btn btn-success btn-lg'>Modifier</button>
						<?php }?>
                    </div>
										<div>
					 <input type="file" name="avatar" id="avatar"/>
					</div>                        
                </form>
            </div>
            <div class="row">
				<?php while ($_prefixVariable2 = $_smarty_tpl->tpl_vars['stmt']->value->fetch()) {
$_smarty_tpl->_assignInScope('data', $_prefixVariable2 ,true);?>
						<blockquote><p><?php echo $_smarty_tpl->tpl_vars['data']->value['contenu'];?>
</p>
						<footer><?php echo $_smarty_tpl->tpl_vars['data']->value['date'];?>
</footer>
						<footer>Nombe de vote : <span id="voteNumber"><?php echo $_smarty_tpl->tpl_vars['data']->value['vote'];?>
</span></footer>
						<br><a href='index.php?action=modif&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
' class='btn btn-secondary'>Modifier </a>
						<a href='message.php?action=supp&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
' class='btn btn-secondary'>Supprimer </a>
						<?php if ($_smarty_tpl->tpl_vars['data']->value['img'] != null) {?>
						<img width="150px" src='./img/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
'/>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>
							<a href='#' name='vote' data-id='<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
' class='btn btn-secondary'>vote </a>
						<?php }?>
						</blockquote>
				<?php }?>

                </div>
            </div>
        </div>
    </section>

<?php echo '<script'; ?>
 src='./includes/vote.js'><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

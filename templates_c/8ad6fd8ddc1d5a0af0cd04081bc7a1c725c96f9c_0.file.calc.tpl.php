<?php
/* Smarty version 3.1.30, created on 2022-04-11 14:22:54
  from "/Applications/XAMPP/xamppfiles/htdocs/namespaces/app/views/calc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62541d9e70a309_53534047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ad6fd8ddc1d5a0af0cd04081bc7a1c725c96f9c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/namespaces/app/views/calc.tpl',
      1 => 1648759141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62541d9e70a309_53534047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12551683462541d9e7038e3_10897302', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_12551683462541d9e7038e3_10897302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <section>
	<form form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
									<div class="fields">
										<div class="field half">
											<label for="kwota">Podaj kwote</label>
											<input type="text" name="kwota" id="kwota"  />
										</div>
										<div class="field half">
											<label for="lata">Podaj ilosc lat</label>
											<input type="text" name="lata" id="lata" />
										</div>
										<div class="field half">
											<label for="opr">Podaj oprocentowanie</label>
											<input type="text" name="opr" id="opr" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Oblicz" class="primary" /></li>
										<li><input type="reset" value="Wyczysc" /></li>
									</ul>
								</form>
                            </section>
							<section class="split">
								<section>
									<div class="contact-method">
										
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol >
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value->result)) {?>
	<h4>Wynik</h4>
	<p>
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 zł
	</p>
<?php }?>

</div>
</section>									
</section>
<?php
}
}
/* {/block 'content'} */
}

<?php
/* Smarty version 3.1.39, created on 2024-03-14 06:25:39
  from 'C:\xampp\htdocs\innca\layouts\v7\modules\Potentials\2Dattachment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65f29863921cf8_85181138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '284821245d90199c20fe03b2d37d0a515ddafa39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\innca\\layouts\\v7\\modules\\Potentials\\2Dattachment.tpl',
      1 => 1703140970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f29863921cf8_85181138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="2Dattachment" class='modal-xs modal-dialog'>
    <div class = "modal-content">
        <?php ob_start();
echo vtranslate('2D Design Attachment',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable1);?>
        <?php $_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?>

        <form class="form-horizontal" id="massSave" method="post" action="index.php" enctype="multipart/form-data">
            <input type="hidden" name="module" value="Potentials" />
            <input type="hidden" name="view" value="DesignAttachment" />
            <input type="hidden" name="mode" value="save2DDesignAttachment" />
            <input type="hidden" name="recordId" value="<?php echo $_smarty_tpl->tpl_vars['recordId']->value;?>
" />
            
            <div class="modal-body">
                <div>
                    <span><strong><?php echo vtranslate('Select 2D Design Attachment',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span>
                    &nbsp;:&nbsp;<br><br>
                    <div>
                        <input type="file" name="2DDesign" id="2DDesign">
                    </div>
                </div>
            </div>
            <div>
                <div class="modal-footer">
                    <center>
                        <button class="btn btn-success" type="save2DDesign"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                        <a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>
<?php }
}
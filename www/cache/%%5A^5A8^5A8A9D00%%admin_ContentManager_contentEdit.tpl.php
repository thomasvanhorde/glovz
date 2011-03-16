<?php /* Smarty version 2.6.26, created on 2011-03-16 20:35:10
         compiled from /Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/content/view/admin_ContentManager_contentEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', '/Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/content/view/admin_ContentManager_contentEdit.tpl', 1, false),array('modifier', 'explode', '/Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/content/view/admin_ContentManager_contentEdit.tpl', 75, false),)), $this); ?>
<h3>Nouveau contenu <?php echo ((is_array($_tmp=$this->_tpl_vars['struct']['name'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</h3>


<form method="post">
    <input type="hidden" name="todo" value="admin/content[contentEdit]" />
    <input type="hidden" name="collection" value="<?php echo $this->_tpl_vars['struct']['id']; ?>
" />
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
    <input type="hidden" name="date_create" value="<?php echo $this->_tpl_vars['data']['date_create']; ?>
" />
    <?php $_from = $this->_tpl_vars['struct']['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['element']):
?>

        <?php $this->assign('uid', $this->_tpl_vars['element']['id']); ?>

        <br /><br /><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['element']['name'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>

        <?php if ($this->_tpl_vars['element']['limit'] != ''): ?>(limit :: <?php echo $this->_tpl_vars['element']['limit']; ?>
 char)<?php endif; ?>
        <br /><br />

        <!-- Input -->
        <?php if ($this->_tpl_vars['element']['refType'] == '10'): ?>
            <input type="text" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['uid']]; ?>
" <?php if ($this->_tpl_vars['element']['limit'] != ''): ?>maxlength="<?php echo $this->_tpl_vars['element']['limit']; ?>
"<?php endif; ?>/>
        <?php endif; ?>

        <!-- Input password -->
        <?php if ($this->_tpl_vars['element']['refType'] == '11'): ?>
            <input type="password" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['uid']]; ?>
" <?php if ($this->_tpl_vars['element']['limit'] != ''): ?>maxlength="<?php echo $this->_tpl_vars['element']['limit']; ?>
"<?php endif; ?>/>
        <?php endif; ?>

        <!-- Input email -->
        <?php if ($this->_tpl_vars['element']['refType'] == '12'): ?>
            <input class="email" type="text" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['uid']]; ?>
" <?php if ($this->_tpl_vars['element']['limit'] != ''): ?>maxlength="<?php echo $this->_tpl_vars['element']['limit']; ?>
"<?php endif; ?>/>
        <?php endif; ?>

        <!-- Checkbox -->
        <?php if ($this->_tpl_vars['element']['refType'] == '15'): ?>
            <input name="<?php echo $this->_tpl_vars['uid']; ?>
" <?php if ($this->_tpl_vars['data'][$this->_tpl_vars['uid']] == 'true'): ?>checked="checked"<?php endif; ?> value="true" type="checkbox"/>
        <?php endif; ?>

        <!-- textarea simple -->
        <?php if ($this->_tpl_vars['element']['refType'] == '20'): ?>
            <textarea name="<?php echo $this->_tpl_vars['uid']; ?>
"><?php echo $this->_tpl_vars['data'][$this->_tpl_vars['uid']]; ?>
</textarea>
        <?php endif; ?>

        <!-- textarea wysiwyg -->
        <?php if ($this->_tpl_vars['element']['refType'] == '21'): ?>
            <textarea name="<?php echo $this->_tpl_vars['uid']; ?>
" class="wysiwyg"><?php echo $this->_tpl_vars['data'][$this->_tpl_vars['uid']]; ?>
</textarea>
        <?php endif; ?>

        <!-- date -->
        <?php if ($this->_tpl_vars['element']['refType'] == '30'): ?>

        <input type="text" class="w16em" id="<?php echo $this->_tpl_vars['uid']; ?>
" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data'][$this->_tpl_vars['uid']]; ?>
" />

        <?php echo '
          <script type="text/javascript">
          // <![CDATA[
            var opts = {
                    formElements:{"'; ?>
<?php echo $this->_tpl_vars['uid']; ?>
<?php echo '":"d-sl-m-sl-y"},
                    // Show week numbers
                    showWeeks:true
            };
            datePickerController.createDatePicker(opts);
          // ]]>
          </script>
        '; ?>


        <?php endif; ?>

        <!-- media -->
        <?php if ($this->_tpl_vars['element']['refType'] == '40'): ?>
            // media :: not implemante
        <?php endif; ?>

        <!-- select -->
        <?php if ($this->_tpl_vars['element']['refType'] == '50'): ?>
            <?php $this->assign('SelectValue', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['element']['valeur']) : explode($_tmp, $this->_tpl_vars['element']['valeur']))); ?>
            <select name="<?php echo $this->_tpl_vars['uid']; ?>
">
                <?php $_from = $this->_tpl_vars['SelectValue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SelectK'] => $this->_tpl_vars['SelectItem']):
?>
                    <option value="<?php echo $this->_tpl_vars['SelectK']; ?>
" <?php if ($this->_tpl_vars['data'][$this->_tpl_vars['uid']] == $this->_tpl_vars['SelectK']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SelectItem'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        <?php endif; ?>

        <!-- ContentRef -->
        <?php if ($this->_tpl_vars['element']['refType'] == '60'): ?>
            <?php $this->assign('El', $this->_tpl_vars['element']['contentRef']); ?>
            <?php $this->assign('IndexEl', $this->_tpl_vars['index'][$this->_tpl_vars['El']]); ?>

            <select name="<?php echo $this->_tpl_vars['uid']; ?>
">
                <option value=""></option>
                <?php $_from = $this->_tpl_vars['IndexEl']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kIndex'] => $this->_tpl_vars['dateItem']):
?>
                    <option value="<?php echo $this->_tpl_vars['kIndex']; ?>
" <?php if ($this->_tpl_vars['data'][$this->_tpl_vars['uid']] == $this->_tpl_vars['kIndex']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['dateItem'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        <?php endif; ?>
    
    <?php endforeach; endif; unset($_from); ?>

    <br /><br /><br />
    <input type="submit" value="enregistrer" />

</form>
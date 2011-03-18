<?php /* Smarty version 2.6.26, created on 2011-03-18 22:51:15
         compiled from /Users/aenyhm/Sites/www/glovz/trunk/engine/inc/contentManager/contentManagerForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', '/Users/aenyhm/Sites/www/glovz/trunk/engine/inc/contentManager/contentManagerForm.tpl', 9, false),array('modifier', 'explode', '/Users/aenyhm/Sites/www/glovz/trunk/engine/inc/contentManager/contentManagerForm.tpl', 92, false),)), $this); ?>
<form method="post" class="validity niceform">
    <fieldset>
        <legend>
            <?php if ($this->_tpl_vars['id'] == ''): ?>
                Nouveau contenu
            <?php else: ?>
                Edition de contenu
            <?php endif; ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['structure']->name)) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>

        </legend>

        <?php $this->assign('strucId', $this->_tpl_vars['structure']['id']); ?>
        <input type="hidden" name="todo" value="<?php echo $this->_tpl_vars['action']; ?>
" />
        <input type="hidden" name="collection" value="<?php echo $this->_tpl_vars['strucId']; ?>
" />
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['id']; ?>
" />
        <input type="hidden" name="date_create" value="<?php echo $this->_tpl_vars['data']->date_create; ?>
" />


        <?php $_from = $this->_tpl_vars['structure']->types; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tmp'] => $this->_tpl_vars['e']):
?>
            <?php $_from = $this->_tpl_vars['e']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['element']):
?>

                <?php $this->assign('uid', $this->_tpl_vars['element']->id); ?>

                <dl>
                    <dt>
                        <label for="<?php echo $this->_tpl_vars['uid']; ?>
">
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['element']->name)) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>

                            <?php if ($this->_tpl_vars['element']->limit != ''): ?>(limit :: <?php echo $this->_tpl_vars['element']->limit; ?>
 char)<?php endif; ?>
                        </label>
                    </dt>


                    <dd>

                        <!-- Input -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '10'): ?>
                            <input class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" type="text" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}; ?>
" <?php if ($this->_tpl_vars['element']->limit != ''): ?>maxlength="<?php echo $this->_tpl_vars['element']->limit; ?>
"<?php endif; ?>/>
                        <?php endif; ?>

                        <!-- Input password -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '11'): ?>
                            <input class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" type="password" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}; ?>
" <?php if ($this->_tpl_vars['element']->limit != ''): ?>maxlength="<?php echo $this->_tpl_vars['element']->limit; ?>
"<?php endif; ?>/>
                        <?php endif; ?>

                        <!-- Input email-->
                        <?php if ($this->_tpl_vars['element']['refType'] == '12'): ?>
                            <input class="email <?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" type="text" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}; ?>
" <?php if ($this->_tpl_vars['element']->limit != ''): ?>maxlength="<?php echo $this->_tpl_vars['element']->limit; ?>
"<?php endif; ?>/>
                        <?php endif; ?>

                        <!-- Checkbox -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '15'): ?>
                            <input class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>"name="<?php echo $this->_tpl_vars['uid']; ?>
" <?php if ($this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")} == 'true'): ?>checked="checked"<?php endif; ?> value="true" type="checkbox"/>
                        <?php endif; ?>

                        <!-- textarea simple -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '20'): ?>
                            <textarea class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" name="<?php echo $this->_tpl_vars['uid']; ?>
"><?php echo $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}; ?>
</textarea>
                        <?php endif; ?>

                        <!-- textarea wysiwyg -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '21'): ?>
                            <textarea class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" name="<?php echo $this->_tpl_vars['uid']; ?>
" class="wysiwyg"><?php echo $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}; ?>
</textarea>
                        <?php endif; ?>

                        <!-- date -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '30'): ?>

                        <input type="text" class="w16em <?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" id="<?php echo $this->_tpl_vars['uid']; ?>
" name="<?php echo $this->_tpl_vars['uid']; ?>
" value="<?php echo $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}; ?>
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
                            <?php $this->assign('SelectValue', ((is_array($_tmp=",")) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['element']->valeur) : explode($_tmp, $this->_tpl_vars['element']->valeur))); ?>
                            <select size="1" class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" name="<?php echo $this->_tpl_vars['uid']; ?>
">
                                <?php $_from = $this->_tpl_vars['SelectValue']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['SelectK'] => $this->_tpl_vars['SelectItem']):
?>
                                    <option value="<?php echo $this->_tpl_vars['SelectK']; ?>
" <?php if ($this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")} == $this->_tpl_vars['SelectK']): ?>selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['SelectItem'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        <?php endif; ?>

                        <!-- ContentRef -->
                        <?php if ($this->_tpl_vars['element']['refType'] == '60'): ?>
                            <?php $this->assign('ElementContentRef', $this->_tpl_vars['element']->contentRef); ?>
                            <select size="1" class="<?php if ($this->_tpl_vars['element']->requis): ?>require<?php endif; ?>" name="<?php echo $this->_tpl_vars['uid']; ?>
">
                                <option value=""></option>
                                <?php $_from = $this->_tpl_vars['contentRef']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contentRefId'] => $this->_tpl_vars['contentRefElement']):
?>
                                    <?php if ($this->_tpl_vars['contentRefId'] == $this->_tpl_vars['ElementContentRef']): ?>
                                        <?php $_from = $this->_tpl_vars['contentRefElement']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contentRefId2'] => $this->_tpl_vars['contentRefElement2']):
?>
                                            <option <?php if ($this->_tpl_vars['contentRefId2'] == $this->_tpl_vars['data']->{(($_var=$this->_tpl_vars['uid']) && substr($_var,0,2)!='__') ? $_var : $this->trigger_error("cannot access property \"$_var\"")}->_id): ?>selected="selected" <?php endif; ?> value="<?php echo $this->_tpl_vars['contentRefId2']; ?>
">
                                                <?php $_from = $this->_tpl_vars['contentRefElement2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contentRefId3'] => $this->_tpl_vars['contentRefElement3']):
?>
                                                    <?php $_from = $this->_tpl_vars['contentRefStruct']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contentRefStructID'] => $this->_tpl_vars['contentRefStruct2']):
?>
                                                        <?php if ($this->_tpl_vars['contentRefStructID'] == $this->_tpl_vars['ElementContentRef']): ?>
                                                            <?php if ($this->_tpl_vars['contentRefStruct2'][$this->_tpl_vars['contentRefId3']]->index == 'true'): ?>
                                                                <?php echo ((is_array($_tmp=$this->_tpl_vars['contentRefElement3'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>

                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </option>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        <?php endif; ?>
                    </dd>
                </dl>
            <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>


    </fieldset>
    <fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="enregistrer" />
    </fieldset>


</form>




<script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/engine/jquery.validity.pack.js"></script>
<?php echo '
    <script>
        jQuery(function() {
            jQuery("form.validity").validity(function() {
                jQuery(".require").require(\'necessaire\');
                jQuery(".email").match("email");
            });
        });
    </script>
'; ?>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/engine/niceforms.js"></script>
<?php /* Smarty version 2.6.26, created on 2011-03-16 20:34:36
         compiled from /Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/structures/view/admin_ContentManager_structEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'utf8_decode', '/Users/aenyhm/Sites/www/glovz/trunk/engine/controller/admin/structures/view/admin_ContentManager_structEdit.tpl', 33, false),)), $this); ?>
<?php if ($this->_tpl_vars['locked'] == 'true' && $this->_tpl_vars['clone'] != 'true'): ?>
    Structure verrouiller
<?php else: ?>

<?php if ($this->_tpl_vars['clone'] == 'true'): ?><h3>Edition d'un clone de <?php echo $this->_tpl_vars['struct']['name']; ?>
</h3><?php endif; ?>
<form method="post" <?php if ($this->_tpl_vars['clone'] == 'true'): ?>action="../../"<?php endif; ?> >
    <input type="hidden" name="todo" value="admin/structures[structEdit]" />
    <input type="hidden" name="id" value="<?php if ($this->_tpl_vars['clone'] != 'true'): ?><?php echo $this->_tpl_vars['structID']; ?>
<?php else: ?><?php endif; ?>"/>

    
    <label>Nom</label><input name="name" type="text" value="<?php echo $this->_tpl_vars['struct']['name']; ?>
<?php if ($this->_tpl_vars['clone'] == 'true'): ?> - clone<?php endif; ?>" />
    <label>Description</label><textarea name="description"><?php echo $this->_tpl_vars['struct']['description']; ?>
</textarea>

    <strong>Elements</strong>

    <table id="StructList">

        <tr> 
            <th>Label</th>
            <th>ID</th>
            <th>Type</th>
            <th>Valeur(s)</th>
            <th>Limite</th>
            <th>Requis</th>
            <th>Index</th>
            <th></th>
        </tr>
        
        <?php $this->assign('k', 0); ?>
        <?php $_from = $this->_tpl_vars['struct']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['element']):
?>
            <tr>
                <td>
                    <input type="text" name="data[<?php echo $this->_tpl_vars['k']; ?>
][name]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['element']['type']['name'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
" />
                </td>
                <td>
                    <input type="text" name="data[<?php echo $this->_tpl_vars['k']; ?>
][id]" value="<?php echo $this->_tpl_vars['element']['type']['id']; ?>
""/>
                </td>
                <td>
                    <select class="type" name="data[<?php echo $this->_tpl_vars['k']; ?>
][type]" onchange="changeType()">
                    <?php $_from = $this->_tpl_vars['typeList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kType'] => $this->_tpl_vars['type']):
?>
                        <?php if ($this->_tpl_vars['element']['structId'] == $this->_tpl_vars['kType']): ?>
                        <option value="<?php echo $this->_tpl_vars['kType']; ?>
" selected="selected"><?php echo $this->_tpl_vars['type']; ?>
</option>
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['element']['structId'] != $this->_tpl_vars['kType']): ?>
                        <option value="<?php echo $this->_tpl_vars['kType']; ?>
"><?php echo $this->_tpl_vars['type']; ?>
</option>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <div style="display:none;">
                        <select name="data[<?php echo $this->_tpl_vars['k']; ?>
][contentRef]">
                            <option value="">Structure</option>
                            <?php $_from = $this->_tpl_vars['strucList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['KStruct'] => $this->_tpl_vars['Struct']):
?>
                                <?php if ($this->_tpl_vars['Struct']['locked'] == 'false'): ?>
                                    <option value="<?php echo $this->_tpl_vars['KStruct']; ?>
" <?php if ($this->_tpl_vars['element']['type']['contentRef'] == $this->_tpl_vars['KStruct']): ?>selected="selected" <?php endif; ?>><?php echo $this->_tpl_vars['Struct']['name']; ?>
</option>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </div>
                </td>
                <td>
                    <input class="valeur" type="text" name="data[<?php echo $this->_tpl_vars['k']; ?>
][valeur]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['element']['type']['valeur'])) ? $this->_run_mod_handler('utf8_decode', true, $_tmp) : utf8_decode($_tmp)); ?>
"/>
                    <div><?php if ($this->_tpl_vars['element']['structId'] == 50): ?>séparé par ","<?php endif; ?></div>
                </td>
                <td>
                    <input class="limit" type="text" name="data[<?php echo $this->_tpl_vars['k']; ?>
][limit]" value="<?php echo $this->_tpl_vars['element']['type']['limit']; ?>
" maxlength="3" size="3"/>
                </td>
                <td>
                    <input class="requis" type="checkbox" name="data[<?php echo $this->_tpl_vars['k']; ?>
][requis]" value="true" <?php if ($this->_tpl_vars['element']['type']['requis'] == 'true'): ?>checked="checked"<?php endif; ?> />
                </td>
                <td>
                    <input class="index" type="checkbox" name="data[<?php echo $this->_tpl_vars['k']; ?>
][index]" value="true" <?php if ($this->_tpl_vars['element']['type']['index'] == 'true'): ?>checked="checked"<?php endif; ?> />
                </td>
                <td>
                    <a href="admin_ContentManager_structEdit.tpl#" onclick="deleteElement(this);return false;">x</a>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>


    <input type="button" value="Ajouter un champ" onclick="addElement();"/>

    <br /><br />
    <input type="submit" name="register" value="Enregistrer" /> 

</form>

<table id="elementList" style="display:none;">
    <tr class="elementListAdd" style="display:none;">
        <td>
            <input type="text" nameTmp="data[keyId][name]" />
        </td>
        <td>
            <input type="text" nameTmp="data[keyId][id]" value=""/>
        </td>
        <td>
            <select class="type" nameTmp="data[keyId][type]" onchange="changeType()">
                <?php $_from = $this->_tpl_vars['typeList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kType'] => $this->_tpl_vars['type']):
?>
                    <option value="<?php echo $this->_tpl_vars['kType']; ?>
"><?php echo $this->_tpl_vars['type']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <div style="display:none;">
                <select nameTmp="data[keyId][contentRef]">
                    <option value="">Structure</option>
                    <?php $_from = $this->_tpl_vars['strucList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['KStruct'] => $this->_tpl_vars['Struct']):
?>
                        <?php if ($this->_tpl_vars['Struct']['locked'] == 'false'): ?>
                            <option value="<?php echo $this->_tpl_vars['KStruct']; ?>
"><?php echo $this->_tpl_vars['Struct']['name']; ?>
</option>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </div>
        </td>
        <td>
            <input class="valeur" type="text" nameTmp="data[keyId][valeur]" value=""/>
            <div></div>
        </td>
        <td>
            <input class="limit" type="text" nameTmp="data[keyId][limit]" maxlength="3" size="3" />
        </td>
        <td>
            <input class="requis" type="checkbox" nameTmp="data[keyId][requis]" value="true" />
        </td>
        <td>
            <input class="index" type="checkbox" nameTmp="data[keyId][index]" value="true" />
        </td>
        <td>
            <a href="admin_ContentManager_structEdit.tpl#" onclick="deleteElement(this);return false;">x</a>
        </td>        
    </tr>
</table> 

        <script type="text/javascript">
            var kE = <?php echo $this->_tpl_vars['k']; ?>
;   // Last keyID
<?php echo '
            function addElement(){
                kE++;
                ElemenList = jQuery(\'#elementList tr\');
                clone = ElemenList.clone();
                jQuery(\'#StructList\').append(clone);
                jQuery(\'#StructList\').find(\'tr:last-child\').fadeIn();
                jQuery.each(jQuery(\'#StructList\').find(\'tr:last-child\').find(\'input, select\'), function(i, item){
                    name = jQuery(item).attr(\'nameTmp\').replace("keyId", kE);
                    jQuery(item).attr(\'name\', name).removeAttr(\'nameTmp\');
                });
            }

            function deleteElement(elem){
                jQuery(elem).parents(\'tr\').fadeOut(400, function(){ jQuery(this).remove()});
            }

            function changeType(){
                chmpTxt = jQuery(\'#StructList tr select.type\');
                jQuery.each(chmpTxt, function(i, item){
                    eLimit = jQuery(item).parents(\'tr\').find(\'.limit\');
                    eValue = jQuery(item).parents(\'tr\').find(\'.valeur\');
                    eIndex = jQuery(item).parents(\'tr\').find(\'.index\');
                    eType = jQuery(item).parents(\'tr\').find(\'.type\');
                    eValueDescr = eValue.parent().find(\'div\');
                    eTypeDetail = eType.parent().find(\'div\');
                    eTypeDetailSelect = eTypeDetail.find(\'select\');
                   val = item.value;

                   if(val == 10)
                        eLimit.removeAttr(\'disabled\');
                   else
                        eLimit.val(\'\').attr(\'disabled\', \'disabled\');

                   if(val == 50)
                        eValueDescr.html(\'séparé par ","\');
                    else
                        eValueDescr.html(\'\');

                    if(val == 60)
                         eValue.val(\'\').attr(\'disabled\', \'disabled\');
                    else
                         eValue.removeAttr(\'disabled\');

                    if(val == 60) {
                         eTypeDetail.fadeIn();
                        eIndex.attr(\'disabled\',\'disabled\');
                    }
                    else {
                         eTypeDetail.hide();
                        eTypeDetailSelect.find(\'option\').removeAttr(\'selected\');
                        eTypeDetailSelect.val(\'\');
                        eIndex.removeAttr(\'disabled\');
                    }


                 });
            }
            changeType();
        </script>
    '; ?>

<?php endif; ?>
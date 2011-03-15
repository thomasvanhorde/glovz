<h2>Nouveau contenu { $structure->name|utf8_decode }</h2>

<form method="post">
    <input type="hidden" name="todo" value="{$action}" />
    <input type="hidden" name="collection" value="{$structure.id }" />
    <input type="hidden" name="id" value="{$id}" />
    <input type="hidden" name="date_create" value="{$data.date_create}" />


    {foreach from=$structure->types key=tmp item=e}
        {foreach from=$e key=k item=element}

            {assign var="uid" value=$element->id}

            <br /><br />
            {$element->name|utf8_decode}
            { if $element->limit != '' }(limit :: {$element->limit} char){/if}
            <br /><br />

            <!-- Input -->
            {if $element.refType == '10'}
                <input type="text" name="{$uid}" value="{$data.$uid}" { if $element->limit != '' }maxlength="{$element->limit}"{/if}/>
            {/if }

            <!-- Checkbox -->
            {if $element.refType == '15'}
                <input name="{$uid}" {if $data.$uid == "true"}checked="checked"{/if} value="true" type="checkbox"/>
            {/if }

            <!-- textarea simple -->
            {if $element.refType == '20'}
                <textarea name="{$uid}">{$data.$uid}</textarea>
            {/if }

            <!-- textarea wysiwyg -->
            {if $element.refType == '21'}
                <textarea name="{$uid}" class="wysiwyg">{$data.$uid}</textarea>
            {/if }

            <!-- date -->
            {if $element.refType == '30'}

            <input type="text" class="w16em" id="{$uid}" name="{$uid}" value="{$data.$uid}" />

            {literal}
              <script type="text/javascript">
              // <![CDATA[
                var opts = {
                        formElements:{"{/literal}{$uid}{literal}":"d-sl-m-sl-y"},
                        // Show week numbers
                        showWeeks:true
                };
                datePickerController.createDatePicker(opts);
              // ]]>
              </script>
            {/literal}

            {/if }

            <!-- media -->
            {if $element.refType == '40'}
                // media :: not implemante
            {/if }

            <!-- select -->
            {if $element.refType == '50'}
                {assign var=SelectValue value=","|explode:$element.valeur}
                <select name="{$uid}">
                    {foreach from=$SelectValue key=SelectK item=SelectItem}
                        <option value="{$SelectK}" {if $data.$uid == $SelectK}selected="selected"{/if}>{$SelectItem|utf8_decode}</option>
                    {/foreach}
                </select>
            {/if }

            <!-- ContentRef -->
            {if $element.refType == '60'}
                {assign var="ElementContentRef" value=$element->contentRef}
                <select name="{$uid}">
                    <option value=""></option>
                    {foreach from=$contentRef key=contentRefId item=contentRefElement}
                        {if $contentRefId == $ElementContentRef}
                            {foreach from=$contentRefElement key=contentRefId2 item=contentRefElement2}
                                <option value="{$contentRefId2}">{$contentRefElement2.label|utf8_decode}</option>
                            {/foreach}
                        {/if}
                    {/foreach}
                </select>
            {/if }
        {/foreach}
    {/foreach}

    <br /><br /><br />
    <input type="submit" value="enregistrer" />

</form>
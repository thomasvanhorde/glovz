<h3>Nouveau contenu { $struct.name }</h3>

<form method="post">
    <input type="hidden" name="todo" value="admin[contentEdit]" />
    <input type="hidden" name="collection" value="{ $struct.id }" />
    <input type="hidden" name="id" value="{$id}" />
    {foreach from=$struct.types key=k item=element}

        {assign var="uid" value=$element.id}

        <br /><br /><br />
        {$element.name}
        { if $element.limit != '' }(limit :: {$element.limit} char){/if}
        <br /><br />

        <!-- Input -->
        {if $element.refType == '10'}
            <input name="{$uid}" value="{$data.$uid}" { if $element.limit != '' }maxlength="{$element.limit}"{/if}/>
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
            // media :: not include
        {/if }

        <!-- select -->
        {if $element.refType == '50'}
            <select name="{$uid}">
                <option></option>
            </select>
        {/if }

    
    {/foreach}

    <input type="submit" value="enregistrer" />

</form>
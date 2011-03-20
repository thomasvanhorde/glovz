<script type="text/javascript" src="{$BASE_URL}/js/admin/datepicker/datepicker.js"></script>

<form method="post" class="validity niceform">
    <fieldset>
        <legend>
            {if $id==''}
                Nouveau contenu
            {else}
                Edition de contenu
            {/if}
            { $structure->name|utf8_decode }
        </legend>

        {assign var="strucId" value=$structure.id}
        <input type="hidden" name="todo" value="{$action}" />
        <input type="hidden" name="collection" value="{$strucId }" />
        <input type="hidden" name="id" value="{$id}" />
        <input type="hidden" name="date_create" value="{$data->date_create}" />


        {foreach from=$structure->types key=tmp item=e}
            {foreach from=$e key=k item=element}

                {assign var="uid" value=$element->id}

                <dl>
                    <dt>
                        <label for="{$uid}">
                            {$element->name|utf8_decode}
                            {if $element->limit != '' }(limit :: {$element->limit} char){/if}
                        </label>
                    </dt>


                    <dd>

                        <!-- Input -->
                        {if $element.refType == '10'}
                            <input class="{if $element->requis}require{/if}" type="text" name="{$uid}" value="{$data->$uid}" { if $element->limit != '' }maxlength="{$element->limit}"{/if}/>
                        {/if }

                        <!-- Input password -->
                        {if $element.refType == '11'}
                            <input class="{if $element->requis}require{/if}" type="password" name="{$uid}" value="{$data->$uid}" { if $element->limit != '' }maxlength="{$element->limit}"{/if}/>
                        {/if }

                        <!-- Input email-->
                        {if $element.refType == '12'}
                            <input class="email {if $element->requis}require{/if}" type="text" name="{$uid}" value="{$data->$uid}" { if $element->limit != '' }maxlength="{$element->limit}"{/if}/>
                        {/if }

                        <!-- Input number-->
                        {if $element.refType == '13'}
                            <input class="number {if $element->requis}require{/if}" type="text" name="{$uid}" value="{$data->$uid}" { if $element->limit != '' }maxlength="{$element->limit}"{/if}/>
                        {/if }

                        <!-- Checkbox -->
                        {if $element.refType == '15'}
                            <input class="{if $element->requis}require{/if}"name="{$uid}" {if $data->$uid == "true"}checked="checked"{/if} value="true" type="checkbox"/>
                        {/if }

                        <!-- textarea simple -->
                        {if $element.refType == '20'}
                            <textarea rows="5" cols="60" class="{if $element->requis}require{/if}" id="{$uid}" name="{$uid}">{$data->$uid}</textarea>
                        {/if }

                        <!-- textarea wysiwyg -->
                        {if $element.refType == '21'}
                            <textarea rows="5" cols="60" class="{if $element->requis}require{/if}" id="{$uid}" name="{$uid}" id="{$uid}" class="wysiwyg">{$data->$uid}</textarea>
                        {/if }

                        <!-- date -->
                        {if $element.refType == '30'}

                        <input type="text" class="date w16em {if $element->requis}require{/if}" name="{$uid}" id="{$uid}" value="{$data->$uid}" />

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
                            {assign var=SelectValue value=","|explode:$element->valeur}
                            <select size="1" class="{if $element->requis}require{/if}" name="{$uid}">
                                {foreach from=$SelectValue key=SelectK item=SelectItem}
                                    <option value="{$SelectK}" {if $data->$uid == $SelectK}selected="selected"{/if}>{$SelectItem|utf8_decode}</option>
                                {/foreach}
                            </select>
                        {/if }

                        <!-- ContentRef -->
                        {if $element.refType == '60'}
                            {assign var="ElementContentRef" value=$element->contentRef}
                            <select size="1" class="{if $element->requis}require{/if}" name="{$uid}">
                                <option value=""></option>
                                {foreach from=$contentRef key=contentRefId item=contentRefElement}
                                    {if $contentRefId == $ElementContentRef}
                                        {foreach from=$contentRefElement key=contentRefId2 item=contentRefElement2}
                                            <option {if $contentRefId2 == $data->$uid->_id}selected="selected" {/if} value="{$contentRefId2}">
                                                {foreach from=$contentRefElement2 key=contentRefId3 item=contentRefElement3}
                                                    {foreach from=$contentRefStruct key=contentRefStructID item=contentRefStruct2}
                                                        {if $contentRefStructID == $ElementContentRef}
                                                            {if $contentRefStruct2.$contentRefId3->index == "true"}
                                                                {$contentRefElement3|utf8_decode}
                                                            {/if}
                                                        {/if}
                                                    {/foreach}
                                                {/foreach}
                                            </option>
                                        {/foreach}
                                    {/if}
                                {/foreach}
                            </select>
                        {/if }
                    </dd>
                </dl>
            {/foreach}
        {/foreach}


    </fieldset>
    <fieldset class="action">
    	<input type="submit" name="submit" id="submit" value="enregistrer" />
    </fieldset>


</form>




<script type="text/javascript" src="{$BASE_URL}js/engine/jquery.validity.pack.js"></script>
{literal}
    <script>
        jQuery(function() {
            jQuery("form.validity").validity(function() {
                jQuery(".require").require('necessaire');
                jQuery(".email").match("email");
                jQuery(".number").match("number");
            });
        });
    </script>
{/literal}
<script type="text/javascript" src="{$BASE_URL}js/engine/niceforms.js"></script>

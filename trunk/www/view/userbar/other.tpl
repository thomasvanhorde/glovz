<div id="en_tete">
	<p>Bonjour, {$user.prenom} {$user.nom}.</p>
	<ul>
		<li>
			<a id="editMyProfil" href="{$BASE_URL}profil/">
				<img src="{$BASE_URL}themes/glovz/img/informations.png" alt="Informations" />
				Informations
			</a>
		</li>
		<li>
			<a href="{$BASE_URL}disconnect/">
				<img src="{$BASE_URL}themes/glovz/img/deconnexion.png" alt="D�connexion" />
				D�connexion
			</a>
		</li>
	</ul>
</div>


<div id="dialogFormMyProfil" class="dialogForm ui-dialog" title="Mes informations">{$formMyProfil}</div>
<script type="text/javascript">
    {literal}
    $("#editMyProfil").click(function(){
        $( "#dialogFormMyProfil" ).dialog( "open" );
        return false;
    });
    {/literal}
</script>

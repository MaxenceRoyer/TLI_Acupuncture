		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h3>Liste des pathologies</h3>
				  {if !empty($userSession)}
				  	<span class="span_error" id="spanSearchPathoError"></span>
				  	<input type="search" placeholder="Entrez un mot-clef" id="searchPatho" name="searchPatho">
				  	{literal}
						<script type="text/javascript" src="views/statics/js/search-patho.js"></script>
				    {/literal}
				  {else}
				  	<b class="span_error">Connectez-vous pour avoir accès à des fonctionnalités supplémentaires.</b>
				  {/if}
				  <div id="containerPatho">
					  <table id="containerPathoTable">
						  <tr>
							  <th>Identifiant</th>
							  <th>Méridien</th>
					  		  <th>Type</th>
							  <th>Description</th>
						  </tr>
						  {foreach from=$allPatho item=patho}
							  <tr>
								  <td class="idPatho">{$patho->getIdP()}</td>
								  <td class="merPatho">{$patho->getMer()}</td>
								  <td class="typePatho">{$patho->getType()}</td>
								  <td class="descPatho">{$patho->getDesc()}</td>
							  </tr>
						  {/foreach}
					  </table>
				  </div>
			  </section>
          </div>
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
				  {/if}
				  <div id="containerPatho">
					  <table id="containerPathoTable">
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
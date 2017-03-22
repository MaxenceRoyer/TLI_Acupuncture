		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <p>
					  <a href="pathologies">Revenir à la liste des pathologies</a>
				  </p>
			  </section>
			  {if $PathoDetails != false and $PathoSymptomes != false}
				  <section class="stripped">
					  <h3>Symptomes de : <i>{$PathoDetails->getDesc()}</i></h3>
					  <div id="containerPatho">
						  <table id="containerPathoTable">
							  <tr>
								  <th>Identifiant</th>
								  <th>Description</th>
							  </tr>
							  {foreach from=$PathoSymptomes item=symptome}
								  <tr>
									  <td class="idPatho">{$symptome->getIdS()}</td>
									  <td class="merPatho">{$symptome->getDesc()}</td>
								  </tr>
							  {/foreach}
						  </table>
					  </div>
				  </section>
			  {else}
				  <section class="stripped">
					  <h3>Aucun symptome trouvé en BDD.</h3>
				  </section>
			  {/if}
          </div>
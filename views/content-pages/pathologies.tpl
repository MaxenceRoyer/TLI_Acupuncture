		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h3>Pathologies (Limitées à 10)</h3>
				  <table>
					  <tr>
						  <th>Identifiant</th>
						  <th>Méridien</th>
						  <th>Type</th>
						  <th>Description</th>
					  </tr>
					  {foreach from=$allPatho item=patho}
						  <tr>
							  <td>{$patho->getIdP()}</td>
							  <td>{$patho->getMer()}</td>
							  <td>{$patho->getType()}</td>
							  <td>{$patho->getDesc()}</td>
						  </tr>
					  {/foreach}
				  </table>
			  </section>
			  <section class="stripped">
				  <h3>Symptômes des pathologies (Limitées à 10)</h3>
				  <table>
					  <tr>
						  <th>Identifiant</th>
						  <th>Méridien</th>
						  <th>Type</th>
						  <th>Description</th>
					  </tr>
					  {foreach from=$allPatho item=patho}
						  <tr>
							  <td>{$patho->getIdP()}</td>
							  <td>{$patho->getMer()}</td>
							  <td>{$patho->getType()}</td>
							  <td>{$patho->getDesc()}</td>
						  </tr>
					  {/foreach}
				  </table>
			  </section>
          </div>
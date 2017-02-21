			<!-- Content | Debug template -->
			<div id="content_page" role="main" style="float:none;width:100%;">
			  <section class="debug"> 
				  <h1>Debug Patho Controller</h1>
				  <br /> Tests Debug - Temporaire - GetAllPatho(3) <hr />
				  {foreach from=$allPatho item=patho}
				  	{var_dump($patho)}
				  {/foreach}
			  </section>
			</div>
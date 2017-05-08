		<!-- Content -->
		<div id="content_page" role="main">
			<section class="stripped">
				<h2>Flux Rss - Santé</h2>
                {$id=10}
				{foreach from=$arrayRss item=arrayItem}
					<div class="rss_item" tabindex="{$id++}">
						<img src="views/statics/img/RSS.png" alt="Flux RSS" class="rss_icon" />
						<a href="{$arrayItem->getLink()}" target="_blank">{$arrayItem->getTitle()}</a>
						<hr />
						{$arrayItem->getDescription()}
                    </div>
				{/foreach}
			</section>
		</div>
		<!-- Content -->
		<div id="content_page" role="main">
			<section class="stripped">
				<h1>Flux Rss - Santé</h1>
				{foreach from=$arrayRss item=arrayItem}
					<section class="rss_item">
						<img src="views/statics/img/RSS.png" class="rss_icon" />
						<a href="{$arrayItem->getLink()}" target="_blank">{$arrayItem->getTitle()}</a>
						<hr />
						{$arrayItem->getDescription()}
					</section>
				{/foreach}
			</section>
		</div>
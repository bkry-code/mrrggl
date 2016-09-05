<section class="container" id="search" style="display: none;">

	<div class="b-lead g-block">
		<div class="g-row">
			<div class="b-lead__text g-col">
				<p>Search Monotype:</p>
			</div><!--b-lead__text-->
		</div><!--end g-row-->
	</div><!--end b-lead-->
	<form action="/umbraco/Surface/SearchSurface/Search" class="b-search-form" method="post">
		<div class="g-block">
			<div class="g-row">
				<div class="g-col">
					<input class="b-search-form__input" type="search" autocomplete="off" name="SearchTerm" placeholder="Typefaces, case studies, HTML5 ads...">
					<input type="hidden" name="culture" value="en-US">
				</div><!--end g-col-->
			</div><!--end g-row-->
		</div><!--end b-search-->
		<div class="b-error-message g-block">
			<!--This is a server side error message and is hidden by default-->
			<div class="g-row">
				<div class="g-col">
					<div class="b-error-message__output">
						No results were found for XY. Please try another search term or get in touch with our experts. [Server Side Message]
					</div><!--end b-error-message__output-->
				</div><!--end g-col-->
			</div><!--end g-row-->
		</div><!--end b-error-message-->

		<div class="b-button b-button--search g-block">
			<div class="g-row">
				<div class="g-col">
					<input type="submit" class="b-button__item" title="" value="Search" disabled="disabled">
				</div><!--end g-col-->
			</div><!--end g-row-->
		</div><!--end b-button-->
	</form><!--end b-search-->

</section>
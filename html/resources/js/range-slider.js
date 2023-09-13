if($('.range_slider').length) {
	let price_min = $('#price-slider-min')
	let price_max = $('#price-slider-max')
	let price_value_min = $('#price-min-value')
	let price_value_max = $('#price-max-value')

	let priceGap = 10000

	$(price_value_min).text(($(price_min).val() + ",00 €"))
	$(price_value_max).text(($(price_max).val() + ",00 €"))

	$(price_min).on("input", function() {
        console.log('Done')
		if($(price_max).val() - $(price_min).val() <= priceGap) {
			$(price_min).val(($(price_max).val() - priceGap))
		}
		$(price_value_min).text(($(price_min).val() + ",00 €"))
	})
	$(price_max).on("input", function() {
		if($(price_max).val() - $(price_min).val() <= priceGap) {
			$(price_max).val(($(price_min).val() + priceGap))
		}
		$(price_value_max).text(($(price_max).val() + ",00 €"))
	})
}
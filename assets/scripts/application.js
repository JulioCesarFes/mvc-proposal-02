$(() => {

	$('body').on('click', 'a[data-confirm]', function (e) {

		if (!confirm($(this).data('confirm'))) {
			e.preventDefault();
			return false;
		}

	})

	$('body').on('click', '[data-a]', function (e) {
		location = $(this).data('a')
	})

})
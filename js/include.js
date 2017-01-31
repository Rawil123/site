function send(form,where) {
	$(form).submit(function() {
	var res = $(this).serialize();
		$.ajax ({
			type: 'POST',
			url: 'php/main.php',
			data:where,
			success : function(html) {
			console.log('Форма успешно отправилась на сервер')
			console.log(html)
		}
	});
})

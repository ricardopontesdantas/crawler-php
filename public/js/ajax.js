setInterval(function(){
	fetch('http://localhost:8000/api/listarEmails10')
	.then(function(response) {
		return response.json();
	})
	.then(function(json) {
		$('#listaEmails').empty();
		for(i=0; i<json.length; i++)
		{
			$('#listaEmails').append('<tr><td>' + json[i]['email'] + '</td></tr>');
		}
	})
}, 1000);

setInterval(function(){
	fetch('http://localhost:8000/api/totalUrlsColetadas')
	.then(function(response) {
		return response.json();
	})
	.then(function(json) {
		$('#urlsColetadas').empty();
		document.querySelector('#urlsColetadas').innerHTML = JSON.stringify(json)
	})
}, 5000);

setInterval(function(){
	fetch('http://localhost:8000/api/totalUrlsVisitadas')
	.then(function(response) {
		return response.json();
	})
	.then(function(json) {
		$('#urlsVisitadas').empty();
		document.querySelector('#urlsVisitadas').innerHTML = JSON.stringify(json)
	})
}, 5000);
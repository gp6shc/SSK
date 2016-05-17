var url = 'https://ppsbx1-laurenskids.cs11.force.com/safersmarterkids/services/apexrest/school';
//var url ='http://aagdev-aag.cs8.force.com/website/site_contact';

$(document).ready(
    function()
    {
        $.getJSON(url, function(data) {
		$.each(data, function(key, value) 
		{
			console.log(key + ' :'+ value);
			
		});
	});
    }
);




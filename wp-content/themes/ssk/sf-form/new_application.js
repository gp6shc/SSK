$(function(){
	$("#div16").hide();
	$("#div17").hide();
	$("#div18").hide();

	$('#school_name').attr('readonly','readonly');
	$('#school_zip').attr('readonly','readonly');
 	$('#school_city').attr('readonly','readonly');
 	$('#school_address').attr('readonly','readonly');
	$('#school_state').attr('readonly','readonly');


	  //Load  states
	var urlStates = 'https://safersmarterkids.org/wp-content/themes/ssk/sf-form/states.json';
    $.getJSON(urlStates,"", function (data) {
        var items = "";
        items = "<option value=''>--Choose a state--</option>";
        $.each(data, function (i, item) {
            items += "<option value=\"" + item.abbreviation + "\">" + item.name + "</option>";
        });
       // items += "<option value='-1'>Other</option>";
        $('#selectState').html(items);

    });

	 //Load  Countries
	 var url = 'https://safersmarterkids.org/wp-content/themes/ssk/sf-form/counties.json';
     $.getJSON(url,"", function (data) {
        var items = "";
        items = "<option value=''>--Choose a county--</option>";
        $.each(data, function (i, item) {
            items += "<option value=\"" + item.Id + "\">" + item.Name + "</option>";
        });
       // items += "<option value='-1'>Other</option>";
        $('#selectCountry').html(items);

 //   });

  //	$('select').select2({
	 //	// placeholder: "Select a school",
	 //});

    });

    $("#selectCountry").change(function() {
        var $ddl = $(this);
        var id = $ddl.val();
        	//Load schools data
		 var url = 'https://safersmarterkids.org/wp-content/themes/ssk/sf-form/schools.json';
	    $.getJSON(url,"", function (data) {
	        var items = "";
	        var schoolsByContry = find_in_object(data, {School_District__c: id});
	        items = "<option value=''>--Choose a school--</option>";
	        $.each(schoolsByContry, function (i, item) {
	            items += "<option value=\"" + item.Id + "\"  data-code = \"" +item.School_Code__c + "\" data-school-name = \"" +item.Name + "\" data-address = \"" +item.Mailing_Address_1__c + "\" data-state = \"" +item.State__c + "\" data-city = \"" +item.City__c+ "\" data-zip = \"" +item.ZIP_Code__c+ "\">" + item.Name + "</option>";
	        });
	        items += "<option value='-1'>Other</option>";
	        $('#selectSchool').html(items);

	    });
    });

    //Hide date section's
	$("#feb16").click(function(){
		$("#div16").fadeToggle();
	});

	$("#feb17").click(function(){
		$("#div17").fadeToggle();
	});

	$("#feb18").click(function(){
		$("#div18").fadeToggle();
	});

	//Fill school data
	 $('#selectSchool').change(function(){
	 	var $ddl = $(this);

 		$('#school_name').removeAttr('readonly');
 		$('#school_zip').removeAttr('readonly');
 		$('#school_city').removeAttr('readonly');
 		$('#school_address').removeAttr('readonly');
 		$('#school_state').removeAttr('readonly');

 		$('#school_zip').val("");
 		$('#school_city').val("");
 		$('#school_address').val("");
 		$('#school_state').val("");
 		$('#school_name').val("");
 		$('#school_code').val("");

	 	if($ddl.val() === '-1'){

	 	}else{
	 		//Disable controls before set
	 		$('#school_name').attr('readonly','readonly');



	 		//$('#school_state').attr('disabled','disabled');

	 		//Set value
	 		var $opt = $("#selectSchool option:selected" );

	 		var city = $opt.data('city');
	 		var address = $opt.data('address');
	 		var zip = $opt.data('zip');




	 		if (address != 'undefined'){
	 			$('#school_address').val(address);
	 			$('#school_address').attr('readonly','readonly');
	 		}

 			if (city != 'undefined'){
	 			$('#school_city').val(city);
	 			$('#school_city').attr('readonly','readonly');
	 		}

	 		if (zip != 'undefined'){
	 			$('#school_zip').val(zip);
	 			$('#school_zip').attr('readonly','readonly');
	 		}


	 	//	$('#school_state').val($opt.data('state'));
	 		$('#school_name').val($opt.data('schoolName'));
	 		$('#school_code').val($opt.data('code'));
	 	}

	 });
});

function find_in_object(my_object, my_criteria){

  return my_object.filter(function(obj) {
    return Object.keys(my_criteria).every(function(c) {
      return obj[c] == my_criteria[c];
    });
  });

}
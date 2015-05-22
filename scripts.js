jQuery(function(){

	jQuery('#upload_csv').submit(function(evt){
		evt.preventDefault();
		
		var i = 0, len = jQuery("#fileToUpload")[0].files.length;
		var formdata = new FormData();

		for( ; i < len ; i++){
			file = jQuery("#fileToUpload")[0].files[i];
			formdata.append("fileToUpload[]", file);	
		}
		var val = jQuery(this).serializeArray();
		var i = 0, len = val.length;
		for ( ; i < len ; i++){
			field = val[i];
			formdata.append(field.name, field.value);	
		}
		jQuery.ajax({
			url: "upload.php",
			type: "POST",
			data: formdata,
			processData: false,
			contentType: false,
			success: function (res) {
				console.log(res);
			}
		});
		
	});
})

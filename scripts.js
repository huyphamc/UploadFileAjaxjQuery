jQuery(function(){
	//Display if that's image
	function showUploadedItem (source, name) {
  		console.log(source);
  		console.log(name);
  		if(source != "")
  			jQuery('#image-list').append('<li><img src="'+source+'" /></li>');
  		else
  			jQuery('#image-list').append('<li>'+name+'</li>');
	}   
	jQuery("#fileToUpload").on('change',function(){
		jQuery('#image-list').html("");
		var i = 0, len = jQuery("#fileToUpload")[0].files.length;		
		for( ; i < len ; i++){
			file = jQuery("#fileToUpload")[0].files[i];
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedItem(e.target.result, file.name);
					};
					reader.readAsDataURL(file);
				}
			}else{
				showUploadedItem("", file.name);
			}	
				
		}

	})
	//Submit Action
	jQuery('#upload_file').submit(function(evt){
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

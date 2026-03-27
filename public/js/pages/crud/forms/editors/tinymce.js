"use strict";
// Class definition

var KTTinymce = function () {    
    // Private functions
    var demos = function () {
        
        tinymce.init({
			selector: '#kt-tinymce-1',
            toolbar: false,
            statusbar: false
		});

		tinymce.init({
			selector: '#kt-tinymce-2'
        });
        
        tinymce.init({
            selector: '#kt-tinymce-3',
            toolbar: 'advlist | autolink | link image | lists charmap | print preview', 
            plugins : 'advlist autolink link image lists charmap print preview',
            images_upload_handler : function handler(blobInfo, success, failure, progress) {
            {
                    var valid_extensions = ['png','jpg']
                    var ext, extensions;

                    extensions = {
                      'image/jpeg': 'jpg',
                      'image/jpg': 'jpg',
                      'image/gif': 'gif',
                      'image/png': 'png'
                    };
                    ext = extensions[blobInfo.blob().type.toLowerCase()] || 'dat';
                    //add your extension test here.
                    if( valid_extensions.indexOf(ext) == -1){
                         failure("Invalid extension");
                            return;
                    }

                    var xhr, formData;

                    xhr = new XMLHttpRequest();
                    xhr.open('POST', 'postAcceptor.php');
                    //xhr.withCredentials = settings.credentials;

                    xhr.upload.onprogress = function(e) {
                        progress(e.loaded / e.total * 100);
                    };

                    xhr.onerror = function() {
                        failure("Image upload failed due to a XHR Transport error. Code: " + xhr.status);
                    };

                    xhr.onload = function() {
                        var json;

                        if (xhr.status != 200) {
                            failure("HTTP Error: " + xhr.status);
                            return;
                        }

                        json = JSON.parse(xhr.responseText);

                        if (!json || typeof json.location != "string") {
                            failure("Invalid JSON: " + xhr.responseText);
                            return;
                        }

                        success(pathJoin(settings.basePath, json.location));
                    };

                    formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());

                    xhr.send(formData);
                }
            }
        });
        
        tinymce.init({
            selector: '#kt-tinymce-4',
            menubar: false,
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'], 
            plugins : 'advlist autolink link image lists charmap print preview code'
        });       
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTTinymce.init();
});


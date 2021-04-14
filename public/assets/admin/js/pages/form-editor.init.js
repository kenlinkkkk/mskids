$(document).ready(function () {
    0 < $("#elm1").length && tinymce.init({
        selector: "textarea#elm1",
        height: 500,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ],
        image_title: true,
        automatic_uploads: true,
        media_live_embeds: true,
        images_upload_url: '/upload',
        file_picker_types: 'media',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('name', 'picture');
            input.setAttribute('accept', 'video/*')
            input.onchange = function() {
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    // var base64 = reader.result.split(',')[1];
                    var base64 = reader.result.split(',')[1];
                    var ext = reader.result.split(',')[0].split('/')[1].split(';')[0];
                    $.ajax({
                        type: 'POST',
                        url: '/upload',
                        data: {
                            title: id + '.' + ext,
                            base64Data: base64,
                        },
                        success: function (response) {
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            // console.log(blobInfo.blobUri());
                            // console.log(response);
                            cb(response, { title: file.name });
                        },
                        error: function (response) {
                            console.log(response)
                        }
                    })
                    // var blobInfo = blobCache.create(id, file, base64);
                    // console.log(blo)
                    // blobCache.add(blobInfo);
                    // cb(blobInfo.blobUri(), { title: file.name });
                }
            };
            input.click();
        }
    })
});

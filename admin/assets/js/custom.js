/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/***************/
$('.show-details-btn').on('click', function (e) {
    e.preventDefault();
    $(this).closest('tr').next().toggleClass('open');
    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
});
/***************/

$('#id-input-file-3').ace_file_input({
    style: 'well',
    btn_choose: 'Drop files here or click to choose',
    btn_change: null,
    no_icon: 'ace-icon fa fa-cloud-upload',
    droppable: true,
    thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
             //Check an example below
             //or examples/file-upload.html
             return true;
             }*/
            /**,before_remove : function() {
             return true;
             }*/
    ,
    preview_error: function (filename, error_code) {
        //name of the file that failed
        //error_code values
        //1 = 'FILE_LOAD_FAILED',
        //2 = 'IMAGE_LOAD_FAILED',
        //3 = 'THUMBNAIL_FAILED'
        //alert(error_code);
    }

}).on('change', function () {
    //console.log($(this).data('ace_input_files'));
    //console.log($(this).data('ace_input_method'));
});

//dynamically change allowed formats by changing allowExt && allowMime function
$('#id-file-format').removeAttr('checked').on('change', function () {
    var whitelist_ext, whitelist_mime;
    var btn_choose
    var no_icon
    if (this.checked) {
        btn_choose = "Drop images here or click to choose";
        no_icon = "ace-icon fa fa-picture-o";

        whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
        whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
    } else {
        btn_choose = "Drop files here or click to choose";
        no_icon = "ace-icon fa fa-cloud-upload";

        whitelist_ext = null;//all extensions are acceptable
        whitelist_mime = null;//all mimes are acceptable
    }
    var file_input = $('#id-input-file-3');
    file_input
            .ace_file_input('update_settings',
                    {
                        'btn_choose': btn_choose,
                        'no_icon': no_icon,
                        'allowExt': whitelist_ext,
                        'allowMime': whitelist_mime
                    })
    file_input.ace_file_input('reset_input');

    file_input
            .off('file.error.ace')
            .on('file.error.ace', function (e, info) {
            });
});


$('textarea[data-provide="markdown"]').each(function () {
    var $this = $(this);

    if ($this.data('markdown')) {
        $this.data('markdown').showEditor();
    } else
        $this.markdown()

    $this.parent().find('.btn').addClass('btn-white');
})
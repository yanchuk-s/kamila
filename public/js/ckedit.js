$( document ).ready(function() {
    CKEDITOR.replace( 'editorru', {
        customConfig: '/custom/build-config.js',
        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',

    });

    CKEDITOR.replace( 'editoruk', {
        customConfig: '/custom/build-config.js',
        format_tags: 'p;h1;h2;h3;h4;h5;h6;pre;address;div',

    });
    
});




// CKEDITOR.replace( 'editorru', {
//     extraPlugins: 'uploadimage,image2',
//     height: 300,
//
//     // Upload images to a CKFinder connector (note that the response type is set to JSON).
//     uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
//
//     // Configure your file manager integration. This example uses CKFinder 3 for PHP.
//     filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
//     filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
//     filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
//     filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
//
//     // The following options are not necessary and are used here for presentation purposes only.
//     // They configure the Styles drop-down list and widgets to use classes.
//
//     stylesSet: [
//         { name: 'Narrow image', type: 'widget', widget: 'image', attributes: { 'class': 'image-narrow' } },
//         { name: 'Wide image', type: 'widget', widget: 'image', attributes: { 'class': 'image-wide' } }
//     ],
//
//     // Load the default contents.css file plus customizations for this sample.
//     contentsCss: [ CKEDITOR.basePath + 'contents.css', 'https://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],
//
//     // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
//     // resizer (because image size is controlled by widget styles or the image takes maximum
//     // 100% of the editor width).
//     image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
//     image2_disableResizer: true
// } );
//
//
// CKEDITOR.replace( 'editoruk', {
//     extraPlugins: 'uploadimage,image2',
//     height: 300,
//
//     // Upload images to a CKFinder connector (note that the response type is set to JSON).
//     uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
//
//     // Configure your file manager integration. This example uses CKFinder 3 for PHP.
//     filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
//     filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
//     filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
//     filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
//
//     // The following options are not necessary and are used here for presentation purposes only.
//     // They configure the Styles drop-down list and widgets to use classes.
//
//     stylesSet: [
//         { name: 'Narrow image', type: 'widget', widget: 'image', attributes: { 'class': 'image-narrow' } },
//         { name: 'Wide image', type: 'widget', widget: 'image', attributes: { 'class': 'image-wide' } }
//     ],
//
//     // Load the default contents.css file plus customizations for this sample.
//     contentsCss: [ CKEDITOR.basePath + 'contents.css', 'https://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],
//
//     // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
//     // resizer (because image size is controlled by widget styles or the image takes maximum
//     // 100% of the editor width).
//     image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
//     image2_disableResizer: true
// } );
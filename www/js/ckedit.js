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
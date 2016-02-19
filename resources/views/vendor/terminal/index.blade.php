<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Terminal</title>
    <link href="{{ asset('vendor/terminal/css/app.css') }}" rel="stylesheet"/>
    <style>
    html, body{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    #tracy-debug-bar {
        display: none;
    }
    </style>
</head>
<body>
    <textarea id="editor"></textarea>
    <div id="shell"></div>
    <script src="{{ asset('vendor/terminal/js/plugins.js') }}"></script>
    <script src="{{ asset('vendor/terminal/js/app.js') }}"></script>
    <script>
    (function($) {
        new Term("#shell", $.extend({!! $options !!}, {
            editor: "#editor"
        }));
    })(jQuery);
    </script>
</html>

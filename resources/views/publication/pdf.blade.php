<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IRMA PDF VIEWER</title>
</head>
<body>
<div>
    <iframe id="pdf-js-viewer" src="storage/docs/{{$file}}"
            title="webviewer" frameborder="0" width="100%" height="800"></iframe>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"
            integrity="sha512-qa1o08MA0596eSNsnkRv5vuGloSKUhY09O31MY2OJpODjUVlaL0GOJJcyt7J7Z61FiEgHMgBkH04ZJ+vcuLs/w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $( document ).ready(function() {
        });
    </script>
</body>
</html>

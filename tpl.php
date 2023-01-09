<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tester</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/ace/ace.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/script.js" type="text/javascript" charset="utf-8"></script>
    <link rel="icon" href="favicon.png" type="image/x-icon"/>
</head>
<body>
    <div id="editor-wrapper">
        <div id="editor"></div>
    </div>
    <div class="error-log-wrapper">
        <textarea id="log" readonly><?=$TPL['log']?></textarea>
    </div>
    <div class="col-2 execute-button-wrapper">
        <button type="submit" id="execute-code">Выполнить <b>(F9)</b></button>
        <div id="server-error-indicator" style="display: none;">Ошибка сервера</div>
    </div>
    <div class="col-2 log-button-wrapper">
        <button id="clear-log">Очистить лог <b>(Esc)</b></button>
    </div>
    <div class="clear"></div>

    <div id="output"></div>

</body>
</html>
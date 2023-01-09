<?php

define('LOG_LOCATION', '/home/hosts/logs/main-error.log');

class Log
{
    public static function get()
    {
        return file_get_contents(LOG_LOCATION);
    }

    public static function clear()
    {
        file_put_contents(LOG_LOCATION, '');
    }
}

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
    case 'execute':
        // выполняем присланный код
        $code = $_POST['code'];
        $code = str_replace('<?php', '', $code);
        ob_start();
        try {
            eval($code);
        } finally {
            $code_output = ob_get_clean();
        }

        echo json_encode([
            'log' => Log::get(),
            'codeOutput' => $code_output
        ]);
        break;

    case 'clear-log':
        Log::clear();
        break;

    case 'get-log':
        echo Log::get();
        break;

    default:
        $TPL['log'] = Log::get();
        require 'tpl.php';
}

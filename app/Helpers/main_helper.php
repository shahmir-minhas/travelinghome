<?php



if (!function_exists('getSegment')) {

    function getSegment(int $number)
    {
        $request = \Config\Services::request();

        if ($request->uri->getTotalSegments() >= $number && $request->uri->getSegment($number)) {
            return $request->uri->getSegment($number);
        } else {
            return false;
        }
    }

}

if (!function_exists('SeoUrl')) {
    function SeoUrl($url, $full = true)
    {
        $url = preg_replace('/[^a-zA-Z0-9_\/]/', '-', trim($url));
        $url = strtolower($url);
        $url = str_replace("--", "-", $url);
        $url = str_replace("--", "-", $url);
        $url = str_replace("--", "-", $url);
        if ($full) {
            return base_url($url);
        } else {
            return $url;
        }
    }
}
if (!function_exists('CAPTCHA')) {
    function CAPTCHA()
    {
        $code = strtoupper(substr(rand(100000000000000, 999999999999999), 5, 6));
        return $code;
    }
}


if (!function_exists('SettingsValue')) {
    function SettingsValue($key)
    {
        $Crud = new Crud();
        $SettingsTable = 'settings';
        $where = array("Key" => $key);
        $Setting = $Crud->SingleRecord($SettingsTable, $where);
        return $Setting['Value'];
    }
}

?>
<?php
if (!function_exists('static_asset')){
    function static_asset($src){
        return asset('assets/images/'.$src);
    }
}

if (!function_exists('get_settings')) {
    function get_settings($setting_key)
    {
        $setting_data = \App\Models\Settings::where("settings_key", $setting_key)->first();
        return @$setting_data->settings_value;
    }
}

if (!function_exists('ExtractDays')){
    function ExtractDays($value)
    {
        return preg_replace("/(days|day)\s*/", "", $value);
    }
}

if(!function_exists('InvestmentMethod')){
    function InvestmentMethod($status)
    {
        return ($status == 1) ? 'Invest from balance' : 'Invest from balance';
    }
}

if (!function_exists('AccountStatus')){
    function AccountStatus($status)
    {
        return ($status == 1) ? 'Active' : 'In-active';
    }
}

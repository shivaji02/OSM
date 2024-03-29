<?php
use Akaunting\Money\Money;
use App\Models\Setting;

function formatCurrency($amount, $isoCode)
{
    if (!$amount) {
        return $amount;
    }
    $decimalPoint = currency($isoCode)->getDecimalMark();

    if ($decimalPoint == ',') {
        $amount = str_replace('.', ',', $amount);
    }

    return Money::$isoCode($amount, true)->format();
}

function getWorkspaceCurrency($settings)
{
    return $settings['currency'] ?? config('app.currency');
}

function getPostPermalink($post)
{
    if($post->api_name === 'home')
    {
        return config('app.url').'/';
    }
    return config('app.url').'/'.$post->slug;
}
function getClientIP()
{
    if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    }

    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $client_ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

        return $client_ips[0];
    }

    if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        return $_SERVER['HTTP_X_FORWARDED'];
    }

    if (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    }

    if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_FORWARDED_FOR'];
    }

    if (isset($_SERVER['HTTP_FORWARDED'])) {
        return $_SERVER['HTTP_FORWARDED'];
    }

    if (isset($_SERVER['REMOTE_ADDR'])) {
        return $_SERVER['REMOTE_ADDR'];
    }

    return 'UNKNOWN';
}

function addSuperSetting($key, $value)
{
    $setting = Setting::where('workspace_id',1)
        ->where('key',$key)
        ->first();
    if(!$setting)
    {
        $setting = new Setting();
        $setting->workspace_id = 1;
        $setting->key = $key;
    }
    $setting->value = $value;
    $setting->save();
}
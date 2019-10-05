<?php

if(! function_exists('print_f')) {
    function print_f($data, $exit = false) {
        echo '<pre>';
        print_r($data);
        echo '<pre>';
        
        if($exit == true) {
            exit();
        }
    }
}

/**
 * Custom functions
 */

if ( ! function_exists('makeNumeric')) {
    function makeNumeric($val)
    {
        return preg_replace('/[^0-9]/', '', $val);
    }
}

if ( ! function_exists('formatPhone')) {
    function formatPhone($number)
    {
        return preg_replace(
            "/^[+]?[1]?[- ]?[(]?([2-9][0-8][0-9])[)]?[- ]?([2-9][0-9]{2})[- ]?([0-9]{4})$/",
            "\\1-\\2-\\3", $number);
    }
}

if ( ! function_exists('prepUrl')) {
    /**
     * prepUrl
     *
     * Simply adds the http:// part if no scheme is included
     *
     * @param   string  URL
     *
     * @return  string
     */
    function prepUrl($str = '')
    {
        if ($str === 'http://' OR $str === '') {
            return '';
        }
        $url = parse_url($str);
        if ( ! $url OR ! isset($url['scheme'])) {
            return 'http://' . $str;
        }

        return $str;
    }
}

if ( ! function_exists('addLeadingZero')) {
    function addLeadingZero($str = null, $length = 2)
    {
        if (is_null($str)) {
            return '';
        }

        return str_pad($str, $length, '0', STR_PAD_LEFT);
    }
}

if ( ! function_exists('getLogo')) {
    function getLogo()
    {
        return asset('/images/napa-pro-image-logo-commerce.png');
    }
}

if ( ! function_exists('excerpt')) {
    function excerpt($words, $maxLength = 60)
    {
        $words = strip_tags($words);
        $wordsArray = explode(' ', $words);
        if (count($wordsArray) > $maxLength) {
            return implode(' ', array_splice($wordsArray, 0, $maxLength)) . '...';
        }

        return $words;
    }
}

if ( ! function_exists('array_to_collection')) {
    function array_to_collection($array)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = array_to_collection($value);
                $array[$key] = $value;
            }
        }

        return collect($array);
    }
}

if ( ! function_exists('profileSettingsRoute') ) {
    /**
     * Returns link ot profile settings page of logged in user
     */
    function profileSettingsRoute()
    {
        return route('profile.show', auth()->user()->id);
    }
}

if(!function_exists('datetimeNow'))
{
	function datetimeNow($time=TRUE)
	{
		if($time)
			return date('Y-m-d H:i:s');
		
		return date('Y-m-d');
	}
}

if(!function_exists('array_to_object'))
{	
	function array_to_object($arr)
	{
		if(!is_array($arr))
			return $arr;
			
		return (object) array_map(__FUNCTION__, $arr);
	}
}








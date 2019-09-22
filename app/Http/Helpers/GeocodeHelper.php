<?php

namespace App\Http\Helpers;

class Geocode {

    public static function coordsByAddress($address, $displayMessage = false) 
    {
        if( is_array($address) ) {
            $address = implode($address);
        }

        $options = [
            'address' => urlencode($address),
            'sensor' => 'false',
            'key' => config('google.apiKey')
        ];

        $url = config('google.byAddressUrl') . http_build_query([
            $options
        ]);

        $results = false;
        
        $coordinates = [];

        if( $results = json_decode(file_get_contents($url)) ) {
            if( isset($results->results[0])) {
                $data = $results->results[0];

                $coordinates = [
                    'latitude' => $data->geometry->location->lat,
                    'longitude' => $data->geometry->location->lng
                ];
            }

        }

        if($results) {
            if($displayMessage == true) {
                return response()->json([
                    'status' => 'success',
                    'results' => $coordinates,
                    'message' => 'Getting coordinates from address was successful.'
                ]);
            } else {
                return response()->json([
                    'status' => 'success',
                    'results' => $coordinates
                ]);
            }
        } else {
            if($displayMessage == true) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Error getting coordinates from address.'
                ]);
            } else {
                return response()->json([
                    'status' => 'error'
                ]);
            }
        }
    }

    public static function coordsByZipCode($zipCode = null, $displayMessage = false) 
    {
        if(is_null($zipCode)) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Postal Code was supplied.'
            ]);
        }
        if(is_numeric($$zipCode)) {
            $zipCode = addLeadingZero($zipCode, 5);
        }

        $options = [
            'address' => rawurlencode($zipCode),
            'sensor' => 'false',
            'key' => $config('google.apiKey'),
            'components' => 'postal_code'
        ];

        $url = config('google.byZipCodeUrl') . http_build_query([
            $options
        ]);

        $results = false;
        
        $coordinates = [];

        if($results = simple_xml_load_file($url)) {
            if(isset($result->result->geometry->location)) {
                $coordinates = [
                    'latitude' => (string) $result->result->geometry->location->lat,
                    'longitude' => (string) $result->result->geometry->location->lng
                ];
            }

            if($results) {
                if($displayMessage == true) {
                    return response()->json([
                        'status' => 'success',
                        'results' => $coordinates,
                        'message' => 'Getting coordinates from address was successful.'
                    ]);
                } else {
                    return response()->json([
                        'status' => 'success',
                        'results' => $coordinates
                    ]);
                }
            } else {
                if($displayMessage == true) {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Error getting coordinates from address.'
                    ]);
                } else {
                    return response()->json([
                        'status' => 'error'
                    ]);
                }
            }
        }
    }
}
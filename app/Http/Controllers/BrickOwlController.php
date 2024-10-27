<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BrickOwlController extends Controller
{
    // public function getInventoryList()
    // {
    //     $apiEndpoint = "https://api.brickowl.com/v1/inventory/list";
    //     $apiKey = "e5a0a724004e62269a6bf69dd7406c0819ddebb272af171efb02a971ae2815c0"; 

    //     try {
    //         $client = new Client([
    //             'verify' => false, // Disable SSL verification (not recommended for production)
    //         ]);
    //         $response = $client->get($apiEndpoint, [
    //             'headers' => [
    //                 'Authorization' => 'Bearer ' . $apiKey,
    //                 'Content-Type' => 'application/json',
    //             ],
    //         ]);

    //         $statusCode = $response->getStatusCode();
    //         $data = json_decode($response->getBody(), true);

    //         if ($statusCode === 200) {
    //             dd($data);
    //             return response()->json($data);
    //         } else {
    //             return response()->json(['error' => 'API request failed'], $statusCode);
    //         }
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
        
    // }

    public function getInventoryList()
    {
        
        $url = 'https://api.brickowl.com/v1/inventory/list?key=e5a0a724004e62269a6bf69dd7406c0819ddebb272af171efb02a971ae2815c0';

        // Make the GET request to the API
        $response = Http::withoutVerifying()->get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Convert the JSON response to an array
            $data = $response->json();
            print_r($data);
            // Process and return the data as needed
            return $data;
        }

        // Handle error if the request was not successful
        return response()->json(['error' => 'API request failed'], $response->status());






        
        // second api code 

        // Bricklink API credentials (replace with your actual values)
        // $consumerKey = '850378F9C16141F3967E13CEE681D9EC';
        // $consumerSecret = '8D37106A5A4D4CF0B60B8252A190062F';
        // $token = 'DC9B7DB3E5E14F65B02C8D011365942E';
        // $tokenSecret = '51B545CA8E8E47849D03B29717497E8B';

        // // Bricklink API endpoint and request details
        // $apiEndpoint = "/items/set/10123-1/subsets";
        // $method = 'GET';
        // $params = [
        //     'box' => true,
        //     'instruction' => true,
        //     'break_minifigs' => false,
        //     'break_subsets' => false,
        // ];

        // // Generate the OAuth 1.0 HMAC-SHA1 authorization header
        // $headers = $this->generateOAuthHeader(
        //     $method,
        //     $apiEndpoint,
        //     $params,
        //     $consumerKey,
        //     $consumerSecret,
        //     $token,
        //     $tokenSecret,
        // );

        // try {
        //     $client = new Client();
        //     $response = $client->request($method, 'https://api.bricklink.com/api/store/v3' . $apiEndpoint, [
        //         'headers' => $headers,
        //     ]);

        //     if ($response->getStatusCode() === 200) {
        //         $data = json_decode($response->getBody(), true);
        //         return response()->json($data);
        //     } else {
        //         return response()->json(['error' => 'API request failed'], $response->getStatusCode());
        //     }
        // } catch (RequestException $e) {
        //     return response()->json(['error' => $e->getMessage()], 500);
        // }
    }


    private function generateOAuthHeader($method, $url, $params, $consumerKey, $consumerSecret, $token, $tokenSecret)
    {
        // Sort and encode parameters
        ksort($params);
        $encodedParams = [];
        foreach ($params as $key => $value) {
            $encodedParams[] = rawurlencode($key) . '=' . rawurlencode($value);
        }
        $encodedParams = implode('&', $encodedParams);

        // Generate the base string
        $baseString = strtoupper($method) . '&' . rawurlencode($url) . '&' . rawurlencode($encodedParams);

        // Generate the signing key
        $signingKey = rawurlencode($consumerSecret) . '&' . rawurlencode($tokenSecret);

        // Generate the HMAC-SHA1 signature
        $signature = base64_encode(hash_hmac('sha1', $baseString, $signingKey, true));

        // Create the OAuth header
        $oauthHeader = [
            'Authorization' => 'OAuth ' .
                'oauth_consumer_key="' . rawurlencode($consumerKey) . '", ' .
                'oauth_nonce="' . uniqid() . '", ' .
                'oauth_signature="' . rawurlencode($signature) . '", ' .
                'oauth_signature_method="HMAC-SHA1", ' .
                'oauth_timestamp="' . time() . '", ' .
                'oauth_token="' . rawurlencode($token) . '", ' .
                'oauth_version="1.0"',
        ];

        return $oauthHeader;
    }

}

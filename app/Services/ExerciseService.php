<?php
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ExerciseService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://exercisedb.p.rapidapi.com/',
            'headers' => [
                'X-RapidAPI-Host' => 'exercisedb.p.rapidapi.com',
                'X-RapidAPI-Key' => env('RAPIDAPI_KEY'),
            ],
            'verify' => 'path/to/cacert.pem', // Specify the path to CA certificates bundle
        ]);
    }

    public function getExercisesByTarget($target)
    {
        try {
            $response = $this->client->get("exercises/target/{$target}");
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            // Handle request exception
            return [];
        }
    }

    public function getAllExercises()
    {
        try {
            $response = $this->client->get("exercises");
            return json_decode($response->getBody(), true);
        } catch (RequestException $e) {
            // Handle request exception
            return [];
        }
    }
}

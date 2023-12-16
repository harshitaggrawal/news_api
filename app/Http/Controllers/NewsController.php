<?php

namespace App\Http\Controllers;
use App\Models\tech;
use App\Models\game;
use App\Models\tv;
use App\Models\web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class NewsController extends Controller
{

    public function index()
    {
        // return DB::select('select * from students');
       $tech= tech::all();
       $game= game::all();
       $tv= tv::all();
       $web= web::all();


       return view('index',[
        'tech'=>$tech,
        'game'=>$game,
        'tv'=>$tv,
        'web'=>$web,
    ]);
    }



public function get_data_tech(Request $request)
{
    // Make a request to get the XML response
    $response = Http::get('https://tech.hindustantimes.com/rss/tech');
    // Check if the request was successful
    if ($response->successful()) {
        // Convert XML to JSON

       
       
        $xml = simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, true);
       

        $data = $data['channel']['item'];

      
        $dataImg = $this->getImageUrlsFromRssFeed($response);
        $i=null;      
        for($i=0;$i<count($data);$i++)
        {
            $data[$i]['image']= $dataImg[$i]['img']; 
        }

   

        // foreach($data as $d)
        // {
        //     tech::create([
        //         'title' => $d['title'],
        //         'date' => $d['pubDate'],
        //         'description' => $d['description'],
        //     ]);
        // }

       
        // echo "<pre>";
        // print_r($data);
        // die;
       

        return view('newsData',['data'=>$data]);

        
    } else {
        
        echo 'Error: ' . $response->status();
    }
}



public function get_data_gaming(Request $request)
{
    // Make a request to get the XML response
    $response = Http::get('https://tech.hindustantimes.com/rss/gaming');
    // Check if the request was successful
    if ($response->successful()) {
        // Convert XML to JSON
        $xml = simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, true);
        $data = $data['channel']['item'];

        $dataImg = $this->getImageUrlsFromRssFeed($response);
        $i=null;      
        for($i=0;$i<count($data);$i++)
        {
            $data[$i]['image']= $dataImg[$i]['img']; 
        }

        // foreach($data as $d)
        // {
        //     game::create([
        //         'title' => $d['title'],
        //         'date' => $d['pubDate'],
        //         'description' => $d['description'],
        //     ]);
        // }
       
       
        return view('newsData',['data'=>$data]);

        
    } else {
        
        echo 'Error: ' . $response->status();
    }
}



public function get_data_web(Request $request)
{
    // Make a request to get the XML response
    $response = Http::get('https://tech.hindustantimes.com/rss/web-stories');
    // Check if the request was successful
    if ($response->successful()) {
        // Convert XML to JSON

        
        $xml = simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, true);
        $data = $data['channel']['item'];

        $dataImg = $this->getImageUrlsFromRssFeed($response);
        $i=null;      
        for($i=0;$i<count($data);$i++)
        {
            $data[$i]['image']= $dataImg[$i]['img']; 
        }

        // foreach($data as $d)
        // {
        //     web::create([
        //         'title' => $d['title'],
        //         'date' => $d['pubDate'],
        //         'description' => $d['description'],
        //     ]);
        // }
       
        return view('newsData',['data'=>$data]);

        
    } else {
        
        echo 'Error: ' . $response->status();
    }
}


public function get_data_tv(Request $request)
{
    // Make a request to get the XML response
    $response = Http::get('https://tech.hindustantimes.com/rss/tv/news');
    // Check if the request was successful
    if ($response->successful()) {
        // Convert XML to JSON
        $xml = simplexml_load_string($response->body(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $data = json_decode($json, true);
        $data = $data['channel']['item'];

        $dataImg = $this->getImageUrlsFromRssFeed($response);
        $i=null;      
        for($i=0;$i<count($data);$i++)
        {
            $data[$i]['image']= $dataImg[$i]['img']; 
        }

        // foreach($data as $d)
        // {
        //     tv::create([
        //         'title' => $d['title'],
        //         'date' => $d['pubDate'],
        //         'description' => $d['description'],
        //     ]);
        // }
        
       
        return view('newsData',['data'=>$data]);

        
    } else {
        
        echo 'Error: ' . $response->status();
    }
}






public function getImageUrlsFromRssFeed($response)
{
    
    if ($response->successful()) {

        $xmlData = $response->body();
        // Now, parse the XML data
        $parsedData = simplexml_load_string($xmlData);

        $items = [];

        // Check if the XML has a namespace and register it
        $namespace = $parsedData->getDocNamespaces();
        // dd($namespace);
        $parsedData->registerXPathNamespace('media', $namespace['media']);

        foreach ($parsedData->channel->item as $item) {
            // Accessing media namespace for 'media:content'
           
            $media = $item->xpath('media:content');

            
            if (!empty($media)) {
                $itemAttributes = [
                    'img' => (string)$media[0]['url'],
                ];
                

                $items[] = $itemAttributes;
            }

           
        }
       
        return $items;
    } else {
      
        return response()->json(['error' => 'Failed to fetch data from the API'], 500);
    }
}


}
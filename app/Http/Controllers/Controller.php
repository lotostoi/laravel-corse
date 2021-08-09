<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $newslist = [];
    protected $categoriesList = [];
    public function __construct()
    {
        $this->newsList = [
            [
                'id' => 'drtgretert',
                'categoryId' => 1,
                'img' => '/assets/img/news/1.jpg',
                'title' => 'WGC Invitational: Bryson DeChambeau just two behind Harris English after third round in Memphis',
                'content' => "An eight-birdie 63 gets Bryson DeChambeau within touching distance of long-time leader Harris English on day three of the WGC-FedEx St Jude Invitational. Watch Sunday's final round live from 5:30pm on Sky Sports Golf.",
            ],
            [
                'id' => 'dfgfdgfdgyuy',
                'categoryId' => 2,
                'img' => '/assets/img/news/2.jpg',
                'title' => 'Canada wants immigrants but the pandemic is in the way. So it’s looking to keep people already there.',
                'content' => 'TORONTO — Arjan van Dam came to Canada in 2017 on a work permit with his wife and children to help his Dutch employer, a purveyor of agricultural equipment, set up shop. He liked the country. In four years, the 33-year-old’s family grew — from two children to five, including twins born this year.But Canada’s immigration system was not weighed in his favor. His age, lack of postsecondary education and average English-language skills meant that qualifying for permanent residency was a challenge, said his Toronto-based lawyer, Barbara Jo Caruso. Until now. Canada wants more immigrants — 401,000 this year, to be exact — and is not letting pandemic border controls get in the way. That means some new programs, including ones granting residency status to people already in the country and in jobs that might not have previously qualified.',
            ],
            [
                'id' => 'gfhfghf',
                'categoryId' => 1,
                'img' => '/assets/img/news/3.jpg',
                'title' => 'The Hundred: Quinton de Kock helps Southern Brave overpower the Northern Superchargers and secure the double',
                'content' => "Dane Vilas top-scored for the visitors with a composed 35; Danny Briggs (2-28) and Tymal Mills (1-17) restricted Superchargers to 128; Mystery spinner Adil Rashid took a superb 2-19; But Quinton de Kock's imperious knock saw the hosts home",
            ],
            [
                'id' => 'dfgdfgdfg',
                'categoryId' => 2,
                'img' => '/assets/img/news/4.jpg',
                'title' => 'Living Together with Deep Divides gyuytuytuytut yutyutyu reytry ',
                'content' => 'The resurgence of the coronavirus has reshaped the early contours of the midterm elections, with some Democrats beginning to distance themselves from the Biden administration and more directly blame Republicans, reflecting their growing alarm on an issue that long played to their political advantage. Democrats had hoped to pivot from Biden’s success on the pandemic to pitch the party’s economic agenda, including sweeping proposals on infrastructure and social programs. But the rise in covid-19 cases is suddenly complicating that strategy.',
            ],
            [
                'id' => 'dfgdfgdfg',
                'categoryId' => 3,
                'img' => '/assets/img/news/5.jpg',
                'title' => 'Andrew Cuomo isn’t the first New York governor to face impeachment. In 1913, another Democrat was removed.',
                'content' => 'Calls for New York Gov. Andrew M. Cuomo to resign piled up this week after state Attorney General Letitia James released a damning report Tuesday detailing sexual harassment allegations against the Democratic governor. State lawmakers, members of Congress and even President Biden said Cuomo should resign, with no major figures in the state or national Democratic Party still defending him.',
            ],
        ];
        $this->categoriesList = [
            [
                'id' => 1,
                'title' => 'sport',
                'img' => '/assets/img/categories/sport.jpg',
            ],
            [
                'id' => 2,
                'title' => 'politics',
                'img' => '/assets/img/categories/politics.jpg',
            ],
            [
                'id' => 3,
                'title' => 'cultura',
                'img' => '/assets/img/categories/culture.jpg',
            ],
        ];
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

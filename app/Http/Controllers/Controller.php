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
                'title' => 'Reports: Jazz acquire Eric Paschall in trade with Warriors',
                'content' => 'The Warriors reportedly will receive a protected future second round pick from the Jazz in exchange for Paschall.',
            ],
            [
                'id' => 'dfgfdgfdgyuy',
                'categoryId' => 2,
                'title' => 'The China Challenge: America as a Rising Power',
                'content' => 'Chinese leaders insist that America is a declining power. It’s time to counter China’s narrative by turning it on its head. The Biden administration is wisely attempting to “build back better.” In the process, it should embrace the role of underdog. If framed correctly, this narrative shift could undercut China’s PR strategy, rally America’s allies and foster national unity. Getting the narrative right is the key. Beijing is attempting to discredit America in the eyes of the world, and especially in the eyes of its neighbors. Its leaders aim to supplant American influence with their own by consistently pointing out signs of America’s waning power. Unfortunately, some aspects of their story are not wrong. The U.S. has been failing to fix its myriad woes. It is not just America’s infrastructure that is deteriorating. Its life expectancy is falling, much as Russia’s did after the Soviet Union’s collapse. U.S. educational achievements have plummeted, so that it must import foreigners to work in the tech industry. Too many Americans lack basic critical thinking skills, allowing conspiracy theories to warp perceptions and fuel unrest. And while many metrics of national prestige are sinking, homelessness and suicide rates continue to rise. All this is fodder for Beijing’s narrative that America is in decline, but that narrative overlooks America’s remarkable ability to right itself. If Congress passes a massive infrastructure spending bill, it will potentially set the country on a course correction. The legislation will at least provide some means with which to reverse these disturbing trends, as long as American leaders acknowledge their severity. The question will then be how best to engage with China’s narrative of American decline.',
            ],
            [
                'id' => 'gfhfghf',
                'categoryId' => 1,
                'title' => 'Romelu Lukaku: Chelsea target wants to leave Inter Milan if suitable offer is made',
                'content' => 'The Blues had an £85m bid for the 28-year-old rejected by the Serie A champions earlier this week. Inter were confident of keeping hold of Lukaku given his previous comments about being happy to stay.',
            ],
            [
                'id' => 'dfgdfgdfg',
                'categoryId' => 2,
                'title' => 'Living Together with Deep Divides',
                'content' => 'The founding of America was an ambitious experiment in pluralism to create a nation with people from varied backgrounds, statuses, beliefs and creeds. Even more ambitious was the Founders’ promise of equality, liberty and justice for all—though of course, those principles were only applied to a sliver of the population within the new nation. The country created by this experiment was, and remains, far from perfect. The democratic processes and institutions built and fortified over time have played a critical role in sustaining our republic. However, we are now realizing the importance of not only strong democratic institutions, but also a shared core of liberal values that inform how we engage with each other as fully free and dignified equals.',
            ],
            [
                'id' => 'dfgdfgdfg',
                'categoryId' => 3,
                'title' => 'Mugham, the unique Azerbaijani musical tradition handed down over generations',
                'content' => 'No form of music tugs at the heartstrings of Azerbaijanis more than the sound of Mugham. This centuries-old musical tradition draws on folklore and oral histories passed down from generation to generation, creating a unique and ‘melancholy’ sound. The Azerbaijani Mugham is characterised by a large degree of improvisation and draws upon popular bard melodies, rhythms and performance techniques.  Namiq Aslanov is a Mugham singer. He explains that when he sings, "every word comes from inside, from the heart". "It is not played by following notes, so whatever comes out comes from within you", he adds.',
            ],
        ];
        $this->categoriesList = [
            [
                'id' => 1,
                'title' => 'sport',
            ],
            [
                'id' => 2,
                'title' => 'politics',
            ],
            [
                'id' => 3,
                'title' => 'cultura',
            ],
        ];
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

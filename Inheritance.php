<?php

// Piemērs #1

// class CoffeeMaker 
// {
//     public function brew()
//     {
//         var_dump('Brewing the coffee');
//     }
// }

// class SpecialtyCoffeeMaker extends CoffeeMaker
// {
//     public function brewLatte()
//     {
//         var_dump('Brewing a latte');
//     }
// }


// (new CoffeeMaker())->brew();

// (new SpecialtyCoffeeMaker())->brewLatte();




// Piemērs #2
// class Collection
// {
//     protected array $items;

//     public function __construct(array $items)
//     {
//         $this->items = $items;
//     }

//     public function sum($key)
//     {
//         return array_sum(array_column($this->items, $key));
//     }

// }

// class VideosCollection extends Collection
// {
//     public function lenght()
//     {
//         return $this->sum('lenght');
//     }
// }

// class Video
// {
//     public $title;
//     public $lenght;

//     public function __construct($title, $lenght)
//     {
//         $this->title = $title;
//         $this->lenght = $lenght;
//     }
// }

// $videos = new VideosCollection([
//     new Video('Some Video', 100),
//     new Video('Some Video 2', 200),
//     new Video('Some Video 3', 300)
// ]);


// echo $videos->lenght();



// Piemērs #3
// class AchievementType
// {
//     public function name()
//     {

//     }

//     public function difficulty()
//     {

//     }

//     public function icon()
//     {

//     }
// }

// class FirstThousandPoints extends AchievementType
// {
//     public function qualifier($user)
//     {

//     }

//     //Varu pārrakstīt ja vajadzīgs.
//     public function name()
//     {
//         return 'Welcome Aboard!';
//     }
// }
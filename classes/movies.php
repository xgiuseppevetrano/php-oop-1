<?php
    class Movie {
        public $title;
        public $director;
        public $genre;
        public $duration;
        public $year;
        private $stars;

        public function __construct($_title, $_director, $genre, $duration, $year) {
            $this->title = $_title;
            $this->director = $_director;
            $this->genre = $genre;
            $this->duration = $duration;
            $this->year = $year;

        }

        public function getStars($star) {
            for ($i=0; $i < $star; $i++) {
                $this->stars += "<span><i class='fa-solid fa-star'></i></span>";
            }
        }
    }
?>
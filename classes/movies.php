<?php
    class Movie {
        public $title;
        public $director;
        public $genre;
        public $duration;
        public $year;
        public $stars;
        private $htmlStars;

        public function __construct($_title, $_director, $_genre, $_duration, $_year, $_stars) {
            $this->title = $_title;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->year = $_year;
            $this->stars = $_stars;
        }

        public function getStars($stars) {
            for ($i=0; $i < $stars; $i++) {
                $this->htmlStars .= "<span><i class='fa-solid fa-star'></i></span>";
            }
            return $this->htmlStars;
        }
    }
?>
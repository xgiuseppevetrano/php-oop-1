<?php
    class movie {
        public $title;
        public $director;
        public $genre;
        public $duration;
        public $year;
        public $stars;

        public function __construct($_title, $_director, $_genre, $_duration, $_year, $_stars) {
            $this->title = $_title;
            $this->director = $_director;
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->year = $_year;
            $this->stars = $_stars;
        }

        public function getStars() {
            $htmlStars = '';
            for ($i=0; $i < $this->stars; $i++) {
                $htmlStars .= "<span><i class='fa-solid fa-star'></i></span>";
            }
            return $htmlStars;
        }
    }
?>
<?php

interface MusicInterface{

    public function play();
}

class Song implements MusicInterface{

    protected $title, $artist, $path;

    public function __construct(string $title, string $artist, string $path){
        $this->title = $title;
        $this->artist = $artist;
        $this->path = $path;
    }

    public function play(){

        return $this->path;
    }
}

class Playlist implements MusicInterface{

    protected $songs = [];
    protected $currentTrack = 0;
   

        public function addSong (MusicInterface $song) : bool {

            $this->songs[] = $song;

            return true;
        }

        public function play(){

            return $this->songs[$this->currentTrack]->play();
        }

        public function next(){

            if(isset($this->songs[$this->currentTrack + 1])){
                $this->currentTrack++;

                return $this->play();
            }

            return $this->play();
        }
            public function previous(){
                if($this->currentTrack > 0){
                    $this->currentTrack--;

                    return $this->play();
                }
                return $this->play();
            }
}

function composite(){

    $rockPlaylist = new Playlist();

    $rockPlaylist->addSong(new Song('The Kill', '30 Seconds to Mars', '/music/the_kill.mp3'));
    $rockPlaylist->addSong(new Song('Given up', 'Linking Park', '/music/given_up.mp3'));
    $rockPlaylist->addSong(new Song('Whole Lotta Love', 'Led Zeppelin', '/music/whole_love.mp3'));


    echo $rockPlaylist->play() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->previous() . '<br>';
    echo $rockPlaylist->previous() . '<br>';
    echo $rockPlaylist->previous() . '<br>';
}

composite();
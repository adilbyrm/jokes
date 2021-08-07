<?php

namespace AdilByrm\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'If you spell Chuck Norris in Scrabble, you win. Forever.',
        'Chuck Norris breathes air … five times a day.',
        'When God said, “Let there be light!” Chuck said, “Say Please.”'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
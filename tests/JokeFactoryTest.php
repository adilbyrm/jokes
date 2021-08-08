<?php

namespace AdilByrm\ChuckNorrisJokes\Tests;

use AdilByrm\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_return_a_random_joke()
    {
        $joke = new JokeFactory([
            'it is a random joke',
        ]);

        $joke = $joke->getRandomJoke();

        $this->assertSame('it is a random joke', $joke);
    }

    /** @test */
    public function it_return_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'If you spell Chuck Norris in Scrabble, you win. Forever.',
            'Chuck Norris breathes air … five times a day.',
            'When God said, “Let there be light!” Chuck said, “Say Please.”',
        ];

        $joke = new JokeFactory();

        $joke = $joke->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Data\Foo;
use App\Data\Bar;


use function PHPUnit\Framework\assertEquals;

class MateriInden extends TestCase
{
    public function testmateri(){
        $foo= new Foo();
        $bar=new Bar($foo);

        assertEquals('foo and bar',$bar->bar());
    }
}

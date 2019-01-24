<?php
namespace Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Dinosaur;

class DinosaurTest extends TestCase
{

    public function testSettingLenght()
    {
        $dinosaur = new Dinosaur();

        $this->assertSame(0, $dinosaur->getLength());

        $dinosaur->setL(9);

        $this->assertSame(9, $dinosaur->getLength());
    }
}

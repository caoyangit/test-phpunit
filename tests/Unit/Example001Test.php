<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Example001Test extends TestCase
{
    // �e�X�g�Ώۂ̃I�W�F�N�g
    private $target = null;


    public function testA()
    {
        $this->target = new Example001();

        $a = $this->target->A();

        //�Ȃ񂩃e�X�g�R�[�h����
        $this->assertEquals(1,$a);
    }

    public function testB()
    {
        $this->target = new Example001();

        $b = $this->target->B();

        //�Ȃ񂩃e�X�g�R�[�h����
        $this->assertEquals(1,$b);
    }
}

<?php

use PHPUnit\Framework\TestCase;

class AcmeTest extends TestCase {

    public function testAcmeCanBeInstanciated() {
        $this->acme = new Acme();
        $this->assertInstanceOf('Acme', $this->acme);
    }

}
<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase {
    public function testIndexOutput() {
        ob_start(); // Start capturing output
        include 'index.php'; // Run the file
        $output = ob_get_clean(); // Get the output

        $this->assertStringContainsString("welcome to my app ", $output);
    }
}

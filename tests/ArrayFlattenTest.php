<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

final class ArrayFlattenTest extends TestCase
{
    /**
     * @var ArrayFlattener
     */
    private $flattener;

    public function __construct()
    {
        parent::__construct();

        $this->flattener = new ArrayFlattener();
    }

    public function testEmptyReturnsEmpty(): void
    {
        $this->assertEquals($this->flattener->flatten([]), []);
    }

    public function testSimpleCase(): void
    {
        $this->assertEquals($this->flattener->flatten([1,2,3]), [1,2,3]);
    }

    public function testSimpleRecursiveCase(): void
    {
        $this->assertEquals($this->flattener->flatten([1,2,[4,5],3]), [1,2,4,5,3]);
    }

    public function testDeeplyNested(): void
    {
        $this->assertEquals($this->flattener->flatten([1,[2,[3,[4,[5]]]]]), [1,2,3,4,5]);
    }
}
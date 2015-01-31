<?php
require_once __DIR__ . '/../../src/Sample.php';
use AspectMock\Test as test;

class SampleTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testGetFullname()
    {
        $user = ['lastname' => '苗字', 'firstname' => '名前'];
        $query = test::double('Query', ['find' => $user]);
        $sample = new Sample();

        $this->assertEquals('苗字 名前', $sample->getFullname(10));
        $query->verifyInvoked('find');
    }

}

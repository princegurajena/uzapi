<?php namespace Tests\Repositories;

use App\Models\Test;
use App\Repositories\TestRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\MakeTestTrait;
use Tests\ApiTestTrait;

class TestRepositoryTest extends TestCase
{
    use MakeTestTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TestRepository
     */
    protected $testRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->testRepo = \App::make(TestRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_test()
    {
        $test = $this->fakeTestData();
        $createdTest = $this->testRepo->create($test);
        $createdTest = $createdTest->toArray();
        $this->assertArrayHasKey('id', $createdTest);
        $this->assertNotNull($createdTest['id'], 'Created Test must have id specified');
        $this->assertNotNull(Test::find($createdTest['id']), 'Test with given id must be in DB');
        $this->assertModelData($test, $createdTest);
    }

    /**
     * @test read
     */
    public function test_read_test()
    {
        $test = $this->makeTest();
        $dbTest = $this->testRepo->find($test->id);
        $dbTest = $dbTest->toArray();
        $this->assertModelData($test->toArray(), $dbTest);
    }

    /**
     * @test update
     */
    public function test_update_test()
    {
        $test = $this->makeTest();
        $fakeTest = $this->fakeTestData();
        $updatedTest = $this->testRepo->update($fakeTest, $test->id);
        $this->assertModelData($fakeTest, $updatedTest->toArray());
        $dbTest = $this->testRepo->find($test->id);
        $this->assertModelData($fakeTest, $dbTest->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_test()
    {
        $test = $this->makeTest();
        $resp = $this->testRepo->delete($test->id);
        $this->assertTrue($resp);
        $this->assertNull(Test::find($test->id), 'Test should not exist in DB');
    }
}

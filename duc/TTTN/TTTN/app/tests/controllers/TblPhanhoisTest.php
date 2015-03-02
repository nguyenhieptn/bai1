<?php

use Mockery as m;
use Way\Tests\Factory;

class TblPhanhoisTest extends TestCase {

	public function __construct()
	{
		$this->mock = m::mock('Eloquent', 'Tbl_phanhoi');
		$this->collection = m::mock('Illuminate\Database\Eloquent\Collection')->shouldDeferMissing();
	}

	public function setUp()
	{
		parent::setUp();

		$this->attributes = Factory::tbl_phanhoi(['id' => 1]);
		$this->app->instance('Tbl_phanhoi', $this->mock);
	}

	public function tearDown()
	{
		m::close();
	}

	public function testIndex()
	{
		$this->mock->shouldReceive('all')->once()->andReturn($this->collection);
		$this->call('GET', 'tbl_phanhois');

		$this->assertViewHas('tbl_phanhois');
	}

	public function testCreate()
	{
		$this->call('GET', 'tbl_phanhois/create');

		$this->assertResponseOk();
	}

	public function testStore()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(true);
		$this->call('POST', 'tbl_phanhois');

		$this->assertRedirectedToRoute('tbl_phanhois.index');
	}

	public function testStoreFails()
	{
		$this->mock->shouldReceive('create')->once();
		$this->validate(false);
		$this->call('POST', 'tbl_phanhois');

		$this->assertRedirectedToRoute('tbl_phanhois.create');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testShow()
	{
		$this->mock->shouldReceive('findOrFail')
				   ->with(1)
				   ->once()
				   ->andReturn($this->attributes);

		$this->call('GET', 'tbl_phanhois/1');

		$this->assertViewHas('tbl_phanhoi');
	}

	public function testEdit()
	{
		$this->collection->id = 1;
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->once()
				   ->andReturn($this->collection);

		$this->call('GET', 'tbl_phanhois/1/edit');

		$this->assertViewHas('tbl_phanhoi');
	}

	public function testUpdate()
	{
		$this->mock->shouldReceive('find')
				   ->with(1)
				   ->andReturn(m::mock(['update' => true]));

		$this->validate(true);
		$this->call('PATCH', 'tbl_phanhois/1');

		$this->assertRedirectedTo('tbl_phanhois/1');
	}

	public function testUpdateFails()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['update' => true]));
		$this->validate(false);
		$this->call('PATCH', 'tbl_phanhois/1');

		$this->assertRedirectedTo('tbl_phanhois/1/edit');
		$this->assertSessionHasErrors();
		$this->assertSessionHas('message');
	}

	public function testDestroy()
	{
		$this->mock->shouldReceive('find')->with(1)->andReturn(m::mock(['delete' => true]));

		$this->call('DELETE', 'tbl_phanhois/1');
	}

	protected function validate($bool)
	{
		Validator::shouldReceive('make')
				->once()
				->andReturn(m::mock(['passes' => $bool]));
	}
}

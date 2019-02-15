<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Category;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       $first=factory(Category::class)->create();

       $second=factory(Category::class)->create([
        'created_at'=>\Carbon\Carbon::now()->subMonth()
        ]);

       $Category=Category::archives();
dd($Category);

       $this->assertCount(2,$Category);
    }
}

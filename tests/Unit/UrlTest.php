<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UrlTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_url_original(){
        $response = $this->post('/short',[
            'original_url' => 'https://www.youtube.com/watch?v=KNX1R9de2x0&list=RDKNX1R9de2x0&start_radio=1',

            
            
        ]);

        $response->assertSee('short_url');
    }


    public function test_button(){
        //non riconosce il metodo press...
        $this->press('button');

    }

    public function test_url_short()
    {
        $this->visit('/short')
            ->click('short_url')
            ->seePageIs('short_url');
    }


    






}

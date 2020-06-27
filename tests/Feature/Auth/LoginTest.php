<?php


namespace Tests\Feature\Auth;

use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_edit_a_product()
    {
        $product = factory(Product::class)->Edit([


            'pro_name'=>''


        ]);
        $response = $this->post('/admin/editProductForm/{8}', [
            'pro_name' => $product->pro_name,


        ]);
        $response->assertRedirect('/admin/products');
        $this->assertAuthenticatedAs($product);
    }

}

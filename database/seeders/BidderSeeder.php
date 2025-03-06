<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Bidder;
class BidderSeeder extends Seeder
{
    public function run()
    {
        Bidder::factory()->count(10)->create();
    }
}

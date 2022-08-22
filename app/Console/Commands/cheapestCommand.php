<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pharmacy;
use function Psy\info;


class cheapestCommand extends Command
{

    protected $signature = 'get:cheapest {id}';


    protected $description = 'Command description to get Cheap 5 Products ';

    public function __construct( $id = 1 )
    {
        $this->id = $id;

        parent::__construct();
    }

    public function handle()
    {
          $id = $this->id;;
           $data =  Pharmacy::with(
             [ 'pharmacyPrice' => function($q)  use($id) {
            $q->where('product_id' , $id )->orderBy('price' , 'asc' )->limit(5);
        }]
        )->whereHas('pharmacyPrice')->get();
        $this->info($data);
    }
}

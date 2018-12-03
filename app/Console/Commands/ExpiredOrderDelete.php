<?php

namespace App\Console\Commands;

use App\Order;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ExpiredOrderDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'orders:expired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily deletion of orders expired.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $orders = Order::where('dead_line', '<', Carbon::now())->get();
        if (count($orders) > 0) {
            foreach ($orders as $order) {
                $order->delete();
            }
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowBuyers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count-addresses {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Команда должна возвращать кол-во адресов у пользователя с идентификатором {id}';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $buyer_id = $this->argument('id');
        $adress_count = DB::table('adresses')->where('buyer_id', '=', $buyer_id)->count();
        echo "Кол-во адресов у покупателя, имеющего id - $buyer_id = $adress_count \n";
        return $adress_count;
    }
}

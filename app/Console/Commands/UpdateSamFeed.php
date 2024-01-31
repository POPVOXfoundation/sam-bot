<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateSamFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-sam-feed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = urlencode ("https://sam.gov/api/prod/sgs/v1/search/?random=1649358510806&index=_all&page=0&mode=search&sort=-modifiedDate&size=25&mfe=true&is_active=true&q=&qMode=ALL&organization_id=300000003,300000002,100094131,300000001,300000004");
        $json = json_decode(file_get_contents($url), true);
        dd($json);
    }
}

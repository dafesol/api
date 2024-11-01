<?php

namespace App\Console\Commands;

use App\Api\Sync\Services\ETLSyncService;
use Illuminate\Console\Command;

class SyncEtlCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:etl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync ETL';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(ETLSyncService $service): int
    {
        $service->sync();
        return 1;
    }
}

<?php

namespace App\Console\Commands;

use App\Contracts\Importer;
use App\Repositories\PlayerRepository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PlayersCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:players';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import players from a source';


    public $playerRepo;
    public $importer;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(PlayerRepository $playerRepo, Importer $importer)
    {
        parent::__construct();

        $this->playerRepo = $playerRepo;
        $this->importer = $importer;
    }

    /**
     * Execute the console command.
     **
     * @return mixed
     */
    public function handle()
    {
        $this->importer->getPlayers()->map(function($player) {
            return $this->playerRepo->save($player);
        });

        $this->info('Import Done!');
    }
}

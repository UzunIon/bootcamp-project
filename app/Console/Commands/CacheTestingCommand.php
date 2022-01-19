<?php

namespace App\Console\Commands;

use Illuminate\Cache\Repository as CacheRepository;
use Illuminate\Cache\Repository as ConfigRepository;
use Illuminate\Console\Command;

class CacheTestingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my-cache:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private CacheRepository  $cacheRepository;
    private ConfigRepository $configRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct( CacheRepository  $cacheRepository,ConfigRepository $configRepository )
    {
        parent::__construct();

        $this->cacheRepository = $cacheRepository;
        $this->configRepository = $configRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $lastVisit = $this->cacheRepository->get('lastCommandVisit', 'never');

        $this->info("Command called last time: {$lastVisit}");

        $this->cacheRepository->set('lastCommandVisit', date(\DateTime::ATOM, 60));

        $result = $this->ask(
            "Do you know that application is running {$this->configRepository->get('env')} in mode?"
        );

        $statistics = $this->cacheRepository->get('knownAnswer', []);
        $statistics[$result] = $statistics[$result] ?? 0;
        $statistics[$result]++;

        $table = [];

        foreach ($statistics as $key => $count) {
            $table[] = [$key, $count];
        }

        $this->table(['answer', 'count'], $table);

        $this->cacheRepository->set('knownAnswer', $statistics);
    }
}

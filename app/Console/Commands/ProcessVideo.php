<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProcessVideo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'video:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $seconds = [30, 60, 30];
        $second = $seconds[array_rand($seconds, 1)];
        echo date("Y-m-d H:i:s") . " start video processing: $second \n"; // echo for output
        info("video:process->command: ". $second);
        sleep($second);
        return Command::SUCCESS;
    }
}

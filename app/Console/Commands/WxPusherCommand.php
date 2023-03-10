<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WxPusherCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wx:pusher';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '微信公众号天气推送';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('推送成功', 'info');
    }
}

<?php

namespace App\Console\Commands;
use DB;
use Illuminate\Console\Command;
use App\Build;
use App\Tasks;

class buildTeh extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'build:teh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build task.';

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
        // ambil semua row di builds
        $build =Build::all();

        //$now_build_max = Build::all();
        //\Log::info('satu menit berlalu');


        $get_last_build = Build::orderBy('created_at', 'dsc')->first();
        if($build->isEmpty() || $get_last_build->sudah_jadi == 1)
        {

          $get_first_task_id = Tasks::orderBy('created_at', 'asc')->where('status', 0)->first();

          if(is_null($get_first_task_id))
          {
            \Log::info('Sudah di build semua, Yeay!');

          }
          else
          {

            $build_in = new Build;
            $build_in->task_id = $get_first_task_id->id;
            $build_in->sudah_jadi = 0;
            $build_in->save();

            \Log::info('tambah satu ke antrian dengan id task : '.  $get_first_task_id->id);
          }

        }

        if($get_last_build->sudah_jadi == 0 && $get_last_build->server_status == 0 )
        {

          $get_last_build->server_status = 1;
          $get_last_build->save();

          exec("sudo /usr/res/scripts/run_as_user.sh $get_last_build->task_id > /dev/null 2>/dev/null &");
          \Log::info('di dengan id : ' . $get_last_build->task_id . ' sedang di eksekusi');

        }

        // \Log::info($now_build_max->created_at);

        // $task = DB::table('tasks')->where('status', 0)->first();
        //
        //
        // DB::table('builds')->insert(
        //   ['task_id' => $task->id , 'sudah_jadi' => 0 ]
        //
        // );
        //
        //
        // \Log::info('Masukin task id :' . $task->id . ' ke tabel builds' );
        //
        // \Log::info($task->status);
    }

}

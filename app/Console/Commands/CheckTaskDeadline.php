<?php

namespace App\Console\Commands;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\CheckTaskDeadline as Email;

class CheckTaskDeadline extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:check-task-deadline';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the Deadline of the user task and send him an email notification';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tasks =Task::where('deadline_date','<=',Carbon::now()->addDays(1))->get();
        foreach($tasks as $task){
            $users=User::where('id',$task->users->id)->get();
            foreach($users as $user){
                Mail::to($user->email)->send(new Email($user,$task));
            }
        }
        $this->info('Email sent to notify User successfully.');
    }
}

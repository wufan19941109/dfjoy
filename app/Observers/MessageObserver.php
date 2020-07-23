<?php

namespace App\Observers;
use Illuminate\Support\Facades\Mail;
use App\Models\message;
use Illuminate\Support\Facades\Request;

class MessageObserver
{
    /**
     * Handle the message "created" event.
     *
     * @param  \App\Models\message  $message
     * @return void
     */
    public function created(message $message)
    {
        $data = message::first();
        Mail::send('mail.model',['data'=>$data],function($message1){
            $to = '815194127@qq.com'; $message1 ->to($to)->subject('来自dfjoy.com上的留言·');
        });
    }

    /**
     * Handle the message "updated" event.
     *
     * @param  \App\Models\message  $message
     * @return void
     */
    public function updated(message $message)
    {
        //
    }

    /**
     * Handle the message "deleted" event.
     *
     * @param  \App\Models\message  $message
     * @return void
     */
    public function deleted(message $message)
    {
        //
    }

    /**
     * Handle the message "restored" event.
     *
     * @param  \App\Models\message  $message
     * @return void
     */
    public function restored(message $message)
    {
        //
    }

    /**
     * Handle the message "force deleted" event.
     *
     * @param  \App\Models\message  $message
     * @return void
     */
    public function forceDeleted(message $message)
    {
        //
    }
}

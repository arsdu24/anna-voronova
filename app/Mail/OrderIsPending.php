<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderIsPending extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order; 
    }

    public function build()
    {
        return $this->subject('Good news for your order')->markdown('mails.OrderIsPending')->with('order',$this->order);
    }
}

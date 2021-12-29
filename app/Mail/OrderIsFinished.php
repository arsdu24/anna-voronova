<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderIsFinished extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order; 
    }

    public function build()
    {
        return $this->subject('Your order is finished')->markdown('mails.OrderIsFinished')->with('order',$this->order);
    }
}

<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderIsReady extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order; 
    }
 
    public function build()
    {
        return $this->subject('Your order status has updated')->markdown('mails.OrderIsReady')->with('order',$this->order);
    }
}

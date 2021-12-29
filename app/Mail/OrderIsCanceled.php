<?php

namespace App\Mail;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderIsCanceled extends Mailable
{
    
    use Queueable, SerializesModels;
    public $order;
    public $withCard;

    public function __construct(Order $order,$withCard)
    {
        $this->order = $order; 
        $this->withCard = $withCard; 
    }

    public function build()
    {
        return $this->subject('Your order status has updated')->markdown('mails.OrderIsCanceled')->with('order',$this->order)->with('withCard',$this->withCard);
    }
}

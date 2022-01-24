<?php

namespace App\Mail;

use App\Article;
use App\SiteSettings;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(Article $article,$token)
    {   
       $this->site = SiteSettings::first();
       $this->article = $article;
       $this->token = $token;
    }

    public function build()
    {
        return $this->subject('Good news')
                    ->from($this->site->email,$this->site->company_name)
                    ->markdown('mails.Newsletter',['article'=>$this->article,'site'=>$this->site,'token'=>$this->token]);
    }
}

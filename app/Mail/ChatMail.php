<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChatMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public $sender;
    public $receiver;
    public $sender_id;
     
    public function __construct($sender,$receiver,$sender_id)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->sender_id = $sender_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sender = $this->sender;
        $receiver = $this->receiver;
        $sender_id = $this->sender_id;
        return $this->subject($sender." sent you a text message")->view('user.mails.chat',compact('sender','receiver','sender_id'));
    }
}

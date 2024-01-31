<?php

namespace App\Mail;

use App\Models\salvar;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PharIo\Manifest\Email;

class salvarEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    public function __construct(salvar $email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->from('cybercompany@smpsistema.com.br')
            ->subject('Contato via site')
            ->view('site.email.enviarEmail');
    }
}

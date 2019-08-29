<?php

namespace App\Mail\DesignRequest;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DesignRequestUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "¡Solicitud de diseño actualizada!";
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('partial.mail.updateDesignRequest')
        ->from('leads@uane.edu.mx', 'UANE Website');
    }
}

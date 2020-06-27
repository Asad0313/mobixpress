<?php


namespace App\Mail;


use App\Cart;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class OrderCreatedEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($created_order_items)
    {
        $this->created_order_items = $created_order_items;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('asadaliwaliani@gmail.com')->
        subject('New order create')->view('emails.orderCreatedEmail')->with('created_order_items',$this->created_order_items);
    }

}
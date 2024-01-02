<?php

namespace App\Notifications;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificationResquestContact extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(private Commande $commande,array $data)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        $client=Client::find($this->commande->client_id);
        // foreach($this->commande->articles as $article){
        //     dd($article->pivot);
        // }
        
        session()->flash('notifi', 'Une commande viens d\'être commander par'.$client->nom_client);
        return [
            'commande_id'=>$this->commande->id,    
            'image_client'=>$client->image_client,
            'etat_comd'=>$this->commande->etat_comd,
            'client'=>$client->nom_client,
        ];
    }
}

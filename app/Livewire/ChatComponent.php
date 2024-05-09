<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ChatComponent extends Component
{
    public $myAsk;
    public $conversation = [];

    public function sendMessage($message)
    {
        // Agrega el mensaje del usuario a la conversación
        $this->conversation[] = 'Tú: ' . $message;
        // Limpio input
        $this->myAsk = '';

        // Realiza la consulta a la API con el mensaje del usuario
        $this->queryAPI($message);
    }

    public function queryAPI($prompt)
    {
        try {
            // Hace la consulta a la API externa
            $response = Http::post('http://localhost:11434/api/generate', [
                'model' => 'phi3',
                'prompt' => $prompt,
                'stream' => false,
            ]);

            // Decodifica el JSON de la respuesta y accede a la clave "response"
            $responseData = json_decode($response->body(), true);
            $this->conversation[] = 'FI-Chat: ' . $responseData['response'];
        } catch (\Exception $e) {
            $this->conversation[] = 'FI-Chat: ' . $e->getMessage();
        }
    }

    public function clear()
    {
        $this->myAsk = '';
        $this->conversation = [];
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}

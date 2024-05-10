<div>
    @include('components.loading-indicator')
    <div class="chat-container">
        <div>
            @foreach ($conversation as $messageText)
                <div>{!! nl2br(e($messageText)) !!}</div>
            @endforeach
        </div>

        <div class="input-group">
            <input type="text" wire:model="myAsk" wire:keydown.enter="sendMessage($event.target.value)" id="myAsk"
                class="form-control" placeholder="Escribe tu consulta y presiona enter para enviar..." autofocus>
            <button class="btn btn-outline-secondary" wire:click="clear">Limpiar</button>
        </div>
    </div>
</div>

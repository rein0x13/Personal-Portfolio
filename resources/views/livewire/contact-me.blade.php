<div class=" text-light p-5 m-2 card custom-bg-dark">
    {{-- <form method="POST" action="{{ route('send-message') }}" class="contact-form"> --}}
    @if (session('success'))
        <p class="gradient-text">{{ session('success') }}</p>
    @endif
    <form wire:submit="sendMessage" class="contact-form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label ">name</label>
            <input wire:model="sender" type="text" name="sender" class="form-control bg-transparent text-light"
                id="name" placeholder="Jin de Larsenburg">
            @error('sender')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label ">contact</label>
            <input wire:model="contact" type="text" name="contact" class="form-control bg-transparent text-light"
                id="contact" placeholder="rein@moonblack.com or your phone number">
            @error('contact')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="floatingTextarea" class="form-label ">message</label>
            <textarea wire:model="message" class="form-control bg-transparent text-light" rows="5" name="message"
                placeholder="Type your message here"></textarea>
            @error('message')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        {{-- <button wire:click.prevent="sendMessage" type="submit" id="contact-btn"
            class="btn text-light gradient-button">Submit</button> --}}
        <button wire:click.prevent="sendMessage" type="submit" id="contact-btn"
            class="btn text-light gradient-button">Submit</button>
    </form>
</div>

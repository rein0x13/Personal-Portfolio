<div class="text-light flex flex-col">
    @if (session('success'))
        <p class="gradient-text">{{ session('success') }}</p>
    @endif
    <form wire:submit="sendMessage" class="bg-black/50 backdrop-blur-lg grid lg:grid-cols-2 border border-neutral-800 rounded-md lg:gap-10 gap-2 align-middle justify-center p-10 w-auto">
        @csrf

            <label for="name" class="form-label">name</label>
            <div>
                <input wire:model="sender" type="text" name="sender" class="w-full bg-transparent text-light focus:outline-none focus:border-sky-500 focus:ring-0"
                    id="name" placeholder="Jin de Larsenburg">
                @error('sender')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <label for="contact" class="form-label">contact</label>
            <div>
                <input wire:model="contact" type="text" name="contact" class="w-full bg-transparent text-light"
                    id="contact" placeholder="rein@moonblack.com or your phone number">
                @error('contact')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>

            <label for="floatingTextarea" class="form-label ">message</label>
            <div>
                <textarea wire:model="message" class="form-control bg-transparent text-light w-full" rows="5" name="message"
                    placeholder="Type your message here"></textarea>
                @error('message')
                    <p id="error-flash" class="text-danger">{{ $message }}</p>
                @enderror
            </div>

        {{-- <button wire:click.prevent="sendMessage" type="submit" id="contact-btn"
            class="btn text-light gradient-button">Submit</button> --}}

        <div class="col-span-full">
            <button wire:click.prevent="sendMessage" type="submit" id="contact-btn"
                class="mt-5 rounded-md bg-gradient-to-r from-sky-400 to-sky-200">
                <div class="m-[2px] py-2 px-3 text-lg rounded-md flex bg-black hover:text-transparent hover:bg-clip-text hover:font-semibold" >Submit</div>
            </button>
        </div>
    </form>
</div>

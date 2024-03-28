<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Validation\ValidationException;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;

class ContactMe extends Component
{
    use WithRateLimiting;

    #[Rule([['required', 'min:2', 'max:100']])]
    public $sender = '';

    #[Rule(['required', 'max:255'])]
    public $contact = '';

    #[Rule(['required', 'min:5'])]
    public $message = '';

    public function sendMessage()
    {
        try {
            $this->rateLimit(1);
        } catch (TooManyRequestsException $exception) {
            throw ValidationException::withMessages([
                'message' => "Slow down! Please wait another {$exception->secondsUntilAvailable} seconds to send a message.",
            ]);
        }
        // $this->validate([
        //     'sender' => ['required', 'min:2', 'max:100'],
        //     'contact' => ['required', 'max:255'],
        //     'message' => ['required', 'min:5'],
        // ]);

        $validated = $this->validate();

        Message::create([
            'sender' => $validated['sender'],
            'contact' => $validated['contact'],
            'message' => $validated['message'],
        ]);

        $this->reset(['sender', 'contact', 'message']);

        session()->flash('success', 'Message Sent Successfully');

        // dump($message);
    }

    public function render()
    {
        return view('livewire.contact-me');
    }
}

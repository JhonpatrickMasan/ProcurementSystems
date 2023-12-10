<div>
    <h2>Sign Up</h2>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form wire:submit.prevent="signUp">
        <div>
            <label for="name">Name</label>
            <input type="text" wire:model="name" required>
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" wire:model="email" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" wire:model="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>

        <button type="submit">Sign Up</button>
    </form>
</div>

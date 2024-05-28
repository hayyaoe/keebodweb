<div>
  <form wire:submit.prevent="register" method="POST">
    @csrf
    <div>
      <label for="name">USERNAME</label>
      <input type="text" id="name" wire:model="name" name="name" required>
      @error('username') <span> {{ $message }} </span> @enderror
    </div>

    <div>
      <label for="email">EMAIL</label>
      <input type="email" id="email" wire:model="email" name="email" required>
      @error('email') <span> {{ $message }} </span> @enderror
    </div>

    <div>
      <label for="password">PASSWORD</label>
      <input type="password" id="password" wire:model="password" required name="password">
      @error('password') <span> {{ $message }} </span> @enderror
    </div>

    <button type="submit">REGISTER</button>
  </form>
</div>

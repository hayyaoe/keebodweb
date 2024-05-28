<div>
    <form wire:submit.prevent="login">
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

        <button type="submit"> LOGIN </button>
    </form>
</div>

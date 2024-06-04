<div class="container">
    <h1 class="my-4">Add Member</h1>

    <form wire:submit="store">
        @csrf
        <div class="form-group"> 
            <label for="name">Name</label>
            <input type="text" wire:model="name" class="form-control" id="name" name="name">
            <div>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" wire:model="email" class="form-control" id="email" name="email">
            <div>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" wire:model="password" class="form-control" id="password" name="password">
            <div>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" wire:model="Phone" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" wire:model="address" id="address" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="membership_start_date">Membership Start Date</label>
            <input type="date" wire:model="membership_start_date" class="form-control" id="membership_start_date" name="membership_start_date">
            <div>
                @error('membership_start_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="membership_end_date">Membership End Date</label>
            <input type="date" wire:model="membership_end_date" class="form-control" id="membership_end_date" name="membership_end_date">
        </div>
        <div class="form-group">
            <label for="membership_type">Membership Type</label>
            <input type="text" wire:model="membership_type" class="form-control" id="membership_type" name="membership_type">
            <div>
                @error('membership_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Member</button>
        <button wire:navigate href="/members" class="btn btn-secondary">Back</button>
    </form>
</div>
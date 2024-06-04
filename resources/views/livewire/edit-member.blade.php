@if ($showEditModal)
    <div class="modal show" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Member</h5>
                    <button type="button" class="close" wire:click="closeEditModal">&times;</button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="updateMember">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" wire:model="name" class="form-control" id="name" name="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" wire:model="email" class="form-control" id="email" name="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" wire:model="password" class="form-control" id="password" name="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" wire:model="phone" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" wire:model="address" id="address" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="membership_start_date">Membership Start Date</label>
                            <input type="date" wire:model="membership_start_date" class="form-control" id="membership_start_date" name="membership_start_date">
                            @error('membership_start_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="membership_end_date">Membership End Date</label>
                            <input type="date" wire:model="membership_end_date" class="form-control" id="membership_end_date" name="membership_end_date">
                        </div>
                        <div class="form-group">
                            <label for="membership_type">Membership Type</label>
                            <input type="text" wire:model="membership_type" class="form-control" id="membership_type" name="membership_type">
                            @error('membership_type') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update Member</button>
                        <button type="button" wire:click="closeEditModal" class="btn btn-secondary">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif


<div>
    <h1 class="my-4">Members</h1>

    <a href="{{ route('members.add') }}" class="btn btn-primary mb-3">Add Member</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Membership Start</th>
                <th>Membership End</th>
                <th>Membership Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>{{ $member->address }}</td>
                    <td>{{ $member->membership_start_date }}</td>
                    <td>{{ $member->membership_end_date }}</td>
                    <td>{{ $member->membership_type }}</td>
                    <td>
                        <button wire:click="editMember({{ $member->id }})" class="btn btn-warning">Edit</button>
                        <button wire:click="deleteMember({{ $member->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('livewire.edit-member')
</div>

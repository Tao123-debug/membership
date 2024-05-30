<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="my-4">Edit Member</h1>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $member->email }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ $member->password }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $member->phone }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address">{{ $member->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="membership_start_date">Membership Start Date</label>
            <input type="date" class="form-control" id="membership_start_date" name="membership_start_date" value="{{ $member->membership_start_date }}">
        </div>
        <div class="form-group">
            <label for="membership_end_date">Membership End Date</label>
            <input type="date" class="form-control" id="membership_end_date" name="membership_end_date" value="{{ $member->membership_end_date }}">
        </div>
        <div class="form-group">
            <label for="membership_type">Membership Type</label>
            <input type="text" class="form-control" id="membership_type" name="membership_type" value="{{ $member->membership_type }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Member</button>
    </form>
</div>
</body>
</html>

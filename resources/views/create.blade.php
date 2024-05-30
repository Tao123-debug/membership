<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="my-4">Add Member</h1>

    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div class="form-group"> 
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="membership_start_date">Membership Start Date</label>
            <input type="date" class="form-control" id="membership_start_date" name="membership_start_date">
        </div>
        <div class="form-group">
            <label for="membership_end_date">Membership End Date</label>
            <input type="date" class="form-control" id="membership_end_date" name="membership_end_date">
        </div>
        <div class="form-group">
            <label for="membership_type">Membership Type</label>
            <input type="text" class="form-control" id="membership_type" name="membership_type">
        </div>
        <button type="submit" class="btn btn-primary">Add Member</button>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Patient</title>
</head>
<body>
    <h1>Add New Patient</h1>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" required></textarea><br>

        <button type="submit">Save Patient</button>
    </form>

    <a href="{{ route('patients.index') }}">Back to Patient List</a>
</body>
</html>

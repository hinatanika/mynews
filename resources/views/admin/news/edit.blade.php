<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
</head>
<body>
    <h1>Create Profile</h1>
    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
        </div>
        <div>
            <label for="hobby">Hobby:</label>
            <textarea id="hobby" name="hobby" rows="3" required></textarea>
        </div>
        <div>
            <label for="introduction">Introduction:</label>
            <textarea id="introduction" name="introduction" rows="5" required></textarea>
        </div>
        <button type="submit">Create Profile</button>
    </form>
</body>
</html>

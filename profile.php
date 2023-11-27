<?php

$userData = array(
    'fullName' => 'John Doe',
    'dob' => '1990-01-01',
    'age' => 32,
    'contact' => '123-456-7890',
    'email' => 'john@example.com',
    'address' => '123 Main St, Cityville'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>

<div class="profile-container">
    <h2>User Profile</h2>
    <form id="profileForm" action="update_profile.php" method="post">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" value="<?php echo $userData['fullName']; ?>" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo $userData['dob']; ?>" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="<?php echo $userData['age']; ?>" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact Number:</label>
            <input type="tel" id="contact" name="contact" value="<?php echo $userData['contact']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required><?php echo $userData['address']; ?></textarea>
        </div>
        <button type="submit">Save Profile</button>
    </form>
</div>

</body>
</html>

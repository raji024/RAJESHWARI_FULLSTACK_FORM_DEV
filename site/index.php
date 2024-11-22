<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marathon Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sty.css">
</head>
<body>
    <div class="background-image"></div>
    <div class="container form-container">
        <h2 class="text-center">Marathon Registration</h2>
        <form id="registrationForm" action="register.php" method="POST">
            <!-- Basic Information -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>

            <!-- Event Selection -->
            <div class="mb-3">
                <label for="event" class="form-label">Event Type:</label>
                <select id="event" class="form-select" name="event" required>
                    <option value="">Select a Marathon</option>
                    <option value="10km">10km</option>
                    <option value="15km">15km</option>
                    <option value="Half Marathon">Half Marathon</option>
                    <option value="Full Marathon">Full Marathon</option>
                </select>
            </div>

            <!-- Place Selection -->
            <div class="mb-3">
                <label for="place" class="form-label">Select Location:</label>
                <select id="place" class="form-select" name="place" required>
                    <option value="">Select a Location</option>
                </select>
            </div>

            <!-- Payment Methods -->
            <div class="mb-3">
                <label for="payment" class="form-label">Payment Method:</label>
                <div class="d-flex flex-wrap">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="payment" id="upi" value="UPI" required>
                        <label class="form-check-label" for="upi">
                            <i class="bi bi-phone"></i> UPI
                        </label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="payment" id="card" value="Card" required>
                        <label class="form-check-label" for="card">
                            <i class="bi bi-credit-card"></i> Card
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="spot" value="On Spot">
                        <label class="form-check-label" for="spot">
                            On Spot
                        </label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
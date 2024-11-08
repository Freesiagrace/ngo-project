<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Card Component Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
</head>
<body>

    <div className="bg-gray-200 dark:bg-gray-800 p-6 rounded-lg shadow-md text-center">
        <h3 className="text-lg font-semibold text-secondary dark:text-pink-300">{{ "Step $step: $title" }}</h3>
        <p className="text-gray-600 dark:text-gray-300 mt-2">{{ $description }}</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

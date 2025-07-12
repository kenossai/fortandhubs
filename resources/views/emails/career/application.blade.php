<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Career Application</title>
</head>
<body>
    <h2>New Application for: {{ $applicant['title'] }}</h2>

    <p><strong>Name:</strong> {{ $applicant['name'] }}</p>
    <p><strong>Email:</strong> {{ $applicant['email'] }}</p>

    <p><strong>Why should we select you?</strong></p>
    <p>{{ $applicant['why_apply'] }}</p>

    <p><strong>Project you are proud of:</strong></p>
    <p>{{ $applicant['project_proud'] }}</p>

    <p><strong>Portfolio:</strong> {{ $applicant['portfolio'] }}</p>

    <p><strong>Salary Expectation:</strong> {{ $applicant['salary_expectation'] }}</p>

    <p><strong>CV:</strong> Attached ({{ $applicant['cv'] }})</p>
</body>
</html>

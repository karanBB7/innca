<?php

$onboardingScreens = [
    [
        'image' => 'image_url_1.jpg',
        'text' => 'Onboarding Screen 1 Text',
    ],
    [
        'image' => 'image_url_2.jpg',
        'text' => 'Onboarding Screen 2 Text',
    ],
    [
        'image' => 'image_url_3.jpg',
        'text' => 'Onboarding Screen 3 Text',
    ],
];

// Number of pages
$numberOfPages = count($onboardingScreens);

// Combine data with the number of pages
$response = [
    'pages' => $numberOfPages,
    'screens' => $onboardingScreens,
];

// Set the content type to JSON
header('Content-Type: application/json');

// Output the response data as JSON
echo json_encode($response);

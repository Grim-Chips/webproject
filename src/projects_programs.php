<?php
// Define the Egyptian Red Crescent projects and programs
$erc_programs = [
    "Disaster Management and Emergency Response" => [
        "Emergency Relief" => "Providing immediate assistance during disasters (e.g., food, water, shelter, medical aid).",
        "Disaster Preparedness" => "Training communities and volunteers to respond effectively to disasters.",
        "Search and Rescue Operations" => "Collaborating with local authorities during emergencies."
    ],
    "Health and Care Programs" => [
        "Primary Healthcare Services" => "Offering medical care through clinics and mobile units.",
        "Blood Donation Campaigns" => "Organizing blood drives to support hospitals and patients.",
        "First Aid Training" => "Teaching first aid skills to communities, schools, and organizations.",
        "Disease Prevention" => "Raising awareness about diseases like COVID-19, HIV/AIDS, and tuberculosis."
    ],
    "Social Support and Development" => [
        "Orphan and Family Support" => "Providing financial and social assistance to orphans and vulnerable families.",
        "Women’s Empowerment" => "Offering vocational training and income-generating projects for women.",
        "Child Protection" => "Supporting children in difficult circumstances, including education and psychological support."
    ],
    "Migration and Refugee Support" => [
        "Assistance to Refugees and Migrants" => "Providing food, shelter, healthcare, and legal support to refugees and migrants.",
        "Awareness Campaigns" => "Educating migrants and host communities about their rights and available services."
    ],
    "Volunteer Development" => [
        "Volunteer Training" => "Equipping volunteers with skills in disaster response, first aid, and community outreach.",
        "Youth Engagement" => "Encouraging young people to participate in humanitarian activities and leadership roles."
    ],
    "Community Resilience and Development" => [
        "Livelihood Support" => "Implementing income-generating projects to help communities become self-sufficient.",
        "Environmental Initiatives" => "Promoting environmental sustainability through awareness campaigns and clean-up activities."
    ],
    "Education and Awareness" => [
        "Health and Hygiene Promotion" => "Educating communities about proper hygiene practices and disease prevention.",
        "Humanitarian Principles" => "Raising awareness about the Red Cross and Red Crescent Movement’s principles and values."
    ],
    "International Humanitarian Law (IHL) Promotion" => [
        "Workshops and Training" => "Educating stakeholders, including military and civil society, about IHL and its importance."
    ],
    "Seasonal Campaigns" => [
        "Ramadan and Eid Initiatives" => "Distributing food packages, clothing, and financial aid to needy families during religious holidays.",
        "Winter Relief" => "Providing blankets, warm clothing, and heating supplies during the colder months."
    ],
    "Partnerships and Collaborations" => [
        "International Organizations" => "Working with IFRC, UN agencies, and local NGOs to expand reach and impact."
    ]
];

// Display the programs and projects
echo "<h1>Egyptian Red Crescent Projects and Programs</h1>";
foreach ($erc_programs as $category => $programs) {
    echo "<h2>$category</h2>";
    echo "<ul>";
    foreach ($programs as $program => $description) {
        echo "<li><strong>$program:</strong> $description</li>";
    }
    echo "</ul>";
}
?>
<?php $projects = [
    ["title" => "Community Health Program", "description" => "Providing free medical checkups and vaccinations."],
    ["title" => "Youth Volunteer Initiative", "description" => "Engaging young people in humanitarian work."],
    ["title" => "Disaster Preparedness Project", "description" => "Training communities to respond to emergencies."]
];

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projects & Programs</title>
    </head>

    <body>
        <?php
        include_once __DIR__ . "/assets/templates/header.php";
        Navigation();
        ?>
        <h2>Ongoing Projects & Programs</h2>
        <ul>
            <?php foreach ($projects as $project): ?>
                <li>
                    <h3><?php echo $project['title']; ?></h3>
                    <p><?php echo $project['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
        include_once __DIR__ . "/assets/templates/footer.php";
        Footer();
        ?>
    </body>

    </html>
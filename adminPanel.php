<!DOCTYPE html>
<html lang="en">

<head>
        <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="32x32">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="96x96">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" sizes="180x180">
    <link rel="mask-icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" color="#005eb8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel — Manchester Centre for Plastic Surgery &amp; Burns</title>
    <!-- Add Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://mcrplasticsurgeryandburns.co.uk/style.css" />
    <style>
        /* import font for easier reading */
        /* something like Nunito */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            background-color: #333333; /* Set dark background color */
            color: #ffffff; /* Set light text color */
        }

        #titleText {
            font-family: 'Lato';
            color: #005eb8;
        }

        /* navbar links hover */
        #nav a:hover {
            transition: all 0.2s ease-in-out;
            /* white by default so dim it a bit */
            color: #d9d9d9;
        }

        /* our services/locations divs hover cubic-bezier effect */

        @media screen and (max-width: 767px) {
            /* Example: Adjust styles for mobile devices */
            #titleText {
                display: none;
            }

            #logo {
                display: none;
            }

            #nav {
                display: none;
            }

            #mobileMenuButton {
                display: block;
            }

            #mobileNav {
                display: none;
            }

            /* Adjust other styles for mobile */
        }

        @media screen and (max-width: 1100px) {
            /* Example: Adjust styles for mobile devices */
            #titleText {
                display: none;
            }

            #logo {
                display: none;
            }

            #nav {
                display: none;
            }

            #mobileMenuButton {
                display: block;
            }

            #mobileNav {
                display: none;
            }

            /* Adjust other styles for mobile */
        }

        /* Styles for mobile navigation menu */
        @keyframes fadeDown {
            0% {
                opacity: 0;
                transform: translateY(0%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes reveal {
            0% {
                opacity: 0;
                transform: translateY(20%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        * {
            transition: all 0.3s ease-in-out;
        }

        @media screen and (max-width: 1100px) {
            #mobileNav {
                display: none;
                background-color: #005eb8;
                padding: 1rem;
                opacity: 0;
                transform: translateY(20%);
                transition: all 0.3s ease-in-out;
            }

            #mobileNav.open {
                display: block;
                opacity: 1;
                transform: translateY(0);
                animation: reveal 0.3s ease-in-out;
            }

            #mobileNav ul {
                list-style-type: none;
                padding: 0;
                margin: 0;
            }

            #mobileNav li {
                margin-bottom: 1rem;
            }

            #mobileNav a {
                color: white;
                font-size: 1.2rem;
                text-decoration: none;
            }
        }

        .hidden {
            display: none;
        }

        .bg-blue-900 {
            /* nhs blue */
            background-color: #005eb8;
        }

        /* New Mobile Navigation Menu Styles */
        .mobile-nav-toggle {
            display: none;
        }

        .mobile-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #005eb8;
            padding: 1rem;
            opacity: 0;
            transform: translateY(20%);
            transition: all 0.3s ease-in-out;
        }

        .mobile-nav.open {
            opacity: 1;
            transform: translateY(0);
            animation: reveal 0.3s ease-in-out;
        }

        .mobile-nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .mobile-nav li {
            margin-bottom: 1rem;
        }

        .mobile-nav a {
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
        }

        /* Dark mode specific styles */
        .dark-mode body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .dark-mode #nav {
            background-color: #1a1a1a;
        }

        .dark-mode #nav a {
            color: #d9d9d9;
        }

        .dark-mode .bg-blue-900 {
            background-color: #1a1a1a;
        }

        .dark-mode .mobile-nav {
            background-color: #1a1a1a;
        }

        .dark-mode .mobile-nav a {
            color: #d9d9d9;
        }

        .dark-mode .bg-gray-100 {
            background-color: #222222;
        }

        .dark-mode .text-blue-900 {
            color: #005eb8;
        }

        .dark-mode .bg-gray-200 {
            background-color: #333333;
        }

        .dark-mode .text-gray-900 {
            color: #d9d9d9;
        }

        .dark-mode .bg-white {
            background-color: #333333;
        }

        .dark-mode .text-white {
            color: #ffffff;
        }

        .dark-mode .bg-gray-100 {
            background-color: #222222;
        }

        .dark-mode .text-blue-900 {
            color: #005eb8;
        }

        .dark-mode .text-center {
            color: #d9d9d9;
        }

        .dark-mode .text-blue-200 {
            color: #005eb8;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        /* remove white lines between table cells */
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* remove outer border */

        table {
            border: 0;
        }

        /* remove inner horizontal lines and padding from cells */

        table td,
        table th {
            border: none;
            padding: 0;
        }
    </style>
</head>

<body class="bg-gray-800 dark-mode:bg-gray-900 dark-mode">
    <header class="bg-white dark-mode:bg-gray-800">
        <div id="thing" class="container mx-auto px-4 py-4 flex items-center">
            <div>
                <img src="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png"
                    alt="Manchester University NHS Foundation Trust" id="logo" class="h-16">
            </div>
            <div>
                <h1 class="text-4xl font-bold" id="titleText">Admin Panel — Manchester Centre for Plastic Surgery and
                    Burns</h1>
            </div>
            <button id="mobileMenuButton" class="mobile-nav-toggle text-blue-900 focus:outline-none md:hidden">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5h18a1 1 0 0 1 0 2H3a1 1 0 1 1 0-2zm0 7h18a1 1 0 0 1 0 2H3a1 1 0 1 1 0-2zm0 7h18a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav id="nav" class="bg-blue-900 dark-mode:bg-gray-800">
            <div class="container mx-auto px-4 py-4">
                <ul class="flex justify-center text-white">
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/">Home</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/News.html">News</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/Services.html">Our
                            services</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/Locations.html">Our
                            locations</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/OurTeam.html">Our team</a>
                    </li>
                    <li><a href="https://mcrplasticsurgeryandburns.co.uk/contact-us/">Contact us</a></li>
                </ul>
            </div>
        </nav>
        <nav id="mobileNav" class="mobile-nav hidden">
            <div class="container mx-auto px-4 py-4">
                <button id="mobileCloseButton" class="text-white text-2xl absolute top-4 right-4 focus:outline-none">
                    &times;</button>
                <ul class="text-white">
                    <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/">Home</a></li>
                    <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/News.html">News</a></li>
                    <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/Services.html">Our
                            services</a></li>
                    <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/Locations.html">Our
                            locations</a></li>
                    <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/OurTeam.html">Our team</a>
                    </li>
                    <li><a href="https://mcrplasticsurgeryandburns.co.uk/contact-us/">Contact us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileNav = document.getElementById('mobileNav');
        const mobileCloseButton = document.getElementById('mobileCloseButton');

        mobileMenuButton.addEventListener('click', () => {
            // check if it's been closed before as it will be translated down and we need to reset that
            if (mobileNav.style.transform === 'translateY(100%)') {
                mobileNav.style.transform = 'translateY(0)';
                mobileNav.style.display = 'block';
            }
            mobileNav.classList.add('open');
        });

        mobileCloseButton.addEventListener('click', () => {
            mobileNav.style.transform = 'translateY(100%)';

            // Delay hiding the mobile navigation menu to allow the slide-down animation to play
            setTimeout(() => {
                mobileNav.style.display = 'none';
            }, 300);
        });
    </script>
    <main class="container mx-auto px-4 py-8">
    
        <section id="visitor-numbers" class="mt-8 bg-gray-100 dark-mode:bg-gray-800 py-6 rounded-lg">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold mb-4 text-blue-900 dark-mode:text-white">Visitor Numbers</h2>
<?php

// Set the current date and time
$now = new DateTime();
$now->setTimezone(new DateTimeZone('UTC'));

// Calculate the start and end timestamps for the desired time range
$endTime = $now->format('Y-m-d\TH:i:s\Z');
$startTime = $now->modify('-1 day')->format('Y-m-d\TH:i:s\Z');

// Create the GraphQL query
$query = <<<'GRAPHQL'
query {
  viewer {
    zones(filter: { zoneTag: "b3327f0f4dd8b986fda4155139603be9" }) {
      httpRequests1hGroups(limit: 2, filter: { datetime_geq: "%s", datetime_lt: "%s" }) {
        dimensions {
          datetime
        }
        sum {
          requests
          bytes
          cachedBytes
          contentTypeMap {
            requests
            edgeResponseContentTypeName
          }
          clientSSLMap {
            requests
            clientSSLProtocol
          }
          countryMap {
            requests
            clientCountryName
          }
          threats
        }
      }
    }
  }
}
GRAPHQL;

// Format the query with the start and end timestamps
$query = sprintf($query, $startTime, $endTime);

// Make the API request
$apiUrl = 'https://api.cloudflare.com/client/v4/graphql';
$apiToken = 'TK9HtY126bToZhzgiZ60uvMarXbEcm1Kqghx3kp2';
$email = 'bbeans123211@gmail.com';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'X-Auth-Email: ' . $email,
    'Authorization: Bearer ' . $apiToken
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['query' => $query]));

$response = curl_exec($ch);
curl_close($ch);
// parse response
$response = json_decode($response, true);
// create analytics array/div
$analytics = $response['data']['viewer']['zones'][0]['httpRequests1hGroups'];

// get requests
$requests = $analytics[0]['sum']['requests'];
// get country's and rank them in a table by requests
foreach ($analytics[0]['sum']['countryMap'] as $country) {
    $countryName = $country['clientCountryName'];
    $countryRequests = $country['requests'];
    $countryArray[$countryName] = $countryRequests;
}
arsort($countryArray);

// get content types and rank them in a table by requests
foreach ($analytics[0]['sum']['contentTypeMap'] as $contentType) {
    $contentTypeName = $contentType['edgeResponseContentTypeName'];
    $contentTypeRequests = $contentType['requests'];
    $contentTypeArray[$contentTypeName] = $contentTypeRequests;
}

arsort($contentTypeArray);

echo "<div class='flex flex-wrap -mx-4'>";
echo "<div class='w-full md:w-1/2 px-4 mb-4'>";
echo "<div class='bg-white dark-mode:bg-gray-800 rounded-lg shadow-md p-4'>";
echo "<h3 class='text-xl font-bold mb-4 text-blue-900 dark-mode:text-white'>Requests</h3>";
echo "<p class='text-gray-900 dark-mode:text-gray-300'>Total requests in the last 24 hours: <strong>" . $requests . "</strong></p>";

echo "<table class='table-auto w-full mt-4'>";
echo "<thead>";

echo "<tr>";

echo "<th class='px-4 py-2'>Country</th>";

echo "<th class='px-4 py-2'>Requests</th>";

echo "</tr>";

echo "</thead>";

echo "<tbody>";

foreach ($countryArray as $country => $requests) {
    echo "<tr>";
    echo "<td class='border px-4 py-2'>" . $country . "</td>";
    echo "<td class='border px-4 py-2'>" . $requests . "</td>";
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";

echo "</div>";

// show it on a country map

echo "</div>";

echo "<div class='w-full md:w-1/2 px-4 mb-4'>";

echo "<div class='bg-white dark-mode:bg-gray-800 rounded-lg shadow-md p-4'>";

echo "<h3 class='text-xl font-bold mb-4 text-blue-900 dark-mode:text-white'>Content Types</h3>";

echo "<table class='table-auto w-full mt-4'>";

echo "<thead>";

echo "<tr>";

echo "<th class='px-4 py-2'>Content Type</th>";

echo "<th class='px-4 py-2'>Requests</th>";

echo "</tr>";

echo "</thead>";

echo "<tbody>";

foreach ($contentTypeArray as $contentType => $requests) {
    echo "<tr>";
    echo "<td class='border px-4 py-2'>" . $contentType . "</td>";
    echo "<td class='border px-4 py-2'>" . $requests . "</td>";
    echo "</tr>";
}

echo "</tbody>";

echo "</table>";

echo "</div>";


?>


            </div>
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold mb-4 text-blue-900 dark-mode:text-white">Passwords</h2>
                <div class="bg-white dark-mode:bg-gray-800 rounded-lg shadow-md p-4">
                    <li style="list-style-type: none;">admin - PlasticsBurnsMFT1093</li>
</div>
            </div>
        </section>
    </main>

    <footer class="bg-blue-900 dark-mode:bg-gray-800 py-4">
        <div class="container mx-auto px-4">
            <p class="text-center text-white dark-mode:text-gray-300">Part of <a href="http://www.mft.nhs.uk/"
                    class="text-blue-200 dark-mode:text-gray-500 hover:text-white">Manchester University NHS Foundation
                    Trust</a></p>
        </div>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
      <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="32x32">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="96x96">
    <link rel="icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" type="image/png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" sizes="180x180">
    <link rel="mask-icon" href="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png" color="#005eb8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    img {
        max-height: 400px;
    }

    .heightSmoothing {
        transition: all 1s ease-in-out;
    }
        .post-meta {
      font-size: 0.9rem;
      color: #666;
      margin-bottom: 0.5rem;
    }

    .post-tags {
      font-size: 0.9rem;
      color: #666;
      margin-top: 0.5rem;
    }
  </style>
      <link rel="stylesheet" type="text/css" href="https://mcrplasticsurgeryandburns.co.uk/style.css"/>
	    <!-- Add Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <style>
        /* import font for easier reading */
        /* something like Nunito */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap');
        body {
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
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
            z-index: 1000;
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


    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-white">
        <div id="thing" class="container mx-auto px-4 py-4 flex items-center">
            <div>
                <img src="https://mcrplasticsurgeryandburns.co.uk/cfpsb.jpg" alt="Manchester University NHS Foundation Trust" id="logo" class="h-16">
            </div>
            <div>
                <h1 class="text-4xl font-bold" id="titleText">The Manchester Centre for Plastic Surgery and Burns</h1>
            </div>
            <button id="mobileMenuButton" class="mobile-nav-toggle text-blue-900 focus:outline-none md:hidden">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 5h18a1 1 0 0 1 0 2H3a1 1 0 1 1 0-2zm0 7h18a1 1 0 0 1 0 2H3a1 1 0 1 1 0-2zm0 7h18a1 1 0 0 1 0 2H3a1 1 0 0 1 0-2z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <nav id="nav" class="bg-blue-900">
            <div class="container mx-auto px-4 py-4">
                <ul class="flex justify-center text-white">
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/">Home</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/News.html">News</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/Services.html">Our services</a></li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/Locations.html">Our locations</a>
                    </li>
                    <li class="mr-6"><a href="https://mcrplasticsurgeryandburns.co.uk/OurTeam.html">Our team</a></li>
                    <li><a href="https://mcrplasticsurgeryandburns.co.uk/contact-us/">Contact us</a></li>
                </ul>
            </div>
        </nav>
 <nav id="mobileNav" class="mobile-nav hidden">
    <div class="container mx-auto px-4 py-4">
        <button id="mobileCloseButton" class="text-white text-2xl absolute top-4 right-4 focus:outline-none">&times;</button>
        <ul class="text-white">
            <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/">Home</a></li>
            <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/News.html">News</a></li>
            <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/Services.html">Our services</a></li>
            <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/Locations.html">Our locations</a></li>
            <li class="mb-2"><a href="https://mcrplasticsurgeryandburns.co.uk/OurTeam.html">Our team</a></li>
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
<style>
    /* ... Existing styles ... */
    @import url('https://fonts.googleapis.com/css?family=Nunito:300,400,700');
    /* Styling for the blog post */
    .post-content {
        line-height: 1.8;
        font-size: 1.2rem;
        color: #333;
        margin-top: 2rem;
        padding: 20px;
        border-radius: 10px;
        font-family: 'Nunito', sans-serif;
    }

    .post-content p {
        margin-bottom: 1.5rem;
        font-size: 1.2rem;
    }

    .post-content h3 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #007BFF;
    }

    .post-content a {
        color: #007bff;
        text-decoration: none;
    }

    .post-content a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    /* Styling for the post title */
    .post-title {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #007BFF;
    }

    /* make h2 bold */
    .post-content h2 {
        font-weight: bold;
        font-size: 1.5rem;
    }
    /* Styling for the post meta (date and author) */
    .post-meta {
        font-size: 1rem;
        color: #666;
        margin-bottom: -2rem;
    }

    /* media queries */
    @media (max-width: 767px) {
        .post-content {
            font-size: 1rem;
        }

        .post-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 575px) {
        .post-content {
            font-size: 0.9rem;
        }

        .post-title {
            font-size: 1.5rem;
        }
    }
    
    @media (max-width: 400px) {
        .post-content {
            font-size: 0.8rem;
        }

        .post-title {
            font-size: 1.2rem;
        }
    }

    /* image styling */
    .post-content img {
        max-width: 100%;
        height: auto;
        margin: 0;
    }

    /* add styling for wordpress blockquote -> cite/p */
    .post-content blockquote {
        font-size: 1.2rem;
        font-style: italic;
        color: #666;
        margin: 1rem 0;
    }

    .post-content blockquote p {
        margin: 0;
    }

    .post-content blockquote cite {
        font-size: 1rem;
        font-style: normal;
        color: #333;
        margin-top: 0.2rem;
        display: block;
    }
    /* when hovering over plyr progress bar cursor pointer */
    .plyr__progress--played, .plyr__progress--buffer {
        cursor: pointer !important;
    }
      .plyr--audio .plyr__controls {
    border-radius: 10px !important;
  }
    .post-content img {
    max-width: 100%;
    height: auto;
    margin: 1rem 0;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
</style>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const players = Array.from(document.querySelectorAll('.post-content audio'));
    players.forEach(player => new Plyr(player));
  });
</script>

  <main class="container mx-auto px-4 py-8">
  <article class="bg-white shadow-md rounded-lg p-6 heightSmoothing">
  <div id="post-content">
    <?php
      // Check if the post ID is provided in the query string
      if (isset($_GET['id'])) {
        $post_id = $_GET['id'];

        // Make a request to retrieve the post content by its ID using file_get_contents and stream_context_create
        $url = 'https://plasticsmockup.co.uk/wp-json/wp/v2/posts/' . $post_id;
        $opts = array(
          'http' => array(
            'method' => 'GET',
            'header' => 'Accept: application/json'
          )
        );
        $context = stream_context_create($opts);
        $response = file_get_contents($url, false, $context);
        if ($response !== false) {
          $post = json_decode($response);

          // Retrieve the date and author information
          $date = $post->date; // Assuming the date property is available in the JSON response
          $author = $post->author; // Assuming the author property is available in the JSON response
$author_id = $post->author; // Assuming the author property is available in the JSON response

$url = 'https://plasticsmockup.co.uk/wp-json/wp/v2/users/' . $author_id;
$response = file_get_contents($url, false, $context);

if ($response !== false) {
    $author_info = json_decode($response);
    $author_name = $author_info->name;
} else {
    $author_name = 'Unknown';
}

// in post content replace audio to match below new audio HTML element
/* HTML element example:
<audio class="plyr">
  <!-- audio source and other attributes -->
</audio>
*/
$post->content->rendered = str_replace('<audio', '<audio class="plyr"', $post->content->rendered);
// replace img with img style="margin: 0;" to remove default wordpress image margin
          // Display the post content, date, and author
          // set window title to post title
          // convert the date to a human-readable format
          // find any wp-block-gallery classes and remove that element
          
            $date = date('F j, Y', strtotime($date));
            // remove any figcaption tags from the post content
            // remove the text in between the figcaption tags
            $post->content->rendered = preg_replace('/<figcaption.*>.*<\/figcaption>/', '', $post->content->rendered);
          echo '<script>document.title = "' . $post->title->rendered . '";</script>';
echo '<h2 class="post-title">' . $post->title->rendered . '</h2>';
echo '<div class="post-meta">Posted on ' . $date . ' by ' . $author_name . '</div>';
echo '<div class="post-content">' . $post->content->rendered . '</div>';
// set meta for page 
/* example meta
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="notranslate">
    <meta name="og:title" content="Home page — Manchester Centre for Plastic Surgery & Burns">
    <meta name="og:description" content="The Manchester Centre for Plastic Surgery and Burns provides specialist care to the population of Greater Manchester and is the major tertiary referral centre for complex reconstruction in the North West of England.">
    <meta name="og:image" content="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png">
    <meta name="description" content="The Manchester Centre for Plastic Surgery and Burns provides specialist care to the population of Greater Manchester and is the major tertiary referral centre for complex reconstruction in the North West of England.">
    <meta name="keywords" content="Manchester Centre for Plastic Surgery, Burns, specialist care, reconstruction, Greater Manchester, North West of England">
    <meta name="author" content="Manchester University NHS Foundation Trust">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#005eb8">
    <meta name="msapplication-navbutton-color" content="#005eb8">
    <meta name="apple-mobile-web-app-status-bar-style" content="#005eb8">
    <meta name="msapplication-TileColor" content="#005eb8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
*/
echo '<meta name="robots" content="index, follow">';
echo '<meta name="googlebot" content="index, follow">';
echo '<meta name="google" content="notranslate">';
echo '<meta name="og:title" content="' . $post->title->rendered . '">';
echo '<meta name="og:description" content="' . $post->excerpt->rendered . '">';
echo '<meta name="og:image" content="https://mcrplasticsurgeryandburns.co.uk/cfpsb.png">';
echo '<meta name="description" content="' . $post->excerpt->rendered . '">';
echo '<meta name="keywords" content="Manchester Centre for Plastic Surgery, Burns, specialist care, reconstruction, Greater Manchester, North West of England">';
echo '<meta name="author" content="Manchester University NHS Foundation Trust">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<meta name="theme-color" content="#005eb8">';
echo '<meta name="msapplication-navbutton-color" content="#005eb8">';
echo '<meta name="apple-mobile-web-app-status-bar-style" content="#005eb8">';
echo '<meta name="msapplication-TileColor" content="#005eb8">';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

        } else {
          echo 'Error loading post.';
        }
      } else {
        echo 'No post ID provided.';
      }
    ?>
  </div>
</article>
  </main>
  <footer class="bg-blue-900 py-4">
    <div class="container mx-auto px-4">
      <p class="text-center text-white">Part of <a href="http://www.mft.nhs.uk/" class="text-blue-200 hover:text-white">Manchester University NHS Foundation Trust</a></p>
    </div>
  </footer>
</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sammy the Shark - About Page</title>
    <meta name="description" content="My Application Description">
    <meta name="author" content="Sammy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 via-purple-600 to-blue-700">

<div class="w-3/4 lg:w-1/2 mx-auto rounded-md bg-gray-200 shadow-lg m-20 p-10 text-center">
    <img src="{{ asset('img/sammy.png') }}" class="w-32 lg:w-1/6 bg-blue-600 mx-auto rounded-lg mb-4" alt="avatar"/>
    <h1 class="text-3xl">Sammy the Shark</h1>
    <p class="text-gray-500 pb-4">Content Creator</p>
    <p class="text-gray-700 mb-6">Hello, I'm Sammy. I am a friendly shark interested in Linux, coding, and community.
        You can find out more about me in the following links:</p>

    <div class="grid grid-cols-1 md:grid-cols-3 grid-flow-row gap-6">
        <div class="px-4 py-2 bg-blue-600 text-gray-100 rounded-md mr-4 hover:bg-blue-700"><a class="" href="https://twitter.com/digitalocean">Twitter</a></div>
        <div class="px-4 py-2 bg-blue-600 text-gray-100 rounded-md mr-4 hover:bg-blue-700"><a href="https://www.linkedin.com/company/digitalocean">LinkedIn</a></div>
        <div class="px-4 py-2 bg-blue-600 text-gray-100 rounded-md mr-4 hover:bg-blue-700"><a href="https://instagram.com/thedigitalocean">Instagram</a></div>
    </div>

</div>

</body>
</html>

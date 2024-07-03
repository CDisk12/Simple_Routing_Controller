<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-blue-900 font-sans leading-normal tracking-normal">
    <div class="container mx-auto my-8 p-4">
        <div class="text-center mb-8">
            <h1 class="text-3xl text-white font-bold">Hobbies</h1>
        </div>
        <div class="flex flex-wrap justify-around text-white">
            <div class="w-full md:w-1/4 p-4 text-center">
                <i class="fas fa-music text-5xl mb-4"></i>
                <h2 class="text-xl font-bold">MUSIC THERAPY</h2>
                <p>Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
            <div class="w-full md:w-1/4 p-4 text-center">
                <i class="fas fa-bullseye text-5xl mb-4"></i>
                <h2 class="text-xl font-bold">OUR MISSION</h2>
                <p>Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
            <div class="w-full md:w-1/4 p-4 text-center">
                <i class="fas fa-headphones text-5xl mb-4"></i>
                <h2 class="text-xl font-bold">MUSIC CAMPS</h2>
                <p>Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
            <div class="w-full md:w-1/4 p-4 text-center">
                <i class="fas fa-book text-5xl mb-4"></i>
                <h2 class="text-xl font-bold">LIBRARY</h2>
                <p>Justo nec ultrices dui sapien eget mi. Velit egestas dui id ornare arcu odio ut sem nulla. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed.</p>
            </div>
        </div>
        <div class="mt-8 text-center">
            <a href="{{ route('about-me') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">About Me</a>
            <a href="{{ route('skills') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Skills</a>
            <a href="{{ route('hobbies') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-700">Hobbies</a>
        </div>
    </div>
</body>
</html>

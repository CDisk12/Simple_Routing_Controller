<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto my-8 p-4 bg-white shadow-lg rounded-lg">
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <div class="w-full lg:w-1/3">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="rounded-lg shadow-lg">
            </div>
            <div class="w-full lg:w-2/3 lg:ml-8 mt-8 lg:mt-0">
                <h1 class="text-2xl font-bold mb-4">VICTORIA CANA</h1>
                <h2 class="text-xl text-gray-600 mb-4">Consultant, Blogger, and Public Speaker in New York</h2>
                <a href="https://victoriasyours.com" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Read my blog</a>
                <p class="mt-4 text-gray-700">
                    Consultant by day, Urban Adventurer by night. Victoria is an ambitious young New Yorker who enjoys writing her life story as though she's the protagonist of a novel, observing the world from as many angles as possible, and helping other people achieve their dreams.
                </p>
                <p class="mt-4 text-gray-700">
                    When Victoria isn’t running around Manhattan tasked with several missions in her planner, you might find her at Deloitte Consulting where she is a Business Analyst or around New York University where she is an active alumna. She also runs a career and lifestyle blog: victoriasyours.com
                </p>
                <p class="mt-4 text-gray-500">
                    #career #leadership #travel #shopping #writing
                </p>
                <div class="mt-4 flex space-x-4">
                    <div>
                        <h3 class="font-bold text-gray-700">WORK</h3>
                        <p class="text-gray-600">Deloitte Consulting</p>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-700">EDUCATION</h3>
                        <p class="text-gray-600">New York University</p>
                    </div>
                </div>
                <div class="mt-4 flex space-x-4">
                    <a href="https://linkedin.com" class="text-gray-500 hover:text-gray-900">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://twitter.com" class="text-gray-500 hover:text-gray-900">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://facebook.com" class="text-gray-500 hover:text-gray-900">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com" class="text-gray-500 hover:text-gray-900">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="mt-8 flex space-x-4">
                    <a href="{{ route('about-me') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">About Me</a>
                    <a href="{{ route('skills') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Skills</a>
                    <a href="{{ route('hobbies') }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-700">Hobbies</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

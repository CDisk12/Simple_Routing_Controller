<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        .circle-chart {
            display: inline-block;
            margin: 20px;
            max-width: 120px;
            max-height: 120px;
        }

        .circle-bg {
            fill: none;
            stroke: #eee;
            stroke-width: 3.8;
        }

        .circle {
            fill: none;
            stroke-width: 2.8;
            stroke-linecap: round;
            animation: progress 1s ease-out forwards;
        }

        .circle.percentage-95 { stroke: #4caf50; }
        .circle.percentage-53 { stroke: #f44336; }
        .circle.percentage-90 { stroke: #2196f3; }
        .circle.percentage-82 { stroke: #ff9800; }
        .circle.percentage-80 { stroke: #9c27b0; }

        @keyframes progress {
            0% {
                stroke-dasharray: 0 100;
            }
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto my-8 p-4 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold mb-4">YOUR NEW SKILLS PAGE</h1>
        <nav class="mb-4">
            <a href="{{ route('about-me') }}" class="text-blue-500 hover:text-blue-700">Main</a> / 
            <span class="text-gray-500">Your new Skills page</span>
        </nav>
        <div class="flex flex-wrap justify-around">
            <div class="text-center">
                <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                    <circle class="circle-bg" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <circle class="circle percentage-95" stroke-dasharray="95, 100" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                </svg>
                <h3 class="text-xl font-bold">NEW SKILL</h3>
                <p>Description of your awesome skill...</p>
            </div>
            <div class="text-center">
                <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                    <circle class="circle-bg" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <circle class="circle percentage-53" stroke-dasharray="53, 100" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                </svg>
                <h3 class="text-xl font-bold">TEST SKILL</h3>
                <p>Our custom testing skill...</p>
            </div>
            <div class="text-center">
                <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                    <circle class="circle-bg" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <circle class="circle percentage-90" stroke-dasharray="90, 100" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                </svg>
                <h3 class="text-xl font-bold">PHOTOSHOP</h3>
                <p>Parturient montes nascetur ridiculus mus. Nulla dui...</p>
            </div>
            <div class="text-center">
                <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                    <circle class="circle-bg" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <circle class="circle percentage-82" stroke-dasharray="82, 100" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                </svg>
                <h3 class="text-xl font-bold">ILLUSTRATOR</h3>
                <p>Fusce feugiat malesuada odio. Morbi nunc odio...</p>
            </div>
            <div class="text-center">
                <svg class="circle-chart" viewBox="0 0 33.83098862 33.83098862">
                    <circle class="circle-bg" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                    <circle class="circle percentage-80" stroke-dasharray="80, 100" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                </svg>
                <h3 class="text-xl font-bold">FLASH</h3>
                <p>Gravida atcursus nec luctus a lorem. Maecenas...</p>
            </div>
        </div>
    </div>
</body>
</html>

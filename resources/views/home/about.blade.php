<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-blue-900 to-gray-900 text-white py-16">
        <!--back to home page-->
    <div class="container mx-auto text-center mt-6">
        {{-- <a href="{{url('/')}}') }}" class="btn">Back to Home</a> --}}
    </div>
    
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">About Us</h1>
            <p class="mt-4 text-lg">Discover our mission, vision, and the people who make it happen.</p>
        </div>
    </header>

    <!-- Mission and Vision Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Mission & Vision</h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                At <span class="font-semibold text-blue-600">Dushh Royal Galerria</span>, we strive to deliver exceptional products that enhance your lifestyle. 
                Our vision is to be a trusted name in the industry, known for innovation, quality, and customer satisfaction.
            </p>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white shadow-lg rounded-lg text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Innovation</h3>
                    <p class="text-gray-600">We embrace creativity and technology to deliver cutting-edge solutions.</p>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-lg text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Integrity</h3>
                    <p class="text-gray-600">Honesty and transparency guide every aspect of our work.</p>
                </div>
                <div class="p-6 bg-white shadow-lg rounded-lg text-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Excellence</h3>
                    <p class="text-gray-600">We aim for excellence in everything we do to exceed expectations.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Our Journey Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Our Journey</h2>
        <div class="timeline">
            <!-- Milestone 1 -->
            <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="timeline-content md:w-1/2 md:pr-8 text-center md:text-right">
                    <h3 class="text-xl font-bold text-gray-800">Founded in 2010</h3>
                    <p class="text-gray-600 mt-2">Dushh Royal Galerria began as a small business with a big vision: to bring premium products to customers worldwide.</p>
                </div>
                <div class="timeline-marker bg-blue-600 rounded-full w-10 h-10 mx-4"></div>
                <div class="timeline-line bg-gray-300 h-1 w-full md:w-1/2"></div>
            </div>

            <!-- Milestone 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center mb-8">
                <div class="timeline-content md:w-1/2 md:pl-8 text-center md:text-left">
                    <h3 class="text-xl font-bold text-gray-800">Expansion in 2015</h3>
                    <p class="text-gray-600 mt-2">By 2015, we had expanded to international markets, offering a diverse range of premium products.</p>
                </div>
                <div class="timeline-marker bg-blue-600 rounded-full w-10 h-10 mx-4"></div>
                <div class="timeline-line bg-gray-300 h-1 w-full md:w-1/2"></div>
            </div>

            <!-- Milestone 3 -->
            <div class="flex flex-col md:flex-row items-center mb-8">
                <div class="timeline-content md:w-1/2 md:pr-8 text-center md:text-right">
                    <h3 class="text-xl font-bold text-gray-800">Award-Winning in 2020</h3>
                    <p class="text-gray-600 mt-2">Our dedication to excellence earned us recognition as an industry leader in customer satisfaction.</p>
                </div>
                <div class="timeline-marker bg-blue-600 rounded-full w-10 h-10 mx-4"></div>
                <div class="timeline-line bg-gray-300 h-1 w-full md:w-1/2"></div>
            </div>

            <!-- Milestone 4 -->
            <div class="flex flex-col md:flex-row-reverse items-center">
                <div class="timeline-content md:w-1/2 md:pl-8 text-center md:text-left">
                    <h3 class="text-xl font-bold text-gray-800">Future Goals</h3>
                    <p class="text-gray-600 mt-2">We continue to innovate, expanding our reach and redefining quality standards for the future.</p>
                </div>
                <div class="timeline-marker bg-blue-600 rounded-full w-10 h-10 mx-4"></div>
                <div class="timeline-line bg-gray-300 h-1 w-full md:w-1/2"></div>
            </div>
        </div>
    </div>
</section>


  

</body>
</html>

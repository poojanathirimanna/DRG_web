<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.head')
</head>
<body>
    <header>
        @include('home.header')
    </header>

    @include('home.slider')

    {{-- @include('home.product') --}}

    <section class="team-section">
        <div class="team-header">
            <h2>Our Group</h2>
            <p>We are proud to work with a wide range of industries and organizations. Our group comprises diverse talents and specialties that help us deliver excellence.</p>
        </div>
        <div class="team-container">
            <!-- Team Member 1 -->
            <div class="team-card">
                <img src="images/247983713_296219875661644_4123852933192522400_n.jpg" alt="Dushan Alwis">
                <h3>Dushan Alwis</h3>
                <p class="role">Owner</p>
                <p>Dushan leads our company with a vision for the future, ensuring strategic growth and success.</p>
            </div>
            <!-- Team Member 2 -->
            <div class="team-card">
                <img src="images/poojana.png" alt="Poojana Thirimanna">
                <h3>Poojana Thirimanna</h3>
                <p class="role">Head of Operations</p>
                <p>Poojana oversees daily operations, ensuring that everything runs smoothly and efficiently.</p>
            </div>
            <!-- Team Member 3 -->
            <div class="team-card">
                <img src="images/alex.png" alt="Alex Chamara">
                <h3>Alex Chamara</h3>
                <p class="role">Director of Marketing</p>
                <p>Alex drives our marketing strategies to engage customers and grow our brand.</p>
            </div>
            <!-- Team Member 4 -->
            <div class="team-card">
                <img src="images/Dinuka.png" alt="Roshen Fernando">
                <h3>Dinuka Chanaka</h3>
                <p class="role">Head of Sales</p>
                <p>Dinuka leads our sales team, ensuring that our customers receive the best service.</p>
        </div>
    </section>

    @include('home.footer')
    

   
    <script src="javascript/script.js"></script>
   


</body>
</html>

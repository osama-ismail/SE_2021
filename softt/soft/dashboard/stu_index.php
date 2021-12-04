<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>complete responsive wedding planner website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <a href="#" class="logo">My Courses</a>
 

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#vendor">Courses</a>
        
        <a href="#team">Teacher Assistant</a>
        <a href="#contact">contact</a>
        <a href="logout.php">Log out</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
  

    <div class="content">
        <span>My Course of this Semester </span>
    
    </div>

</section>

<!-- home section ends -->

<section class="step-container">

    <div class="step">
        <span>01</span>
        <h3>First</h3>
        <p>You can see the Plan for for the first part of material like quizzes, assignments .</p>
        <a href="#" class="btn">see celender </a>
    </div>

    <div class="step">
        <span>02</span>
        <h3>Seconed</h3>
        <p>You can see the Plan for for the Seconed part of material like quizzes, assignments .</p>
        <a href="#" class="btn">see celender</a>
    </div>

    <div class="step">
        <span>03</span>
        <h3>Final</h3>
        <p>You can see the Plan for for the Seconed part of material like quizzes, assignments </p>
        <a href="#" class="btn">see celender</a>
    </div>

</section>

<!-- vendor section starts  -->

<section class="vendor" id="vendor">

    <div class="heading">
        <h1>Current Courses</h1>
       
    </div>

    <div class="box-container">

        <div class="box">
            <img src="image/cal.png" />
            <div class="info">
                <h3>Calculs</h3>

                <a href="#" class="btn">View more</a>
            </div>
        </div>

        <div class="box">


            <img src="image/c++.png" height=820" width="536"/>
            <div class="info">
                <h3>C++</h3>

                <a href="#" class="btn">View more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/101.png"> 
            <div class="info">
                <h3>English 101</h3>

                <a href="#" class="btn">View more</a>
            </div>
        </div>
        <div class="box">
            <img src="image/she.png" height="1050" width="749"/>

            <div class="info">
                <h3>Chemistry</h3>

                <a href="#" class="btn">View more</a>
            </div>
        </div>



        <div class="box">
            <img src="image/physics.png" height="720" width="720"/>
            <div class="info">

                <h3>Physics </h3>

                <a href="#" class="btn">View more</a>
            </div>
        </div>

        <div class="box">
            <img src="image/arabic.png" height="757" width="570"/>

            <div class="info">
                <h3>Arabic</h3>

                <a href="#" class="btn">View more</a>
            </div>
        </div>

    </div>

</section>

<!-- vendor section ends -->

<!-- client section starts  -->



<section class="team" id="team">

    <div class="heading">
        <h1>Your Teacher Assistant for this course</h1>
        
    </div>

    <div class="box-container">

        <div class="box">
            <img src="image/eng.png" alt="">
            <h3>Ahmad Baik</h3>
            <span>Computer Engineer</span>
            <p>He will check your C++ assignments and quizzes if you need any help in this course you can found him in Computer Lab in 1131010</p>
            
        </div>
        <div class="box">
            <img src="image/ta.png" alt="">
            <h3>Dina Naji</h3>
            <span>Trainer</span>
            <p>She will be the assestant for any course you need</p>
           
        </div>


    </div>

</section>

<!-- team section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="heading">
        <h1>contact us</h1>
       
    </div>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="your name">
            <input type="email" placeholder="your email">
        </div>
        <div class="inputBox">
            <input type="varchar" placeholder="your number">
            <input type="text" placeholder="The Material">
        </div>
        <textarea placeholder="say something" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>







<script>

    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');

    menu.addEventListener('click', () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('nav-toggle');
    });

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('nav-toggle');
    }

</script>


</body>
</html>
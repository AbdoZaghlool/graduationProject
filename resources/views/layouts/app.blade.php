<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="this's a website yoc an easily find any course where are you there.....">
        <meta name="keywords" content="courses, diploma, cetification, programming, computer science">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/register.css">
         <link rel="stylesheet" href="css/login.css">
         <link rel="stylesheet" href="css/addPost.css">


        <script src="js/all.min.js"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>

    <title>intelligent search in privte institute</title>
    </head>
 
<body>

 @if (Auth::user())

   <main class="py-4">

            

            @include('inc.nav')

            @yield('content')

            @include('inc.footer')

             @include('inc.snav')

        </main>


@else

 <main class="py-4">

            

            @include('inc.nav')

            @yield('content')

            @include('inc.footer')

            

        </main>

      
      
      
@endif
        
    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/script-index.js"></script>
    <script>
                    var signUpStudentButton = document.getElementById('signUpUser');
                      var signUpCenterButton = document.getElementById('signUpCenter');
                      var container = document.getElementById('container');
                  
                      signUpStudentButton.addEventListener('click', () => {
                          container.classList.add("right-panel-active");
                      });
                  
                      signUpCenterButton.addEventListener('click', () => {
                          container.classList.remove("right-panel-active");
                      });
     </script>
     <script>
                    var signInStudentButton = document.getElementById('signInUser');
                      var signInCenterButton = document.getElementById('signInCenter');
                      var container = document.getElementById('container-login');
                  
                      signInStudentButton.addEventListener('click', () => {
                          container.classList.add("right-panel-active");
                      });
                  
                      sigInpCenterButton.addEventListener('click', () => {
                          container.classList.remove("right-panel-active");
                      });
                  </script>
                  </section>

<script>
var courseForm = document.getElementById('course-form');
var diplomaForm = document.getElementById('diploma-form');
var certificationForm = document.getElementById('cetification-form');


diplomaForm.style.display='none';
certificationForm.style.display='none';


function checkingMainCategory(x){
if(x==0){
    courseForm.style.display='block';
    diplomaForm.style.display='none';
    certificationForm.style.display='none';

}
else if(x==1){
courseForm.style.display='none';
diplomaForm.style.display='block';
certificationForm.style.display='none';

}
else if(x==2){
courseForm.style.display='none';
diplomaForm.style.display='none';
certificationForm.style.display='block';
}

};

</script>



        </body>
    </html>

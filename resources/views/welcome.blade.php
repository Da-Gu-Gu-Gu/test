<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="https://img.icons8.com/doodle/48/000000/men-age-group-3.png" type="image/x-icon">
<title>Hein Htet</title>


  
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        
        {{-- aos --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        {{-- ajax --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        {{-- axios --}}
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        
        
        
        {{-- nanobar --}}
        <style>
             .my-class .bar {
             z-index: 99999999999;
             height: 5px;
    background: #6AFF21;
           
        }
        </style>
        <div class="nanobar my-class" id="my-id" style="position: fixed;z-index:199999;top:0;">
          <div class="bar"></div>
        </div>
       
        
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('css/scroll-out.js')}}"></script>
    {{-- animate --}}
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>
  <!-- loader -->
  <div id="loader">
    <img src="assets/img/310.gif" alt="">
  </div>
    <div id="height">
<!-- menu -->
<div  style="width:100%;height:100px;">
    <div id="menu" class="toggle container col-12" onclick="menu();">
        <span></span>
    </div>
</div>

<!-- content -->

<div id="content" class="container mt-lg-5 mb-5 border">
    <div class="d-flex flex-column flex-lg-row justify-content-between">
        <div id="first" class=" order-2 order-lg-1 mt-5 pb-2">
            <h3 class="my-3">I am</h3>
            <h1 class="my-3">HEIN HTET AUNG</h1>
            <p class="my-3" style="color: #396DF0;">Developer</p>
            <div id="button" >
                <a href="#contact-form">
                    <div id="contact-me" >contact me</div>
                </a>
            </div>
        </div>
        <div id="second" class=" order-1 order-lg-2   ">
          <center> <img src="{{asset('img/121556134_790489438193835_5146308733443650779_n.jpg')}}" data-aos="flip-left" alt=""></center> 
        </div>
    </div>
</div>
</div>
<!-- navgiation -->
<div id="nav" style="display:none;" >
    <ul>
        <li onclick="aa();"><a href="#content" >HOME</a></li>
        <li onclick="aa();"><a href="#about"  >ABOUT</a></li>
        <li onclick="aa();"><a href="#projects"  >PROJCETS</a></li>
        <li onclick="aa();"><a href="#contact-form"  >CONTACT</a></li>
    </ul>
</div>




<!-- about me -->
<div id="wrapper" class="pb-2 pt-1 mb-2 mt-5 border">
<div id="about" class="container my-5">


    <h1 >About Me</h1>
    <p>Now, I am currently studying Computer Science at University of Computer Studies Yangon. I'm newbie at web developer field.
<br><br>
I love design . I love to develop.</p>
</div>
</div>
<!-- my skills -->
<div id="skill" class="container">

    <h1>My Skills</h1>
    <div class="row mt-5 container justify-content-around">
       
            <div class="col-3 container" id="html">
                <small>HTML</small>
          </div>
       
    </div>
</div>



  <!-- Swiper -->
  <div id="wrapper2">
  <div id="projects" class="container my-5">
      <h1 class="pt-2">My Projects</h1>

     <center> <div class="col-12 row mt-3">
        <div class="col-lg-3 col-md-4  my-3" data-aos="flip-left">
           <p style="text-align: left;"> 1. Covid-Information</p>
           <div id="p-img" class="rounded">
           <center><img src="https://img.icons8.com/nolan/96/coronavirus.png" alt="" class="my-3"></center>
        </div>
         <a href="https://tankamout.000webhostapp.com/" class="my-5"><button type="btn" id="demo" class="px-3">Demo</button></a>
        </div>
      </div>
     </center>
  
 
  </div>
</div>

  <!--  contact form-->
  <div id="contact-form" class='container my-5'>
      <h1>Contact Me</h1>
    <div class="row container justify-content-between">
            <div id="form" class="col-lg-6">
                <form class="mt-5" action="" id="contact-form" >
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="email" required><br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="about" placeholder="about something" required></textarea>
                
                
                    <button type="submit" class="btn my-3" id="send" name="submit" >Send</button>
   
                </form>
            </div>
            {{-- <div class="col-lg-6" id="fimg">
                <img src="assets/img/undraw_profile_details_f8b7.png" alt="">
            </div> --}}
      </div>
    

  </div>

  <!-- footer -->
  <footer>
      <p>copyright&copy;TankamouT</p>
  </footer>



<script>   

    $(document).ready(function(){
        $('#menu').click(function(){
            $('#menu').toggleClass('active')
        })
    })

    ScrollOut({
        targets:'h1'
    })


  
  
    window.onload=function(){
        document.getElementById('loader').style.display="none";
    }

    function aa(){
            console.log('aa');
            var a=document.getElementById("nav");
            a.style.display="none";
            var b=document.getElementById("menu");
            b.classList.remove("active");
        }

    function menu(){
				var a=document.getElementById("nav");
	

			if(a.style.display=="none"){
                a.style.width="80%";
                a.style.animation=`mobile 0.75s ease-in`;
				a.style.display="block";
                // console.log('aa');

			}
            else{
				
             
                a.style.animation=`aa 0.75s ease-in`;
				a.style.display="none";
	

			}
		}
  
 

 
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


         {{-- nano-js --}}
         <script src="https://cdnjs.cloudflare.com/ajax/libs/nanobar/0.4.2/nanobar.min.js" integrity="sha512-1Al+dnfE+1gI7IBmpUZ8XnZ3l3Nv6cyA+XgdtlaptVNxJcWWRzHxOPzT+2pbp52qtXa2jkwk0MWYSmxslMsHCQ==" crossorigin="anonymous"></script>
         <script>
         var options = {
             classname: 'my-class',
             id: 'my-id'
         };
         var nanobar = new Nanobar( options );
         nanobar.go( 30 );
         nanobar.go( 76 );
         nanobar.go(100);
          AOS.init();

        //   let form=doucment.form("contact-form");
        //   form.submit(e){
        //       e.preventDefault();
        //       console.log('ee');
        //   }
         </script>
         
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
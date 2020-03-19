<?php
if(isset($_POST['name']))
{
$data=$_POST['name'];
$fp = fopen('music1.txt', 'a');
fwrite($fp, $data.' ');

fclose($fp);
}
if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('music1.txt', 'a');
fwrite($fp, $data.' ');
fclose($fp);
}
if(isset($_POST['message']))
{
$data=$_POST['message'];
$fp = fopen('music1.txt', 'a');
fwrite($fp, $data.' ');
fclose($fp);
}
?>










<!DOCTYPE html>
<html>
    <head>
        <title>Music recommendations</title>
        <link href="css.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
   
    <script>
   
        $(document).ready(function(){
      
      $("#motivational").click(function(){
        $(".a").show();
        $(".b").hide();
        $(".c").hide();
      });
    });
    $(document).ready(function(){
    $("#feelgood").click(function(){
        $(".b").hide();
        $(".a").hide();
        $(".c").show();
      });
    });
    $(document).ready(function(){$("#sympathetic").click(function(){
        $(".a").hide();
        $(".b").show();
        $(".c").hide();
    
      });
    });
    $(document).ready(function(){$("#all").click(function(){
        $(".b").show();
        $(".a").show();
        $(".c").show();
      });
    });
    
    </script>
     </head>
    
    
    
    
    <body>
        <div id="header" class="section">
            <img alt="" class="img-circle" src="og_image.png">
           <p>THERAPEUTIC MELODY</p>
        </div>
       
        <div class="section">
            <h1><span>WHY MUSIC?</span></h1>
            <p>
                As the saying goes, “Music is the reflection of self”, It connects to an individual on a personal level and helps them in bringing forth their intimate emotions and understanding it. One can clearly see their conscience reflected through the melody of words and help them understand their inner turmoil.
                Through the medium of song,people realize they are not the only one suffering and this creates a brotherhood of all the listeners going through the mental and emotional blockade across space and time and thus creating an unparalleled therapeutic experience.            </p>
            <p class="quote">"Where words fail, music speaks."</p>
        </div>
       
        
        
        <div class="section">
            <h1><span>STATS</span></h1>
            <ul>
                <li>Percentage of US population that listen to music. <br />
                    <progress min="0" max="100" value="93"></progress>
                </li>
                <li>Percentage of people engaging in music as a side activity while studying. <br />
                    <progress min="0" max="100" value="87"></progress>
                </li>
                <li>Percentage of most watched youtube videos that are music. <br />
                    <progress min="0" max="100" value="95"></progress>
                </li>
            </ul>
        </div>
       
       
        <div class="video">
            <h1><span>Suggestions</span></h1>
           <!--button-->
           <button id="motivational">motivational</button>
           <button id="feelgood">feelgood</button>
           <button id="sympathetic">sympathetic</button>
           <button id="all">all</button>
           

         
           

           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/_Yhyp-_hX2s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/AjKbw1Cqpt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/hT_nvWreIhg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen > </iframe>

           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/ytQ5CYE1VZw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/Kb24RrHIbFk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/TGx0rApSk6w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>

           
           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/rpERSigjqXs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/MfNjBS1n0cY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/eFjjO_lhf9c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/vx2u5uUu3DE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/p6e3y6nY_H0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/FTQbiNvZqaY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
          
           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/btPJPFnesV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/Tm8LGxTLtQk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/Sv6dMFF_yts" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           
           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/mk48xRzuNvA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/kXYiU_JCYtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/Nj8r3qmOoZ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           
           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/Xn676-fLq7I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/YK3zs7EV6Tk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right" ></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/UtF6Jej8yb4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           
           <iframe class="a" height="150" width="300" src="https://www.youtube.com/embed/wp3kcWOda6k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://www.youtube.com/embed/N-MgRkSh5Xk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="https://www.youtube.com/embed/1vrEljMfXYo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>


        </div>
       
       <div class="section">
            <h1><span>Contact us for more recommendations</span></h1>
           
                
            <form method="post">
                <input name="name" placeholder="Name" type="text" required /><br/>
                <input name="email" placeholder="Email" type="email" required /><br/>
                <textarea name="message" placeholder="Message" required ></textarea>
                <input type="submit" value="SEND" class="submit" />
            </form>
        </div>
       
       
        <p>Hello. Do you want to view <a href="books.php">next page</a>? </p>
         <p>Hello. Do you want to go to <a href="home.html">home page</a>? </p>
       
       
    </body>
</html>





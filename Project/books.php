<?php
              
if(isset($_POST['name']))
{
$data=$_POST['name'];
$fp = fopen('books1.txt', 'a');
fwrite($fp, $data.' ');

fclose($fp);
}
if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('books1.txt', 'a');
fwrite($fp, $data.' ');
fclose($fp);
}
if(isset($_POST['message']))
{
$data=$_POST['message'];
$fp = fopen('books1.txt', 'a');
fwrite($fp, $data.' ');
fclose($fp);
}
?>








<!DOCTYPE html>
<html>
    <head>
        <title>Books Recommendations</title>
        <link href="books.css" rel="stylesheet">
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
            <img alt="" class="img-circle" src="best-philosophy-books.jpg">
           <p>ADAMO LECTIO</p>
        </div>
       
        <div class="section">
            <h1><span>WHY BOOKS MATTER?</span></h1>
            <p>
            Humans looked for the gold city of El Dorado for decades, when the real gold was buried in the deep shelves of their own dusty old city libraries.
Books have been part of human leisure for centuries now and never in the past have they been so easily accessible.
Books contain an overwhelming amount of information narrated through the first hand experience of people via which we can learn and grow.
It is a blessing that one can read about the experience and philosophy of likes of Marcus Aurelius, the great Roman Emperor and once upon a time, the most powerful man in the world and learn from his advice about mental health.

The huge amount of information available has made it difficult for us to decide which book to read and which not to.We specifically curated a list to make the choice easier for the users.
 </p>
            <p class="quote">"The happiness of your life depends upon the quality of your thoughts."</p>
        </div>
       
        <div class="section">
            <h1><span>SUGGESTED READING SCHEDULE</span></h1>
            <table>
                <tr>
                    <th>Day</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
                <tr>
                    <td>6:30-6:45</td>
                    <td class="selected">Newspaper</td>
                    <td class="selected">Newspaper</td>
                    <td class="selected">Newspaper</td>
                    <td class="selected">Newspaper</td>
                    <td class="selected">Newspaper</td>
                    <td class="selected">Newspaper</td>
                    <td class="selected" rowspan="4">Introspect and read according to your convenience</td>


                </tr>
                <tr>
                    <td>6:45-7:30</td>
                    
                    <td class="selected">One chapter of a self help book</td>
                    <td class="selected">One chapter of a self help book</td>
                    <td class="selected">One chapter of a self help book</td>
                    <td class="selected">One chapter of a self help book</td>
                    <td class="selected">One chapter of a self help book</td>

                    <td class="selected">One chapter of a self help book</td>

                </tr>
                <tr>
                    <td>21:15-22:00</td>
                    <td class="selected">Fiction</td>
                    <td class="selected">Non-Fiction</td>
                    <td class="selected">Fiction</td>
                    <td class="selected">Non-Fiction</td>
                    <td class="selected">Fiction</td>
                    <td class="selected">Non-Fiction</td>

                </tr>
                <tr>
                    <td>22:00-22:15</td>
                    <td class="selected">Write your Journal</td>

                    <td class="selected">Write your Journal</td>

                    <td class="selected">Write your Journal</td>
                    <td class="selected">Write your Journal</td>
                    <td class="selected">Write your Journal</td>

                    
                    <td class="selected">Write your Journal</td>
                    
                </tr>
               
            </table>
        </div>
        <!-- My Schedule section end -->
        
        <div class="section">
            <h1><span>STATS</span></h1>
            <ul>
                <li>Percentage reduction in stress. <br />
                    <progress min="0" max="100" value="68"></progress>
                </li>
                <li>Percentage reduction in dementia. <br />
                    <progress min="0" max="100" value="32"></progress>
                </li>
               
            </ul>
        </div>
       
       
        <div class="video">
            <h1><span>READING RECOMMENDATIONS</span></h1>

            <button id="motivational">Self Help</button>
           <button id="feelgood">Fiction</button>
           <button id="sympathetic">Non Fiction</button>
           <button id="all">all</button>

           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/awaken-the-giant-within-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-china-study-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="alchemist.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen > </iframe>

           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/buddhas-brain-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-autobiography-of-malcolm-x-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="turtles all the way down.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>

           
           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/think-and-grow-rich-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-biology-of-belief-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="the cathcher in the rye.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/tools-of-titans-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-art-of-war-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="fight club.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
          
           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/letters-from-a-stoic-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-republic-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="Screenshot (11).png" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/the-subtle-art-of-not-giving-a-fck-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-sixth-extinction-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="c" height="150" width="300" src="Screenshot (12).png" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
          
           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/skin-in-the-game-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/the-sports-gene-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="c" height="150" width="300" src="download.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen > </iframe>
          
           <iframe class="a" height="150" width="300" src="https://fourminutebooks.com/the-four-agreements-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
           <iframe class="b" height="150" width="300" src="https://fourminutebooks.com/zero-to-one-summary/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
           <iframe class="c" height="150" width="300" src="123.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  align="right"> </iframe>

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
        <p>Hello. Do you want to view <a href="TED.php">next page</a> ?</p>
       
        <p>Hello. Do you want to go to <a href="home.html">home page</a>? </p>
       
       
    </body>
</html>





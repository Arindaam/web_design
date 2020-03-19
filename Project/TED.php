<?php
if(isset($_POST['name']))
{
$data=$_POST['name'];
$fp = fopen('TED1.txt', 'a');
fwrite($fp, $data.' ');

fclose($fp);
}
if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('TED1.txt', 'a');
fwrite($fp, $data.' ');
fclose($fp);
}
if(isset($_POST['message']))
{
$data=$_POST['message'];
$fp = fopen('TED1.txt', 'a');
fwrite($fp, $data.' ');
fclose($fp);
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>TED TALKS</title>
        <link href="TED.css" rel="stylesheet">
    </head>
   
    <body>
        <div id="header" class="section">
            <img alt="" class="img-circle" src="ted.png">
           <p>TED:ideas worth spreading</p>
        </div>
       
        <div class="section">
            <h1><span>ABOUT</span></h1>
            <p>
            TED Conferences LLC is an American media organization that posts talks online based on ideas that are worth sharing.
People giving TED talks most certainly have impeccable knowledge in their area of expertise and listening to them can be a liberating and eye opening experience and may help in dispelling any myth that one might have about mental health.         </p>
            <p class="quote">"Do not listen with the intent to reply but with the intent to understand."</p>
        </div>
       
       
        
       
       
       
        <div class="video">
            <h1><span>RECOMMENDED TED TALKS</span></h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/l4gJCBK0Tfc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yzm4gpAKrBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>            
            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/shG0ezBeeJc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            

            <iframe width="560" height="315" src="https://www.youtube.com/embed/twG4mr6Jov0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>            

            
            <iframe width="560" height="315" src="https://www.youtube.com/embed/j-SqQDPGW2k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/F2hc2FLOdhI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>            

            <iframe width="560" height="315" src="https://www.youtube.com/embed/7CIq4mtiamY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wKlMcLTqRLs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
          
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JiwZQNYlGQI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RrWBhVlD1H8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen align="right"></iframe>
        
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
       
       
        <p>Hello. Do you want to view <a href="news.php">next page</a> ?</p>
        <p>Hello. Do you want to go to <a href="home.html">home page</a>? </p>
       
    </body>
</html>





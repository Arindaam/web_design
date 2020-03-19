<?php
if(isset($_POST['name']))
{
$data=$_POST['name'];
$fp = fopen('news1.txt', 'a');
fwrite($fp, $data." ");

fclose($fp);
}
if(isset($_POST['email']))
{
$data=$_POST['email'];
$fp = fopen('news1.txt', 'a');
fwrite($fp, $data." ");
fclose($fp);
}
if(isset($_POST['message']))
{
$data=$_POST['message'];
$fp = fopen('news1.txt', 'a');
fwrite($fp, $data." ");
fclose($fp);
}
?>











<!DOCTYPE html>
<html>
    <head>
        <title>News</title>
        <link href="news.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   

        <script>
   
            $(document).ready(function(){
          
          $("#motivational").click(function(){
            $(".embedly-card").show();
            $(".embedly-card1").hide();
            
          });
        });
        $(document).ready(function(){
        $("#feelgood").click(function(){
            $(".embedly-card").hide();
            $(".embedly-card1").show();
        });
           
        });
       
        
        </script>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
    </head>
   
    <body>
        <div id="header" class="section">
            <img alt="" class="img-circle" src="NEWS.jpg">
           <p>Daily Bulletin</p>
        </div>
       
        <div class="section">
            <h1><span>Briefing</span></h1>
            <p>
            Across the globe,there is a general lack of awareness when it comes to mental health. We have tried to list out resources to make people grasp the importance of mental health and change their perception about it. 
The resources are divided into two parts. First part gives access to trustworthy news sources to remain up to date with the latest happenings and the second part is the link to genuine expert advice.        </p>
            <p class="quote">"Truth and News are not the same thing"</p>
        </div>
       
        
        
        <div class="section">
            <h1><span>Why Awareness is important? </span></h1>
            <ul>
                <li>Countries with no mental health policies .<br />
                    <progress min="0" max="100" value="40"></progress>
                </li>
                <li>Percentage of people that view mental with stigma in India.<br />
                    <progress min="0" max="100" value="71"></progress>
                </li>
                <li>Percentage of Indians that may suffer from depression in their lifetime.  <br />
                    <progress min="0" max="100" value="20"></progress>
                </li>
                <li>Percentage of people that can recover from depression with a proper combination of drugs and therapy. <br />
                    <progress min="0" max="100" value="60"></progress>
                </li>
               
            </ul>
        </div>
       
       
        <div class="video">
            <h1><span>RESOURCES</span></h1>
            
            <button id="motivational">NEWS SOURCES</button>
           <button id="feelgood">EXPERTS ADVICE</button>
           
           
           
           <blockquote class="embedly-card"><h4><a href="https://www.economist.com/topics/mental-health">Mental health</a></h4><p>The Economist offers authoritative insight and opinion on international news, politics, business, finance, science, technology and the connections between them.</p></blockquote>
           
           <blockquote class="embedly-card"><h4><a href="https://www.nytimes.com/topic/subject/mental-health-and-disorders">Health</a></h4><p>News about mental health and disorders, including commentary and archival articles published in The New York Times.</p></blockquote>
           <blockquote class="embedly-card"><h4><a href="https://www.theatlantic.com/category/dear-therapist/">Dear Therapist</a></h4><p>TheAtlantic.com Copyright (c) 2019 by The Atlantic Monthly Group. All Rights Reserved.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

<blockquote class="embedly-card"><h4><a href="https://timesofindia.indiatimes.com/topic/Mental-Health">Mental Health: Latest News, Videos and Mental Health Photos | Times of India</a></h4><p>Latest Mental Health News, Photos, Blogposts, Videos and Wallpapers. Explore Mental Health profile at Times of India</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card"><h4><a href="https://www.nbcnews.com/health/mental-health">Mental Health: Mental Health Studies, News & More - NBC News</a></h4><p>Find mental health and mental illness news stories, videos and photos on NBCNews.com. Read news and research studies covering depression, suicide, stress, and more.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

<blockquote class="embedly-card"><h4><a href="https://www.npr.org/sections/mental-health/">Mental Health</a></h4><p>NPR covers mental health, happiness, depression, and treatment options. Subscribe to the RSS feed.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>



<blockquote class="embedly-card1"><h4><a href="https://medlineplus.gov/mentaldisorders.html">Mental Disorders: MedlinePlus</a></h4><p>Mental disorders (or mental illnesses) are conditions that affect your thinking, feeling, mood, and behavior. They may be occasional or long-lasting (chronic). They can affect your ability to relate to others and function each day. There are many different types of mental disorders. Some common ones include There is no single cause for mental illness.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card1"><h4><a href="https://www.psychiatry.org/patients-families/what-is-mental-illness">What Is Mental Illness?</a></h4><p>Mental Health... involves effective functioning in daily activities resulting in Productive activities (work, school, caregiving) Healthy relationships Ability to adapt to change and cope with adversity Mental Illness... refers collectively to all diagnosable mental disorders - health conditions involving Significant changes in thinking, emotion and/or behavior Distress and/or problems functioning in social, work or family activities Mental health is the foundation for emotions, thinking, communication, learning, resilience and self-esteem.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card1"><h4><a href="https://www.webmd.com/mental-health/mental-health-medications">Mental Health Medications</a></h4><p>WebMD provides a comprehensive list of mental health drugs.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card1"><h4><a href="https://www.nimh.nih.gov/health/topics/mental-health-medications/index.shtml">Mental Health Medications</a></h4><p>Medications can play a role in treating several mental disorders and conditions. Treatment may also include psychotherapy (also called "talk therapy") and brain stimulation therapies (less common). In some cases, psychotherapy alone may be the best treatment option. Choosing the right treatment plan should be based on a person's individual needs and medical situation, and under a mental health professional's care.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card1"><h4><a href="http://www.mhfmjournal.com/">Mental Health in Family Medicine</a></h4><p>Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make choices. Mental health is important at every stage of life, from childhood and adolescence through adulthood.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
<blockquote class="embedly-card1"><h4><a href="https://www.mhanational.org/live-b4stage4">Live B4Stage4 | Mental Health America</a></h4><p>Philosophy of living healthy.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>

<blockquote class="embedly-card1"><h4><a href="https://www.medicalnewstoday.com/">Medical News Today</a></h4><p>News about Mental health issues.</p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>


<iframe class="a" height="1080" width="800" src="mental-health-quote-hp-55-3.jpg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>




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
        <p>Hello. Do you want to go to <a href="home.html">home page</a>? </p>
        
       
       
       
    </body>
</html>





<html>
   <head>
     <meta charset="utf-8" />
     <Title> My Hello World</Title>
      <link rel="stylesheet" type="text/css" href="css/master.css">
   </head>
   <body>
      <div class="prof-box">
         <h1>Asmat Muradi</h1>
         <img src="./images/Profile_Pic.jpg" class="prof-pic" alt="Profile Picture">
         <h2> My Story </h2>
         <p> I am a professional software developer and tech enthusiast.
            I like to solve problems using technology,
            learn new tools and stay on the edge.
            Currently, I work full time and pursuing my software engineering degree at HES.
            I love to travel, try different cuisines and learn to speak different languages.
         </p>
      </div>
      <div class="prof-qoute">
         <h3>Qoute</h3>
         <p>
            <?php
               $qouteArray = array(
               ' Alway be yourself and have confidence in yourself - Bruce Lee',
               'Gineus is 1% inspiration and 99% perspiration - Tomas Edison',
               'I do believe something radical can happend when you read a good book - J.K. Rowling'
               );
               echo $qouteArray[array_rand($qouteArray)];
               ?>
         </p>
      </div>
   </body>
</html>

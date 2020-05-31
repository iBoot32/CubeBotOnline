<html>
   <head>
      <title>CubeBot Online</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
      <style>
         body {
         margin: auto;
         text-align: center;
         }
         div {
         width: auto;
         padding: 10px;
         border: 5px solid gray;
         margin-inside: auto;
         }
         .footer {
         position: fixed;
         left: 0;
         bottom: 0;
         width: 100%;
         background-color: lightgray;
         color: black;
         text-align: center;
         }
      </style>
   </head>
   <body>
      <?php 
         
		 $scramble = $_GET['scramble'];
         if ($scramble != null)
         {
         	$answer = shell_exec("CubeBot2.0.exe scr {$scramble}");
         	$lines = explode("<EOL>", $answer); //separate by line
         	$fix = explode("g:", $lines[0]); //get first line of solution
         	$time = explode(" MILL", explode("EXACTLY ", $answer)[1]); //get rest of solution
         } ?>
		 
      <hr>
      <h1>CubeBot2.0 by iBoot32</h1>
      <h2>An advanced Rubik's Cube solving algorithm written in C#</h2>
      <hr>
      <br><br><br><br>
      <h2>Solution computed in exactly <?php  echo $time[0]; ?> milliseconds!</h2>
      <h3>Solutions to your cube:</h3>
      <div>
         <p>
            <?php
               echo $fix[1];
               echo "<br>";
               for ($i = 1; $i < count($lines); $i++) {
                   echo $lines[$i];
                   echo "<br>";
               }?>
         </p>
      </div>
	  
      <footer>
         <p>(c) 2019 iBoot32</p>
      </footer>
   </body>
</html>
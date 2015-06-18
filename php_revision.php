
  this is a sample of code in PHP w/ html.
-->

<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
  </head>
  <body>
    <img src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
    <div class="header"><h1>
      <?php
      $welcome = "Let's get started with PHP!";
      echo $welcome;
      ?>
    </h1></div>
    <p><strong>Generate a list:</strong>
      <?php
      for ($number = 1; $number <= 10; $number++) {
        if ($number <= 9) {
            echo $number . ", ";
        } else {
            echo $number . "!";
        }
      }; ?>
    </p>
    <p><strong>Things you can do:</strong>
      <?php
        $things = array("Talk to databases",
        "Send cookies", "Evaluate form data",
        "Build dynamic webpages");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
        unset($thing);
      ?>
    </p>
    <p><strong>This jumbled sentence will change every time you click Submit!<strong></p>
    <p>
      <?php
        $words = array("the ", "quick ", "brown ", "fox ",
        "jumped ", "over ", "the ", "lazy ", "dog ");
        shuffle($words);
        foreach ($words as $word) {
            echo $word;
        };
        
        unset($word);
      ?>
    </p>
  </body>
</html>


<!--
PHP code can be written right into your HTML, like this:
-->

  <!DOCTYPE html>
  <html>
      <head>
    </head>
    <body>
          <p>
            <?php /*the php code is embed inside the html code by the php tags*/
              echo "Hello world, It's me, PHP!"; 
              /* 
              in PHP we use echo command to print in the screen and all commands should be closed with ;
              */
            ?>
          </p>
    </body>
  </html>



<!--PHP FUNCTIONS-->

    <!--
    Echo
    The echo function outputs strings. If you type
    -->

    <?php
      echo "Hello!";
    ?>

    <!--
    PHP will output Hello!.
    Make sure to end your line of PHP code with a semicolon.
    -->


<!--
 DATE 
-->
    <!--
      date — Format a local time/date

      string date ( string $format [, int $timestamp = time() ] )
      Returns a string formatted according to the given format string using the given integer timestamp or the current time if no timestamp is given. In other words, timestamp is optional and defaults to the value of time().
    -->

    <?php
      //date_default_timezone_set("GMT");
      date_default_timezone_set('Europe/London');

      $offset = strtotime("+1 weeks 1 hours");

      $date = date("d-m-y", $offset);
      $time = date("h:i:s", $offset);

      echo "the time is $time and the date is $date";

      $date = date("d-m-y");
      $time = date("h:i:s");

      echo "<br>the time is $time and the date is $date";
    ?>


    <!-- Countdown sample -->
    <?php
      echo '<meta http-equiv="refresh" content="1">';

      date_default_timezone_set("Europe/London");

      $currenttime = date("H:i:s");
      $goaltime = "21:05:30";

      echo "<p>Current Time: $currenttime</p><p>Goal Time: $goaltime</p>";

      if ($currenttime >= $goaltime) {
        echo "<br/><strong>Goal has been reached!</strong>";
      }
    ?>



<!--
STRINGS
-->

    <!--
    A string is a word or phrase between quotes, like so: "Hello, world!"

    You can type a string all at once, like this:
    -->

    <?php
      echo "Hello, world!";
    ?>

    <!--
    Or use the concatenation operator, which glues several strings together:
    -->

    <?php
       echo "Hello," . " " . "world" . "!";
    ?>

    <!--
    The concatenation operator is just a dot (.). (If you're coming to PHP from JavaScript, the dot does the same thing for strings that + does in JavaScript.)
    -->


    <!--
    htmlentities — Convert all applicable characters to HTML entities
    -->

    <?php 
      $from_db = '<script>alert("hello!")</script>';
      $sanitised = htmlentities($from_db);
      echo $sanitised;
      //output: <script>alert("hello!")</script>
    ?>



<!--
VARIABLES
-->

    <!--
    So far we've been outputting strings and doing math.

    To do more complex coding, we need a way to "save" these values. We can do this using variables. A variable can store a string or a number, and gives it a specific case-senstive name.
    -->

    <!--
    Examples:
    -->
    <?php
      $myName = "Bruno";
      $myAge = 26;

      echo $myName . " and " . $myAge;
    ?>

    <!--
    All variable names in PHP start with a dollar sign ( $ ).
    -->


<!--
SEMICOLONS
-->
    <!--
    You've probably noticed that our lines of PHP code end in semicolons (;). PHP requires semicolons at the end of each statement, which is the shortest unit of standalone code. (For example, echo "Hello!"; or 2 + 2;)

    You can think of a statement is a complete PHP thought. 19 + or echo aren't complete thoughts, so you wouldn't put semicolons at the end of them!
    -->

    <?php echo "Use your semicolons!"; ?>


    
<!--
COMMENTS
-->
    <!--
    Just like we sometimes put comments in our CSS (using /* this syntax */) or in our HTML (using <!-> this syntax ), we can also put comments in our PHP code! We do that using two forward slashes (//), like so:
    -->

    <?php
        echo "I get printed!";
        // I don't! I'm a comment.
    ?>


<!--
COMPARISONS
-->

    <!--
    So far we've seen:

    strings (e.g. "dogs go woof!")
    numbers (e.g. 4, 10)
    Now let's learn about comparison operators.

    List of comparison operators:

    > Greater than
    < Less than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    != Not equal to
    -->


<!--
If statements
-->

    <!--
    Nice work on comparisons! Now let's see how we can use comparisons to ask yes or no questions.

    Say we want to write a program that asks whether your name is longer than 7 letters. If the answer is yes, we can respond with "You have a long name!" We can do this with an if statement:
    -->

    <?php
      $age = 17;

      if( $age > 16 ) {
        echo "You can drive!";
      }
    ?>

    <!--
    An if statement is made up of the if keyword, a condition like we've seen before, and a pair of curly braces { }. If the answer to the condition is yes, the code inside the curly braces will run.
    -->


<!--
Adding an ELSE
-->
    <!--
    Great! We used an if statement to do something if the answer to the condition was yes, or true as we say in PHP.

    In addition to doing something when the condition is true, we can do something else if the condition is false. We can do this using an if / else statement:
    -->

    <?php
      $name = "Edgar";

      if ($name == "Simon") {
        print "I know you!";
      }
      else {
        print "Who are you?";
      }
    ?>

    <!--
    Just like before, if the condition is true, then only the code inside the first pair of curly braces will run. Otherwise, the condition is false, so only the code inside the second pair of curly braces after the else keyword will run.

    In the example above the condition $name == "Simon" evaluates to false since $name is Edgar. Since the condition is false, only the code inside the curly braces after the else keyword runs, and prints out Who are you?
    -->

<!--
SWITCH SYNTAX
-->
    <!--
    A switch statement is similar to an if / elif / else statement in that you can check multiple conditions. Here's what it looks like:
    -->

    <?php

      $myNum = 2;

      switch ($myNum) {
          case 1:
              echo "1";
              break;
          case 2:
              echo "2";
              break;
          case 3:
              echo "3";
              break;
          default:
              echo "None of the above";
      }
    ?>

    <!--
    A switch statement is made up of the switch keyword, a variable to check, and a pair of curly braces { }. Here we check the value of $myNum.
    Then we have a case block for each comparison. For example case 1: echo "1"; break; checks whether $myNum is equal to 1. If yes, it echos "1", and uses break to exit the switch statement.
    Otherwise, the next case block runs.
    If all cases return false, the default case gets executed.
    
Using "ENDSWITCH". Syntactic Sugar!
    You have two ways of creating a switch. First, there's the way we have made all the past exercises:
    -->

    <?php
      switch ($i) { 

      }

    // But we can also make it this way:

      switch ($i):

      endswitch;
    ?>

    <!--
    This is called alternative syntax. It exists to provide syntactic sugar

    There's no difference when using either the curly brace syntax (first example) or alternative syntax (second example), it only provides readability, thus it's usually used when mixing HTML and PHP code in the same file.
    -->



<!--
WHAT'S AN ARRAY?
-->
    <!--
    An array is a list of items, a bit like a shopping list. It allows you to store more than one item in only one variable.

    Think of it like this. When writing your shopping list, you could use a separate piece of paper for each item you need to buy (a variable). However this is silly and unneeded—could you imagine how hard it would be to carry all that paper around with you? So, you use one piece of paper for all of your items. This one piece of paper is your array.

    In the editor do you see the bit of text that starts with $array =? That is our array. Don't worry about all the details just yet, we will explain in more detail later. For now, just see if you can work out what is happening.

    Have you noticed something familiar at the start of our array? That's right, it starts in the same way as a variable, with the $ sign, and then a name, followed by =.

    However, this is when things start to get different. When declaring an array, we have to use array(). This basically tells PHP that $array is an array and not something else, such as a regular old variable.

    By now, I am sure you have noticed the text inside the ( and ). This is just the items in our array. So, currently, our array has the items "Egg," "Tomato," and "Beans" in it. You can add any type of information to an array, and you do it in much the same way as when declaring variables. Use "" when adding strings, and just enter the number when adding integers.

    You must always remember, however, that each item in an array must be separated by a comma: ,.
    -->

    <html>
      <head>
        <title>My First Array</title>
      </head>
      <body>
        <p>
          <?php
            $friedns = array("Jaspion", "Jiraya", "Ultramen");
          ?>
        </p>
      </body>
    </html>


<!--
ACCESS BY OFFSET WITH [ ]
-->
    <!--
    Each item in an array is numbered starting from 0. For example, when we create an array:
    -->

    <?php
    $myArray = array("do", "re", "mi");
    ?>
    
    <!--

    Each item is numbered starting from 0, like this:
    
    +------+------+------+
    | "do" | "re" | "mi" |
    +------+------+------+
       0      1      2      

    The item "do" is in position 0, the item "re" is in position 1, and so on.

    Therefore, we can access a particular item of the array using its position, like this:
    -->

    <?php
    $myArray = array("do", "re", "mi");

    echo $myArray[0]
    // outputs "do"
    ?>

    <!--
    First we create an array named $myArray
    Then we use echo to output the first item in $myArray. Since items are numbered starting from 0, "do" is at position 0.
    -->



<!--
ACCESS BY OFFSET WITH { }
-->
    <!--
    PHP is a very flexible language. When accessing arrays by offset, you can actually use two different types of syntax: the [] syntax we've covered, or you can use curly braces ({}). You use the curly braces just like you use the square brackets:
    -->

    <?php
     $myArray = array("do", "re", "mi");
     print $myArray{2};
     // prints "mi";
    ?>

    <!--
    Both forms are equivalent, and using one or the other is totally up to you!
    -->


<!--
MODIFYING ARRAY ELEMENTS
-->
    <!--
    An item in an array can be changed by specifying its position and providing a new value, like this:
    -->

    <?php
    $myArray = array("red", "blue", "yellow");

    echo $myArray[1];
    // outputs "blue"

    $myArray[1] = "green";

    echo $myArray[1];
    // outputs "green"
    ?>

    <!--
    First we create a new array $myArray with a list of colors.
    Then we output the item at position 1. Since items are numbered starting from 0, "blue" is at position 1
    Next we change the item at position 1 to "green".
    Now when we output the item at position 1, we get "green".
    -->


<!--
DELETING ARRAY ELEMENTS
-->

    <!--
    Finally, you can remove elements using unset:
    -->

    <?php
      $array = array("red", "blue", "green");
      unset($array[2]);

    //You can even delete the whole array:

      unset($array);
    ?>


<!--
PRINTING AN ARRAY AS IT IS
-->

    <!--
    You can use the php funtion print_r()
    -->

    <?php
      $array = array("red", "blue", "green");
      
      print_r($array);

      //as result in html: Array ( [0] => red [1] => blue [2] => green )
    ?>

<!--
What's a LOOP?
-->

    <!--
    Programming can be tough work, and sometimes it's made tougher by having to do the same thing over and over. Let's say we want to echo a list of leap years in the editor. You might think we'd have to type:
    -->

    <?php
        echo 2004;
        echo 2008;
        echo 2012;
        // And so on
    ?>

    <!--
    But there's a better way!

    A loop is a useful bit of code that repeats a series of instructions for you. For instance, instead of typing echo many times like we did above, we can simply use the code in the editor to the right!
    -->


<!--
'FOR' LOOP SYNTAX
-->

    <!--
    Cool, right? Let's go through the syntax slowly, step-by-step. Here's an example that just echos the numbers 0 to 9:
    -->

    <?php
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    // echoes 0123456789
    ?>

    <!--
    It breaks down like this:

    A for loop starts with the for keyword. This tells PHP to get ready to loop!
    Next comes a set of parentheses (()). Inside the parentheses, we tell PHP three things, separated by semicolons (;): where to start the loop; where to end the loop; and what to do to get to the next iteration of the loop (for instance, count up by one).
    After the part in parentheses, the part in curly braces ({}) tells PHP what code to run for each iteration of the loop.
    So the above example says: "Start looping with $i at 0, stop the loop before $i gets to 10, count up by 1 each time, and for each iteration, echo the current value of $i."

    ($i++ is shorthand for $i = $i + 1. You'll see this a lot!)
    -->

<!--
Loops + Arrays = ForEach
-->
    <!--
    The foreach loop is used to iterate over each element of an object—which makes it perfect for use with arrays!

    You can think of foreach as jumping from element to element in the array and running the code between {}s for each of those elements.
    -->


<!--
PRACTICING WITH ForEach
-->

    <!--
    Let's walk through the foreach syntax step-by-step. First, here's a foreach loop that iterates over an array and prints out each element it finds:
    -->

    <?php
      $numbers = array(1, 2, 3);

      foreach($numbers as $item) {
          echo $item;
      }
    ?>

    <!--
    First, we create our array using the array() syntax we learned in the last lesson.

    Next, we use the foreach keyword to start the loop, followed by parentheses. (This is very similar to what we've done with for loops.)

    Between the parentheses, we use the $numbers as $item) syntax to tell PHP: "For each thing in $numbers, assign that thing temporarily to the variable $item." (We don't have to use the name $item—just as with for loops, we can call our temporary variable anything we want.)

    Finally, we put the code we want to execute between the curly braces. In this case, we just echo each element in turn.

    NOTE: Sintatic Sugar also works for ForEach Statement
    -->


<!--
WHILE LOOP SYNTAX
-->
    <!--
    In the last exercise, you saw how a while loop can be used to repeat a set of commands an unknown number of times. That loop used the following syntax:
    -->

    <?php 
      while(cond) {
         // looped statements go here
      }
    ?>

    <!--
    where the statements in side the curly braces { and } are executed as long as the condition cond is evaluated as true. In the last exercise, cond was the condition that the number of consecutive heads was less than 3: $headCount < 3.

    It is important when writing loops to make sure that the loop will exit at some point. The loop
    -->

    <?php
      while(2 > 1){
         // Code
      }
    ?>

    <!--
    will never exit and is an example of an infinite loop. Avoid infinite loops like the plague! This is why we need to include $loopCond = false; in line 12. If you submit an infinite loop in one of these exercises, you will need to reload the page to stop it.
    -->


<!--
Using Endwhile
-->

    <!--
    PHP offers the following alternative syntax for while loops:
    -->

    while(cond):
       // looped statements go here
    endwhile;


    <!--
    Note the colon after the end parenthesis and the semicolon after the endwhile statement.

    When they are embedded in HTML, loops that use this endwhile syntax can be more readable than the equivalent syntax involving curly braces.
    -->

    <?php  
        while(cond) {
           // looped statements go here
        }
    ?>

    <!--
    Feel free to use whichever syntax you prefer... except on this exercise!
    -->


<!--
DO/WHILE
-->
    <!--
    a do/while could be used to ensure that the code in a loop executed at least once. For example:
    -->

    <?php
    $i = 0;
    do {
        echo $i;
    } while ($i > 0);
    ?>

    <!--
    This do / while loop only runs once and then exits:

    First we set $i equal to 0.
    Second, the loop runs once and outputs $i, which is 0.
    Then the condition while ($i > 0); is checked. Since $i is not greater than 0, the condition evaluates to false, and thedo/while` loop stops.
    -->



                                                  <!--
                                                  FUNCTIONS
                                                  FUNCTIONS
                                                  FUNCTIONS


                                                  PART I
                                                  -->

    <!--
    Introducing Functions
    -->

    <!--
    Functions are reusable pieces of code that you can use throughout an application, saving you lots of copying and pasting.

    PHP has lots of built-in functions, and we'll learn some of them in these exercises. The first set of functions we'll learn about are string manipulation functions.

    strlen() is one of the most common String functions in PHP. You pass it a string, or variable containing a string, and it returns the number of characters in that string. An example might be:
    -->

    <?php
      // get the length of a string and
      // print it to the screen
      $length = strlen("david");
      print $length;
    ?>

  <!--
  String Functions I
  -->
      <!--
      Another very common string function is substr(). This function allows you to return a substring (piece of) of your string.

      You pass this function the string you want to get a substring of, the character in your string to start at, and how many characters you want after your starting point. An example might be:
      -->

      <?php
        $myname = "David";

        // you can manipulate strings easily
        // with built-in funtions too
        $partial = substr($myname, 0, 3);
        print $partial;
        // prints "dav"
      ?>

      <!--
      NOTE: the second parameter (the starting character) is based on a zero-indexed array (i.e. the first character in your string is number 0, not number 1).

      Two other very useful string functions are strtoupper() and strtolower(), which make your entire string UPPERCASE or lowercase. Here is an example of each:
      -->

      <?php 
        $uppercase = strtoupper($myname);
        print $uppercase;
        // prints "DAVID"

        $lowercase = strtolower($uppercase);
        print $lowercase;
        // prints "david"
        You can also call these functions on a string directly, like so:

        print strtolower("David");
        // prints "david"
      ?>
    
    <!--
    trim — Strip whitespace (or other characters) from the beginning and end of a string
    there are 3 types:
    trim(), ltrim & rtrim()
    -->

      <?php 
          echo '<pre>';

          echo 'Full Trim: <br/>';
          $fulltrim = "   text   ";
          echo '<strong>start:</strong>' . $fulltrim . '<strong>:end</strong><br/>';
          $fulltrim = trim($fulltrim);
          echo '<strong>start:</strong>' . $fulltrim . '<strong>:end</strong><br/>';

          echo '<br/>Left Trim: <br/>';
          $left_trim = "   text   ";
          echo '<strong>start:</strong>' . $left_trim . '<strong>:end</strong><br/>';
          $left_trim = ltrim($left_trim);
          echo '<strong>start:</strong>' . $left_trim . '<strong>:end</strong><br/>';

          echo '<br/>Right Trim: <br/>';
          $right_trim = "   text   ";
          echo '<strong>start:</strong>' . $right_trim . '<strong>:end</strong><br/>';
          $right_trim = rtrim($right_trim);
          echo '<strong>start:</strong>' . $right_trim . '<strong>:end</strong><br/>';

          echo '</pre>';
      ?>


  <!--
  String Functions II
  -->

      <!--
      strpos() find the position of the first occurrence of a substring in a string.
      -->

      <?php
        strpos("emily", "e");   // 0
        strpos("emily", "i");   // 2
        strpos("emily", "ily"); // 2
        strpos("emily", "zxc"); // false
      ?>

      <!--
      The parameters passed to strpos() are the haystack and the needle. The function tries to find the needle in the haystack.

      It returns either the index of the first character, or false if the needle cannot be found.
      -->
      <?php
        if (strpos("david","h") === false) {
          print "Sorry, no 'h' in 'david'";
        }
        // prints the "Sorry" message
      ?>

      <!--
      Use the editor to create your own haystack and needle combinations. You can use variables for both haystack and needle.
      -->

      <!--mb_substr()-->
      <!--Performs a multi-byte safe substr() operation based on number of characters. Position is counted from the beginning of str. First character's position is 0. Second character position is 1, and so on.-->
        <?php
          $string = 'words';
          mb_substr($string);
        ?>

      <!--explode()-->
      <!--explode — Split a string by string
      Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter-->
        <?php
          $string = '1 2 3 4 5 6';
          $delimiter = ' ';
          $array = array();
          
          $array = explode($delimiter,$string);

          foreach ($array as $value) {
            echo $value; echo '<br/>';
          }
        ?>

      <!--implode()--><!--join()-->
      <!--
      implode — Join array elements with a string
      join — Alias of implode()
        string implode ( string $glue , array $pieces )
        string implode ( array $pieces )
        Join array elements with a glue string.
      -->
        <?php
          $delimiter = ' ';
          $array = array("Array","becomes","a","phrase");
          $glue = " ";
          $phrase = implode($array,$glue);

          echo $phrase;
        ?>

      <!--strrev()-->
      <!--
        string strrev ( string $string )
        Returns string, reversed.
      -->

      <?php
        $string = "Array becomes a phrase";

        echo strrev($string);
        //returns: esarhp a semoceb yarrA
      ?>


      <!--substr_count()-->
      <!--
      substr_count — Count the number of substring occurrences
      -->

      <?php
        $string = "Array becomes a phrase";

        //substr_count(haystack, needle);
        $search = "My name is Maia, What is yours?";

        $result = substr_count($search, "a");

        echo $result; // return 4 occurrences.
      ?>


      <!--substr_replace()-->
      <!--substr_replace — Replace text within a portion of a string-->

      <?php
        $var = 'ABCDEFGH:/MNRPQR/';
        echo "Original: $var<hr />\n";

        /* These two examples replace all of $var with 'bob'. */
        echo substr_replace($var, 'bob', 0) . "<br />\n";
        echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";

        /* Insert 'bob' right at the beginning of $var. */
        echo substr_replace($var, 'bob', 0, 0) . "<br />\n";

        /* These next two replace 'MNRPQR' in $var with 'bob'. */
        echo substr_replace($var, 'bob', 10, -1) . "<br />\n";
        echo substr_replace($var, 'bob', -7, -1) . "<br />\n";

        /* Delete 'MNRPQR' from $var. */
        echo substr_replace($var, '', 10, -1) . "<br />\n";
      ?>





      <!--
      Number Format
      -->
        <!--
        number_format — Format a number with grouped thousands
        -->

        <?php
          $number = 1234.56;

          // english notation (default)
          $english_format_number = number_format($number);
          // 1,235

          // French notation
          $nombre_format_francais = number_format($number, 2, ',', ' ');
          // 1 234,56

          $number = 1234.5678;

          // english notation without thousands separator
          $english_format_number = number_format($number, 2, '.', '');
          // 1234.57
        ?>

        <?php
          $number = 1000000;
          $number--;
          $number_formatted = number_format($number,0);
          echo 'You have &pound;' . $number_formatted . '<br/>';

          $pi = pi(); //3.1415926535898
          $pi_short = number_format($pi, 3);
          echo $pi_short;
          //3.142
        ?>

  <!--
  Math Functions I
  -->
      <!--
      Let's move on to a bit of arithmetic. The most common Math function you'll use is round(). This function rounds floating point numbers (numbers with decimal points in them) up or down.

      You can use round() to round your number to an integer, or to round off complex floating point numbers to a specific number of decimal places. This is accomplished by passing a second, optional parameter to round(), telling it how many decimal places you want the number rounded to.

      Here's an example:
      -->
      <?php
      // Round pi down from 3.1416...
      $round = round(M_PI);
      print $round;  // prints 3

      // This time, round pi to 4 places
      $round_decimal = round(M_PI, 4);
      print $round_decimal; // prints 3.1416

      //NOTE: M_PI is a PHP constant that is equal to pi.
      ?>


  <!--
  Math Functions II
  -->
      <!--
      A very common and useful function is rand(). This function returns a random number between two numbers. Optionally, you can provide your min and max numbers as parameters, like this:
      -->

      <?php
      // prints a number between 0 and 32767
      print rand();

      // prints a number between 1 and 10
      print rand(1,10);
      ?>


      <!--
      BIG SAMPLE
      -->
      <html>
          <p>
          <?php
          // Use rand() to print a random number to the screen
              print rand();
              echo "<br/>";
          ?>
          </p>
          <p>
          <?php
          /*
          Use your knowledge of strlen(), substr(), and rand() to
          print a random character from your name to the screen.
          HINT: Remember that substr() treats characters in a string as a zero-indexed array (first letter is at position zero). This means that the last character in the string will be at position length - 1.
          */
              $name = "Bruno";
              $length = strlen($name) - 1;
              $pos = rand(0,$length);
              print substr($name,$pos,1);
          ?>
          </p>
      </html>


  <!--
  ARRAY FUNCTIONS I
  -->
      <!--
      Arrays are a very common thing to use in programming. In fact, array() is actually a function! Good job, you have already used an array function.

      Aside from the array() function itself, array_push() is arguably the most common and useful function for manipulating arrays.

      array_push() takes two arguments: an array, and an element to add to the end of that array. Here's an example:
      -->

      <?php

      $fav_bands = array();
      array_push($fav_bands, "Maroon 5");
      array_push($fav_bands, "Bruno Mars");
      array_push($fav_bands, "Nickelback");
      array_push($fav_bands, "Katy Perry");
      array_push($fav_bands, "Macklemore");

      //Another cool array function is count(). Passing an array to count() will return the number of elements in that array. Like this:

      print count($fav_bands); // prints 5

      ?>


  <!--
  ARRAY FUNCTIONS II
  -->
      <!--
      Another common thing to do with arrays is sort them. Handily enough, PHP has a sort() function for just such an occasion!
      -->

      <?php
        $array = array(5, 3, 7, 1);
        sort($array);
        print join(", ", $array);
        // prints "1, 3, 5, 7"
        PHP also has the opposite function: rsort().

        $array = array(5, 3, 7 ,1);
        rsort($array);
        print join(":", $array);
        // prints "7:5:3:1"
      ?>

      <!--
      Lastly, we use join(glue, array) so we can easily print out the representations of our sorted arrays in this exercise.

      For this exercise, we'll use a comma (,) as the glue.
      -->


<!--
FUNCTIONS PART I : EXAMPLE
-->


      <html>
          <p>
        <?php
        // Create an array and push on the names
          // of your closest family and friends
              $family = array();
              array_push($family, "brother","sister","mom","dad");
        // Sort the list
              sort($family);
        // Randomly select a winner!
              $pos = rand(0,count($family)-1);
        // Print the winner's name in ALL CAPS
            print strtoupper($family[$pos]);
        ?>
        </p>
      </html>




                                                  <!--
                                                  FUNCTIONS
                                                  FUNCTIONS
                                                  FUNCTIONS


                                                  PART II
                                                  -->


<!--
FUNCTION SYNTAX
-->
    <!--
    The typical structure of a function is as follows:
    -->

    <?php 
      function name(parameters) {
        statement;
      }
    ?>

    <!--
    The keyword function indicates that the code following it will be a user-defined function.

    name indicates the name of a function, which is case insensitive. The name of a function can contain numbers, letters, underscores or dashes.

    The arguments, or parameters, will be the optional input a function uses to perform calculations.

    And of course, the statements themselves will be the code the function executes when it is called.
    -->

<!--
THE RETURN KEYWORD
-->
    <!--
    Instead of printing something to the screen, 
    what if you want to make it the value that the function outputs so it can be used elsewhere in your program? In PHP, the return keyword does just that. It returns to us a value that we can work with. The difference between this and echo or print is that it doesn't actually display the value.

    Think of it like a calculator solving a mathematical problem that takes several steps to complete. 
    The value from each step is computed, but we don't see the result until we get the final answer. 
    In other words, each value is returned and the final answer is echoed on screen for us.
    -->

    <html>
      <head>
        <title></title>
      </head>
      <body>
          <?php
            function returnName() {
                return "Jaspion";
            }
            echo returnName();
          ?>
        </body>
    </html>


<!--
PARAMETERS AND ARGUMENTS
-->
    <!--
    Functions wouldn't be nearly as useful if they weren't able to take in some input. This is where parameters or arguments come in. These are the variables or inputs that a function uses to perform calculations.
    -->

        <?php
          function squareValue($number) {
            echo $number * $number;
          } 

          $n = 6;
          squareValue($n); // echoes 36
        ?>

    <!--
    The function squareValue, above, takes one parameter, which it multiplies by itself and then echoes the result. The names of the parameters themselves are used internally within the function, so they should be named something helpful.

    You can also use multiple parameters as long as they are separated by commas.
    -->
        <?php
            function greetings($name) {
                echo "Greetings, " . $name . "!";
            }
            
            greetings("Bruno");
        ?>

    <!--
    THE RETURN KEYWORD
    -->
    <!-- Methods also can be protected with final keyword, it means a method cannot be override after defined by the parent class -->

        <?php 

            class Parent
            {
              protected price;

              final public function calculateTaxes() {
                return $this->price * .20;
              }
            }

            class Child extends Parent {
              //here, the child can extends its parent but it cannot modify the function behavior.
            }
        ?>



                                                  <!--
                                                  FUNCTIONS
                                                  FUNCTIONS
                                                  FUNCTIONS


                                                  PART III
                                                  -->



  <form action="sample.php" method="post">
    <textarea name="text"></textarea>
    <input type="submit" />
  </form>

  <?php  
    
    if (isset($_POST['text'])) {
      echo nl2br(htmlentities($_POST['text']));
    }
    // new line to break || nl2br(string) - this built in function allow the text entered to keep the line breaks after entered by the user.

  ?>


<!--
What's OBJECT-ORIENTED PROGRAMMING?
-->
    <!--
    PHP is an object-oriented programming language, which means that you can create objects, which can contain variables and functions.

    When talking about objects, you refer to variables belonging to these objects as properties (or attributes or fields), and functions are called methods.

    These objects are essential when dealing with PHP, as almost everything is an object: for example, functions or arrays are objects, too!
    And this shows why we use objects: we can bundle our functions and data in one place, we can create objects easily using classes (object constructors), so we can create lots of instances (objects, which have been constructed via a class), which contain mostly the same data, except some little nuances.

    On the right, there is a Person class and one instance stored in $me on line 32. Then the greet() method of the $me object is called and the result is echod on line 35.

    Then the stylesheet adds some color to the result. :-)
    -->

    <!--
    FIRST OOP SAMPLE
    -->
        <!DOCTYPE html>
        <html>
            <head>
              <title> Introduction to Object-Oriented Programming </title>
              <link type='text/css' rel='stylesheet' href='style.css'/>
            </head>
          <body>
              <p>
              <?php
                // The code below creates the class
                class Person {
                    // Creating some properties (variables tied to an object)
                    public $isAlive = true;
                    public $firstname;
                    public $lastname;
                    public $age;
                    
                    // Assigning the values
                    public function __construct($firstname, $lastname, $age) {
                      $this->firstname = $firstname;
                      $this->lastname = $lastname;
                      $this->age = $age;
                    }
                    
                    // Creating a method (function tied to an object)
                    public function greet() {
                      return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
                    }
                  }
                  
                // Creating a new person called "boring 12345", who is 12345 years old ;-)
                $me = new Person('boring', '12345', 12345);
                
                // Printing out, what the greet method returns
                echo $me->greet(); 
                ?>
                </p>
            </body>
        </html>


        <!-- SCOPE RESOLUTION OPERATORS -->
        <!-- PHP has two Object Operator namely -> and ::
          -> is used when you are trying to call a method on an Instance and / or access an Instance property.
          :: is used when you want to call a static method or call a parent class's version of a method within a child class. -->
        
        <?
          class hello implements ParentClass{

            public static stats = true;

            function world(){
              echo "hello, world!";
            }
          }

          $obj = new hello;
          $obj->world();
          $obj::ParentMethod();
        ?>


<!--
Building Your First Class
-->

    <!--
    Great, now you know the technical terms. :-)
    Let's start coding by reconstructing the Person class.

    The basic class syntax looks like the following:
    -->

    <?php
      class Classname {

      }
    ?>

    <!--
    The class keyword means that you create a new class; the syntax is quite similar to the function syntax.

    And you can create new instances of this class using the following syntax:
    -->

    <?php
      $obj1 = new Classname();
    ?>


    <!--
    The new keyword means that you create a new object and ensures that your arguments are added as properties, so it initializes the constructor (which we are going to deal with later).

    We don't need to pass in any arguments, as we haven't added any properties (which can store different values depending on the instance) quite yet.

    As you remember, properties are pieces of data bound to an object, and you can imagine an object as a bundle of information and actions.
    -->

      <?php
        class Fruit {
          public $count = 3;
          public $type;
        }

        $apple = new Fruit();
        $apple->type = "apple";
        print $apple->count; // 3
        print $apple->type;  // apple
      ?>

    <!--
    1 . In the example above, we first create a new class called Fruit.
    2 . Then we add a property, $count, and set its value to 3.
    3 . Next, we add a property, $type, but don't store anything in it yet.
    4 . After the class definition, we create new instance of Fruit and store it in $apple.
    5 . Then we set the $type property of $apple to the string "apple".
    6 . Finally, we print out the two properties of $apple.
    -->



<!--
CONSTRUCTORS
-->

    <!--
    The solution: we have to create a constructor to create different objects. This constructor is also a method, but you don't need to worry about this fact just yet.

    The syntax:
    -->
    <?php 
      public function __construct($prop1, $prop2) {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
      }
    ?>

    <!--
    So you should remember the public keyword and the arrow notation.

    Some new things:

    1 . You're creating a function bound to a class (a method).
    
    2 . The constructor method has to be called __construct().
    
    3 . Finally, the weird way to assign the values: $this->prop1 = $prop1 means that the value you pass in the __construct() function via the new keyword is assigned to $this, which represents the object you are dealing with, and ->prop1 is the actual property of the object.
    By creating a new instance using the new keyword, you actually call this __construct() method, which constructs the object. And that's why we have to pass in some arguments when we create an instance of a class, since this is how the properties get set!
    -->


<!--
A METHOD TO THE MADNESS
-->
    <!--
    Great work, now the hardest and longest part is behind us. :-)

    As you've seen, methods—functions bundled into objects—have the following syntax:
    -->

    <?php
      public function funcname($optionalParameter) {
        // Do something
      }
    ?>

    <!--
    And now we know the __construct function is a special one, which is called when a new object is created using a new keyword.
    Furthermore, we've learnt we have to use the $this keyword, if we want to access some properties in a class.

    So if we want a method to return a sentence containing the firstname, we would have to use $this->firstname. (As you see, there is no $ when you access a property in a class.)

    Calling a method is similar to accessing a property, you just have to add the parentheses:
    -->

    <?php
      $obj1 -> meth1();    
    ?>



<!--
Class and Object Methods
-->
    <!--
    Remember when we covered built-in functions in PHP? Well, we can combine that idea with our knowledge of classes and objects: that is, there are built-in PHP functions that tell us interesting information about the classes and objects we've created!

    Check out the example in the editor to the right. We're demoing three useful built-in methods: is_a(), which we use to find out if a particular object is an instance of a given class; property_exists(), to see if an object has a given property; and method_exists(), to see if an object has a given method.

    Note that the first argument is the object we're checking, and the second is the class, property, or method name as a "string".
    -->

    <html>
      <head>
        <title>Class and Object Methods</title>
      </head>
      <body>
        <p>
          <?php
            class Person {
              public $isAlive = true;
              
              function __construct($name) {
                  $this->name = $name;
              }
              
              public function dance() {
                return "I'm dancing!";
              }
            }
            
            $me = new Person("Shane");
            if (is_a($me, "Person")) {
              echo "I'm a person, ";
            }
            if (property_exists($me, "name")) {
              echo "I have a name, ";
            }
            if (method_exists($me, "dance")) {
              echo "and I know how to dance!";
            }
          ?>
        </p>
      </body>
    </html>


<!--
INHERITANCE
-->
    <!--
    As you've been thinking about classes and objects, you might have realized that one class might actually be a specialized type of another class. For instance, you might have a Vehicle class and a Truck class, and it would probably save you an awful lot of typing if you could somehow specify that Truck instances should automatically have many of the same properties and methods as Vehicle instances.

    PHP allows us to accomplish this through a process called inheritance. Inheritance is a way for one class to take on the properties or methods of another class. You could say that the one class extends the other. This is used to express an "is-a" relationship — for example, a Truck "is-a" Vehicle, so it could inherit from Vehicle, but a Motorcycle isn't a Truck, so it shouldn't inherit from Truck (though both could inherit from Vehicle).

    We can cause one PHP class to inherit from another with the extends keyword.
    -->

    <html>
      <head>
        <title>The Shape of Things to Come</title>
      </head>
      <body>
        <p>
          <?php
            class Shape {
              public $hasSides = true;
            }
            
            class Square extends Shape {
            
            }
            
            $square = new Square();
            // Add your code below!
            if (property_exists($square,"hasSides")) {
              echo "I have sides!";
            }
          ?>
        </p>
      </body>
    </html>



<!--
Overriding Parent Methods
-->
    <!--
    Nice work!

    Sometimes we want a child class (or subclass) to be able to override a property or method of its parent class (or superclass).

    For instance, we might have a Shape class with a $sides property set to true, but we might want Square to override this property and set $sides to 4 (since a square always has four sides). That would look something like this:
    -->

        <?php
          class Shape {
            $sides = true;
          }

          class Square extends Shape {
            $sides = 4;
          }
        ?>

    <!--
    It's pretty easy — you just create a new property or method in the child class with the same name as the one in the parent class, and the child's version will always take precedence over the inherited version.
    -->


<!--
CLASS CONSTANTS AND SCOPE RESOLUTION
-->
    <!--
    We've talked a lot about changing variables in PHP, but sometimes we want variables that don't change. These are prefixed with the const keyword (short for constant).

    PHP lets us set constants on a class-by-class basis! Each class has its own scope, which is the context in which its variables can be used.
    -->

    <?php
      class Immortal extends Person {
        // Immortals never die!
        const alive = true;
      }

      // If true...
      if (Immortal::alive) {
        echo "I live forever!";
      }
      // echoes "I live forever!"
    ?>

    <!--
    In the example above, we use :: to access the alive constant inside the Immortal class.

    Note that constants do not start with $.
    -->

<!--
The Static Keyword
-->
    <!--
    Nice work!
    You probably noticed that we could access the Ninja class constant without actually creating an instance of Ninja, and if you're particularly precocious, you might be wondering whether it's possible to access class properties or methods without creating an instance of the class. The answer: yes!

    The static keyword lets you use a class' property or method without having to create an instance of that class. It works like this:
    -->

    <?php
      class Person {
        public static $isAlive = "Yep!"
        public static function greet() {
          echo "Hello there!";
        }
      }

      echo Person::$isAlive;
      // prints "Yep!"
      Person::greet();
      // prints "Hello there!"
    ?>

    <!--
    When combined with the scope resolution operator, this lets us access class information without having to instantiate anything. Neat, right?
    -->

    <!-- Another usability of static variables with the use of SELF keyword that references the object which calls the method or attribute is an instance counter as follows -->

    <?
      class alien 
      {
        private static $count;

        function __construct() {
          self::$count++;
        }

        public function getCounter () {
          echo self::$count;
        } 
      }

      $a1 = new alien;
      $a2 = new alien;
      $a3 = new alien;

      $a1->getCounter(); // here you can find how many instances of alien class were created 'cause all share the $count attribute
    ?>

<!--
ASSOCIATIVE ARRAYS
-->
    <!--
    So far, you have been accessing the values of an array using integers. This is all well and good, but if you want to be more descriptive of your data, you can make use of something called an ASSOCIATIVE ARRAY.

    An associative array makes use of (key => value) pairs. Some languages may separate arrays from associative arrays, but PHP treats both as the same.

    In the editor, you will see I have declared two variables as arrays. Have a look at the first array and see if you can guess what item those values may refer to?

    Now have a look at the array below it. This is an associative array. It's defined as an array like the first one, but see how I have specified keys for each of the values?

    Both arrays contain the same values, but in the associative array, we can access the value using a specified "key".
    -->


<!--
Using ARRAYS as MAPS
-->

    <!--
    You can think of an associative array (also called a map) as being the same as a normal array, but instead of using an integer to refer to the value, you use a defined key.

    While numeric indices may be fine for looping through an array and listing all of the values, what if we need to change a certain value from an array?
    -->

      <?php
        // This is an array using integers as the indices.
        // Add 'BMW' as the last element in the array!
        $car = array(2012, 'blue', 5, 'BMW');

        // This is an associative array.
        // Add the make => 'BMW' key/value pair!
        $assocCar = array('year' => 2012,
                   'colour' => 'blue',
                   'doors' => 5,
                   'make' => 'BMW');
            
        // This code should output "BMW"...
        echo $car[3];
        echo '<br />';
            
        // ...and so should this!
        echo $assocCar['make'];
      ?>


<!--
Iterating Over Associative Arrays
-->
    <!--
    Looping through an associative array is just as easy as looping through a normal array, but you obtain the value from a specified key, not an integer. Just like in the previous exercises!

    If we only need to loop through the values of an array, we can use for. Have a look at the editor to see an example of this being used.

    Remember, when using a for loop, calculate the length of the array first!

    Then have a look at the foreach loop to see how we can get the key and value of each pair in the array.
    -->

      <?php    
        $food = array('pizza', 'salad', 'burger');
        $salad = array('lettuce' => 'with',
                   'tomato' => 'without',
                   'onions' => 'with');
    
      // Looping through an array using "for".
      // First, let's get the length of the array!
      $length = count($food);
    
      // Remember, arrays in PHP are zero-based:
      for ($i = 0; $i < $length; $i++) {
        echo $food[$i] . '<br />';
      }
    
      echo '<br /><br />I want my salad:<br />';
    
      // Loop through an associative array using "foreach":
      foreach ($salad as $ingredient=>$include) {
        echo $include . ' ' . $ingredient . '<br />';
      }
    
      echo '<br /><br />';
    
      // Create your own array here and loop
      // through it using foreach!
      $games = array('Sonic 1' => 'Finished',
                     'Zelda' => 'Unfinished',
                     'Super Mario Wold' => 'Unfinished',
                     'Alex Kidd' => 'Finished');
                     
       foreach($games as $status=>$game) {
           echo $game . ' - Status: ' . $status . '<br/>';
       }
    
        echo '<br /><br />';
      ?>



<!--
MULTIDIMENSIONAL ARRAYS
-->
    <!--
    Not only can you store integers and strings in arrays, you can also store... other arrays! This is called a multidimensional array.

    How do we do this? Well, just like a normal array with comma-separated values, but you would put comma-separated arrays instead like the code in the editor.

    $deck is an array which contains 3 rows, each being a playing card. Within each row, it has the name of the card, along with the value.

    To retrieve a card, we would first get the row for that card, then get the value we require (either to display the card, or calculate the player's total).

    If we access $deck[2], we would get the third row (remember, arrays start from 0 in PHP!)

    That will return another array containing 2 values: the first (0) which is a string that has the value "7 of Diamonds", and the second (1) which is an integer that has the value 7.

    If we want the "7 of Diamonds" string, we would simply use $deck[2][0];.
    -->

    <?php
        $deck = array(array('2 of Diamonds', 2),
                      array('5 of Diamonds', 5),
                      array('7 of Diamonds', 7));
        
      // Imagine the first chosen card was the 7 of Diamonds.
      // This is how we would show the user what they have:
      echo 'You have the ' . $deck[2][0] . '!';
    ?>

    <?php
      $hero = array(
        'Jaspion' => array('Colours' => 'Black & Red & Silver'),
        'Jiraya' => array ('Colours' => 'Black & Red & White'),
        'Lionman' => array ('Colours' => 'Black & Golden'),
        'Ultramen' => array('Colours' => 'Silver')
      );
      //In the first bracket you are accessing each single element, in the second bracket you can access these elements nested values.
      echo $hero['Lionman']['Colours']; //screen output: Black & Golden
    ?>



<!--
_GET && _POST
-->
    <!--
      These methods are the way how we send information across pages in PHP
    -->

    <?php
      $name = $_GET['name'];
      $age = $_GET['age'];

      echo 'I am ' . $name . ' and I am ' . $age . ' years old.';
    ?>


    <?php
      $name = $_POST['name'];
      $age = $_POST['age'];

      echo 'I am ' . $name . ' and I am ' . $age . ' years old.';
    ?>

    <!--The main difference between those two methods are the way that the information are sent after submitted, the get method sends this by URL meanwhile POST consumes this by sending it hidden directly to the receiving method-->




<!--
COOKIES
-->
    <!--
    setcookie() defines a cookie to be sent along with the rest of the HTTP headers. Like other headers, cookies must be sent before any output from your script (this is a protocol restriction). This requires that you place calls to this function prior to any output, including <html> and <head> tags as well as any whitespace.

    Example #1 setcookie() send example
    -->

    <?php
      $value = 'something from somewhere';

      setcookie("TestCookie", $value);
      setcookie("TestCookie", $value, time()+3600);  /* expire in 1 hour */
      setcookie("TestCookie", $value, time()+3600, "/~rasmus/", "example.com", 1);

      // Print an individual cookie
      echo $_COOKIE["TestCookie"];

      // Another way to debug/test is to view all cookies
      echo '<pre>' . print_r($_COOKIE,true) . '</pre>';
      echo '<pre>' . print_r($GLOBALS,true) . '</pre>';

    ?>





  <!--
  Parameters of a cookie in PHP
      name
      The name of the cookie.

      value
      The value of the cookie. This value is stored on the clients computer; do not store sensitive information. Assuming the name is 'cookiename', this value is retrieved through $_COOKIE['cookiename']

      expire
      The time the cookie expires. This is a Unix timestamp so is in number of seconds since the epoch. In other words, you'll most likely set this with the time() function plus the number of seconds before you want it to expire. Or you might use mktime(). time()+60*60*24*30 will set the cookie to expire in 30 days. If set to 0, or omitted, the cookie will expire at the end of the session (when the browser closes).

      Note:
      You may notice the expire parameter takes on a Unix timestamp, as opposed to the date format Wdy, DD-Mon-YYYY HH:MM:SS GMT, this is because PHP does this conversion internally.
      path
      The path on the server in which the cookie will be available on. If set to '/', the cookie will be available within the entire domain. If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories such as /foo/bar/ of domain. The default value is the current directory that the cookie is being set in.

      domain
      The domain that the cookie is available to. Setting the domain to 'www.example.com' will make the cookie available in the www subdomain and higher subdomains. Cookies available to a lower domain, such as 'example.com' will be available to higher subdomains, such as 'www.example.com'. Older browsers still implementing the deprecated » RFC 2109 may require a leading . to match all subdomains.

      secure
      Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to TRUE, the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie only on secure connection (e.g. with respect to $_SERVER["HTTPS"]).

      httponly
      When TRUE the cookie will be made accessible only through the HTTP protocol. This means that the cookie won't be accessible by scripting languages, such as JavaScript. It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks (although it is not supported by all browsers), but that claim is often disputed. Added in PHP 5.2.0. TRUE or FALSE

  -->


  <!--
  UNSET COOKIE
  -->
      <?php
        $exp = time() + 86400;
        $exp_unset = time() - 86000;

        //set cookie
        setcookie('name','value',$exp);
        //unset cookie
        //setcookie('value','',$exp_unset);

        if (isset($_COOKIE["name"])) {
          echo 'cookie is set';
        } else {
          echo 'cookie is unset';
        }

        echo '<br/><br/>' . 'COOKIES: ' . '<br/>';
        echo '<pre>' . print_r($GLOBALS,true) . '</pre>';
      ?>



<!--COMMON PROBLEMS-->
      <!--PHP.ini-->
      <!--
      @ /opt/lampp/etc/php.ini can be found this file which contains all configurations and some setups of your php web server. more information about how to setup and some of the default values can be found @ php.net.
      -->


      <!--Large file sizes-->
      <!--Sometimes most installations can block the developer of uploading large files, so @ php.ini file you may find this file and update this.
      
      ; Maximum allowed size for uploaded files.
      ; http://php.net/upload-max-filesize
      upload_max_filesize=128M

      At this point showed above you can select the file sizes of uploading
      and restart apache.
      -->

      
      <!--Access deny error-->
      <!--
      when connecting to databases you must check which users has access to connect on any database of your system. you must also check if the password was set to improve security.
      also you need to be careful because different users has different permissions on different servers.
      so, each single site of every site must have its own root user.
      -->
      

      <!--Undefined index sample-->
      <!--When you're sending some information to another page or sending to the available script which will gather this informations the index might be undefined by the receiver script, so you must check in the receiving form if the value isn't set.
      follows above an example:
      -->

      <!DOCTYPE html>
      <html>
      <head>
        <title></title>
      </head>
      <body>
        <?php
          //without this isset to check if the form contains the value already set, otherwise your script will trigger an error of undefined index 'text'.
          if (isset($_POST['text']) {
            echo "no errors";
          }
        ?>

        <form action="" method="post">
          Form:
          <input type="text" name="text" />
          <input type="submit" name="Submit" />
        </form>
      </body>
      </html>
      <?php

      ?>


      <!--Cannot modify header error-->
      <!--use ob_start error-->

      <?php
        //any output will be saved as buffer so 
        ob_start();
        //we can avoid the error.
        ?>

        <h2>Redirection</h2>
        <?php 
          header('Location: http://google.com'); 
          ob_end_flush();
      ?>

      <!--$end error-->
      <!--if you find the error answer you may review the structure of your code because probably you have ignored and bracket, line end, -->



<!---->
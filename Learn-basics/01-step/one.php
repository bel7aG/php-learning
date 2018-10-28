  <?php
    echo "<h1>Hello echo</h1>";
    print("<p class='print'>print can print xD</p>");
    //comment  #comment
    /*
      multi line..
    */

    $randomVar = "bel7aG";

    // String concatination we have (. and ,)
    echo "<p>my first name is " . "$randomVar" . "</p>";
    echo "<p>my second name is $randomVar</p>";
    echo "<p>my first name is " , "$randomVar" , "</p>";

    echo '<p>my second name is $randomVar</p>';
      # ==> single cote dont know anything about variables :D.

    ECHO "Hello World!<br />";
    echo "Hello World!<br />";
    EcHo "Hello World!<br />";
    # ==> all keywords (e.g. if, else, while, echo, etc.),
    #     classes, functions, and user-defined functions are NOT case-sensitive.

    $me = 1;
    $Me = 2;
    $a = $me == $Me ? '$me == $Me' : '$me != $Me <br />';
    echo $a;

    //variables
    $a = 2;
    $b = 2;
    echo $a + $b . '<br />';
    print $a + $b;
    printf("<br /><br /> %d + %d = %d", $a, $b, $a + $b);

    function firstFunction() {
      return "<br />Hello World this is my first function using PHP<br />";
    }

    echo firstFunction();

    switch (firstFunction()) {
      case 'hell yeah':
      $v = "first <br />";
      break;

      case '<br />Hello World this is my first function using PHP<br />':
        $v = "second <br />";
        break;
    }

    echo $v;

    $okok = function($a, $b){
      return $a + $b;
    };

    echo $okok(1, 1);

    echo "</br />";
    const c = 2;
    echo(c);

    $func = function() {
      echo 'this is $func';
    };

    echo "<hr> boolean test: <br />";

    if (1 == '1') {
      echo "1 == '1'";
    }

    if (!(1 === '1')) {
      echo "<br /> !(1 === '1')";
    }

    if (1 == true) {
      echo "<br />1 == true";
    }

    if (true != 0) {
      echo "<br /> true != 0";
    }

    if (false != 1) {
      echo "<br /> false != 1";
    }
    echo '<hr />';
    echo "<h1>functions</h1>";
    echo $GLOBALS['a']; // Global variables

    $bel7a = 'belhassen Gharsallah';

    $testGlobal = function($a, $b) use ($bel7a) {
      return "<br />$a $b $bel7a";
    };

    echo $testGlobal('My', 'Name is');

    $fa = "344.224212";
    $ia = 10;
    echo "<br />" . ($b = $ia + $fa);

    echo "<br />" . (int) $b;

    # Array and foreach
    echo "<hr />";

    $av = array(1, 'ok', true, false, array('name' => 'Belhassen', 'surname' =>'Gharsallah', 'tag' => 'bel7aG'));

    foreach ($av as $key => $value) {
      if ($key == count($av) - 1) {
        foreach($av[count($av) - 1] as $key => $value) {
          echo '<br />' . $key . ': ' . $value . '<br />';
        }
        break;
      }
      echo '<br />' . $key . '-' . ($value ? $value : 'false') . ' - type: ' . gettype($value) . '<br />';
    }

    #array Sort functions
    $arrayOne = array(10, 2, 44, 100, 0, -34, 'bel7aG', function() {return 'this is function return string';});
    for ($i = 0; $i < count($arrayOne); $i++) {
      $i !== (count($arrayOne) - 1) ? ($k = $arrayOne[$i]) : ($k = $arrayOne[$i]());
      echo '<br />' . $k;
    }

    
    $mystr = 'belhassen Gharsallah is a Javascript developer not this shit ..';
    echo '<br />' . (is_string($mystr) ? 'true' : 'not string');
        #is_string()
        #is_array()
        #is_bool()
        #is_float()
        #is_integer()
        #is_object()

  ?>

<?php
if(isset($_POST["ans0"]) && isset($_POST["ans1"]) && isset($_POST["ans2"]) && isset($_POST["ans3"]) && isset($_POST["ans4"])){
    if($_POST["ans0"]==="main" && $_POST["ans1"]==="remote" && $_POST["ans2"]==="recvline" && $_POST["ans3"]==="line" && $_POST["ans4"]==="sendline"){
        $flag = true;
    }
    else{
        $flag = false;
    }
}

?>

<html>

<head>

    <title>Simple Snek</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


</head>

<body>
<div class="container-fluid col-md-10">
    <div class="row">
        <div class="page-header col-md-offset-2">
            <img src="snek.jpg" width="100">
            <h1 style="display:inline">Snek-Tutorial 2k17</h1>
        </div>
    </div>
    <div class="row">
        <div class="page-header col-md-offset-2">
<!-- The start of my not-so-cool inline styling. -->

            <?php if(isset($flag) && $flag === true){?>
                <div class="panel panel-success">
                    <div class="panel-heading">Congratz</div>
                    <div class="panel-body">
                        <p>Hope this can help you in other challenges. Have fun! Here's your flag</p>
                        <p>GCTF{50ck37_pr06r4mm1n6_3z}</p>
                        <p>You can download my script <a href="./snek.py">here</a> to modify for other challenges, you need to install the pwntool library first tho.</p>

                    </div>
                </div>

            <?php }elseif(isset($flag) && $flag === false){ ?>
                <div class="panel panel-warning">
                    <div class="panel-heading">:(</div>
                    <div class="panel-body">
                        <p>Try again please</p>
                        <p></p>

                    </div>
                </div>
            <?php }?>

            <form method="post">
            <pre style='color:#000000;background:#ffffff;'><span style='color:#696969; '>#!/usr/bin/python2</span>

<span style='color:#800000; font-weight:bold; '>from</span> pwn <span style='color:#800000; font-weight:bold; '>import</span> <span style='color:#44aadd; '>*</span>

<span style='color:#696969; '># </span><span style='color:#ffffff; background:#808000; '>Fix my function name :((</span>
<span style='color:#800000; font-weight:bold; '>def</span> <input type="text" name="ans0" placeholder="define me"> <span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#808030; '>:</span>
    <span style='color:#696969; '># Help me connect to the socket prease.</span>
    <span style='color:#696969; '># Use one of the function provided by the pwntool lib</span>
    p <span style='color:#808030; '>=</span> <input type="text" name="ans1" placeholder="pwnlib_function"><span style='color:#808030; '>(</span><span style='color:#0000e6; '>"play.spgame.site"</span><span style='color:#808030; '>,</span> <span style='color:#008c00; '>13337</span><span style='color:#808030; '>)</span>
    <span style='color:#696969; '># Help me receive a line from the socket please! Just one!</span>
    line <span style='color:#808030; '>=</span> p<span style='color:#808030; '>.</span> <input type="text" name="ans2" placeholder="pwnlib_function"> <span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#808030; '>.</span>strip<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
    <span style='color:#696969; '># If the GCTF flag it's in the line, print it out</span>
    <span style='color:#800000; font-weight:bold; '>if</span> <span style='color:#0000e6; '>"GCTF:"</span> <span style='color:#800000; font-weight:bold; '>in</span> <input type="text" name="ans3" placeholder="variable name"><span style='color:#808030; '>:</span>
        <span style='color:#800000; font-weight:bold; '>print</span> line
        <span style='color:#696969; '># Help me sendline to the socket to thank it for the flag!</span>
        p<span style='color:#808030; '>.</span><input type="text" name="ans4" placeholder="pwnlib_function"><span style='color:#808030; '>(</span><span style='color:#0000e6; '>"Thank you for the flag!"</span><span style='color:#808030; '>)</span>
    <span style='color:#800000; font-weight:bold; '>else</span><span style='color:#808030; '>:</span>
        <span style='color:#800000; font-weight:bold; '>print</span> <span style='color:#0000e6; '>"GCTF not found"</span>

<span style='color:#800000; font-weight:bold; '>if</span> <span style='color:#074726; '>__name__</span> <span style='color:#44aadd; '>==</span> <span style='color:#0000e6; '>"__main__"</span><span style='color:#808030; '>:</span>
    main<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
</pre>

        <input type="submit" class="btn btn-primary col-md-offset-11" value="Check">
        </form>
        </div>
    </div>
</div>

</body>

</html>

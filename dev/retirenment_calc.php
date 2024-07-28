<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retirenment Saving Worksheet</title>
    <style type="text/css">
        body {
            font-size: 14pt;
        }

        .heading {
            font-size: 18pt;
            color: red;
        }
    </style>
</head>

<?php
/*
this test , along with the submit button value in the form below,
will check to see if form is being rendered for the first time 
in that case it will display with default values 
*/

if (!isset($_POST["Submit"]) && $_POST["Submit"] == "Calculate") {
    $_POST["CurrentAge"] = "";
    $_POST["RetireAge"] = "";
    $_POST["Contrib"] = "";
    $Total = 0;
    $AnnGain = 7;
} else {
    $AnnGain = $_POST["AnnGain"];
    $Years = $_POST["RetireAge"] - $_POST["CurrentAge"];
    $YearCount = 0;
    $Total = $_POST["Contrib"];

    while ($YearCount <= $Years) {
        $Total = round($Total * (1.0 + $AnnGain / 100) + $_POST["Contrib"]);
        $YearCount++;
    }
}
?>

<body>
    <div id="div1" class="heading">
        A Retirenment Saving Calculator
    </div>

    <p class="blurb">
        Fill in all the values ( except "Nest Egg") and see how much money you will have for your Retirenment under
        different scenarios. You can change the values and resubmit the form as many times as you like.

        you must fill in the two "Age" variables.
        The Annual return variable has a default inflation-adjusted value (7% - 8% growth minus 1% inflation ) which you
        can change to redirect your greater optimism or pessimsm
    </p>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

    <label>Your age now: 
        <input type="text" size=5 name="CurrentAge" value="<?php echo $_POST["CurrentAge"];?>"> 
    </label>
    <br>
    <label>The age at which you plan to retire :
        <input type="text" size=5 name="RetireAge" value="<?php echo $_POST["RetireAge"];?>"> 
    </label>
    <br>
    <label>Annual Contribution:
        <input type="text" size=15 name="Contrib" value="<?php echo $_POST["Contrib"];?>"> 
    </label>
    <br>
    <label>Annual Return :
        <input type="text" size=5 name="AnnGain" value="<?php echo $AnnGain;?>"> %
    </label>
    <br>
    <p><b>Nest Egg</b>: <?php echo $Total; ?></p>
    <br>
    <input type="submit" name="Submit" value="Calculate">

    </form>
</body>
</html>
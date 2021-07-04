<?php
if(isset($_POST["text1"])){
    $var1=$_POST["text1"];
}else
    $var1="";
if(isset($_POST["textarea"]))
    $var2=$_POST["textarea"];
else
    $var2="";
if(!isset($_POST["combo"]))
    $var3="";
else
    $var3=$_POST["combo"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ex7</title>
    </head>
    <body>
        <form action="<?php print $_SERVER["PHP_SELF"]?>" method="post">
            <input type="text" name="text1" size="12" maxlength="13"/>
            <input type="submit" value="->" name="bau"/>
            <textarea name="textarea"><?php echo($var1);?></textarea>
            <input type="submit" value="->" name="baubau"/>
            
            <select size="1" name="combo">
                <option value="<?php echo($var2);?>" selected="selected"><?php echo($var2);?></option>
                <option value="valoare1">Valoare1</option>
                <option value="valoare2">Valoare2</option>
            </select>
            <input type="submit" value="->" name="baubau"/>
            <input type="text" name="text2" value="<?php echo($var3);?>" size="12" maxlength="13"/>
        </form>
    </body>
</html>
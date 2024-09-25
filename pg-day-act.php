<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week Activity</title>
    

</head>
<body>

<h2>Days of the Week Activity</h2>
    <form method="post" action="">
        <input type="hidden" name="submitted" value="true"> 
        
            <button type="submit" name="monday" value="monday"><h4>Monday</h4></button>
            <button type="submit" name="tuesday" value="tuesday" ><h4>Tuesday</h4></button>
            <button type="submit" name="wednesday" value="wednesday" ><h4>Wednesday</h4></button>
            <button type="submit" name="thursday" value="thursday" ><h4>Thursday</h4></button>
            <button type="submit" name="friday" value="friday" ><h4>Friday</h4></button>
    
    </form>

    
    <?php
    
if(isset ($_POST['monday'])){
    echo "Monday";
}
else if(isset($_POST['tuesday'])){
    echo "Tuesday";
}
else if(isset($_POST['wednesday'])){
    echo "Wednesday";
}
else if(isset($_POST['thursday'])){
    echo "Thursday";
}
else if(isset($_POST['friday'])){
    echo "Friday";
}
else if(isset($_POST['saturday'])){
    echo "Saturday";
}
?>


</body>
</html>

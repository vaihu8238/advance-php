<?php
if(isset($_POST["country"])){
    $country = $_POST["country"];
     

    $countryArr = array(
                    "usa" => array("New Yourk", "Los Angeles", "California"),
                    "india" => array("Mumbai", "New Delhi", "Bangalore"),
                    "uk" => array("London", "Manchester", "Liverpool")
                );
    
     
    
    if($country !== 'Select'){
        echo "<label>City:</label>";
        echo "<select>";
         foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Populate City Dropdown Using jQuery Ajax</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<form method="POST">
    <table>
        <tr>
            <td>
                <label>Country:</label>
                <select class="country">
                    <option>Select</option>
                    <option value="usa">United States</option>
                    <option value="india">India</option>
                    <option value="uk">United Kingdom</option>
                </select>
            </td>
            <td id="response">
            </td>
        </tr>
    </table>
</form>
</body> 
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Eligibility Finder.</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Age : </label>
        <input type="number" name="age" placeholder="Enter your age."><br><br>
        <label>Citizen : </label>
        <input type="radio" name="citizen" value="Yes."> Yes.
        <input type="radio" name="citizen" value="No."> No.<br><br>
        <input type="submit" value="Find Eligibility to Vote."><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $age = (int) ($_POST["age"] ?? 0);
        $citizen = $_POST["citizen"];
        $minor = 18 - $age;

        if ($age >= 18 && $citizen === "Yes.") {
            echo "You are {$age} years older & are citizen of this democratic country. Hence you are eligible to vote.";
        } elseif ($age >= 18 && $citizen === "No.") {
            echo "You are {$age} years older but not citizen of this democratic country. Hence you are not eligible to vote.";
        } elseif ($age <= 18 && $citizen === "Yes.") {
            echo "You are the citizen of this country but your age is less than the minimum age limit to vote in our country. Hence you are not eligible to vote. Come back after {$minor} years then you will be eligible to vote";
        } else {
            echo " Your age is less than 18 and also your are not the citizen of this democratic country hence you are not eligible to vote by both means.";
        }
    }
    ?>
</body>

</html>
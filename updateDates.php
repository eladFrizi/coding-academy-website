<?php
$string = file_get_contents("dates.json");
$dates = json_decode($string, true);

var_dump($_POST);

if (isset($_POST["nextOpenEveningHomePage"])  && !empty($_POST["nextOpenEveningHomePage"])) {
    $dates["nextOpenEveningHomePage"] = htmlspecialchars($_POST["nextOpenEveningHomePage"]);
}

if (isset($_POST["nextOpenEveningLanding1"])   && !empty($_POST["nextOpenEveningLanding1"])) {
    $dates["nextOpenEveningLanding1"] = htmlspecialchars($_POST["nextOpenEveningLanding1"]);
}

if (isset($_POST["nextOpenEveningLanding234"]) && !empty($_POST["nextOpenEveningLanding234"])) {
    $dates["nextOpenEveningLanding234"] = htmlspecialchars($_POST["nextOpenEveningLanding234"]);
}

if (isset($_POST["nextCourseHomePage"])  && !empty($_POST["nextCourseHomePage"])) {
    $dates["nextCourseHomePage"] = htmlspecialchars($_POST["nextCourseHomePage"]);
}

if (isset($_POST["nextCourseLanding1"])   && !empty($_POST["nextCourseLanding1"])) {
    $dates["nextCourseLanding1"] = htmlspecialchars($_POST["nextCourseLanding1"]);
}

if (isset($_POST["nextCourseLanding234"]) && !empty($_POST["nextCourseLanding234"])) {
    $dates["nextCourseLanding234"] = htmlspecialchars($_POST["nextCourseLanding234"]);
}

if (isset($_POST["nextCourseNextCoursePage"]) && !empty($_POST["nextCourseNextCoursePage"])) {
    $dates["nextCourseNextCoursePage"] = htmlspecialchars($_POST["nextCourseNextCoursePage"]);
}



// in case of success file_put_contents return the number of bytes.
// in case of failure false
$int_bytes = file_put_contents("dates.json", json_encode($dates));
if($int_bytes == false){
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die();
}

echo json_encode($dates);

?>
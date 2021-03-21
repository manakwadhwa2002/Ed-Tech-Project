<?php
if (isset($_GET['signup'])) {
    if ($_GET['signup'] == 'success') {
        echo "<p style='color: green;'>You are signed up successfully !";
    }
} 
elseif (isset($_GET['superror'])) {
    if ($_GET['superror'] == 'emptyFields') {
        echo "<p style='color: red;'>Empty Fields !";
    } elseif ($_GET['superror'] == 'sqlError1') {
        echo "<p style='color: red;'>SQL Error 1. Please Contact Support !";
    } elseif ($_GET['superror'] == 'sqlError2') {
        echo "<p style='color: red;'>SQL Error 1. Please Contact Support !";
    } elseif ($_GET['superror'] == 'emailAlreadyExists') {
        echo "<p style='color: red;'>Email Already Exists. Please Login !";
    }
}
elseif (isset($_GET['lgerror'])){
    if ($_GET['lgerror'] == 'emptyFields') {
        echo "<p style='color: red;'>Empty Fields !";
    } elseif ($_GET['lgerror'] == 'sqlError1') {
        echo "<p style='color: red;'>SQL Error 1. Please Contact Support !";
    } elseif ($_GET['lgerror'] == 'wrongPassword') {
        echo "<p style='color: red;'>Wrong Password !";
    } elseif ($_GET['lgerror'] == 'notAuthenticated') {
        echo "<p style='color: red;'>Email Not Found. Please Signup !";
    }
}

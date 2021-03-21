<?php

function getNumUsers()
{
    global $conn_1;
    $record = array();

    $sql = "SELECT * FROM mtd_user_dt";
    $result = mysqli_query($conn_1, $sql);
    $usr_query_result = mysqli_num_rows($result);

    return $usr_query_result;
}

function getNumMembers()
{
    global $conn_4;
    $record = array();

    $sql = "SELECT * FROM mtd_team_dt";
    $result = mysqli_query($conn_4, $sql);
    $query_result = mysqli_num_rows($result);

    return $query_result;
}

function getPublishedBlogsCareers()
{
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM mtd_career_blogs WHERE published=1";
    $result = mysqli_query($conn_2, $sql);
    $query_result = mysqli_num_rows($result);

    return $query_result;
}

function getPublishedBlogsGeneral()
{
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM mtd_general_blogs WHERE published=1";
    $result = mysqli_query($conn_2, $sql);
    $query_result = mysqli_num_rows($result);

    return $query_result;
}

function getNonPublishedBlogsCareers()
{
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM mtd_career_blogs WHERE published=0";
    $result = mysqli_query($conn_2, $sql);
    $query_result = mysqli_num_rows($result);

    return $query_result;
}

function getNonPublishedBlogsGeneral()
{
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM mtd_general_blogs WHERE published=0";
    $result = mysqli_query($conn_2, $sql);
    $query_result = mysqli_num_rows($result);

    return $query_result;
}

function getAllCareers(){
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM carrer_names";
    $result = mysqli_query($conn_2, $sql);
    while($allresult = mysqli_fetch_assoc($result)){
        $record[] = $allresult;
    };
    
    return $record;
}

function getAllCountries(){
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM country_names";
    $result = mysqli_query($conn_2, $sql);
    while($allresult = mysqli_fetch_assoc($result)){
        $record[] = $allresult;
    };
    
    return $record;
}

function getAllCareerBlogs(){
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM mtd_career_blogs";
    $result = mysqli_query($conn_2, $sql);
    while($allresult = mysqli_fetch_assoc($result)){
        $record[] = $allresult;
    };
    
    return $record;
}

function getAllGeneralBlogs(){
    global $conn_2;
    $record = array();

    $sql = "SELECT * FROM mtd_general_blogs";
    $result = mysqli_query($conn_2, $sql);
    while($allresult = mysqli_fetch_assoc($result)){
        $record[] = $allresult;
    };
    
    return $record;
}
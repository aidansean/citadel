<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/citadel" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=citadel" ;
$project = new project_object("citadel", "Citadel map", "https://github.com/aidansean/citadel", "http://aidansean.com/projects/?tag=citadel", "citadel/images/project.jpg", "citadel/images/project_bw.jpg", "This page shows the map for my favourite game as a child, Citadel, published by Superior Software for the BBC Micro.", "Games,Poster", "canvas,JavaScript,CSS,HTML,PHP") ;
?>
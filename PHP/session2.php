<?php

session_name("kim");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE);
var_dump(session_id());
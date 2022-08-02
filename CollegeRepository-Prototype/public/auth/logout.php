<?php

// Starts and Destroys all Session
session_start();
session_destroy();

// Redirect to index.php
header("Location: /");

?>
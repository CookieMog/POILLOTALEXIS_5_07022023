<?php
function pageHome()
{

    require("./views/home.php");
}

function pageAdmin()
{
    CheckAuth();

    // View
    require("./views/dashboard.php");
}

function pageConnect()
{


    if (isset($_SESSION['usermail'])) {
        header("Location: http://projet5/index.php?action=admin");
    }

    // CheckAuth();

    // View
    require("./views/connection.php");
}

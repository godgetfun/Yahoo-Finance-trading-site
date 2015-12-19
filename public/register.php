<?php

    // configuration
    require("../includes/config.php");

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]))
        {
            apologize("Invalid Username");
        }
        else if(empty($_POST["password"]))
        {
            apologize("Invalid Password");
        }
        else if($_POST["confirmation"] != $_POST["password"])
        {
            apologize("Passwords donot match");
        }
		else if(!is_numeric($_POST["cash"]))
        {
            apologize("Error in Money");
        }
        else
        {
        
            $result = query("INSERT INTO users (username,hash,cash) VALUES(?,?,?)",$_POST["username"],crypt($_POST["password"]),intval($_POST["cash"]));
            if($result === false)
            {
                apologize("Username already taken");
            }
            else
            {
                $rows = query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];
                $_SESSION["id"] = $id;
                header('Location: index.php');
            }        
        }
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>

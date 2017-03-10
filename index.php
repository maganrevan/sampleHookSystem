
<!DOCTYPE html>
<html>

    <head>
        <title>Einfaches Hook-System mit PHP realisieren</title>
        <meta charset="UTF-8">
    </head>

    <body>

        <h1>Einfaches Hook-System mit PHP realisieren</h1>  

        <?php
        include_once "class.debug.php";
        require_once 'class.hook.php';
        
        $hooks = new hooks();
        
        $debug = new debug(true);
        
        include_once 'config.php';
        include_once 'user.php';
        include_once 'customCode.php';
        
        require_once 'plugin/testplugin/customContent.php';
        
        
        
        $user = new User();

        $user->update();
        $user->destroy();
        $user->add();
        
        echo("<pre>");
        var_dump(ROOTPFAD);
        var_dump($GLOBALS["hook"]);
        echo("<pre>");
        
        ?>

    </body>

</html>
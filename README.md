Steps to Make Custom Composer Plugin

1. Create Empty Folder and name it i.e., e.g., plugin
2. Open it in Visual Studio or other IDE
3. create composer.json file in main directory
4. create another folder in main directory and name it "src".
5. create custom classes in "src" folder.
6. use namespace as "App" i.e., e.g., namesapce App\Controller
7. Register namespace in composer.json as 
    {
        "autoload" : {
            "psr-4" : {
                "App\\" : "src/"
            }
        }
    }
8. run command composer dump-autoload -0 
9. create index.php file in main directory
10. paste require_once realpath("vendor/autoload.php") in index.php
11. Now You can call all the controllers functions there
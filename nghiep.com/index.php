
<?php
        if(array_key_exists('page',$_GET)){
            switch($_GET['page']){
                case 'home':
                    include 'home.php';
                    break;
                case 'login': 
                    include 'login.php';
                    break;  
                case 'logout': 
                    include 'hardware/out.php';
                    break;
                case 'contact':
                    include 'contact.php';
                    break;
                case 'aboutus':
                    include 'about.php';
                    break;
                case 'register':    
                    include 'signup.php';
                    break;
                case 'products':    
                    include 'product.php';
                    break;
                case 'search':
                    include 'search.php';
                    break;
                default:
                    break;
            }
        } else {
            include 'home.php';
        }    
    ?>
<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        function __construct($Name, $Username, $Email)
        {
            $this->name = $Name;
            $this->username = $Username;
            $this->email = $Email;
        }

        function AddFriend()
        {
         echo  $this->name, " Added a friend."; 
        }
        function PostStatus()
        {
        echo  $this->name, " Posted a status."; 
        }
    }

    $newaccount = new User("April: ", "apesyow", "eprelazagra@gmail.com");
    $newaccount->AddFriend();
    echo "<br>";
    $newaccount->PostStatus();
?>
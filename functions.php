<?php 
    function select_background($bg){
        $result = "";
        switch($result) {
            case 'blue' :
                return '#339CFF'; break;
            case 'green' :
                return '#25D577'; break;
            case 'red' :
                return '#F72B21'; break;
        }
    }

    function get_users(){
        // return null;
        return array(
            array('id' => 1, 'name' => 'nima', 'email' => 'nima@gmail.com'),
            array('id' => 2, 'name' => 'samria', 'email' => 'samira@gmail.com'),
            array('id' => 3, 'name' => 'mahsa', 'email' => 'mahsa@gmail.com')
        );
    }
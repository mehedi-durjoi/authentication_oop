<?php
require_once 'core/init.php';

// $user = DB::getInstance()->get('users', array('id', '=', '1'));
//
// print_r($user);

if(Session::exists('success')) {
  echo Session::flash('success');
}

?>

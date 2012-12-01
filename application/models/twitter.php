<?php

class Twitter{

	public static function add($username=null, $realname=null){
		$add = DB::table('users')->insert_get_id(array(
			'username' => $username,
			'realname' => $realname
		));

		return $add;
	}

	public static function getData(){
		$allData = DB::table('users')->get();

		return $allData;
	}
}
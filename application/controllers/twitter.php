<?php

class Twitter_Controller extends Base_Controller{

	public function action_index(){

		$users = Twitter::getData();
		$allusers = array(
			'username' =>$users
		);

		return View::make('home.search', $allusers);
	}

	public function action_results(){
		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);

		$twitter = new Twitterlib();
		$twitter_search = $twitter->getTweetsFromXML($search_term);

		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search
		);

		return View::make('home.results', $data);
	}

	public function action_add(){
		return View::make('home.add');
	}

	public function action_added(){
		$username = Input::get('username');
		$real_name = Input::get('real-name');

		Twitter::add($username,$real_name);

		return View::make('home.added');
	}
}
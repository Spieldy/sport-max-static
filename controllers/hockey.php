<?php


require_once 'models/user.php';

class Controller_Hockey
{

	public function calendar() {
		include 'views/hockey/calendar.php';
	}

	public function results() {
		include 'views/hockey/results.php';
	}

	public function classment() {
		include 'views/hockey/classment.php';
	}

	public function teams() {
		include 'views/hockey/teams.php';
	}


}
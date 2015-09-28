<?php

class Login {

	public function validate (User $user) {

		switch ($user->getType()) {
			case 'manager':
				printf("yeah, manager...");
				break;
			
			case 'seller':
				printf("yeah, seller...");
				break;
				
		}
	}
}
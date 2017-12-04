<?php 
namespace App\Repositories;
use App\User;
use App\Car;

class CarRepository
{
	
	public function forUser(User $user){
		
		return Car::where('user_id',$user->id)
						->orderBy('created_at', 'desc')
						->get();
		
	}
	
}
	
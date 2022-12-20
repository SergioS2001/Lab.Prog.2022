<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */  
    
     protected $model = Utilizador::class;
    public function definition()
    {
            return [
                'Nome'=>$this->faker->name(),
                'Type'=>function(){
    $t=random_int(0,2);
    switch($t){
    case 0:
        return 'User';
        break;
    case 1:
        return 'Member';
        break;
    case 2:
        return 'Admin';
        break;
    default:
        return 'User';
        break;
    }
    
    
                },
                'Email'=>$this->faker->safeEmail(),
                'Password'=>$this->faker->password(8,16),
    
            ];
        }
    }

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\User;
use Database\Factories\UserFactory;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $alex = Contact::create(array(
            'name'         => 'Alex Marchal',
            'title' => 'UX Designer',
            'address'         => '717 S 34th St\nMattoon, IL 61938',
            'phone'           => '(217) 499-0822',
            'email' => 'ryan@rowandtable.com',
            'pic' => 'profile1.jpeg',
            'user_id' => 1
        ));
        $norma = Contact::create(array(
            'name'         => 'Norma Wilson',
            'title' => 'Software Engineer',
            'address'         => '637 W Kings Hwy\nSan Antonio, TX 78212',
            'phone'           => '(210) 733-3836',
            'email' => 'nwilson@macncheese.com',
            'pic' => 'profile2.jpeg',
            'user_id' => 1
        ));
        $morris = Contact::create(array(
            'name'         => 'Morris Murphy',
            'title' => 'Project Manager',
            'address'         => '228 Jennifer Ln #4\nPalatine, IL 60067',
            'phone'           => '(847) 277-0471',
            'email' => 'murphys@law.com',
            'pic' => 'profile3.jpeg',
            'user_id' => 1
        ));
        $morris = Contact::create(array(
            'name'         => 'Kylie Lane',
            'title' => 'QA Tester',
            'address'         => '440 Napoli Ct\nPrinceton, TX 75407',
            'phone'           => '(972) 734-2359',
            'email' => 'kyliexo@gmail.com',
            'pic' => 'profile4.jpeg',
            'user_id' => 1
        ));
        $ted = Contact::create(array(
            'name'         => 'Ted Steward',
            'title' => 'CEO',
            'address'         => '13448 Pioneer Dr\nBonner Springs, KS 66012',
            'phone'           => '(913) 441-6570',
            'email' => 'teddy53@gmail.com',
            'pic' => 'profile5.jpeg',
            'user_id' => 1
        ));
        $wade = Contact::create(array(
            'name'         => 'Wade Macoy',
            'title' => 'Bartender',
            'address'         => '110 Robin Cir\nBristol, VA 24202',
            'phone'           => '(276) 466-8944',
            'email' => 'wademacoy@cocacola.com',
            'pic' => 'profile6.jpeg',
            'user_id' => 1

        ));

        $this->command->info('The contacts are alive!');

    }
}

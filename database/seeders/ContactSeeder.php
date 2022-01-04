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
            'pic' => 'https://i.picsum.photos/id/605/64/64.jpg?hmac=ux88atNWfGZKI8szgZqMz7yzpmnPm7h1aesJbR_sqIk',
            'user_id' => 1
        ));
        $norma = Contact::create(array(
            'name'         => 'Norma Wilson',
            'title' => 'Software Engineer',
            'address'         => '637 W Kings Hwy\nSan Antonio, TX 78212',
            'phone'           => '(210) 733-3836',
            'email' => 'nwilson@macncheese.com',
            'pic' => 'https://i.picsum.photos/id/782/64/64.jpg?hmac=ifuzkUa15_ir32GTZKSuxq3W-CSJWu1VyRtbHvD1iy0',
            'user_id' => 1
        ));
        $morris = Contact::create(array(
            'name'         => 'Morris Murphy',
            'title' => 'Project Manager',
            'address'         => '228 Jennifer Ln #4\nPalatine, IL 60067',
            'phone'           => '(847) 277-0471',
            'email' => 'murphys@law.com',
            'pic' => 'https://i.picsum.photos/id/123/64/64.jpg?hmac=wOXYR1LTxTkY9hMOEhAZFNKzSx2E4v_9fNFUYjmIEAw',
            'user_id' => 1
        ));
        $morris = Contact::create(array(
            'name'         => 'Kylie Lane',
            'title' => 'QA Tester',
            'address'         => '440 Napoli Ct\nPrinceton, TX 75407',
            'phone'           => '(972) 734-2359',
            'email' => 'kyliexo@gmail.com',
            'pic' => 'https://i.picsum.photos/id/342/64/64.jpg?hmac=-WMU4VCx2DoQ5ipjwu-bR8OkqAhef4bwnCmrIWHUY3w',
            'user_id' => 1
        ));
        $ted = Contact::create(array(
            'name'         => 'Ted Steward',
            'title' => 'CEO',
            'address'         => '13448 Pioneer Dr\nBonner Springs, KS 66012',
            'phone'           => '(913) 441-6570',
            'email' => 'teddy53@gmail.com',
            'pic' => 'https://i.picsum.photos/id/824/64/64.jpg?hmac=jkV3FG5sWGqJ7ClmhT7M9uzN7NnK0i9rNh59RrW2zAM',
            'user_id' => 1
        ));
        $wade = Contact::create(array(
            'name'         => 'Wade Macoy',
            'title' => 'Bartender',
            'address'         => '110 Robin Cir\nBristol, VA 24202',
            'phone'           => '(276) 466-8944',
            'email' => 'wademacoy@cocacola.com',
            'pic' => 'https://i.picsum.photos/id/349/64/64.jpg?hmac=6MomCcDeeekOx7OfL8pguQhUCzQt7Q41ZzsaHbio_-Y',
            'user_id' => 1

        ));

        $this->command->info('The contacts are alive!');

    }
}

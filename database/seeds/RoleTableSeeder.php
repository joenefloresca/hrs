<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Role;
class RoleTableSeeder extends Seeder{
    public function run()
    {
        if (App::environment() === 'production') {
            exit('I just stopped you getting fired. Love, Amo.');
        }

        DB::table('roles')->truncate();
        Role::create([
            'id'            => 1,
            'name'          => 'Administrator',
            'description'   => 'Full access to create, edit, and update.'
        ]);
        Role::create([
            'id'            => 2,
            'name'          => 'Manager',
            'description'   => 'Ability to create new requests and approve requests.'
        ]);

        Role::create([
            'id'            => 3,
            'name'          => 'User',
            'description'   => 'A standard user.'
        ]);
    }
}
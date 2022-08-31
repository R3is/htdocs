<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Roles seed.
 */
class RolesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'role' => 'Membro',
                'description' => 'Usuário membro da igreja cadastrado.',
            ],
            [
                'id' => 2,
                'role' => 'Motorista',
                'description' => 'Usuário motorista dos eventos da igreja.',
            ],
            [
                'id' => 5,
                'role' => 'Admin',
                'description' => 'Administrador da igreja.',
            ],
        ];

        $table = $this->table('roles');
        $table->insert($data)->save();
    }
}

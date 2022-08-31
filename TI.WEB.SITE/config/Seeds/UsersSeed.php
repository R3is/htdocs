<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'receive' => true,
                'password' => '$2y$10$qw0Qgsuuslo06Airvk3gHewIFBPKSliPBx62wvkX0Qh/UHQMWjT0u',
                'address' => 'Rua Peróbas, 204 - Eldorado, Contagem - MG, Brasil',
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => '32315-080',
                'vehicle' => NULL,
                'vehicle_plate' => NULL,
                'contact' => '(31) 99919-0786',
                'role_id' => 5,
            ],
            [
                'id' => 2,
                'name' => 'Motorista 1',
                'email' => 'motorista1@gmail.com',
                'receive' => NULL,
                'password' => '$2y$10$ppm4taE5B2z3TBya8gYlm.vfk2/.eRQgEsRUHHnCRvWSFK8Jda7b6',
                'address' => NULL,
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => NULL,
                'vehicle' => 'FORD KA',
                'vehicle_plate' => 'HLU1111',
                'contact' => '31 999999999',
                'role_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'Motorista 2',
                'email' => 'motorista2@gmail.com',
                'receive' => NULL,
                'password' => '$2y$10$zsQcE3mE7f.7hLh0GvZ9buDFb7vc5Lk9EI1vuk3pLtGUnhkQS9u5C',
                'address' => NULL,
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => NULL,
                'vehicle' => 'ONIX',
                'vehicle_plate' => 'HLU2222',
                'contact' => '31 999999998',
                'role_id' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Motorista 3',
                'email' => 'motorista3@gmail.com',
                'receive' => NULL,
                'password' => '$2y$10$xBJzCSQhxgASaG5wiOw/LuIdUF52P8LOhzGNgDQiDD6omwU2HU/7.',
                'address' => NULL,
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => NULL,
                'vehicle' => 'CAMARO',
                'vehicle_plate' => 'HLU3333',
                'contact' => '31 999999997',
                'role_id' => 2,
            ],
            [
                'id' => 5,
                'name' => 'Motorista 4',
                'email' => 'motorista4@gmail.com',
                'receive' => NULL,
                'password' => '$2y$10$CTAWkZ/rR8P.KWWZVuzmXOQ7r5M8Ei6wsoClHqiFxY0lF5lBP9ji.',
                'address' => NULL,
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => NULL,
                'vehicle' => 'FIESTA',
                'vehicle_plate' => 'HLU4444',
                'contact' => '31 999999996',
                'role_id' => 2,
            ],
            [
                'id' => 6,
                'name' => 'Motorista 5',
                'email' => 'motorista5@gmail.com',
                'receive' => NULL,
                'password' => '$2y$10$f2iL9wAsOsdSH3nmHbTfoOCBs/suprySrjSxQK2PzpK64KuzIWT7O',
                'address' => NULL,
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => NULL,
                'vehicle' => 'CRUZE',
                'vehicle_plate' => 'HLU5555',
                'contact' => '31 999999995',
                'role_id' => 2,
            ],
            [
                'id' => 7,
                'name' => 'Cliente 1',
                'email' => 'cliente1@gmail.com',
                'receive' => true,
                'password' => '$2y$10$IFvuHV5PWZr8WqyhoZu8P.GFADZgv0U78JN3fuKareTNQXmsQOH5O',
                'address' => 'Rua Zulma Soares Rocha, 240 - Conjunto Agua Branca, Contagem - MG, Brasil',
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => '32370-620',
                'vehicle' => NULL,
                'vehicle_plate' => NULL,
                'contact' => '(31) 99999-9989',
                'role_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Cliente 2',
                'email' => 'cliente2@gmail.com',
                'receive' => true,
                'password' => '$2y$10$K3p48y.NN2tZUaoQjI8BVuGO6YSiHyMh4i8Fvx7lo3eUazXOIL2o6',
                'address' => 'Alameda dos Lírios, 437 - Cidade Jardim, Esmeraldas - MG, Brasil',
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => '32314-354',
                'vehicle' => NULL,
                'vehicle_plate' => NULL,
                'contact' => '(31) 99999-9988',
                'role_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Cliente 3',
                'email' => 'cliente3@gmail.com',
                'receive' => true,
                'password' => '$2y$10$cFztknukU0yENergEwxQCuVLl8YbqZ361sX1SFks0Dy4h1Rdq9yua',
                'address' => 'Rua Sara Kubitscheck - Darcy Vargas, Contagem - MG, Brasil',
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => '32543-534',
                'vehicle' => NULL,
                'vehicle_plate' => NULL,
                'contact' => '(31) 99999-9987',
                'role_id' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Cliente 4',
                'email' => 'cliente4@gmail.com',
                'receive' => false,
                'password' => '$2y$10$ZT6j90jbZmHilKZzucqyDuokZSIkh/t0GpNJ3AlGWz16Ym8z4/JWO',
                'address' => 'Avenida Antônio Abrahão Caram - São José, Belo Horizonte - MG, Brasil',
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => '32534-321',
                'vehicle' => NULL,
                'vehicle_plate' => NULL,
                'contact' => '(31) 99999-9986',
                'role_id' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Cliente 5',
                'email' => 'cliente5@gmail.com',
                'receive' => true,
                'password' => '$2y$10$dC.qdT3Gg6EZaFLsoevk.egcutKQ/kObE.kAq.ljOz9HyL6GPs2P6',
                'address' => 'Lagoa da Pampulha - Avenida Otacílio Negrão de Lima - São Luiz, Belo Horizonte - MG, Brasil',
                'address_num' => NULL,
                'address_comp' => NULL,
                'address_cep' => '32153-132',
                'vehicle' => NULL,
                'vehicle_plate' => NULL,
                'contact' => '(31) 99999-9985',
                'role_id' => 1,
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}

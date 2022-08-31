<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Events seed.
 */
class EventsSeed extends AbstractSeed
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
                'title' => 'Acampamento infantil',
                'description' => 'Acampamento voltado ao público infantil com o intuito de aproxima-las de Deus e desenvolver um bom convívio socio.',
                'location' => 'Esmeraldas',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-07-08 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '08:00:00',
            ],
            [
                'id' => 2,
                'title' => 'Missa',
                'description' => 'Missa comum com a presença do pastor.',
                'location' => 'Igreja Batista',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-06-19 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '18:00:00',
            ],
            [
                'id' => 3,
                'title' => 'Cinema lúdico',
                'description' => 'Assistir filmes voltados a um tema religioso e debater a cerca do mesmo ao final do evento.',
                'location' => 'Igreja Batista',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-06-21 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '15:00:00',
            ],
            [
                'id' => 4,
                'title' => 'Rodeio Religioso',
                'description' => 'Evento com parceria de cantores locais para incentivar a cultura.',
                'location' => 'Sarzedo',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-06-15 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '13:00:00',
            ],
            [
                'id' => 5,
                'title' => 'Culto com o pastor Carlos',
                'description' => 'Culto comum com a presença do pastor Carlos',
                'location' => 'Igreja Batista',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-06-30 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '19:00:00',
            ],
            [
                'id' => 6,
                'title' => 'Pastoral',
                'description' => 'Evento da Igreja para ligação com Deus.',
                'location' => 'Belo Horizonte',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-07-03 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '12:00:00',
            ],
            [
                'id' => 7,
                'title' => 'Feira Religiosa',
                'description' => 'Feira da igreja.',
                'location' => 'Contagem',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-07-11 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '14:00:00',
            ],
            [
                'id' => 8,
                'title' => 'Caminhada 100km',
                'description' => 'Caminhada religiosa com os membros da igreja.',
                'location' => 'Pampulha - Belo Horizonte',
                'date' => 
                Cake\I18n\FrozenDate::__set_state(array(
                'date' => '2022-08-22 00:00:00.000000',
                'timezone_type' => 3,
                'timezone' => 'UTC',
                )),
                'time' => '11:00:00',
            ],
        ];

        $table = $this->table('events');
        $table->insert($data)->save();
    }
}

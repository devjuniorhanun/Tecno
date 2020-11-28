<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Produtor;
use App\Models\Tenant;

class ProdutorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produtor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tenant_id' => Tenant::factory(),
            'uuid' => $this->faker->uuid,
            'razao_social' => $this->faker->word,
            'nome_fantasia' => $this->faker->word,
            'abreviacao' => $this->faker->word,
            'tipo_pagamento' => $this->faker->randomElement(["Deposito","Transferencia"]),
            'tipo' => $this->faker->randomElement(["Fisica","Juridica"]),
            'data_nascimento' => $this->faker->date(),
            'nascionalidade' => $this->faker->word,
            'naturalidade' => $this->faker->word,
            'estado_civel' => $this->faker->randomElement(["Solteiro(a)","Casado(a)","Viuvo(a)"]),
            'cpf_cnpj' => $this->faker->word,
            'rg_inscriacao' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'telefone' => $this->faker->word,
            'celular' => $this->faker->word,
            'status' => $this->faker->randomElement(["Ativa","Desativada"]),
            'cep' => $this->faker->word,
            'estado' => $this->faker->word,
            'cidade' => $this->faker->word,
            'bairro' => $this->faker->word,
            'endereco' => $this->faker->word,
            'complemento' => $this->faker->word,
            'numero' => $this->faker->word,
        ];
    }
}

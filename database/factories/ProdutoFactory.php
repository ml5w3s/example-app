<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;
use App\Models\User;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $nome = $this->faker->unique()->sentence();
    $nomeUnico = Str::slug($nome); // Utilize o nome para gerar um slug único

    return [
        'nome' => $nome,
        'descricao' => $this->faker->paragraph(),
        'preco' => $this->faker->randomNumber(2),
        'slug' => $nomeUnico,
        'imagem' => $this->faker->imageUrl(400, 400),
        'id_user' => User::pluck('id')->random(),
        'id_categoria' => Categoria::pluck('id')->random(),
    ];
}

}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    // ... (votre code existant) ...

    public function definition()
    {
        // Tableau de correspondance pour le sexe
        $sexeOptions = ["F" => "Femme", "H" => "Homme"];
        $sexe = array_rand($sexeOptions);

        // Tableau de correspondance pour les pièces d'identité
        $pieceIdentiteOptions = ["CNI" => "Carte Nationale d'Identité", "PASSEPORT" => "Passeport", "PERMIS DE CONDUIRE" => "Permis de Conduire"];
        $pieceIdentite = array_rand($pieceIdentiteOptions);

        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            "sexe" => $sexe,
            'email' => $this->faker->unique()->safeEmail(),
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "pieceIdentite" => $pieceIdentite,
            "noPieceIdentite" => $this->faker->creditCardNumber,
            "photo" => $this->faker->imageUrl(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }


    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

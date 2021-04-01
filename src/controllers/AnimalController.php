<?php

namespace controllers;

use models\AnimalModel;

require_once __DIR__ . '/../models/AnimalModel.php';

class AnimalController
{
    private AnimalModel $animalModel;

    public function __construct()
    {
        $this->animalModel = new AnimalModel();
    }

    public function browse(): void
    {
        $animals = $this->animalModel->getAll();
        require_once __DIR__ . '/../views/index.php';
    }
}
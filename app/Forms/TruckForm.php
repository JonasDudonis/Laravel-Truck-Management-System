<?php

namespace App\Forms;

use App\Brand;
use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class TruckForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('brand_id', Field::SELECT, [
                'label' => 'Automobilio markė',
                'rules' => 'required',
                'choices' => [Brand::pluck('name', 'id')],
                'empty_value' => 'Pasirinkite markę'
            ])
            ->add('year_of_manufacture', Field::NUMBER, [
                'label' => 'Pagaminimo metai',
                'rules' => 'required|min:1900'
            ])
            ->add('owner_s_name_and_surname', Field::TEXT, [
                'label' => 'Savininko vardas ir pavardė',
                'rules' => 'required'
            ])
            ->add('number_of_owners', Field::TEXT, [
                'label' => 'Savininkų skaičius',
            ])
            ->add('Komentarai', 'textarea')

            ->add('field_name', 'submit', [
                'attr' => ['class' => 'btn btn-success text-center col-12'],
                'label' => 'Sukurti įrašą'
            ]);

    }
}

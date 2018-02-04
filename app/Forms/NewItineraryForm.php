<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class NewItineraryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text')
            ->add('category', 'text')
            ->add('region', 'text')
            ->add('total_days', 'text')
            ->add('overview', 'textarea')
            ->add('total_price', 'text');
    }
}

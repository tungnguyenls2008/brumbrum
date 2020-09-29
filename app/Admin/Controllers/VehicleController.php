<?php

namespace App\Admin\Controllers;

use App\Vehicle;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VehicleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Vehicle';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Vehicle());

        //$grid->column('id', __('Id'));
        $grid->column('model', __('Model'));
        $grid->column('brand', __('Brand'));
        $grid->column('production_year', __('Production year'));
        $grid->column('price', __('Price'));
        $grid->column('last_rent', __('Last rent'));
        $grid->column('total_km', __('Total km'));
        //$grid->column('created_at', __('Created at'));
        //$grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Vehicle::findOrFail($id));

        //$show->field('id', __('Id'));
        $show->field('model', __('Model'));
        $show->field('brand', __('Brand'));
        $show->field('production_year', __('Production year'));
        $show->field('price', __('Price'));
        $show->field('last_rent', __('Last rent'));
        $show->field('total_km', __('Total km'));
        //$show->field('created_at', __('Created at'));
        //$show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Vehicle());

        $form->text('model', __('Model'));
        $form->select('brand', __('Brand'))->options(['Mercedes'=>'Mercedes','BMW'=>'BMW','Toyota'=>'Toyota','Audi'=>'Audi','Ford'=>'Ford','Honda'=>'Honda']);
        $form->year('production_year', __('Production year'));
        $form->currency('price', __('Price'));
        $form->datetime('last_rent', __('Last rent'));
        $form->number('total_km', __('Total km'));

        return $form;
    }
}

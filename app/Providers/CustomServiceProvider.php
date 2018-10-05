<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Example;
use App\Contracts\Vehicle;
use App\Models\Car;
use App\Models\Bike;
use App\Models\CollectionTag;
use App\Models\Food;
use App\Models\Drink;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\PrimitivesController;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // bind
        $this->app->bind('bind', function(){
            return new Example();
        });

        $this->app->bind('Student', function(){
            return 'First Student. ';
        });

        // singleton
        $this->app->singleton('singleton', function(){
            return new Example();
        });

        //instance
        $instance = new Example();
        $instance->name = 'Instance example. ';
        $this->app->instance('instance', $instance);

        // Binding Interfaces to Implementations
        $this->app->bind(
            Vehicle::class,
            Car::class
        );

        // Contextual Binding
        $this->app->when(CarController::class)
                  ->needs(Vehicle::class)
                  ->give(Car::class);

        $this->app->when(BikeController::class)
                  ->needs(Vehicle::class)
                  ->give(Bike::class);

        // Primitives
        $this->app->when(PrimitivesController::class)
                  ->needs('$name')
                  ->give('Johnny English');

        $this->app->when(PrimitivesController::class)
                  ->needs('$age')
                  ->give('100');
        // Tagging
        $this->app->bind('chicken', function(){
            $chicken = new Food();
            $chicken->food = 'This is chicken. ';
            return $chicken;
        });

        $this->app->bind('beef', function(){
            $beef = new Drink();
            $beef->drink = 'This is beef.';
            return $beef;
        });

        $this->app->tag(['chicken', 'beef'], 'meat');
        $this->app->bind('FastFood',function($app){
            return new CollectionTag($app->tagged('meat'));
        });

        // Container events
        $this->app->resolving('bind', function ($object, $app) {
            // dd($object);
        });
    }
}

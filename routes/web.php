<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('login');
});

Route::view('/menu', 'menu')->name('menu');

Route::view('/menu/p1', 'planta1.menu_p1')->name('menu_p1');

Route::view('/menu/p1/brigadas', 'planta1.brigadas')->name('brigadas_p1');


Route::view('/menu/p1/brigadas/editar', 'planta1.editar_brigadista')->name('edit_brigadistas');

Route::view('/menu/p1/extintores', 'planta1.extintores')->name('extintores_p1');

Route::view('/menu/p1/extintores/ficha', 'planta1.ficha_extintor')->name('ficha_extintor');

Route::view('/menu/p1/extintores/editar', 'planta1.editar_extintor')->name('edit_extintores');

Route::view('/menu/p1/comision', 'planta1.comisiones')->name('comisiones');
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import jQuery from 'jquery';
window.$ = jQuery;

import dragula from "dragula";
window.dragula = dragula;

import.meta.glob([
    '../images/**'
]);

function reply_click(clicked_id)
{
    console.log(clicked_id);
}

window.reply_click = reply_click;

Alpine.start();

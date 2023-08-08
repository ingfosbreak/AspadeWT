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

import { reply_click, createAjax, editAjax, updateAjax } from './func';

window.reply_click = reply_click;
window.createAjax = createAjax;
window.editAjax = editAjax;
window.updateAjax = updateAjax;


Alpine.start();

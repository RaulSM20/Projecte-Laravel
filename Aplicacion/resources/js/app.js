import './bootstrap';

import Alpine from 'alpinejs';

import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'

Alpine.plugin(ToastComponent)

window.Alpine = Alpine;

Alpine.start();

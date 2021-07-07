window._ = require('lodash');
import bootstrap from 'bootstrap'
window.axios = require('axios');
window.$= require("jquery");

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

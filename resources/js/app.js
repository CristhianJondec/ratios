import './bootstrap';
import axios from 'axios';

axios.defaults.baseURL = 'https://www.alphavantage.co/query';
axios.defaults.params = {};
axios.defaults.params['apikey'] = 'D1WLF737UG1P15G2'; // Aquí coloca tu API key


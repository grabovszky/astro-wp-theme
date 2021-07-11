/**
 * This is the main.js file, don't place any specific js code in here, this just
 * loads any other modules to be bundled together.
 *
 * @package Astro
 */

// load bootstrap5 javascript files
import 'bootstrap';

// load custom javascript files
import './listeners/search-form-listener.js';
import './listeners/newsletter-form-listener.js';
import './listeners/footer-copyright-listner.js';
import './listeners/illustration-listener.js';
import './listeners/konami-listener.js';

// load sass files
import '../sass/style.scss';

import 'core-js';
import 'reflect-metadata';
import 'zone.js/dist/zone';
import {HTTP_PROVIDERS} from '@angular/http';
import { ApiAccess} from '../src/services/ApiAccess.services';


import{bootstrap} from '@angular/platform-browser-dynamic';
import{ AppComponent} from './app/app.component';
bootstrap(AppComponent,[HTTP_PROVIDERS,ApiAccess])
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { VehiculoComponent } from './vehiculo/vehiculo.component';
import { VehiculoFormComponent } from './vehiculo-form/vehiculo-form.component';
import { VehiculoEditComponent } from './vehiculo-edit/vehiculo-edit.component';
import { TerceroComponent } from './tercero/tercero.component';
import { TerceroFormComponent } from './tercero-form/tercero-form.component';
import { TerceroEditComponent } from './tercero-edit/tercero-edit.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { VehiculoService } from './services/vehiculo.service';


import {Route} from '@angular/router';
import { HomeComponent } from './home/home.component';

@NgModule({
  declarations: [
    AppComponent,
    VehiculoComponent,
    VehiculoFormComponent,
    VehiculoEditComponent,
    TerceroComponent,
    TerceroFormComponent,
    TerceroEditComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [VehiculoService],
  bootstrap: [AppComponent]
})
export class AppModule { }

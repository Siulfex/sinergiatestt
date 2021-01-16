import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { TerceroComponent } from './tercero/tercero.component';
import { TerceroEditComponent } from './tercero-edit/tercero-edit.component';
import { TerceroFormComponent } from './tercero-form/tercero-form.component';
import { VehiculoComponent } from './vehiculo/vehiculo.component';
import { VehiculoEditComponent } from './vehiculo-edit/vehiculo-edit.component';
import { VehiculoFormComponent } from './vehiculo-form/vehiculo-form.component';
import { HomeComponent } from './home/home.component';


const routes: Routes = [
	{path:'', component: AppComponent},
	{path:'home', component: HomeComponent},
	{path:'vehiculo', component: VehiculoComponent},
	{path:'vehiculo/edit/:id', component: VehiculoEditComponent},
	{path:'vehiculo/form', component: VehiculoFormComponent},
	{path:'tercero/form', component: TerceroFormComponent},
	{path:'tercero/edit/:id', component: TerceroEditComponent},
	{path:'tercero', component: TerceroComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

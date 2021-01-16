import { Component, OnInit } from '@angular/core';
import { VehiculoService } from '../services/vehiculo.service';
import { Router } from '@angular/router';

import { Vehiculo } from '../models/vehiculo';

@Component({
  selector: 'app-vehiculo',
  templateUrl: './vehiculo.component.html',
  styleUrls: ['./vehiculo.component.css']
})
export class VehiculoComponent implements OnInit {

  vehiculos?: Vehiculo[];

 constructor(private vehiculoService: VehiculoService, private router: Router){
 }
 ngOnInit(): void {
    this.getVehiculos();
  }

  getVehiculos(): void {
    this.vehiculoService.getAll()
      .subscribe(
        data => {
          this.vehiculos = data;
          console.log(data);
        },
        error => {
          console.log(error);
        });
  }

  

 

  	deleteVehiculo(id: Vehiculo): void {
    this.vehiculoService.delete(id)
      .subscribe(
        data => {
          console.log(data);
          this.getVehiculos();
        },
        error => console.log(error));
  }


  	editVehiculo(id: number): void{
    
  }

}

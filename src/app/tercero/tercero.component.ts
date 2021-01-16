import { Component, OnInit } from '@angular/core';
import { VehiculoService } from '../services/vehiculo.service';
import { Router } from '@angular/router';

import { Vehiculo } from '../models/vehiculo';

@Component({
  selector: 'app-tercero',
  templateUrl: './tercero.component.html',
  styleUrls: ['./tercero.component.css']
})
export class TerceroComponent implements OnInit {
	
	vehiculos?: Vehiculo[];

 constructor(private vehiculoService: VehiculoService, private router: Router){
 }
 ngOnInit(): void {
    
  }

  

}

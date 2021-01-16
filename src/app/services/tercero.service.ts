import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Tercero } from '../models/tercero';

const baseURL = 'http://localhost:8000/api/terceros';

@Injectable({
  providedIn: 'root'
})
export class TerceroService {

  constructor(private http: HttpClient) { }

  
}

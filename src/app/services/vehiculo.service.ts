import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Vehiculo} from '../models/vehiculo';


const baseURL = 'http://localhost:8000/api/vehiculos';

@Injectable({
  providedIn: 'root'
})
export class VehiculoService {

  constructor(private http: HttpClient) { }

  getAll(): Observable<Vehiculo[]> {
    return this.http.get<Vehiculo[]>(baseURL);
  }

  get(id: any): Observable<Vehiculo> {
    return this.http.get(`${baseURL}/${id}`);
  }

  create(data: any): Observable<any> {
    return this.http.post(baseURL, data);
  }

  update(id: any, data: any): Observable<any> {
    return this.http.put(`${baseURL}/${id}`, data);
  }

  delete(id: any): Observable<any> {
    return this.http.delete(`${baseURL}/${id}`);
  }

  deleteAll(): Observable<any> {
    return this.http.delete(baseURL);
  }
  
}

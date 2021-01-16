import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TerceroEditComponent } from './tercero-edit.component';

describe('TerceroEditComponent', () => {
  let component: TerceroEditComponent;
  let fixture: ComponentFixture<TerceroEditComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TerceroEditComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TerceroEditComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

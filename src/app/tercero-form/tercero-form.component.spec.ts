import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TerceroFormComponent } from './tercero-form.component';

describe('TerceroFormComponent', () => {
  let component: TerceroFormComponent;
  let fixture: ComponentFixture<TerceroFormComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TerceroFormComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TerceroFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

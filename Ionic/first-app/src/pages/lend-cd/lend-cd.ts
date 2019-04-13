import { Component } from '@angular/core';
import { NavController, NavParams, ViewController } from 'ionic-angular';
import { CdService } from '../../services/structure.service';
import { Cd } from '../../models/Structure';


@Component({
  selector: 'page-lend-cd',
  templateUrl: 'lend-cd.html',
})
export class LendCdPage {

  index : number ;
  Cd : Cd;

  constructor(public navCtrl: NavController,
              public navParams: NavParams,
              public CdService : CdService,
              public ViewCtrl : ViewController) {
  }

  ngOnInit(): void {
    this.index = this.navParams.get('index');
    this.Cd = this.CdService.CdList[this.index];
  }

  dismissModal(){
    this.ViewCtrl.dismiss();
  }

  onToggleCd(){
    this.Cd.isDis = !this.Cd.isDis;
  }

}

import { Component } from '@angular/core';
import { NavController, NavParams, ModalController } from 'ionic-angular';
import { Cd } from '../../models/Structure';
import { LendCdPage } from '../lend-cd/lend-cd';
import { CdService } from '../../services/structure.service';

/**
 * Generated class for the CdListPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@Component({
  selector: 'page-cd-list',
  templateUrl: 'cd-list.html',
})
export class CdListPage {

  CDList : Cd[];

  constructor(public navCtrl: NavController,
              public navParams: NavParams,
              public ModalCtrl : ModalController,
              public CdService : CdService) {
  }

  ionViewCanEnter(){
   this.CDList = this.CdService.CdList.slice();
  }

  onLoadCd( index : number){
    let modal = this.ModalCtrl.create(
      LendCdPage,
      {
        index : index
      }
    );
    modal.present();
  }

}

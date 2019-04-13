import { Component } from '@angular/core';
import { NavController, NavParams, ModalController } from 'ionic-angular';
import { Book } from '../../models/Structure';
import { BookService } from '../../services/structure.service';
import { LendBookPage } from '../lend-book/lend-book';

/**
 * Generated class for the BookListPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@Component({
  selector: 'page-book-list',
  templateUrl: 'book-list.html',
})
export class BookListPage {

  BookList : Book[];

  constructor(public navCtrl: NavController,
              public navParams: NavParams,
              private bookService : BookService,
              public modalCtrl : ModalController) {
  }

  ionViewCanEnter(){
    this.BookList = this.bookService.bookList.slice();
  }

  onLoadBook( index : number ){
    let modal = this.modalCtrl.create(
      LendBookPage,
      {
        index : index
      }
    );
    modal.present();
  }

}

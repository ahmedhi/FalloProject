import { Component } from '@angular/core';
import { NavController, NavParams, ViewController } from 'ionic-angular';
import { Book } from '../../models/Structure';
import { BookService } from '../../services/structure.service';


@Component({
  selector: 'page-lend-book',
  templateUrl: 'lend-book.html',
})
export class LendBookPage {

  index : number ;
  Book : Book;

  constructor(public navCtrl : NavController,
              public ViewCtrl : ViewController,
              public navParams : NavParams,
              public BookService : BookService) {
  }

  ngOnInit(): void {
    this.index = this.navParams.get('index');
    this.Book = this.BookService.bookList[this.index];
  }

  dismissModal(){
    this.ViewCtrl.dismiss();
  }

  onToggleBook(){
    this.Book.isDis = !this.Book.isDis;
  }

}
